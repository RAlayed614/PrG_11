<?php

use Illuminate\Support\Facades\Route;
use App\Models\content;

//---------------- shows بانوراما  page
Route::get('/', function () {
    return view('home');
});

//---------------- shows create form page
Route::get('/create', function () {
    return view('create');
});

//---------------- shows من نحن page
Route::get('/about', function () {
    return view('about');
});

//---------------- returns خدماتنا page with any contents that has the type 0
Route::get('/services', function () {
    return view('services', [
        'contents' => content::all()->where('type', 0)

    ]);
});

//---------------- returns عملائنا page with any contents that has the type 1
Route::get('/works', function () {
    return view('works', [
        'contents' => content::all()->where('type', 1)
    ]);
});

//---------------- shows تواصل معنا page
Route::get('/contact', function () {
    return view('contact');
});





//---------------- shows بانوراما القديمه
Route::get('/index', function () {
    return view('index');
});
