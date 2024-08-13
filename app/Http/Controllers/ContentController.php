<?php

namespace App\Http\Controllers;
use App\Models\content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    // '/create'
    public function create(){
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
        if (request('type') == 0){
            return redirect('/services');
        } else {
            return redirect('/works');
        };
    }

    // '/services'
    public function service(){
        return view('services', [
            'contents' => content::all()->where('type', 0)
        ]);
    }

    // '/works'
    public function work(){
        return view('works', [
            'contents' => content::all()->where('type', 1)
        ]);
    }

    // '/edit/{content}'
    public function edit(content $content){
        return view('edit', ['content' => $content]);
    }
    
    // '/edit/{content}'
    public function update(content $content){
    //authorize

    request()->validate([
        'Title' => ['required'],
        'Photo' => ['required'],
        'type' => ['required']
    ]);
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
    }

    public function destroy(content $content){
    //authorize

    $content->delete();
    if ($content['type']==0) {
        return redirect('/services');
    } else {
        return redirect('/works');
    };
    }

}
