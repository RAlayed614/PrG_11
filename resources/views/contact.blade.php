<x-layout>
    <x-slot:heading>
        اترك لنا رسالتك
    </x-slot:heading>

    @auth
        @if ($contacts->isEmpty())
            <h1> لا توجد رسائل </h1>
        @else
            <div class="space-y-4 device-width">
                @foreach ($contacts as $contact)
                    <div class="block border px-4 py-6">
                        <p class="py-4">
                            {{ $contact->email }} /
                            {{ $contact->name }} : <br>
                            {{ $contact->message }}
                        </p>
                        <form method="POST" action="/contact/{{ $contact->id }}">
                            @csrf
                            @method('DELETE')
                            <div class="flex items-center gap-x-6">
                                <div>
                                    <x-form-button class="bg-red-600 hover:bg-red-500"> حذف </x-form-button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    @endauth

    <article id="contact">

        <form method="POST" action="/contact">
            @csrf

            @guest
                <div class="fields">
                    <div class="field half">
                        <x-form-label for="name">الاسم</x-form-label>
                        <x-form-input type="text" name="name" id="name" required />
                        <x-form-error name="name" />
                    </div>
                    <div class="field half">
                        <x-form-label for="email">البريد الالكتروني</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" required />
                            <x-form-error name="email" />
                        </div>
                    </div>
                    <div class="field">
                        <x-form-label for="message">الرسالة</x-form-label>
                        <div>
                            <textarea name="message" id="message" rows="4"
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required></textarea>
                        </div>

                    </div>
                </div>
                <div class="mt-6 flex items-center justify-begaining gap-x-6">
                    <x-form-button> ارسال </x-form-button>
                    <a href="/" class="px-3 text-sm font-semibold leading-6 text-gray-900">إلغاء</a>
                </div>
            @endguest
        </form>

        <ul class="icons">
            <li><a href="https://x.com/Panorama_Q" class="icon brands fa-twitter"><span
                        class="label">Twitter</span></a></li>
            <li><a href="https://facebook.com/palqassim" class="icon brands fa-facebook-f"><span
                        class="label">Facebook</span></a></li>
            <li><a href="https://api.whatsapp.com/send/?phone=9660553172552" class="icon brands fa-whatsapp"><span
                        class="label">Whatsapp</span></a></li>
            <li><a href="https://snapchat.com/t/mh05HGb6" class="icon brands fa-snapchat"><span
                        class="label">Snapchat</span></a></li>
            <li><a href="https://tiktok.com/@panorama_alqassim" class="icon brands fa-tiktok"><span
                        class="label">Tiktok</span></a></li>
            <li><a href="https://instagram.com/palqassim/" class="icon brands fa-instagram"><span
                        class="label">Instagram</span></a></li>
        </ul>
    </article>

</x-layout>
