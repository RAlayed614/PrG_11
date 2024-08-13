<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

//---------------- shows بانوراما  page
Route::view('/', 'home');

//---------------- shows تسجيل جديد page
Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

//---------------- shows تسجيل الدخول/خروج page
Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy');
});

//---------------- shows create form page
Route::view('/create', 'create');

//---------------- controller
Route::controller(ContentController::class)->group(function () {
    //---------------- stores content
    Route::post('/create', 'create');
    //---------------- returns خدماتنا page with any contents that has the type 0
    Route::get('/services', 'service');
    //---------------- returns عملائنا page with any contents that has the type 1
    Route::get('/works', 'work');
    //---------------- shows edit form page
    Route::get('/edit/{content}', 'edit');
    //---------------- update
    Route::patch('/edit/{content}', 'update');
    //---------------- destroy
    Route::delete('/edit/{content}', 'destroy');

});

//---------------- shows من نحن page
Route::view('/about', 'about');

//---------------- shows تواصل معنا page
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'create');
    Route::post('/contact', 'store');
    Route::delete('/contact/{contact}', 'destroy');
});


//---------------- shows بانوراما القديمه
Route::get('/index', function () {
    return view('index');
});
