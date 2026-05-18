<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('sign up page renders required fields and form action', function () {
    $response = $this->get(route('register'));

    $response->assertSuccessful();
    $response->assertSee('Create your account');
    $response->assertSee('name="name"', false);
    $response->assertSee('name="email"', false);
    $response->assertSee('name="password"', false);
    $response->assertSee('name="_token"', false);
    $response->assertSee('action="'.route('register.store').'"', false);
    $response->assertSee('required', false);
    $response->assertSee('type="email"', false);
});

test('sign up validation errors are shown for missing fields', function () {
    $this->get(route('register'));

    $response = $this->post(route('register.store'), [
        '_token' => csrf_token(),
    ]);

    $response->assertRedirect(route('register'));
    $response->assertSessionHasErrors([
        'name',
        'email',
        'password',
    ]);
});

test('sign up validation errors return on invalid email and short password', function () {
    $this->get(route('register'));

    $response = $this->post(route('register.store'), [
        '_token' => csrf_token(),
        'name' => 'New user',
        'email' => 'not-an-email',
        'password' => 'short',
    ]);

    $response->assertRedirect(route('register'));
    $response->assertSessionHasErrors([
        'email',
        'password',
    ]);
});

test('sign up rejects duplicate email', function () {
    $this->get(route('register'));

    User::factory()->create([
        'email' => 'existing@example.com',
    ]);

    $response = $this->post(route('register.store'), [
        '_token' => csrf_token(),
        'name' => 'Second User',
        'email' => 'existing@example.com',
        'password' => 'password123',
    ]);

    $response->assertRedirect(route('register'));
    $response->assertSessionHasErrors(['email']);
});

test('sign up creates user, authenticates, and redirects to landing', function () {
    $this->get(route('register'));

    $response = $this->post(route('register.store'), [
        '_token' => csrf_token(),
        'name' => 'Fresh User',
        'email' => 'fresh@example.com',
        'password' => 'password123',
    ]);

    $response->assertRedirect(route('landing'));
    $this->assertAuthenticated();
    $this->assertAuthenticatedAs(User::where('email', 'fresh@example.com')->first());
    expect(User::where('email', 'fresh@example.com')->count())->toBe(1);
});
