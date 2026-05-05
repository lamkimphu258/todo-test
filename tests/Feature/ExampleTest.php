<?php

test('the application returns a successful response', function () {
    config(['session.driver' => 'file']);

    $response = $this->get('/');

    $response->assertSuccessful();
});
