<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;

use function Pest\Laravel\assertAuthenticated;

uses(RefreshDatabase::class);

beforeEach(function () {
    Config::set('session.driver', 'array');
});

test('public pages return successful responses and shared branding', function (string $path) {
    $this->get($path)
        ->assertSuccessful()
        ->assertSee(config('app.name', 'Laravel'));
})->with([
    'landing' => '/',
    'login' => '/login',
    'register' => '/register',
]);

test('landing page links to authentication pages', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee(route('login'), false)
        ->assertSee(route('register'), false);
});

test('authentication pages link back to the landing page', function (string $path) {
    $this->get($path)
        ->assertSuccessful()
        ->assertSee(route('home'), false)
        ->assertSee('Back to home');
})->with([
    'login' => '/login',
    'register' => '/register',
]);

test('sign in form submits credentials', function () {
    $user = User::factory()->create([
        'password' => 'password',
    ]);

    $this->get(route('login'));

    $this->post(route('login.store'), [
        '_token' => session()->token(),
        'email' => $user->email,
        'password' => 'password',
    ])->assertRedirect(route('home'));

    assertAuthenticated();
});

test('sign up form creates an authenticated account', function () {
    $this->get(route('register'));

    $this->post(route('register.store'), [
        '_token' => session()->token(),
        'name' => 'Alex Morgan',
        'email' => 'alex@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ])->assertRedirect(route('home'));

    assertAuthenticated();

    $this->assertDatabaseHas('users', [
        'email' => 'alex@example.com',
    ]);
});
