<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ContactRequest $request): RedirectResponse
    {
        Mail::to(config('mail.from.address'))->send(
            new ContactMessage($request->validated())
        );

        return redirect()
            ->route('home')
            ->with('status', 'Thanks for reaching out. We will reply soon.');
    }
}
