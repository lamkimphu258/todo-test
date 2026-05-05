<?php

use Illuminate\Support\Facades\Config;

beforeEach(function () {
    Config::set('session.driver', 'array');
});

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
