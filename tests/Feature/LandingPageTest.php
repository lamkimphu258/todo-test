<?php

use App\Mail\ContactFormMessage;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\Mail;

beforeEach(function (): void {
    config()->set('session.driver', 'array');
    config()->set('cache.default', 'array');
});

test('landing page renders hero sections and contact form', function () {
    $response = $this->get(route('landing'));

    $response->assertStatus(200);
    $response->assertSee('Tidy your day, one calm step at a time');
    $response->assertSee('How it works');
    $response->assertSee('Contact the team');
    $response->assertSee('name="name"', false);
    $response->assertSee('name="email"', false);
    $response->assertSee('name="subject"', false);
    $response->assertSee('name="message"', false);
});

test('sends valid contact email', function () {
    Mail::fake();
    $this->withoutMiddleware([
        ThrottleRequests::class,
    ]);
    $payload = [
        'name' => 'Alex Rowan',
        'email' => 'alex@example.com',
        'subject' => 'Feature request',
        'message' => 'I would love to test this app with my team.',
    ];
    $csrfToken = 'test-token';

    $response = $this->withSession(['_token' => $csrfToken])->post(route('contact.submit'), array_merge($payload, [
        '_token' => $csrfToken,
    ]));

    $response->assertRedirect(route('landing'));
    $response->assertSessionHas('status', 'Thanks — your message was sent.');

    Mail::assertSent(ContactFormMessage::class, function (ContactFormMessage $mail) use ($payload) {
        return $mail->name === $payload['name']
            && $mail->email === $payload['email']
            && $mail->subjectLine === $payload['subject']
            && $mail->body === $payload['message'];
    });
});

test('contact form shows validation errors for invalid input', function () {
    Mail::fake();
    $this->withoutMiddleware([
        ThrottleRequests::class,
    ]);
    $csrfToken = 'test-token';

    $response = $this->withSession(['_token' => $csrfToken])->post(route('contact.submit'), [
        'name' => '',
        'email' => 'invalid',
        'message' => '',
        '_token' => $csrfToken,
    ]);

    $response->assertRedirect(route('landing'));
    $response->assertSessionHasErrors(['name', 'email', 'message']);
    Mail::assertNothingSent();
});
