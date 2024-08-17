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

    <div class="container-contact-us container">
<!-- <article id="contact"> -->

        <form method="POST" action="/contact" class="form-contact-us">
            @csrf

            @guest
                <div class="fields">


                    <div class="field half container-field">
                        <x-form-label for="name">الاسم</x-form-label>
                        <x-form-input type="text" name="name" id="name" required />
                        <x-form-error name="name" />
                    </div>


                    <div class="field half container-field">
                        <x-form-label for="email">البريد الالكتروني</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" required />
                            <x-form-error name="email" />
                        </div>
                    </div>



                    <div class="field container-field">
                        <x-form-label for="message">الرسالة</x-form-label>
                        <div>
                            <textarea name="message" id="message" rows="4" class="message-content" required></textarea>
                        </div>

                    </div>
                </div>



                <div class="container-btns">
                    <x-form-button> ارسال </x-form-button>
                    <button class="bttn-form-send">إلغاء</button>
                </div>
            @endguest
        </form>

        <div class="container-icons-sm">
        <a href="https://x.com/Panorama_Q" class="fa-brands fa-x-twitter sm-icon"></a>
        <a href="https://facebook.com/palqassim" class="fa-brands fa-facebook sm-icon"></a>
        <a href="https://api.whatsapp.com/send/?phone=9660553172552" class="fa-brands fa-square-whatsapp sm-icon"></a>
        <a href="https://snapchat.com/t/mh05HGb6" class="fa-brands fa-square-snapchat sm-icon"></a>
        <a href="https://tiktok.com/@panorama_alqassim" class="fa-brands fa-tiktok sm-icon"></a>
        <a href="https://instagram.com/palqassim/" class="fa-brands fa-instagram sm-icon"></a>
    </div>
      
    <!-- </article> -->
    </div>

    

</x-layout>