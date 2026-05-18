<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign up - Todo Ape</title>

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
        @endphp

        <div class="relative isolate min-h-screen overflow-hidden px-4 py-8 sm:px-6 lg:px-8">
            <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
                <div class="absolute left-1/2 top-[-12rem] h-[30rem] w-[30rem] -translate-x-1/2 rounded-full bg-indigo-500/20 blur-3xl"></div>
                <div class="absolute left-[-7rem] top-1/2 h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl"></div>
                <div class="absolute right-[-8rem] top-24 h-72 w-72 rounded-full bg-amber-300/20 blur-3xl"></div>
            </div>

            <main class="mx-auto flex w-full max-w-lg flex-col justify-center gap-6">
                <header class="text-center">
                    <a href="{{ route('landing') }}" class="inline-flex rounded-full border border-slate-700 px-5 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-800">
                        Back to landing
                    </a>
                    <h1 class="mt-6 text-3xl font-bold">Create your account</h1>
                    <p class="mt-2 text-sm text-slate-300">Start managing tasks with Todo Ape.</p>
                </header>

                <section class="rounded-3xl border border-white/15 bg-white/5 p-6 shadow-[0_0_0_1px_rgba(255,255,255,0.04)] backdrop-blur">
                    @if ($errors->has('email'))
                        <div class="mb-4 rounded-xl border border-red-400/40 bg-red-400/10 px-4 py-3 text-sm text-red-200" role="alert">
                            {{ $errors->first('email') }}
                        </div>
                        @endif

                    <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
                        @csrf

                        <div>
                            <label for="name" class="mb-1 block text-sm font-semibold text-slate-200">Name</label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                required
                                value="{{ old('name') }}"
                                autocomplete="name"
                                class="w-full rounded-xl border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 outline-none ring-1 ring-transparent transition focus:border-cyan-300 focus:ring-2 focus:ring-cyan-300/30"
                            />
                            @error('name')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="mb-1 block text-sm font-semibold text-slate-200">Email</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                required
                                value="{{ old('email') }}"
                                autocomplete="email"
                                class="w-full rounded-xl border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 outline-none ring-1 ring-transparent transition focus:border-cyan-300 focus:ring-2 focus:ring-cyan-300/30"
                            />
                            @error('email')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="mb-1 block text-sm font-semibold text-slate-200">Password</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                required
                                minlength="8"
                                autocomplete="new-password"
                                class="w-full rounded-xl border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 outline-none ring-1 ring-transparent transition focus:border-cyan-300 focus:ring-2 focus:ring-cyan-300/30"
                            />
                            @error('password')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full rounded-xl bg-cyan-300 px-4 py-2.5 text-sm font-semibold text-slate-950 transition hover:bg-cyan-200">
                            Create account
                        </button>
                    </form>
                </section>

                <p class="text-center text-sm text-slate-300">
                    Already have an account?
                    <a href="{{ $loginUrl }}" class="font-semibold text-cyan-200 hover:text-cyan-100">Sign in</a>
                </p>
            </main>
        </div>
    </body>
</html>
