<x-layout>
    <x-slot:heading>
        عملائنا
    </x-slot:heading>
    <div class="space-y-4 device-width">
        @foreach ($contents as $content)
        <div class="block px-4 py-6">
            <h2 class="py-4">{{ $content['Title'] }}</h2>
            <img class="rounded w-full" src="{{ $content['Photo'] }}" alt="{{ $content['Title'] }}" >
            <p class="py-4">
                {{ $content['description'] }}
            </p>
        </div>
        @endforeach
    </div>
</x-layout>
