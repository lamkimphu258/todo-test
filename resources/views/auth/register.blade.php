<x-layouts.public title="Sign up" variant="auth">
    <section class="grid items-center gap-8 lg:grid-cols-[1fr_0.9fr]">
        <div class="mx-auto w-full max-w-md rounded-lg border border-public-line bg-white p-6 shadow-xl shadow-teal-950/5 sm:p-8">
            <div class="flex flex-col gap-2">
                <a href="{{ route('home') }}" class="text-sm font-semibold text-public-brand hover:text-public-brand-dark">Back to home</a>
                <h1 class="text-3xl font-bold">Create your account</h1>
                <p class="text-public-muted">Start with a workspace your team can trust.</p>
            </div>

            <form method="POST" action="{{ route('register.store') }}" class="mt-8 grid gap-5">
                @csrf

                <label class="grid gap-2">
                    <span class="text-sm font-semibold">Name</span>
                    <input type="text" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Alex Morgan" class="min-h-12 rounded-md border border-public-line bg-white px-4 text-base outline-none transition placeholder:text-public-muted/70 focus:border-public-brand focus:ring-2 focus:ring-public-brand/20">
                    @error('name')
                        <span class="text-sm font-medium text-rose-600">{{ $message }}</span>
                    @enderror
                </label>

                <label class="grid gap-2">
                    <span class="text-sm font-semibold">Email address</span>
                    <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="you@example.com" class="min-h-12 rounded-md border border-public-line bg-white px-4 text-base outline-none transition placeholder:text-public-muted/70 focus:border-public-brand focus:ring-2 focus:ring-public-brand/20">
                    @error('email')
                        <span class="text-sm font-medium text-rose-600">{{ $message }}</span>
                    @enderror
                </label>

                <label class="grid gap-2">
                    <span class="text-sm font-semibold">Password</span>
                    <input type="password" name="password" autocomplete="new-password" placeholder="Choose a password" class="min-h-12 rounded-md border border-public-line bg-white px-4 text-base outline-none transition placeholder:text-public-muted/70 focus:border-public-brand focus:ring-2 focus:ring-public-brand/20">
                    @error('password')
                        <span class="text-sm font-medium text-rose-600">{{ $message }}</span>
                    @enderror
                </label>

                <label class="grid gap-2">
                    <span class="text-sm font-semibold">Confirm password</span>
                    <input type="password" name="password_confirmation" autocomplete="new-password" placeholder="Confirm your password" class="min-h-12 rounded-md border border-public-line bg-white px-4 text-base outline-none transition placeholder:text-public-muted/70 focus:border-public-brand focus:ring-2 focus:ring-public-brand/20">
                </label>

                <button type="submit" class="inline-flex min-h-12 items-center justify-center rounded-md bg-public-brand px-6 py-3 text-base font-semibold text-white shadow-sm transition hover:bg-public-brand-dark focus:outline-none focus:ring-2 focus:ring-public-brand focus:ring-offset-2">
                    Create account
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-public-muted">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-public-brand hover:text-public-brand-dark">Sign in</a>
            </p>
        </div>

        <div class="hidden rounded-lg border border-public-line bg-white p-6 shadow-xl shadow-teal-950/5 lg:block">
            <p class="text-sm font-semibold uppercase text-public-brand">Plan together</p>
            <h2 class="mt-4 text-3xl font-bold leading-tight">A shared rhythm from the first project.</h2>
            <div class="mt-6 grid gap-3">
                <div class="flex items-center gap-3 rounded-md bg-public-soft p-4">
                    <span class="flex size-9 shrink-0 items-center justify-center rounded-md bg-public-brand text-sm font-bold text-white">1</span>
                    <p class="font-medium">Capture what matters this week.</p>
                </div>
                <div class="flex items-center gap-3 rounded-md bg-teal-50 p-4">
                    <span class="flex size-9 shrink-0 items-center justify-center rounded-md bg-public-warm text-sm font-bold text-white">2</span>
                    <p class="font-medium">Assign owners before work starts.</p>
                </div>
                <div class="flex items-center gap-3 rounded-md bg-rose-50 p-4">
                    <span class="flex size-9 shrink-0 items-center justify-center rounded-md bg-rose-500 text-sm font-bold text-white">3</span>
                    <p class="font-medium">Review progress without status drift.</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.public>
