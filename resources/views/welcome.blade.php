<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Todo') }} - Smart Daily Planning</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="antialiased bg-slate-950 text-slate-100">
        <div class="min-h-screen bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 dark:from-slate-950 dark:via-slate-950/80 dark:to-slate-950">
            <header class="mx-auto flex w-full max-w-6xl items-center justify-between gap-4 px-6 py-8 lg:px-10">
                <p class="text-lg font-semibold tracking-tight">
                    {{ config('app.name', 'Todo') }}
                </p>
                <a
                    href="#contact"
                    class="rounded-full border border-cyan-400/40 px-4 py-2 text-sm font-medium text-cyan-100 transition hover:border-cyan-300 hover:bg-white/10"
                >
                    Contact us
                </a>
            </header>

            <main class="mx-auto grid max-w-6xl gap-20 px-6 pb-14 lg:px-10">
                <section class="grid gap-10 rounded-3xl border border-cyan-400/20 bg-white/5 p-8 shadow-2xl shadow-cyan-950/60 ring-1 ring-cyan-300/10 md:grid-cols-2 md:p-12">
                    <div class="space-y-6">
                        <p class="inline-flex items-center gap-2 rounded-full border border-cyan-300/30 px-3 py-1 text-xs font-medium uppercase tracking-[0.22em] text-cyan-100">
                            <span class="h-1.5 w-1.5 rounded-full bg-cyan-300"></span>
                            Focused task management
                        </p>
                        <h1 class="text-4xl font-semibold leading-tight text-cyan-50 md:text-6xl">
                            Tidy your day, one calm step at a time
                        </h1>
                        <p class="max-w-prose text-base leading-relaxed text-slate-200">
                            This todo app keeps momentum alive by making planning frictionless: quick capture, prioritized lists,
                            and gentle completion feedback for a clear finish line every day.
                        </p>
                        <div class="flex flex-col gap-3 sm:flex-row">
                            <a
                                href="#contact"
                                class="inline-flex items-center justify-center rounded-full bg-cyan-300 px-6 py-3 text-base font-semibold text-slate-950 transition hover:bg-cyan-200"
                            >
                                Send a message
                            </a>
                            <a
                                href="#how-it-works"
                                class="inline-flex items-center justify-center rounded-full border border-cyan-300/30 px-6 py-3 text-base font-semibold text-cyan-100 transition hover:bg-white/10"
                            >
                                See how it works
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4 rounded-2xl border border-cyan-300/20 bg-slate-900/80 p-6">
                        <p class="text-sm uppercase tracking-[0.2em] text-slate-400">App highlights</p>
                        <ul class="space-y-3 text-sm text-slate-100">
                            <li class="rounded-xl border border-slate-700 bg-slate-800/70 p-4">
                                Quick add mode for capture without context switching
                            </li>
                            <li class="rounded-xl border border-slate-700 bg-slate-800/70 p-4">
                                Built-in prioritization from Today, This Week, and Long-Term
                            </li>
                            <li class="rounded-xl border border-slate-700 bg-slate-800/70 p-4">
                                Lightweight status and streaks that celebrate consistency
                            </li>
                        </ul>
                    </div>
                </section>

                <section aria-labelledby="value-heading" class="grid gap-6 md:grid-cols-3">
                    <div class="rounded-2xl border border-white/10 bg-slate-900/80 p-6">
                        <h2 id="value-heading" class="text-xl font-semibold text-cyan-100">Stay focused</h2>
                        <p class="mt-3 text-sm text-slate-300">
                            Prioritize and block by outcome, not urgency. One screen shows exactly what matters now.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-slate-900/80 p-6">
                        <h2 class="text-xl font-semibold text-cyan-100">Build momentum</h2>
                        <p class="mt-3 text-sm text-slate-300">
                            Small wins compound. Complete smaller clusters first and gain forward motion all day long.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-slate-900/80 p-6">
                        <h2 class="text-xl font-semibold text-cyan-100">Work together</h2>
                        <p class="mt-3 text-sm text-slate-300">
                            Clean structure makes it easy to sync with teammates and keep expectations aligned.
                        </p>
                    </div>
                </section>

                <section id="how-it-works" aria-labelledby="how-it-works-heading" class="rounded-3xl border border-cyan-300/20 bg-cyan-900/20 p-8">
                    <h2 id="how-it-works-heading" class="text-2xl font-semibold text-cyan-100">How it works</h2>
                    <ol class="mt-8 grid gap-4 md:grid-cols-3">
                        <li class="rounded-2xl bg-slate-900/80 p-6">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Step 1</p>
                            <h3 class="mt-2 text-lg font-medium text-slate-100">Capture</h3>
                            <p class="mt-3 text-sm text-slate-300">Jot down ideas and tasks in seconds.</p>
                        </li>
                        <li class="rounded-2xl bg-slate-900/80 p-6">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Step 2</p>
                            <h3 class="mt-2 text-lg font-medium text-slate-100">Plan</h3>
                            <p class="mt-3 text-sm text-slate-300">Rank tasks and choose what to finish before moving on.</p>
                        </li>
                        <li class="rounded-2xl bg-slate-900/80 p-6">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Step 3</p>
                            <h3 class="mt-2 text-lg font-medium text-slate-100">Finish</h3>
                            <p class="mt-3 text-sm text-slate-300">Check off tasks and keep your momentum visible.</p>
                        </li>
                    </ol>
                </section>

                <section aria-labelledby="proof-heading" class="grid gap-6 md:grid-cols-2">
                    <div class="rounded-3xl border border-white/10 bg-slate-900/75 p-8">
                        <h2 id="proof-heading" class="text-2xl font-semibold text-cyan-100">Proof from early users</h2>
                        <blockquote class="mt-4 text-sm text-slate-200">
                            “We replaced five tools with one board and the team is now finishing tasks by noon instead of end of day.”
                        </blockquote>
                        <p class="mt-4 text-sm text-slate-400">— Maya, founder of a distributed product team</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-slate-900/75 p-8">
                        <p class="text-sm text-slate-100">
                            “The calm interface reduced context switching and helped us keep focus on only what needs to move today.”
                        </p>
                        <p class="mt-4 text-sm text-slate-400">— Jordan, engineering manager</p>
                    </div>
                </section>

                <section id="contact" class="rounded-3xl border border-cyan-300/20 bg-slate-900/90 p-8">
                    <div class="space-y-4">
                        <h2 class="text-3xl font-semibold text-cyan-100">Contact the team</h2>
                        <p class="max-w-2xl text-sm text-slate-300">
                            Have ideas, questions, or integration needs? We read every message and reply quickly.
                        </p>
                    </div>

                    @if (session('status'))
                        <p class="mt-6 rounded-xl border border-emerald-300/40 bg-emerald-300/20 p-4 text-sm text-emerald-100">
                            {{ session('status') }}
                        </p>
                    @endif

                    @if (session('error'))
                        <p class="mt-6 rounded-xl border border-red-300/40 bg-red-300/20 p-4 text-sm text-red-100">
                            {{ session('error') }}
                        </p>
                    @endif

                    <form class="mt-8 grid gap-4" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="grid gap-2">
                            <label for="name" class="text-sm font-medium text-slate-100">Full name</label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                class="w-full rounded-xl border border-slate-600 bg-slate-900/60 px-4 py-3 text-sm text-slate-100 outline-none transition focus:border-cyan-300/80 focus:ring-2 focus:ring-cyan-300/30"
                                required
                                autocomplete="name"
                            >
                            @error('name')
                                <p class="text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-2">
                            <label for="email" class="text-sm font-medium text-slate-100">Email address</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                class="w-full rounded-xl border border-slate-600 bg-slate-900/60 px-4 py-3 text-sm text-slate-100 outline-none transition focus:border-cyan-300/80 focus:ring-2 focus:ring-cyan-300/30"
                                required
                                autocomplete="email"
                            >
                            @error('email')
                                <p class="text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-2">
                            <label for="subject" class="text-sm font-medium text-slate-100">Subject</label>
                            <input
                                id="subject"
                                name="subject"
                                type="text"
                                value="{{ old('subject') }}"
                                class="w-full rounded-xl border border-slate-600 bg-slate-900/60 px-4 py-3 text-sm text-slate-100 outline-none transition focus:border-cyan-300/80 focus:ring-2 focus:ring-cyan-300/30"
                                autocomplete="off"
                            >
                            @error('subject')
                                <p class="text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-2">
                            <label for="message" class="text-sm font-medium text-slate-100">Message</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                required
                                class="w-full rounded-xl border border-slate-600 bg-slate-900/60 px-4 py-3 text-sm text-slate-100 outline-none transition focus:border-cyan-300/80 focus:ring-2 focus:ring-cyan-300/30"
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <button
                            type="submit"
                            class="mt-2 inline-flex w-full items-center justify-center rounded-full bg-cyan-300 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-200"
                        >
                            Send message
                        </button>
                    </form>
                </section>
            </main>
        </div>
    </body>
</html>
