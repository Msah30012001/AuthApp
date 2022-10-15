<x-mail::message>
# email verification



<x-mail::button :url="''">
Verify
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
