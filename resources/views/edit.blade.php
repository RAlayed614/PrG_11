<x-layout>
    <x-slot:heading>
        عدل بيانات {{ $content->Title }}
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

    <form enctype="multipart/form-data" method="POST" action="/edit/{{ $content->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="Title">العنوان</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="Title" id="Title" placeholder="البرمجة من الصفر"
                                value="{{ $content->Title }}" required />
                            <x-form-error name="Title" />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <x-form-label for="description">النص</x-form-label>
                        <div class="mt-2">
                            <input value="{{ $content->description }}"
                                placeholder="نقوم بتحويل فكرتك إلى موقع إلكتروني او تطبيق جوال مع سكريبت مبرمج من الصفر."
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            {{-- <textarea id="description" name="description" rows="3" value="{{ $content->description }}"
                                placeholder="نقوم بتحويل فكرتك إلى موقع إلكتروني او تطبيق جوال مع سكريبت مبرمج من الصفر."
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea> --}}
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600"></p>
                    </div>

                    <div class="col-span-full">
                        <x-form-label for="Photo">الصورة</x-form-label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">

                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="Photo"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>اضغط هنا لرفع الصورة</span>
                                        <input id="Photo" name="Photo" type="file" class="sr-only"
                                            value="{{ $content->Photo }}" required>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <x-form-error name="Photo" />
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <legend class="text-sm font-semibold leading-6 text-gray-900"> اختر النوع </legend>
                        <div class="mt-6 space-y-6">
                            <div class="form-check flex items-center gap-x-3">
                                <input id="type0" name="type" type="radio" value="0"
                                    class="form-check-input h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                    required>
                                <x-form-label for="type0" class="form-check-label">خدماتنا</x-form-label>
                            </div>
                            <div class="form-check flex items-center gap-x-3">
                                <input id="type1" name="type" type="radio" value="1"
                                    class="form-check-input h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                    required>
                                <x-form-label for="type1" class="form-check-label">عملائنا</x-form-label>
                            </div>
                        </div>
                        <x-form-error name="type" />
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <x-form-button> حفظ التعديل </x-form-button>
                <a href="/" class="px-3 text-sm font-semibold leading-6 text-gray-900">إلغاء</a>
            </div>
            <div class="flex items-center gap-x-6">
                <div>
                    <x-form-button form="delete-form" class="bg-red-600 hover:bg-red-500"> حذف نهائي </x-form-button>
                </div>
            </div>
        </div>
    </form>
    <form method="POST" action="/edit/{{ $content->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
