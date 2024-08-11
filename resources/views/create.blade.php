<x-layout>
    <x-slot:heading>
        املئ البيانات:
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

    <form enctype="multipart/form-data" method="POST" action="/create">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="Title" class="block text-sm font-medium leading-6 text-gray-900">العنوان</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="Title" id="Title" autocomplete="Title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="البرمجة من الصفر">
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">النص</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                placeholder="نقوم بتحويل فكرتك إلى موقع إلكتروني او تطبيق جوال مع سكريبت مبرمج من الصفر."
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600"></p>
                    </div>

                    <div class="col-span-full">
                        <label for="Photo" class="block text-sm font-medium leading-6 text-gray-900">الصورة</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">

                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="Photo"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>اضغط هنا لرفع الصورة</span>
                                        <input id="Photo" name="Photo" type="file" class="sr-only">
                                    </label>
                                </div>
                            </div>
                        </div>
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
                                    class="form-check-input h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="type0"
                                    class="form-check-label block text-sm font-medium leading-6 text-gray-900">خدماتنا</label>
                            </div>
                            <div class="form-check flex items-center gap-x-3">
                                <input id="type1" name="type" type="radio" value="1"
                                    class="form-check-input h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="type1"
                                    class="form-check-label block text-sm font-medium leading-6 text-gray-900">عملائنا</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">إلغاء</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">حفظ</button>
        </div>
    </form>


</x-layout>
