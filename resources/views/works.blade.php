<x-layout>
    <x-slot:heading>
        عملائنا
    </x-slot:heading>
    <div class="container-services">
        @foreach ($contents as $content)
            <div class="container-service">
                <h2 class="title-service">{{ $content->Title }}</h2>
                <img class="image-service" src="{{ $content->Photo }}" alt="{{ $content->Title }}">
                <p class="desc-service">
                    {{ $content->description }}
                </p>
                @auth
                    <p class="mt-6">
                        <a href="/edit/{{ $content->id }}"
                            class="relative inline-flex items-center px-4 py-2 text-sm text-gray-900 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 ">
                            تعديل </a>
                    </p>
                @endauth
            </div>
        @endforeach
    </div>
</x-layout>
