<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    public function show(): View
    {
        return view('welcome');
    }

    public function submit(ContactFormRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            Mail::to(config('mail.from.address'))->send(
                new ContactFormMessage(
                    $validated['name'],
                    $validated['email'],
                    $validated['message'],
                    $validated['subject'] ?? null,
                ),
            );

            return back()->with('status', 'Thanks — your message was sent.');
        } catch (\Throwable $exception) {
            report($exception);

            return back()->withInput()->with('error', 'Something went wrong while sending your message. Please try again.');
        }
    }
}
