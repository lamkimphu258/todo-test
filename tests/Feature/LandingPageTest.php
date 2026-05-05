<?php

test('landing page renders the required layout sections', function () {
    config(['session.driver' => 'file']);

    $response = $this->get('/');

    $response->assertSuccessful()
        ->assertSee('href="/"', false)
        ->assertSee('id="hero"', false)
        ->assertSee('id="features"', false)
        ->assertSee('id="how-it-works"', false)
        ->assertSee('id="contact"', false)
        ->assertSee('name="name"', false)
        ->assertSee('name="email"', false)
        ->assertSee('name="subject"', false)
        ->assertSee('name="message"', false)
        ->assertSee('Send message', false)
        ->assertSee('href="#features"', false)
        ->assertSee('href="#how-it-works"', false)
        ->assertSee('href="#contact"', false);
    $response->assertSee('All rights reserved.');

    $markup = $response->getContent();
    $logoLinkPosition = strpos($markup, 'href="/"');
    $heroLinkPosition = strpos($markup, 'href="#hero"');

    expect($logoLinkPosition)
        ->toBeInt()
        ->toBeGreaterThanOrEqual(0)
        ->and($heroLinkPosition)
        ->toBeInt()
        ->toBeGreaterThan($logoLinkPosition);

    $response->assertSee('md:flex-row', false)
        ->assertSee('md:grid-cols-3', false);
});

test('contact form validates input and acknowledges success', function () {
    config(['session.driver' => 'file']);

    $landing = $this->get('/');
    preg_match('/name=\"_token\" value=\"([^\"]+)\"/', $landing->getContent(), $matches);
    $token = $matches[1] ?? '';

    $invalid = $this->post(route('contact.store'), [
        '_token' => $token,
    ]);

    $invalid->assertSessionHasErrors([
        'name',
        'email',
        'subject',
        'message',
    ]);

    $valid = $this->post(route('contact.store'), [
        '_token' => $token,
        'name' => 'Jordan Smith',
        'email' => 'jordan@example.com',
        'subject' => 'Demo request',
        'message' => 'I want to test this contact flow.',
    ]);

    $valid->assertRedirect(route('home'))
        ->assertSessionHas('status', 'Thanks for reaching out! We will reply soon.');
});
