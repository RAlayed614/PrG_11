<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript> --}}
    <link rel="icon" type="image/png" href="/images/logo.png">
    <title>بانوراما القصيم للبرمجة والتصميم</title>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets//js/index.js') }}"> -->
</head>

<body dir="rtl" class="h-full">
    <div class="min-h-full">




    <div class="header-main">
    <div class="container-logo">
      <img src="images\logo2.png" alt="" class="image-logo-header" />
    </div>
    <div class="container-links">
      <p><a href="/" :active="request()->is('/')" class="link-header">الرئيسية</a></p>
      <p><a href="/about" :active="request()->is('about')" class="link-header">من نحن </a></p>
      
        <a href="/services" :active="request()->is('services')" class="link-header">خدماتنا</a>
      
      <p><a href="/works" :active="request()->is('works')" class="link-header">عملائنا</a></p>
      <p><a href="/contact" :active="request()->is('contact')" class="link-header">تواصل معنا </a></p>
      
    </div>


    <!-- <div class="space-y-4 px-2 pb-3 pt-2 sm:px-3">
                        @guest
                            <x-nav href="/login" :active="request()->is('login')">تسجيل الدخول</x-nav>
                            <x-nav href="/register" :active="request()->is('register')">تسجيل جديد</x-nav>
                        @endguest
                        @auth
                            <x-nav href="/create" :active="request()->is('create')">إضافة عميل/خدمة جديدة</x-nav>
                            <form method="POST" action="/logout">
                                @csrf
                                <x-form-button class="bg-red-600 hover:bg-red-500"> خروج </x-form-button>
                            </form>
                        @endauth
                    </div> -->








    <div class="container-icon-menu">


                            @guest
                            <button class="btn-loginn">
                                <x-nav href="/register" :active="request()->is('register')">تسجيل جديد</x-nav></button>
                                <button class="btn-loginn">                                <x-nav href="/login" :active="request()->is('login')">تسجيل الدخول</x-nav>
                                </button>
                            @endguest
                            @auth
                                <x-nav href="/create" :active="request()->is('create')">إضافة عميل/خدمة جديدة</x-nav>
                                <form method="POST" action="/logout">
                                    @csrf
                                    <x-form-button class="bttn-form-send" style="padding:5px 30px"> خروج </x-form-button>
                                </form>
                            @endauth
                     

      <!-- <a href="" class="style-icon-media-header">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="style-icon-media-header">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="style-icon-media-header">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="style-icon-media-header">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="style-icon-media-header">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="style-icon-media-header">
        <i class="fab fa-github"></i>
      </a> -->

<div id="toogleMenu" >
<i class="fa-solid fa-bars"></i>
<div id="container-menu" class="a ">
<div class="contaner-links-menu">









<div class="right-container-links">
    
  <p class="link-header-menu"><a href="/" :active="request()->is('/')" class="link-headerw">الرئيسية</a></p>
  <p class="link-header-menu"><a href="/about" :active="request()->is('about')" class="link-headerw">من نحن </a></p>
  <p class="link-header-menu"><a href="/services" :active="request()->is('services')" class="link-headerw">خدماتنا</a></p>
  <p class="link-header-menu"><a href="/works" :active="request()->is('works')" class="link-headerw">عملائنا</a></p>
  <p class="link-header-menu"> <a href="/contact" :active="request()->is('contact')" class="link-headerw">تواصل معنا </a></p>

</div>



</div>
</div>
</div>



    </div>
  </div>








        <!-- <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">


                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="images\logo2.png" alt="بانوراما القصيم">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-center px-4">
                                <x-nav href="/" :active="request()->is('/')"> الرئيسية </x-nav>
                                <x-nav href="/about" :active="request()->is('about')"> من نحن </x-nav>
                                <x-nav href="/services" :active="request()->is('services')"> خدماتنا </x-nav>
                                <x-nav href="/works" :active="request()->is('works')"> عملائنا </x-nav>
                                <x-nav href="/contact" :active="request()->is('contact')"> تواصل معنا </x-nav>
                            </div>
                        </div>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-1 flex items-center md:ml-2">
                            @guest
                                <x-nav href="/register" :active="request()->is('register')">تسجيل جديد</x-nav>
                                <x-nav href="/login" :active="request()->is('login')">تسجيل الدخول</x-nav>
                            @endguest
                            @auth
                                <x-nav href="/create" :active="request()->is('create')">إضافة عميل/خدمة جديدة</x-nav>
                                <form method="POST" action="/logout">
                                    @csrf
                                    <x-form-button class="bg-red-600 hover:bg-red-500"> خروج </x-form-button>
                                </form>
                            @endauth
                        </div>
                    </div>

                    <div class="-mr-2 flex md:hidden">
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-4 px-2 pb-3 pt-2 sm:px-3">
                    <x-nav href="/" :active="request()->is('/')" class="block text-base"> الرئيسية </x-nav>
                    <x-nav href="/about" :active="request()->is('about')" class="block text-base"> من نحن </x-nav>
                    <x-nav href="/services" :active="request()->is('services')" class="block text-base"> خدماتنا </x-nav>
                    <x-nav href="/works" :active="request()->is('works')" class="block text-base"> عملائنا </x-nav>
                    <x-nav href="/contact" :active="request()->is('contact')" class="block text-base"> تواصل معنا </x-nav>
                </div>

                <div class="md:hidden">
                    <div class="space-y-4 px-2 pb-3 pt-2 sm:px-3">
                        @guest
                            <x-nav href="/login" :active="request()->is('login')">تسجيل الدخول</x-nav>
                            <x-nav href="/register" :active="request()->is('register')">تسجيل جديد</x-nav>
                        @endguest
                        @auth
                            <x-nav href="/create" :active="request()->is('create')">إضافة عميل/خدمة جديدة</x-nav>
                            <form method="POST" action="/logout">
                                @csrf
                                <x-form-button class="bg-red-600 hover:bg-red-500"> خروج </x-form-button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </nav> -->



        <!-- slotted header -->
        <!-- <header class="bg-white shadow ">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center space-x-4 justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900"> {{ $heading }} </h1>
            </div>
        </header> -->

        <!-- slotted content -->
        <main>
            <div >
            <!-- <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8"> -->
                {{ $slot }}
            </div>
            <!-- </div> -->
        </main>

    </div>

</body>
<script src="{{asset('assets/js/index.js')}}"></script>
</html>
