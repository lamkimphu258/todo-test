<x-mail::message>
    <h1>New contact message</h1>

    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Subject:</strong> {{ $subjectLine ?? 'General inquiry' }}</p>

    <x-mail::panel>
        {{ $body }}
    </x-mail::panel>

    <x-mail::button :url="config('app.url')">
        Open app
    </x-mail::button>
</x-mail::message>
