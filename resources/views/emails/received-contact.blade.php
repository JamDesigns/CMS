<x-mail::message>
# {{ __('Contact message') }}

<p>{{ __('We have received the following contact message') }}</p>

<x-mail::panel>
{!! $contact->message !!}
</x-mail::panel>

<p class="sub">
{{ __('From:') . ' ' . $contact->name . ' ' . $contact->last_name . ' <' . $contact->email . '>' }}
</p>

<p>{{ __("Don't forget to reply as soon as possible.") }}</p>
</x-mail::message>
