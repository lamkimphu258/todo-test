<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo Ape - Productivity for every plan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet"/>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        @unless (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            <style>
                :root {
                    --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                }

                body {
                    font-family: var(--font-sans);
                }
            </style>
        @endunless
    </head>

    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
        @php
            $loginUrl = Route::has('login') ? route('login') : '#';
            $registerUrl = Route::has('register') ? route('register') : '#';
        @endphp

        <div class="relative isolate overflow-hidden">
            <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
                <div class="absolute left-1/2 top-[-12rem] h-[36rem] w-[36rem] -translate-x-1/2 rounded-full bg-indigo-500/25 blur-3xl"></div>
                <div class="absolute right-[-8rem] top-1/3 h-72 w-72 rounded-full bg-amber-400/20 blur-3xl"></div>
                <div class="absolute left-[-8rem] top-1/2 h-72 w-72 rounded-full bg-cyan-500/20 blur-3xl"></div>
            </div>

            <header class="mx-auto flex w-full max-w-6xl items-center justify-between px-4 py-6 sm:px-6 lg:px-8">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-cyan-300">Todo Ape</p>
                <nav class="flex items-center gap-3">
                    <a href="{{ $loginUrl }}" class="rounded-full border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-800">Sign in</a>
                    <a href="{{ $registerUrl }}" class="rounded-full bg-cyan-300 px-4 py-2 text-sm font-semibold text-slate-950 transition hover:bg-cyan-200">Create account</a>
                </nav>
            </header>

            <main class="mx-auto flex w-full max-w-6xl flex-col gap-20 px-4 pb-24 pt-6 sm:px-6 lg:px-8">
                <section class="grid items-center gap-10 lg:grid-cols-[1.2fr_1fr]">
                    <div class="space-y-6">
                        <p class="inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-cyan-200 backdrop-blur">
                            Prototype product: Todo Ape
                        </p>
                        <h1 class="text-4xl font-bold leading-tight sm:text-5xl md:text-6xl">
                            Stay focused. Ship calmer.
                        </h1>
                        <p class="max-w-xl text-base text-slate-300 sm:text-lg">
                            Todo Ape turns your tasks into a clear, momentum-building workflow—so your plans stay small, prioritized,
                            and easy to execute whether you manage one sprint or a quarter's worth of ideas.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <a href="{{ $loginUrl }}" class="inline-flex rounded-full bg-amber-300 px-6 py-3 font-semibold text-slate-950 transition hover:bg-amber-200">
                                Sign in
                            </a>
                            <a href="{{ $registerUrl }}" class="inline-flex rounded-full border border-white/20 px-6 py-3 font-semibold text-white transition hover:bg-white/10">
                                Create account
                            </a>
                        </div>
                    </div>

                    <article class="rounded-3xl border border-white/15 bg-white/5 p-5 backdrop-blur">
                        <h2 class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-cyan-200">Live task cockpit</h2>
                        <div class="space-y-3 rounded-2xl border border-white/15 bg-slate-900/70 p-4">
                            <p class="text-xs text-slate-200">Today’s priority</p>
                            <div class="rounded-xl bg-cyan-300/20 p-3">
                                <p class="font-semibold">Launch Todo Ape landing page</p>
                                <p class="text-sm text-slate-200">Status: In progress · 1h remaining</p>
                            </div>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-cyan-300"></span> Draft feature summary</li>
                                <li class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-emerald-300"></span> Review CTA copy</li>
                                <li class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-amber-300"></span> Ship to staging</li>
                            </ul>
                        </div>
                    </article>
                </section>

                <section id="overview">
                    <h2 class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Product overview</h2>
                    <p class="max-w-3xl text-slate-300">
                        Todo Ape helps teams and solo builders reduce cognitive load. Add tasks, attach context, choose outcomes, and
                        always know what to work on next. The interface is intentionally lightweight so your workflow stays predictable.
                    </p>
                </section>

                <section id="value">
                    <h2 class="mb-6 text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Why Todo Ape</h2>
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <article class="rounded-2xl border border-white/15 bg-white/5 p-5">
                            <h3 class="text-lg font-bold">Prioritize in seconds</h3>
                            <p class="mt-2 text-sm text-slate-300">Tag urgency and impact to keep attention on work that moves projects forward.</p>
                        </article>
                        <article class="rounded-2xl border border-white/15 bg-white/5 p-5">
                            <h3 class="text-lg font-bold">Context-rich planning</h3>
                            <p class="mt-2 text-sm text-slate-300">Attach notes, goals, and blockers so tasks stay actionable without constant context switching.</p>
                        </article>
                        <article class="rounded-2xl border border-white/15 bg-white/5 p-5">
                            <h3 class="text-lg font-bold">Momentum loops</h3>
                            <p class="mt-2 text-sm text-slate-300">Clear, visible completion flow helps you finish small chunks and build long-term consistency.</p>
                        </article>
                        <article class="rounded-2xl border border-white/15 bg-white/5 p-5">
                            <h3 class="text-lg font-bold">Prototype-ready speed</h3>
                            <p class="mt-2 text-sm text-slate-300">Built for fast iterations with focused UI sections and predictable data structure.</p>
                        </article>
                    </div>
                </section>

                <section id="visual" class="rounded-3xl border border-cyan-300/20 bg-gradient-to-r from-cyan-300/15 via-transparent to-indigo-400/10 p-6 sm:p-8">
                    <div class="grid gap-6 lg:grid-cols-2">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-200">Visual context</p>
                            <h2 class="mt-3 text-2xl font-bold">A focused interface, not a noisy dashboard</h2>
                            <p class="mt-3 text-slate-200">
                                The app surface is built around three moments: plan, execute, and close. No extra chrome, no hidden controls.
                            </p>
                            <div class="mt-5 flex gap-3">
                                <a href="{{ $loginUrl }}" class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-900">Sign in</a>
                                <a href="{{ $registerUrl }}" class="rounded-full border border-white/40 px-4 py-2 text-sm font-semibold text-white">Create account</a>
                            </div>
                        </div>
                        <div class="grid gap-3 self-end">
                            <div class="rounded-2xl border border-white/20 bg-slate-900/60 p-4">
                                <h3 class="text-sm font-semibold text-slate-200">Context card</h3>
                                <p class="mt-2 text-sm text-slate-300">Add a task, link references, and define your next move in one compact flow.</p>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="rounded-2xl border border-white/15 bg-slate-900/60 p-4">
                                    <p class="text-xs uppercase tracking-wide text-slate-400">Done</p>
                                    <p class="mt-2 text-xl font-bold">12</p>
                                </div>
                                <div class="rounded-2xl border border-white/15 bg-slate-900/60 p-4">
                                    <p class="text-xs uppercase tracking-wide text-slate-400">In Progress</p>
                                    <p class="mt-2 text-xl font-bold">4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="cta" class="rounded-3xl border border-amber-200/20 bg-amber-200/10 p-8">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">Ready to organize without friction?</h2>
                    <p class="mt-3 max-w-2xl text-slate-200">
                        Start building faster routines in minutes. Sign in if you already have an account, or create one to join the next
                        iteration.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ $loginUrl }}" class="inline-flex rounded-full bg-amber-300 px-6 py-3 font-semibold text-slate-950">
                            Sign in
                        </a>
                        <a href="{{ $registerUrl }}" class="inline-flex rounded-full border border-white/40 px-6 py-3 font-semibold text-white transition hover:bg-white/10">
                            Create account
                        </a>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
