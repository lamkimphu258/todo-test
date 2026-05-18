<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('sign in page renders form and includes csrf token', function () {
    $response = $this->get(route('login'));

    $response->assertSuccessful();
    $response->assertSee('Sign in');
    $response->assertSee('name="email"', false);
    $response->assertSee('name="password"', false);
    $response->assertSee('name="_token"', false);
    $response->assertSee('action="'.route('login.store').'"', false);
});

test('sign in validation errors remain on sign in page', function () {
    $this->get(route('login'));

    $response = $this->post(route('login.store'), [
        '_token' => csrf_token(),
    ]);

    $response->assertRedirect(route('login'));
    $response->assertSessionHasErrors([
        'email',
        'password',
    ]);
});

test('wrong credentials return generic auth failure message', function () {
    $this->get(route('login'));

    $user = User::factory()->create([
        'email' => 'user@example.com',
        'password' => 'password123',
    ]);

    $response = $this->post(route('login.store'), [
        '_token' => csrf_token(),
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $response->assertRedirect(route('login'));
    $response->assertSessionHasErrors([
        'email' => 'These credentials do not match our records.',
    ]);
    expect(auth()->check())->toBeFalse();
});

test('valid credentials authenticate and redirect to landing', function () {
    $this->get(route('login'));

    $user = User::factory()->create();

    $response = $this->post(route('login.store'), [
        '_token' => csrf_token(),
        'email' => $user->email,
        'password' => 'password',
        'remember' => '1',
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect(route('landing'));
});
