<x-layout>
    <x-slot:heading>
        Contact screen
    </x-slot:heading>
    <h2>Hello from contact page</h2>

    @foreach($data as $item)
    <li>
        <a href="/contact/{{ $item['id'] }}">
            <strong>{{ $item['name'] }}</strong>: {{ $item['email'] }}
        </a>
    </li>
    @endforeach
</x-layout>
