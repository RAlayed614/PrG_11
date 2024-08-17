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

    <form enctype="multipart/form-data" method="POST" action="/create" class="form-create">
        @csrf

        <div>
            <div >
                <div >
                    <div>
                        <x-form-label for="Title">العنوان</x-form-label>
                        <div >
                            <x-form-input type="text" name="Title" id="Title" placeholder="البرمجة من الصفر"
                                required />
                            <x-form-error name="Title" />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <x-form-label for="description">النص</x-form-label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                placeholder="نقوم بتحويل فكرتك إلى موقع إلكتروني او تطبيق جوال مع سكريبت مبرمج من الصفر."
                                class="message-content"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600"></p>
                    </div>

                    <div class="col-span-full">
                        <x-form-label for="Photo">الصورة</x-form-label>
                        <div
                        >
                            <div class="text-center">
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="Photo"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>اضغط هنا لرفع الصورة</span>
                                        <input id="Photo" name="Photo" type="file" class="sr-only upload-image" required>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <x-form-error name="Photo" />
                    </div>
                </div>
            </div>

            <div >
                <div >
                    <fieldset>
                        <legend class="choose-type"> اختر النوع </legend>
                        <div >
                            <div class="container-option">
                                <input id="type0" name="type" type="radio" value="0"
                                    class="input-radio-style"
                                    required>
                                <x-form-label for="type0" class="form-check-label">خدماتنا</x-form-label>
                            </div>
                            <div class="container-option">
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

        <div class="container-btns container-btns-create-page">
            <x-form-button> حفظ </x-form-button>
            <a href="/" class="style-btn-send">إلغاء</a>
        </div>
    </form>

</x-layout>
