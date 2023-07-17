@component('mail::message')
{{ $contact['message'] }}

@if ($contact['phone'])
Phone: {{ $contact['phone'] }}
@endif
@endcomponent
