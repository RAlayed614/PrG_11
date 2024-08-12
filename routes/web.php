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

//---------------- stores content
Route::post('/create', function () {
    //dd(request()->all());
    request()->validate([
        'Title' => ['required'],
        'Photo' => ['required'],
        'type' => ['required']
    ]);

    $photo = 'photo' . uniqid() . '.' . request('Photo')->extension();
    request('Photo')->move(public_path('images'), $photo);

    content::create([
        'Title' => request('Title'),
        'Photo' => "images/$photo", //request('Photo'),
        'description' => request('description'),
        'type' => request('type')
    ]);

    return redirect('/');
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

//---------------- shows edit form page
Route::get('/edit/{id}', function ($id) {
    $content = content::find($id);
    return view('edit', ['content' => $content]);

    //return view('');
});

//---------------- update
Route::patch('/edit/{id}', function ($id) {
    request()->validate([
        'Title' => ['required'],
        'Photo' => ['required'],
        'type' => ['required']
    ]);
    //authorize
    $content = content::findOrFail($id);

    $photo = 'photo' . uniqid() . '.' . request('Photo')->extension();
    request('Photo')->move(public_path('images'), $photo);
    $content->update([
        'Title' => request('Title'),
        'Photo' => "images/$photo", //request('Photo'),
        'description' => request('description'),
        'type' => request('type')
    ]);
    if ($content['type']==0) {
        return redirect('/services');
    } else {
        return redirect('/works');
    };

    // $content = content::find($id);
    // if ('type'== 0)
    //     $path = "services" ;
    // if ('type'== 1)
    // $path = "works" ;
    // return view("/$path", ['content'=> $content]);
});

//---------------- delete
Route::delete('/edit/{id}', function ($id) {
    //authorize
    $content = content::findOrFail($id);
    $content->delete();
    if ($content['type']==0) {
        return redirect('/services');
    } else {
        return redirect('/works');
    };

    // $content = content::find($id);
    // if ('type'== 0)
    //     $path = "services" ;
    // if ('type'== 1)
    // $path = "works" ;
    // return view("/$path", ['content'=> $content]);
});

//---------------- shows تواصل معنا page
Route::get('/contact', function () {
    return view('contact');
});





//---------------- shows بانوراما القديمه
Route::get('/index', function () {
    return view('index');
});
