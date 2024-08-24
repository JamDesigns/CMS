@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<div class="flex flex-row gap-2 h-24 w-24">
<x-application-mark class="inline-block h-20 w-20"/>
{{ $slot }}
</div>
@endif
</a>
</td>
</tr>
