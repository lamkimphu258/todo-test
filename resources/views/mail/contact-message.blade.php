<x-mail::message>
# New Todo contact message

**Name:** {{ $contact['name'] }}

**Email:** {{ $contact['email'] }}

**Message:**

{{ $contact['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
