<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo App</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-zinc-50 font-sans text-zinc-950 antialiased">
        <main>
            <section class="border-b border-zinc-200 bg-white">
                <div class="mx-auto grid min-h-screen max-w-7xl grid-cols-1 content-center gap-10 px-5 py-8 sm:px-6 lg:grid-cols-[0.95fr_1.05fr] lg:px-8">
                    <div class="flex flex-col justify-center gap-8">
                        <nav class="flex items-center justify-between">
                            <a href="{{ route('home') }}" class="text-lg font-bold tracking-normal text-zinc-950">Todo</a>
                            <a href="#contact" class="rounded-md bg-zinc-950 px-4 py-2 text-sm font-semibold text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">Contact</a>
                        </nav>

                        <div class="max-w-2xl">
                            <p class="mb-4 text-sm font-semibold uppercase tracking-normal text-emerald-700">Simple task control</p>
                            <h1 class="text-4xl font-bold tracking-normal text-zinc-950 sm:text-5xl lg:text-6xl">Plan the day, finish the work, keep momentum.</h1>
                            <p class="mt-6 max-w-xl text-base leading-7 text-zinc-600 sm:text-lg">
                                Todo gives busy teams and focused individuals a clear place to capture tasks, choose priorities, and follow progress without adding another heavy workflow.
                            </p>
                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <a href="#contact" class="inline-flex justify-center rounded-md bg-emerald-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">Request access</a>
                                <a href="#features" class="inline-flex justify-center rounded-md border border-zinc-300 px-5 py-3 text-sm font-semibold text-zinc-800 transition hover:border-zinc-400 hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">View features</a>
                            </div>
                        </div>

                        <div class="grid max-w-2xl grid-cols-3 gap-3 border-t border-zinc-200 pt-6">
                            <div>
                                <p class="text-2xl font-bold text-zinc-950">12k</p>
                                <p class="mt-1 text-sm text-zinc-600">tasks organized</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-zinc-950">84%</p>
                                <p class="mt-1 text-sm text-zinc-600">weekly focus</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-zinc-950">3x</p>
                                <p class="mt-1 text-sm text-zinc-600">faster planning</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-full overflow-hidden rounded-lg border border-zinc-200 bg-zinc-950 shadow-2xl shadow-zinc-300">
                            <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">
                                <div class="flex gap-2">
                                    <span class="size-3 rounded-full bg-red-400"></span>
                                    <span class="size-3 rounded-full bg-amber-300"></span>
                                    <span class="size-3 rounded-full bg-emerald-400"></span>
                                </div>
                                <span class="text-xs font-medium text-zinc-400">Today board</span>
                            </div>

                            <div class="grid gap-4 p-4 sm:p-6 lg:grid-cols-[0.72fr_1fr]">
                                <aside class="rounded-md bg-white/5 p-4">
                                    <p class="text-sm font-semibold text-white">Focus queue</p>
                                    <div class="mt-4 space-y-3">
                                        <div class="rounded-md bg-emerald-400 p-3 text-zinc-950">
                                            <p class="text-sm font-semibold">Launch checklist</p>
                                            <p class="mt-1 text-xs">4 of 6 done</p>
                                        </div>
                                        <div class="rounded-md bg-white/10 p-3 text-white">
                                            <p class="text-sm font-semibold">Client follow-up</p>
                                            <p class="mt-1 text-xs text-zinc-400">Due at 2:00 PM</p>
                                        </div>
                                        <div class="rounded-md bg-white/10 p-3 text-white">
                                            <p class="text-sm font-semibold">Weekly review</p>
                                            <p class="mt-1 text-xs text-zinc-400">Friday rhythm</p>
                                        </div>
                                    </div>
                                </aside>

                                <section class="rounded-md bg-white p-4">
                                    <div class="flex items-center justify-between gap-3">
                                        <div>
                                            <p class="text-sm font-semibold text-zinc-950">Product sprint</p>
                                            <p class="text-xs text-zinc-500">Next actions</p>
                                        </div>
                                        <span class="rounded-md bg-emerald-100 px-2 py-1 text-xs font-semibold text-emerald-800">On track</span>
                                    </div>

                                    <div class="mt-5 space-y-3">
                                        @foreach ([
                                            ['Write release notes', 'Done', 'bg-emerald-600'],
                                            ['Review priority list', 'In progress', 'bg-cyan-600'],
                                            ['Confirm reminder copy', 'Today', 'bg-amber-500'],
                                            ['Share launch notes', 'Tomorrow', 'bg-zinc-400'],
                                        ] as [$task, $state, $color])
                                            <div class="flex items-center gap-3 rounded-md border border-zinc-200 p-3">
                                                <span class="size-3 rounded-full {{ $color }}"></span>
                                                <div class="min-w-0 flex-1">
                                                    <p class="truncate text-sm font-semibold text-zinc-900">{{ $task }}</p>
                                                    <p class="text-xs text-zinc-500">{{ $state }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="mt-5 rounded-md bg-zinc-100 p-3">
                                        <div class="flex items-center justify-between text-xs font-semibold text-zinc-600">
                                            <span>Progress</span>
                                            <span>68%</span>
                                        </div>
                                        <div class="mt-2 h-2 rounded-full bg-zinc-200">
                                            <div class="h-2 w-2/3 rounded-full bg-emerald-600"></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="features" class="bg-zinc-50 py-16 sm:py-20">
                <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
                    <div class="max-w-2xl">
                        <p class="text-sm font-semibold uppercase tracking-normal text-emerald-700">Built for daily work</p>
                        <h2 class="mt-3 text-3xl font-bold tracking-normal text-zinc-950 sm:text-4xl">Everything important stays visible.</h2>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-4 md:grid-cols-3">
                        <article class="rounded-lg border border-zinc-200 bg-white p-6">
                            <div class="flex size-10 items-center justify-center rounded-md bg-emerald-100 text-emerald-700">
                                <span class="text-lg font-bold">1</span>
                            </div>
                            <h3 class="mt-5 text-lg font-semibold text-zinc-950">Plan with context</h3>
                            <p class="mt-3 text-sm leading-6 text-zinc-600">Capture tasks, notes, due dates, and owners in a clean board that is fast to scan.</p>
                        </article>

                        <article class="rounded-lg border border-zinc-200 bg-white p-6">
                            <div class="flex size-10 items-center justify-center rounded-md bg-cyan-100 text-cyan-700">
                                <span class="text-lg font-bold">2</span>
                            </div>
                            <h3 class="mt-5 text-lg font-semibold text-zinc-950">Prioritize clearly</h3>
                            <p class="mt-3 text-sm leading-6 text-zinc-600">Separate urgent work from background noise so the next action is always obvious.</p>
                        </article>

                        <article class="rounded-lg border border-zinc-200 bg-white p-6">
                            <div class="flex size-10 items-center justify-center rounded-md bg-amber-100 text-amber-700">
                                <span class="text-lg font-bold">3</span>
                            </div>
                            <h3 class="mt-5 text-lg font-semibold text-zinc-950">Track progress</h3>
                            <p class="mt-3 text-sm leading-6 text-zinc-600">Use reminders and completion signals to keep commitments from slipping.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section id="contact" class="border-t border-zinc-200 bg-white py-16 sm:py-20">
                <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-5 sm:px-6 lg:grid-cols-[0.8fr_1fr] lg:px-8">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-normal text-emerald-700">Contact</p>
                        <h2 class="mt-3 text-3xl font-bold tracking-normal text-zinc-950 sm:text-4xl">Tell us how Todo should fit your workflow.</h2>
                        <p class="mt-4 max-w-xl text-base leading-7 text-zinc-600">Send a short note about your team, current task process, or early access interest.</p>
                    </div>

                    <form action="{{ route('contact.store') }}" method="POST" class="rounded-lg border border-zinc-200 bg-zinc-50 p-5 sm:p-6">
                        @csrf

                        @if (session('status'))
                            <div class="mb-5 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-zinc-800">Name</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" class="mt-2 block w-full rounded-md border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-950 shadow-sm outline-none transition placeholder:text-zinc-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20" placeholder="Jordan Lee">
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-semibold text-zinc-800">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" class="mt-2 block w-full rounded-md border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-950 shadow-sm outline-none transition placeholder:text-zinc-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20" placeholder="jordan@example.com">
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-5">
                            <label for="message" class="block text-sm font-semibold text-zinc-800">Message</label>
                            <textarea id="message" name="message" rows="6" class="mt-2 block w-full rounded-md border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-950 shadow-sm outline-none transition placeholder:text-zinc-400 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20" placeholder="What would you like to organize with Todo?">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="mt-6 inline-flex w-full justify-center rounded-md bg-zinc-950 px-5 py-3 text-sm font-semibold text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 sm:w-auto">Send message</button>
                    </form>
                </div>
            </section>
        </main>
    </body>
</html>
