<x-layout>
    <x-slot:heading>
        تسجيل الدخول
    </x-slot:heading>

    <!--
        This example requires some changes to your config:
        ```
        // tailwind.config.js
        module.exports = {
        // ...
        plugins: [
        // ...
        require('@tailwindcss/forms'),
        ],
        }
        ```
    -->
    <div class="container-contact-us container">
    <form method="POST" action="/login" class="form-contact-us">
        @csrf

        <div class="fields">
            <!-- <div class="border-b border-gray-900/10 pb-12"> -->
                <div class="field half container-field">
                    <!-- <div class="sm:col-span-4"> -->
                        <x-form-label for="email">البريد الالكتروني</x-form-label>
                        <!-- <div class="mt-2"> -->
                            <x-form-input type="email" name="email" id="email" :value="old('email')" required />
                            <x-form-error name="email" />
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
                <div class="field half container-field">
                    <!-- <div class="sm:col-span-4"> -->
                        <x-form-label for="password">كلمة المرور</x-form-label>
                        <!-- <div class="mt-2"> -->
                            <x-form-input type="password" name="password" id="password" required />
                            <x-form-error name="password" />
                        <!-- </div>
                    </div> -->
                </div>
            <!-- </div> -->
        </div>

        <div class="container-btns" style="margin-top:3rem">
            <x-form-button> دخول </x-form-button>
            <a href="/" class="bttn-form-send"> إلغاء </a>
        </div>
    </form>
    </div>

</x-layout>
