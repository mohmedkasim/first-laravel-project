<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Contact;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello world',
        'name' => 'My name is Mohamed',
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact', [
        'data' =>  Contact::all(),
    ]);
});

Route::get('/contact/{id}', function ($id) {
    // dd($id);
    $contact = Contact::find($id);

    // \Illuminate\Support\Arr::first($data, function ($item) use ($id){
    //     return $item['id'] == $id;
    // });

    // $contact = Arr::first($data, fn ($item) => $item['id'] == $id);
    // dd($contact);

    return view(view: 'cont',data: ['contactv' => $contact]);
});

Route::get('/meet-team', function () {
    return view('team');
});
