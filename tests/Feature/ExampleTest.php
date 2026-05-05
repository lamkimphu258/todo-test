<?php

beforeEach(function () {
    config(['session.driver' => 'array']);
});

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertSuccessful();
});

test('the welcome page uses the blue primary palette', function () {
    $response = $this->get('/');

    $response
        ->assertSuccessful()
        ->assertSee('text-primary', false)
        ->assertSee('bg-primary-soft', false)
        ->assertSee('bg-primary', false);
});

test('the tracked interface source excludes retired accent references', function () {
    $paths = [
        resource_path('css/app.css'),
        resource_path('views/welcome.blade.php'),
    ];

    $content = collect($paths)
        ->map(fn (string $path): string => file_get_contents($path))
        ->join(PHP_EOL);

    $blockedTerms = [
        'gr'.'een',
        'em'.'erald',
        'te'.'al',
        'li'.'me',
        '#0f'.'766e',
        '#11'.'5e59',
        '#13'.'4e4a',
        '#02'.'2f2e',
        '#f53003',
        '#F53003',
        '#FF4433',
        '#F61500',
        '#FF750F',
        '#fff2f2',
        '#1D0002',
    ];

    foreach ($blockedTerms as $blockedTerm) {
        expect($content)->not->toContain($blockedTerm);
    }
});
