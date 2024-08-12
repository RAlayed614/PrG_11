<x-layout>
    <x-slot:heading>
        خدماتنا
    </x-slot:heading>
    <div class="space-y-4 device-width">
        @foreach ($contents as $content)
            <div class="block px-4 py-6">
                <h2 class="py-4">{{ $content->Title }}</h2>
                <img class="rounded w-full" src="{{ $content->Photo }}" alt="{{ $content->Title }}">
                <p class="py-4">
                    {{ $content->description }}
                </p>
                <p class="mt-6">
                    <a href="/edit/{{ $content->id }}"
                        class="relative inline-flex items-center px-4 py-2 text-sm text-gray-900 bg-white border border-gray-300
                leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300
                active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 ">
                        تعديل </a>
                </p>
            </div>
        @endforeach
    </div>
</x-layout>
