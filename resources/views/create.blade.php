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
    <form>
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                {{-- <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful
                    what you share.</p> --}}

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="Title" class="block text-sm font-medium leading-6 text-gray-900">العنوان</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                                <input type="text" name="Title" id="Title" autocomplete="Title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="البرمجة من الصفر">
                            </div>
                        </div>
                    </div>


                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">النص</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3" placeholder="نقوم بتحويل فكرتك إلى موقع إلكتروني او تطبيق جوال مع سكريبت مبرمج من الصفر."
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600"></p>
                    </div>


                    <div class="col-span-full">
                        <label for="Photo" class="block text-sm font-medium leading-6 text-gray-900">الصورة</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">

                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="Photo" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>اضغط هنا لرفع الصورة</span>
                                        <input id="Photo" name="Photo" type="file" class="sr-only">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-900"> اختر النوع </label>
                        <div class="relative mt-2">
                            <button type="button"
                                class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm sm:leading-6"
                                aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                <span class="flex items-center">
                                    <span class="ml-3 block truncate">عملائنا \ خدماتنا</span>
                                </span>
                                <span
                                    class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>

                            <!--
                                Select popover, show/hide based on select state.

                                Entering: ""
                                From: ""
                                To: ""
                                Leaving: "transition ease-in duration-100"
                                From: "opacity-100"
                                To: "opacity-0"
                            -->

                            <ul class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                aria-activedescendant="listbox-option-3">
                                <!--
                                    Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
                                    Highlighted: "bg-indigo-600 text-white", Not Highlighted: "text-gray-900"
                                -->
                                <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900"
                                    id="listbox-option-0" role="option">
                                    <div class="flex items-center">
                                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                        <span class="ml-3 block truncate font-normal">خدماتنا</span>
                                    </div>

                                    <!--
                                        Checkmark, only display for selected option.
                                        Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                                    -->
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900"
                                    id="listbox-option-0" role="option">
                                    <div class="flex items-center">
                                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                        <span class="ml-3 block truncate font-normal">عملائنا</span>
                                    </div>

                                    <!--
                                        Checkmark, only display for selected option.
                                        Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                                    -->
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>


</x-layout>

{{--
    <article id="contact">
        <form method="post" action="#">
            <div class="fields">
                <div class="field half">
                    <label for="name">الاسم</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field half">
                    <label for="email">البريد الالكتروني</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">الرسالة</label>
                    <textarea name="message" id="message" rows="4"></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="ارسال" class="primary" /></li>
                <li><input type="reset" value="مسح" /></li>
            </ul>
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
 --}}
