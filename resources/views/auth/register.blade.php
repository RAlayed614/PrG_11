<x-layout>
    <x-slot:heading>
        تسجيل جديد
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

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="name">الاسم</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="name" id="name" required />
                            <x-form-error name="name" />
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="email">البريد الالكتروني</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" required />
                            <x-form-error name="email" />
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="password">كلمة المرور</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" required />
                            <x-form-error name="password" />
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="password_confirmation">تأكيد كلمة المرور</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                required />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-begaining gap-x-6">
            <x-form-button> تسجيل </x-form-button>
            <a href="/" class="px-3 text-sm font-semibold leading-6 text-gray-900">إلغاء</a>
        </div>
    </form>

</x-layout>
