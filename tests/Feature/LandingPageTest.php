<?php

test('guests can view a todo focused landing page', function () {
    $response = $this->get('/');

    $response
        ->assertSuccessful()
        ->assertSeeText('Organize your day with a focused todo list')
        ->assertSeeText('Add tasks, sort what is pending, and check off completed work from one clean list.')
        ->assertSee('href="#features"', false)
        ->assertSeeText('Explore features')
        ->assertSee('href="#how-it-works"', false)
        ->assertSeeText('See how it works');
});

test('the landing page does not link to unavailable auth routes', function () {
    $response = $this->get('/');

    $response
        ->assertSuccessful()
        ->assertDontSee('href="'.url('/register').'"', false)
        ->assertDontSee('href="'.url('/login').'"', false);
});

test('the landing page describes concrete todo actions', function () {
    $response = $this->get('/');

    $response
        ->assertSuccessful()
        ->assertSeeText('Add new tasks')
        ->assertSeeText('Edit details')
        ->assertSeeText('Complete todos')
        ->assertSeeText('Delete clutter')
        ->assertSeeText('View pending and completed work');
});

test('the landing page includes a todo list preview', function () {
    $response = $this->get('/');

    $response
        ->assertSuccessful()
        ->assertSeeText('Today')
        ->assertSeeText('Prepare project notes')
        ->assertSeeText('Review grocery list')
        ->assertSeeText('Send weekly update')
        ->assertSeeText('Book dentist appointment')
        ->assertSeeText('Pending')
        ->assertSeeText('Completed')
        ->assertSee('type="checkbox"', false);
});

test('the landing page explains how it works', function () {
    $response = $this->get('/');

    $response
        ->assertSuccessful()
        ->assertSeeText('Create an account')
        ->assertSeeText('Add a task')
        ->assertSeeText('Organize the list')
        ->assertSeeText('Complete the task');
});
