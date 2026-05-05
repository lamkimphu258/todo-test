@props([
    'title' => null,
    'variant' => 'default',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ? $title.' | '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                * {
                    box-sizing: border-box;
                }

                body {
                    margin: 0;
                    background: #f4f8f6;
                    color: #17231f;
                    font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                }

                a {
                    color: inherit;
                    text-decoration: none;
                }

                header,
                footer {
                    background: rgba(255, 255, 255, 0.86);
                    border-color: #dbe5e1;
                    border-style: solid;
                    border-width: 0 0 1px;
                }

                footer {
                    border-width: 1px 0 0;
                    color: #64746f;
                }

                header > div,
                footer > div,
                main > div {
                    margin: 0 auto;
                    max-width: 80rem;
                    padding: 1rem;
                    width: 100%;
                }

                header > div,
                nav,
                footer > div {
                    align-items: center;
                    display: flex;
                    gap: 1rem;
                    justify-content: space-between;
                }

                main > div {
                    padding-bottom: 2.5rem;
                    padding-top: 2.5rem;
                }

                section {
                    display: grid;
                    gap: 2rem;
                }

                h1,
                h2,
                p {
                    margin: 0;
                }

                h1 {
                    font-size: clamp(2rem, 7vw, 3.75rem);
                    line-height: 1.1;
                }

                h2 {
                    font-size: 1.875rem;
                    line-height: 1.2;
                }

                input {
                    border: 1px solid #dbe5e1;
                    border-radius: 0.375rem;
                    font: inherit;
                    min-height: 3rem;
                    padding: 0 1rem;
                    width: 100%;
                }

                button,
                a[href$="/login"],
                a[href$="/register"] {
                    border-radius: 0.375rem;
                    display: inline-flex;
                    font-weight: 600;
                    min-height: 2.75rem;
                    padding: 0.75rem 1rem;
                }

                button,
                a[href$="/register"] {
                    background: #0f766e;
                    color: #fff;
                }

                form,
                label {
                    display: grid;
                    gap: 0.75rem;
                }

                form {
                    margin-top: 2rem;
                }

                .bg-white {
                    background: #fff;
                }

                .bg-white\/70,
                .bg-white\/85 {
                    background: rgba(255, 255, 255, 0.85);
                }

                .bg-public-soft {
                    background: #f4f8f6;
                }

                .bg-public-brand {
                    background: #0f766e;
                }

                .bg-public-brand-dark {
                    background: #115e59;
                }

                .bg-public-warm {
                    background: #f59e0b;
                }

                .bg-public-ink {
                    background: #17231f;
                }

                .bg-teal-50 {
                    background: #f0fdfa;
                }

                .bg-amber-100 {
                    background: #fef3c7;
                }

                .bg-rose-50 {
                    background: #fff1f2;
                }

                .bg-rose-500 {
                    background: #f43f5e;
                }

                .border {
                    border: 1px solid #dbe5e1;
                }

                .border-b {
                    border-bottom: 1px solid #dbe5e1;
                }

                .border-t {
                    border-top: 1px solid #dbe5e1;
                }

                .border-l-2 {
                    border-left: 2px solid #0f766e;
                }

                .border-public-line,
                .border-public-line\/80 {
                    border-color: #dbe5e1;
                }

                .border-public-brand {
                    border-color: #0f766e;
                }

                .border-public-warm {
                    border-color: #f59e0b;
                }

                .border-rose-400 {
                    border-color: #fb7185;
                }

                .rounded-lg,
                .rounded-md {
                    border-radius: 0.5rem;
                }

                .rounded-full {
                    border-radius: 9999px;
                }

                .flex {
                    display: flex;
                }

                .inline-flex {
                    display: inline-flex;
                }

                .grid {
                    display: grid;
                }

                .hidden {
                    display: none;
                }

                .block {
                    display: block;
                }

                .min-h-screen {
                    min-height: 100vh;
                }

                .min-h-12 {
                    min-height: 3rem;
                }

                .flex-1 {
                    flex: 1 1 0%;
                }

                .shrink-0 {
                    flex-shrink: 0;
                }

                .flex-col {
                    flex-direction: column;
                }

                .items-center {
                    align-items: center;
                }

                .justify-between {
                    justify-content: space-between;
                }

                .justify-center {
                    justify-content: center;
                }

                .gap-2 {
                    gap: 0.5rem;
                }

                .gap-3 {
                    gap: 0.75rem;
                }

                .gap-4 {
                    gap: 1rem;
                }

                .gap-5 {
                    gap: 1.25rem;
                }

                .gap-8 {
                    gap: 2rem;
                }

                .gap-10 {
                    gap: 2.5rem;
                }

                .mx-auto {
                    margin-inline: auto;
                }

                .mt-1 {
                    margin-top: 0.25rem;
                }

                .mt-2 {
                    margin-top: 0.5rem;
                }

                .mt-4 {
                    margin-top: 1rem;
                }

                .mt-5 {
                    margin-top: 1.25rem;
                }

                .mt-6 {
                    margin-top: 1.5rem;
                }

                .mt-8 {
                    margin-top: 2rem;
                }

                .w-full {
                    width: 100%;
                }

                .max-w-md {
                    max-width: 28rem;
                }

                .max-w-2xl {
                    max-width: 42rem;
                }

                .max-w-3xl {
                    max-width: 48rem;
                }

                .max-w-6xl {
                    max-width: 72rem;
                }

                .max-w-7xl {
                    max-width: 80rem;
                }

                .min-w-0 {
                    min-width: 0;
                }

                .size-3 {
                    height: 0.75rem;
                    width: 0.75rem;
                }

                .size-4 {
                    height: 1rem;
                    width: 1rem;
                }

                .size-9 {
                    height: 2.25rem;
                    width: 2.25rem;
                }

                .size-10 {
                    height: 2.5rem;
                    width: 2.5rem;
                }

                .truncate {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }

                .p-4 {
                    padding: 1rem;
                }

                .p-6 {
                    padding: 1.5rem;
                }

                .px-3 {
                    padding-inline: 0.75rem;
                }

                .px-4 {
                    padding-inline: 1rem;
                }

                .px-6 {
                    padding-inline: 1.5rem;
                }

                .py-1 {
                    padding-block: 0.25rem;
                }

                .py-2 {
                    padding-block: 0.5rem;
                }

                .py-3 {
                    padding-block: 0.75rem;
                }

                .py-4 {
                    padding-block: 1rem;
                }

                .py-5 {
                    padding-block: 1.25rem;
                }

                .py-10 {
                    padding-block: 2.5rem;
                }

                .pb-4 {
                    padding-bottom: 1rem;
                }

                .pl-4 {
                    padding-left: 1rem;
                }

                .text-center {
                    text-align: center;
                }

                .text-sm {
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                }

                .text-base {
                    font-size: 1rem;
                    line-height: 1.5rem;
                }

                .text-lg {
                    font-size: 1.125rem;
                    line-height: 1.75rem;
                }

                .text-xl {
                    font-size: 1.25rem;
                    line-height: 1.75rem;
                }

                .text-2xl {
                    font-size: 1.5rem;
                    line-height: 2rem;
                }

                .text-3xl {
                    font-size: 1.875rem;
                    line-height: 2.25rem;
                }

                .text-4xl {
                    font-size: 2.25rem;
                    line-height: 2.5rem;
                }

                .font-medium {
                    font-weight: 500;
                }

                .font-semibold {
                    font-weight: 600;
                }

                .font-bold {
                    font-weight: 700;
                }

                .uppercase {
                    text-transform: uppercase;
                }

                .leading-7 {
                    line-height: 1.75rem;
                }

                .leading-8 {
                    line-height: 2rem;
                }

                .leading-tight {
                    line-height: 1.25;
                }

                .text-public-ink {
                    color: #17231f;
                }

                .text-public-muted,
                .placeholder\:text-public-muted\/70::placeholder {
                    color: #64746f;
                }

                .text-public-brand {
                    color: #0f766e;
                }

                .text-public-brand-dark,
                .hover\:text-public-brand-dark:hover {
                    color: #115e59;
                }

                .text-white {
                    color: #fff;
                }

                .text-white\/70 {
                    color: rgba(255, 255, 255, 0.7);
                }

                .text-amber-800 {
                    color: #92400e;
                }

                .text-rose-600 {
                    color: #e11d48;
                }

                .shadow-sm,
                .shadow-xl {
                    box-shadow: 0 10px 20px rgba(19, 78, 74, 0.08);
                }

                .outline-none {
                    outline: 2px solid transparent;
                    outline-offset: 2px;
                }

                .transition {
                    transition-duration: 150ms;
                    transition-property: color, background-color, border-color, box-shadow;
                }

                .hover\:bg-public-brand-dark:hover {
                    background: #115e59;
                }

                .hover\:border-public-brand:hover {
                    border-color: #0f766e;
                }

                .hover\:text-public-brand:hover {
                    color: #0f766e;
                }

                .focus\:border-public-brand:focus {
                    border-color: #0f766e;
                }

                .focus\:ring-2:focus {
                    box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.2);
                }

                @media (min-width: 40rem) {
                    .sm\:flex-row {
                        flex-direction: row;
                    }

                    .sm\:items-center {
                        align-items: center;
                    }

                    .sm\:justify-between {
                        justify-content: space-between;
                    }

                    .sm\:grid-cols-2 {
                        grid-template-columns: repeat(2, minmax(0, 1fr));
                    }

                    .sm\:grid-cols-3 {
                        grid-template-columns: repeat(3, minmax(0, 1fr));
                    }

                    .sm\:p-8 {
                        padding: 2rem;
                    }

                    .sm\:px-6 {
                        padding-inline: 1.5rem;
                    }

                    .sm\:text-5xl {
                        font-size: 3rem;
                        line-height: 1;
                    }
                }

                @media (min-width: 64rem) {
                    section {
                        grid-template-columns: 1fr 1fr;
                    }

                    header > div,
                    footer > div,
                    main > div {
                        padding-left: 2rem;
                        padding-right: 2rem;
                    }

                    .lg\:block {
                        display: block;
                    }

                    .lg\:grid-cols-\[0\.9fr_1fr\] {
                        grid-template-columns: 0.9fr 1fr;
                    }

                    .lg\:grid-cols-\[1fr_0\.9fr\] {
                        grid-template-columns: 1fr 0.9fr;
                    }

                    .lg\:px-8 {
                        padding-inline: 2rem;
                    }

                    .lg\:py-14 {
                        padding-block: 3.5rem;
                    }

                    .lg\:py-16 {
                        padding-block: 4rem;
                    }

                    .lg\:text-6xl {
                        font-size: 3.75rem;
                        line-height: 1;
                    }
                }
            </style>
        @endif
    </head>
    <body class="min-h-screen bg-public-soft font-sans text-public-ink antialiased">
        <div class="flex min-h-screen flex-col">
            <header class="border-b border-public-line/80 bg-white/85">
                <div class="mx-auto flex w-full max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
                    <a href="{{ route('home') }}" class="flex min-w-0 items-center gap-3 rounded-md focus:outline-none focus:ring-2 focus:ring-public-brand focus:ring-offset-4" aria-label="{{ config('app.name', 'Laravel') }} home">
                        <span class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-public-brand text-base font-bold text-white shadow-sm">T</span>
                        <span class="truncate text-lg font-semibold">{{ config('app.name', 'Laravel') }}</span>
                    </a>

                    <nav class="flex items-center gap-2 text-sm font-medium" aria-label="Public navigation">
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-public-muted transition hover:text-public-ink focus:outline-none focus:ring-2 focus:ring-public-brand focus:ring-offset-2">Sign in</a>
                        <a href="{{ route('register') }}" class="rounded-md bg-public-brand px-4 py-2 text-white shadow-sm transition hover:bg-public-brand-dark focus:outline-none focus:ring-2 focus:ring-public-brand focus:ring-offset-2">Sign up</a>
                    </nav>
                </div>
            </header>

            <main class="flex-1">
                <div @class([
                    'mx-auto w-full px-4 py-10 sm:px-6 lg:px-8',
                    'max-w-7xl lg:py-16' => $variant !== 'auth',
                    'max-w-6xl lg:py-14' => $variant === 'auth',
                ])>
                    {{ $slot }}
                </div>
            </main>

            <footer class="border-t border-public-line/80 bg-white/70">
                <div class="mx-auto flex w-full max-w-7xl flex-col gap-3 px-4 py-5 text-sm text-public-muted sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
                    <p>{{ config('app.name', 'Laravel') }} keeps teams clear on the work that matters.</p>
                    <a href="{{ route('home') }}" class="font-medium text-public-brand hover:text-public-brand-dark">Back to home</a>
                </div>
            </footer>
        </div>
    </body>
</html>
