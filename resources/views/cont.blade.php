<x-layout>
    <x-slot:heading>
        Single contact
    </x-slot:heading>
    <h2 class="text-lg font-bold">{{ $contactv['name']}}</h2>
    <p>
        Contact me with {{ $contactv['email'] }} or with {{ $contactv['phone'] }}
    </p>
</x-layout>
