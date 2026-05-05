<?php

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

test('the landing page renders the todo introduction and contact form', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('Plan the day, finish the work, keep momentum.')
        ->assertSee('Everything important stays visible.')
        ->assertSee('Tell us how Todo should fit your workflow.')
        ->assertSee('name="name"', false)
        ->assertSee('name="email"', false)
        ->assertSee('name="message"', false);
});

test('invalid contact submissions redirect back with errors and send no mail', function () {
    Mail::fake();

    $token = 'contact-test-token';

    $this->withSession(['_token' => $token])
        ->from(route('home'))
        ->post(route('contact.store'), [
            '_token' => $token,
            'name' => '',
            'email' => 'not-an-email',
            'message' => 'short',
        ])
        ->assertRedirect(route('home'))
        ->assertSessionHasErrors(['name', 'email', 'message']);

    Mail::assertNothingSent();
});

test('valid contact submissions send a contact message', function () {
    Mail::fake();

    $payload = [
        '_token' => 'contact-test-token',
        'name' => 'Jordan Lee',
        'email' => 'jordan@example.com',
        'message' => 'I want Todo to help our team organize product launches.',
    ];

    $this->withSession(['_token' => $payload['_token']])
        ->post(route('contact.store'), $payload)
        ->assertRedirect(route('home'))
        ->assertSessionHas('status', 'Thanks for reaching out. We will reply soon.');

    Mail::assertSent(ContactMessage::class, function (ContactMessage $mail) use ($payload) {
        return $mail->hasTo(config('mail.from.address'))
            && $mail->hasReplyTo($payload['email'])
            && $mail->contact === collect($payload)->except('_token')->all();
    });
});
