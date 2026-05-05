<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Todo App') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>

    <body class="min-h-screen bg-slate-950 text-slate-100">
        <header class="sticky top-0 z-20 border-b border-slate-800 bg-slate-950/95 backdrop-blur">
            <nav class="mx-auto flex w-full max-w-6xl flex-col gap-4 px-6 py-4 md:flex-row md:items-center md:justify-between">
                <a href="/" class="inline-flex items-center gap-2 text-lg font-semibold tracking-tight text-white">
                    <span class="grid h-8 w-8 place-items-center rounded-full bg-indigo-500 text-sm font-bold text-white">✓</span>
                    <span>{{ config('app.name', 'Todo App') }}</span>
                </a>

                <div class="flex flex-col gap-2 text-sm font-medium sm:flex-row sm:items-center md:gap-4">
                    <a class="rounded-lg px-3 py-2 text-slate-200 transition-colors hover:text-white" href="#hero">Home</a>
                    <a class="rounded-lg px-3 py-2 text-slate-200 transition-colors hover:text-white" href="#features">Features</a>
                    <a class="rounded-lg px-3 py-2 text-slate-200 transition-colors hover:text-white" href="#how-it-works">How it works</a>
                    <a class="rounded-lg px-3 py-2 text-slate-200 transition-colors hover:text-white" href="#contact">Contact us</a>
                </div>
            </nav>
        </header>

        <main class="px-6">
            <section id="hero" class="mx-auto flex w-full max-w-6xl flex-col gap-8 py-16 md:flex-row md:items-center md:justify-between md:py-24">
                <div class="max-w-2xl">
                    <p class="mb-3 inline-flex rounded-full border border-indigo-400/40 bg-indigo-500/10 px-4 py-1 text-xs font-medium uppercase tracking-[0.18em] text-indigo-100">Productive by design</p>
                    <h1 class="text-4xl font-semibold leading-tight text-white sm:text-5xl">Manage your tasks with calm clarity.</h1>
                    <p class="mt-4 text-base leading-relaxed text-slate-300 md:text-lg">
                        Todo App keeps your daily work organized: plan priorities, break big goals into small actions, and never lose track of what matters most.
                    </p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="#features" class="inline-flex items-center justify-center rounded-lg bg-indigo-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-indigo-400">Explore features</a>
                        <a href="#contact" class="inline-flex items-center justify-center rounded-lg border border-slate-700 px-5 py-3 text-sm font-semibold text-slate-100 transition hover:border-indigo-300 hover:text-white">Get in touch</a>
                    </div>
                </div>
                <div class="w-full max-w-sm rounded-2xl border border-slate-800 bg-slate-900 p-6 shadow-lg shadow-slate-950/60">
                    <p class="text-sm uppercase tracking-[0.2em] text-slate-400">Today&apos;s focus</p>
                    <h2 class="mt-2 text-xl font-semibold text-white">One list, one timeline, full control.</h2>
                    <ul class="mt-4 space-y-3 text-sm text-slate-300">
                        <li class="rounded-lg border border-slate-800 bg-slate-950 p-3">✔ Prioritize daily priorities in seconds</li>
                        <li class="rounded-lg border border-slate-800 bg-slate-950 p-3">✔ Review progress with simple completion metrics</li>
                        <li class="rounded-lg border border-slate-800 bg-slate-950 p-3">✔ Keep every task context in one place</li>
                    </ul>
                </div>
            </section>

            <section id="features" class="mx-auto mt-8 w-full max-w-6xl rounded-2xl bg-slate-900 p-6 md:p-8">
                <h2 class="text-2xl font-semibold text-white">Built for people who execute quickly.</h2>
                <p class="mt-2 max-w-3xl text-slate-300">No complexity needed to stay productive. Focus on your work, not on configuring software.</p>
                <div class="mt-8 grid grid-cols-1 gap-5 md:grid-cols-3">
                    <article class="rounded-xl border border-slate-800 bg-slate-950 p-5">
                        <h3 class="text-lg font-semibold text-white">Smart task grouping</h3>
                        <p class="mt-2 text-sm text-slate-300">Create tasks, subtasks, and priorities that keep related work in one place.</p>
                    </article>
                    <article class="rounded-xl border border-slate-800 bg-slate-950 p-5">
                        <h3 class="text-lg font-semibold text-white">Progress visibility</h3>
                        <p class="mt-2 text-sm text-slate-300">See what matters by project and status with lightweight completion summaries.</p>
                    </article>
                    <article class="rounded-xl border border-slate-800 bg-slate-950 p-5">
                        <h3 class="text-lg font-semibold text-white">Built for busy days</h3>
                        <p class="mt-2 text-sm text-slate-300">Fast entry, clear reminders, and filters designed to reduce context switching.</p>
                    </article>
                </div>
            </section>

            <section id="how-it-works" class="mx-auto mt-8 w-full max-w-6xl rounded-2xl bg-slate-900 p-6 md:p-8">
                <h2 class="text-2xl font-semibold text-white">How it works</h2>
                <div class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div class="rounded-xl border border-slate-800 bg-slate-950 p-5">
                        <p class="text-sm font-semibold uppercase tracking-[0.16em] text-indigo-300">Step 1</p>
                        <h3 class="mt-2 text-lg font-semibold text-white">Capture</h3>
                        <p class="mt-2 text-sm text-slate-300">Quickly add tasks from ideas, emails, or notes.</p>
                    </div>
                    <div class="rounded-xl border border-slate-800 bg-slate-950 p-5">
                        <p class="text-sm font-semibold uppercase tracking-[0.16em] text-indigo-300">Step 2</p>
                        <h3 class="mt-2 text-lg font-semibold text-white">Plan</h3>
                        <p class="mt-2 text-sm text-slate-300">Prioritize, assign dates, and track dependencies in plain language.</p>
                    </div>
                    <div class="rounded-xl border border-slate-800 bg-slate-950 p-5">
                        <p class="text-sm font-semibold uppercase tracking-[0.16em] text-indigo-300">Step 3</p>
                        <h3 class="mt-2 text-lg font-semibold text-white">Finish</h3>
                        <p class="mt-2 text-sm text-slate-300">Complete your list with confidence using simple progress signals.</p>
                    </div>
                </div>
            </section>

            <section id="contact" class="mx-auto mt-8 w-full max-w-6xl rounded-2xl bg-slate-900 p-6 md:p-8">
                <h2 class="text-2xl font-semibold text-white">Contact us</h2>
                <p class="mt-2 text-slate-300">Questions, suggestions, or enterprise onboarding requests? Send a message and we will reply shortly.</p>

                @if (session('status'))
                    <div class="mt-5 rounded-lg border border-emerald-300/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-100">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-2">
                    @csrf
                    <label class="grid gap-2 text-sm">
                        <span class="text-slate-200">Name</span>
                        <input class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-white focus:border-indigo-300 focus:outline-none" type="text" name="name" value="{{ old('name') }}" required />
                        @error('name')
                            <span class="text-sm text-red-300">{{ $message }}</span>
                        @enderror
                    </label>
                    <label class="grid gap-2 text-sm">
                        <span class="text-slate-200">Email</span>
                        <input class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-white focus:border-indigo-300 focus:outline-none" type="email" name="email" value="{{ old('email') }}" required />
                        @error('email')
                            <span class="text-sm text-red-300">{{ $message }}</span>
                        @enderror
                    </label>
                    <label class="grid gap-2 text-sm md:col-span-2">
                        <span class="text-slate-200">Subject</span>
                        <input class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-white focus:border-indigo-300 focus:outline-none" type="text" name="subject" value="{{ old('subject') }}" required />
                        @error('subject')
                            <span class="text-sm text-red-300">{{ $message }}</span>
                        @enderror
                    </label>
                    <label class="grid gap-2 text-sm md:col-span-2">
                        <span class="text-slate-200">Message</span>
                        <textarea class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-white focus:border-indigo-300 focus:outline-none" name="message" rows="5" required>{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-sm text-red-300">{{ $message }}</span>
                        @enderror
                    </label>
                    <button class="md:col-span-2 inline-flex w-full items-center justify-center rounded-lg bg-indigo-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-indigo-400">
                        Send message
                    </button>
                </form>
            </section>
        </main>

        <footer class="mt-10 border-t border-slate-800">
            <div class="mx-auto flex w-full max-w-6xl flex-col gap-4 px-6 py-8 text-sm text-slate-400 md:flex-row md:items-center md:justify-between">
                <p>© {{ now()->year }} {{ config('app.name', 'Todo App') }}. All rights reserved.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#features" class="hover:text-white">Features</a>
                    <a href="#how-it-works" class="hover:text-white">How it works</a>
                    <a href="#contact" class="hover:text-white">Contact</a>
                    <a href="#" class="hover:text-white">Privacy</a>
                    <a href="#" class="hover:text-white">Terms</a>
                </div>
            </div>
        </footer>
    </body>
</html>
