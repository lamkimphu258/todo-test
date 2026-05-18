<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;

uses(RefreshDatabase::class);

test('landing page shows primary sections', function () {
    $response = $this->get(route('landing'));

    $response->assertSuccessful();
    $response->assertSee('Todo Ape');
    $response->assertSee('Product overview');
    $response->assertSee('Why Todo Ape');
    $response->assertSee('Visual context');
    $response->assertSee('Ready to organize without friction?');
});

test('landing page renders auth entry points with route-safe links', function () {
    $response = $this->get(route('landing'));

    $response->assertSee('Sign in');
    $response->assertSee('Create account');

    if (Route::has('login')) {
        $response->assertSee(route('login'));
    } else {
        $response->assertSee('href="#"', false);
    }

    if (Route::has('register')) {
        $response->assertSee(route('register'));
    } else {
        $response->assertSee('href="#"', false);
    }
});
