<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Todo') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-zinc-50 font-sans text-zinc-950 antialiased">
        <div class="min-h-screen">
            <header class="mx-auto flex w-full max-w-6xl items-center justify-between px-5 py-5 sm:px-6 lg:px-8">
                <a href="{{ url('/') }}" class="flex items-center gap-3 font-semibold">
                    <span class="flex size-9 items-center justify-center rounded-md bg-emerald-600 text-sm text-white shadow-sm">✓</span>
                    <span>{{ config('app.name', 'Todo') }}</span>
                </a>

                @if (Route::has('login'))
                    <nav class="flex items-center gap-2 text-sm font-medium">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-md bg-zinc-950 px-3 py-2 text-white shadow-sm transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-zinc-700 transition hover:bg-white hover:text-zinc-950 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2">Sign in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-md bg-zinc-950 px-3 py-2 text-white shadow-sm transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2">Sign up</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <main>
                <section class="mx-auto grid w-full max-w-6xl items-center gap-10 px-5 pb-14 pt-8 sm:px-6 sm:pb-20 lg:grid-cols-[1.02fr_0.98fr] lg:px-8 lg:pb-24 lg:pt-14">
                    <div class="max-w-2xl">
                        <p class="mb-4 inline-flex rounded-md border border-emerald-200 bg-emerald-50 px-3 py-1 text-sm font-medium text-emerald-800">Simple task tracking for busy days</p>
                        <h1 class="text-4xl font-bold leading-tight text-zinc-950 sm:text-5xl lg:text-6xl">Organize your day with a focused todo list</h1>
                        <p class="mt-5 max-w-xl text-base leading-7 text-zinc-600 sm:text-lg">Add tasks, sort what is pending, and check off completed work from one clean list. Keep personal errands, daily priorities, and follow-ups easy to scan.</p>

                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex min-h-11 items-center justify-center rounded-md bg-emerald-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2">Create your account</a>
                            @else
                                <a href="#features" class="inline-flex min-h-11 items-center justify-center rounded-md bg-emerald-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2">Explore features</a>
                            @endif

                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="inline-flex min-h-11 items-center justify-center rounded-md border border-zinc-300 bg-white px-5 py-3 text-sm font-semibold text-zinc-900 shadow-sm transition hover:border-zinc-400 hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2">Sign in</a>
                            @else
                                <a href="#how-it-works" class="inline-flex min-h-11 items-center justify-center rounded-md border border-zinc-300 bg-white px-5 py-3 text-sm font-semibold text-zinc-900 shadow-sm transition hover:border-zinc-400 hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2">See how it works</a>
                            @endif
                        </div>
                    </div>

                    <div class="rounded-lg border border-zinc-200 bg-white p-4 shadow-xl shadow-zinc-200/70 sm:p-5">
                        <div class="flex items-center justify-between border-b border-zinc-100 pb-4">
                            <div>
                                <p class="text-sm font-semibold text-zinc-950">Today</p>
                                <p class="text-sm text-zinc-500">4 tasks in your list</p>
                            </div>
                            <div class="flex rounded-md border border-zinc-200 bg-zinc-50 p-1 text-xs font-medium">
                                <span class="rounded-sm bg-white px-2 py-1 text-zinc-900 shadow-sm">Pending</span>
                                <span class="px-2 py-1 text-zinc-500">Completed</span>
                            </div>
                        </div>

                        <div class="mt-4 grid gap-3">
                            <label class="flex items-start gap-3 rounded-md border border-zinc-200 bg-zinc-50 p-3">
                                <input type="checkbox" class="mt-1 size-4 rounded border-zinc-300 text-emerald-600 focus:ring-emerald-600">
                                <span>
                                    <span class="block text-sm font-medium text-zinc-950">Prepare project notes</span>
                                    <span class="block text-sm text-zinc-500">Due this morning</span>
                                </span>
                            </label>
                            <label class="flex items-start gap-3 rounded-md border border-zinc-200 bg-zinc-50 p-3">
                                <input type="checkbox" class="mt-1 size-4 rounded border-zinc-300 text-emerald-600 focus:ring-emerald-600">
                                <span>
                                    <span class="block text-sm font-medium text-zinc-950">Review grocery list</span>
                                    <span class="block text-sm text-zinc-500">Pending</span>
                                </span>
                            </label>
                            <label class="flex items-start gap-3 rounded-md border border-emerald-200 bg-emerald-50 p-3">
                                <input type="checkbox" checked class="mt-1 size-4 rounded border-emerald-300 text-emerald-600 focus:ring-emerald-600">
                                <span>
                                    <span class="block text-sm font-medium text-zinc-500 line-through">Send weekly update</span>
                                    <span class="block text-sm text-emerald-700">Completed</span>
                                </span>
                            </label>
                            <label class="flex items-start gap-3 rounded-md border border-zinc-200 bg-zinc-50 p-3">
                                <input type="checkbox" class="mt-1 size-4 rounded border-zinc-300 text-emerald-600 focus:ring-emerald-600">
                                <span>
                                    <span class="block text-sm font-medium text-zinc-950">Book dentist appointment</span>
                                    <span class="block text-sm text-zinc-500">This week</span>
                                </span>
                            </label>
                        </div>
                    </div>
                </section>

                <section id="features" class="border-y border-zinc-200 bg-white">
                    <div class="mx-auto max-w-6xl px-5 py-14 sm:px-6 lg:px-8">
                        <div class="max-w-2xl">
                            <h2 class="text-2xl font-semibold text-zinc-950">Everything a practical todo list needs</h2>
                            <p class="mt-3 text-base leading-7 text-zinc-600">Keep the daily loop short: capture work, adjust it as plans change, and clear finished items from your view.</p>
                        </div>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                            <article class="rounded-lg border border-zinc-200 bg-zinc-50 p-4">
                                <h3 class="text-sm font-semibold text-zinc-950">Add new tasks</h3>
                                <p class="mt-2 text-sm leading-6 text-zinc-600">Capture errands, calls, reminders, and project steps as soon as they come up.</p>
                            </article>
                            <article class="rounded-lg border border-zinc-200 bg-zinc-50 p-4">
                                <h3 class="text-sm font-semibold text-zinc-950">Edit details</h3>
                                <p class="mt-2 text-sm leading-6 text-zinc-600">Rename tasks, clarify notes, and adjust the list when priorities shift.</p>
                            </article>
                            <article class="rounded-lg border border-zinc-200 bg-zinc-50 p-4">
                                <h3 class="text-sm font-semibold text-zinc-950">Complete todos</h3>
                                <p class="mt-2 text-sm leading-6 text-zinc-600">Check off finished work and keep a clear record of what is done.</p>
                            </article>
                            <article class="rounded-lg border border-zinc-200 bg-zinc-50 p-4">
                                <h3 class="text-sm font-semibold text-zinc-950">Delete clutter</h3>
                                <p class="mt-2 text-sm leading-6 text-zinc-600">Remove duplicate, outdated, or unnecessary tasks without extra steps.</p>
                            </article>
                            <article class="rounded-lg border border-zinc-200 bg-zinc-50 p-4 sm:col-span-2 lg:col-span-1">
                                <h3 class="text-sm font-semibold text-zinc-950">View pending and completed work</h3>
                                <p class="mt-2 text-sm leading-6 text-zinc-600">Switch between open tasks and completed items when you need context.</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section id="how-it-works" class="mx-auto max-w-6xl px-5 py-14 sm:px-6 lg:px-8">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl font-semibold text-zinc-950">How it works</h2>
                        <p class="mt-3 text-base leading-7 text-zinc-600">Start with an account, then build and maintain a list that matches your day.</p>
                    </div>

                    <div class="mt-8 grid gap-4 md:grid-cols-4">
                        <div class="rounded-lg border border-zinc-200 bg-white p-4">
                            <span class="flex size-8 items-center justify-center rounded-md bg-emerald-100 text-sm font-semibold text-emerald-800">1</span>
                            <h3 class="mt-4 text-sm font-semibold text-zinc-950">Create an account</h3>
                            <p class="mt-2 text-sm leading-6 text-zinc-600">Sign up so your todo list is ready whenever you come back.</p>
                        </div>
                        <div class="rounded-lg border border-zinc-200 bg-white p-4">
                            <span class="flex size-8 items-center justify-center rounded-md bg-emerald-100 text-sm font-semibold text-emerald-800">2</span>
                            <h3 class="mt-4 text-sm font-semibold text-zinc-950">Add a task</h3>
                            <p class="mt-2 text-sm leading-6 text-zinc-600">Write down the next thing you need to remember or finish.</p>
                        </div>
                        <div class="rounded-lg border border-zinc-200 bg-white p-4">
                            <span class="flex size-8 items-center justify-center rounded-md bg-emerald-100 text-sm font-semibold text-emerald-800">3</span>
                            <h3 class="mt-4 text-sm font-semibold text-zinc-950">Organize the list</h3>
                            <p class="mt-2 text-sm leading-6 text-zinc-600">Review pending tasks and update the order as your day changes.</p>
                        </div>
                        <div class="rounded-lg border border-zinc-200 bg-white p-4">
                            <span class="flex size-8 items-center justify-center rounded-md bg-emerald-100 text-sm font-semibold text-emerald-800">4</span>
                            <h3 class="mt-4 text-sm font-semibold text-zinc-950">Complete the task</h3>
                            <p class="mt-2 text-sm leading-6 text-zinc-600">Check it off, keep completed work visible, and move on.</p>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
