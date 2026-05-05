<x-layouts.public>
    <section class="grid items-center gap-10 lg:grid-cols-[1fr_0.9fr]">
        <div class="flex flex-col gap-8">
            <div class="flex flex-col gap-5">
                <p class="text-sm font-semibold uppercase text-public-brand">Shared plans, calmer days</p>
                <h1 class="max-w-3xl text-4xl font-bold leading-tight text-public-ink sm:text-5xl lg:text-6xl">
                    Organize every task before the week gets loud.
                </h1>
                <p class="max-w-2xl text-lg leading-8 text-public-muted">
                    {{ config('app.name', 'Laravel') }} gives teams a focused place to capture priorities, spot blockers, and keep momentum visible from the first check-in to the final handoff.
                </p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('register') }}" class="inline-flex min-h-12 items-center justify-center rounded-md bg-public-brand px-6 py-3 text-base font-semibold text-white shadow-sm transition hover:bg-public-brand-dark focus:outline-none focus:ring-2 focus:ring-public-brand focus:ring-offset-2">
                    Create your workspace
                </a>
                <a href="{{ route('login') }}" class="inline-flex min-h-12 items-center justify-center rounded-md border border-public-line bg-white px-6 py-3 text-base font-semibold text-public-ink shadow-sm transition hover:border-public-brand hover:text-public-brand focus:outline-none focus:ring-2 focus:ring-public-brand focus:ring-offset-2">
                    Sign in
                </a>
            </div>

            <dl class="grid gap-4 sm:grid-cols-3">
                <div class="border-l-2 border-public-brand pl-4">
                    <dt class="text-2xl font-bold">3</dt>
                    <dd class="text-sm text-public-muted">Priority lanes</dd>
                </div>
                <div class="border-l-2 border-public-warm pl-4">
                    <dt class="text-2xl font-bold">12m</dt>
                    <dd class="text-sm text-public-muted">Daily planning window</dd>
                </div>
                <div class="border-l-2 border-rose-400 pl-4">
                    <dt class="text-2xl font-bold">1</dt>
                    <dd class="text-sm text-public-muted">Shared source of truth</dd>
                </div>
            </dl>
        </div>

        <div class="rounded-lg border border-public-line bg-white p-4 shadow-xl shadow-teal-950/5 sm:p-6">
            <div class="flex items-center justify-between gap-4 border-b border-public-line pb-4">
                <div>
                    <p class="text-sm font-semibold text-public-brand">Today</p>
                    <h2 class="text-xl font-bold">Launch checklist</h2>
                </div>
                <span class="rounded-md bg-amber-100 px-3 py-1 text-sm font-semibold text-amber-800">On track</span>
            </div>

            <div class="mt-5 grid gap-3">
                @foreach ([
                    ['label' => 'Confirm landing copy', 'status' => 'Done', 'color' => 'bg-public-brand'],
                    ['label' => 'Review auth flow states', 'status' => 'Next', 'color' => 'bg-public-warm'],
                    ['label' => 'Share rollout notes', 'status' => 'Blocked', 'color' => 'bg-rose-500'],
                ] as $task)
                    <div class="flex items-center justify-between gap-4 rounded-md border border-public-line bg-public-soft px-4 py-3">
                        <div class="flex min-w-0 items-center gap-3">
                            <span class="size-3 shrink-0 rounded-full {{ $task['color'] }}"></span>
                            <span class="truncate font-medium">{{ $task['label'] }}</span>
                        </div>
                        <span class="shrink-0 text-sm text-public-muted">{{ $task['status'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="rounded-md bg-public-ink p-4 text-white">
                    <p class="text-sm text-white/70">Focus score</p>
                    <p class="mt-2 text-3xl font-bold">86%</p>
                </div>
                <div class="rounded-md bg-teal-50 p-4">
                    <p class="text-sm text-public-muted">Next review</p>
                    <p class="mt-2 text-3xl font-bold">4 PM</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.public>
