<x-layouts.public title="Sign in" variant="auth">
    <section class="grid items-center gap-8 lg:grid-cols-[0.9fr_1fr]">
        <div class="hidden rounded-lg border border-public-line bg-white p-6 shadow-xl shadow-teal-950/5 lg:block">
            <p class="text-sm font-semibold uppercase text-public-brand">Welcome back</p>
            <h1 class="mt-4 text-3xl font-bold leading-tight">Pick up the plan right where your team left it.</h1>
            <p class="mt-4 text-base leading-7 text-public-muted">
                Check priorities, clear blockers, and keep everyone working from the same current list.
            </p>
            <div class="mt-6 grid gap-3">
                <div class="rounded-md bg-public-soft p-4">
                    <p class="text-sm text-public-muted">Open tasks</p>
                    <p class="mt-1 text-2xl font-bold">18</p>
                </div>
                <div class="rounded-md bg-teal-50 p-4">
                    <p class="text-sm text-public-muted">Completed this week</p>
                    <p class="mt-1 text-2xl font-bold">42</p>
                </div>
            </div>
        </div>

        <div class="mx-auto w-full max-w-md rounded-lg border border-public-line bg-white p-6 shadow-xl shadow-teal-950/5 sm:p-8">
            <div class="flex flex-col gap-2">
                <a href="{{ route('home') }}" class="text-sm font-semibold text-public-brand hover:text-public-brand-dark">Back to home</a>
                <h1 class="text-3xl font-bold">Sign in</h1>
                <p class="text-public-muted">Use your workspace email to continue.</p>
            </div>

            <form method="POST" action="{{ route('login.store') }}" class="mt-8 grid gap-5">
                @csrf

                <label class="grid gap-2">
                    <span class="text-sm font-semibold">Email address</span>
                    <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="you@example.com" class="min-h-12 rounded-md border border-public-line bg-white px-4 text-base outline-none transition placeholder:text-public-muted/70 focus:border-public-brand focus:ring-2 focus:ring-public-brand/20">
                    @error('email')
                        <span class="text-sm font-medium text-rose-600">{{ $message }}</span>
                    @enderror
                </label>

                <label class="grid gap-2">
                    <span class="text-sm font-semibold">Password</span>
                    <input type="password" name="password" autocomplete="current-password" placeholder="Enter your password" class="min-h-12 rounded-md border border-public-line bg-white px-4 text-base outline-none transition placeholder:text-public-muted/70 focus:border-public-brand focus:ring-2 focus:ring-public-brand/20">
                    @error('password')
                        <span class="text-sm font-medium text-rose-600">{{ $message }}</span>
                    @enderror
                </label>

                <div class="flex items-center justify-between gap-4 text-sm">
                    <label class="flex items-center gap-2 text-public-muted">
                        <input type="checkbox" name="remember" class="size-4 rounded border-public-line text-public-brand focus:ring-public-brand">
                        Remember me
                    </label>
                    <a href="{{ route('home') }}" class="font-medium text-public-brand hover:text-public-brand-dark">Need help?</a>
                </div>

                <button type="submit" class="inline-flex min-h-12 items-center justify-center rounded-md bg-public-brand px-6 py-3 text-base font-semibold text-white shadow-sm transition hover:bg-public-brand-dark focus:outline-none focus:ring-2 focus:ring-public-brand focus:ring-offset-2">
                    Sign in
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-public-muted">
                New to {{ config('app.name', 'Laravel') }}?
                <a href="{{ route('register') }}" class="font-semibold text-public-brand hover:text-public-brand-dark">Create an account</a>
            </p>
        </div>
    </section>
</x-layouts.public>
