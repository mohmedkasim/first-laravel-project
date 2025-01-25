<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

$contacts = [
    [
        'id' => '1',
        'name' => 'Mohamed',
        'phone' => '092######',
        'email' => '@gmail.com',
    ],
    [
        'id' => '2',
        'name' => 'Ahmed',
        'phone' => 'here is the phone number',
        'email' => 'here is the email',
    ],
    [
        'id' => '3',
        'name' => 'Ali',
        'phone' => 'here is the phone number',
        'email' => 'here is the email',
    ],
];

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello world',
        'name' => 'My name is Mohamed',
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () use ($contacts) {
    return view('contact', [
        'data' =>  $contacts,
    ]);
});

Route::get('/contact/{id}', function ($id) use ($contacts) {
    // dd($id);
    $data = $contacts;

    // \Illuminate\Support\Arr::first($data, function ($item) use ($id){
    //     return $item['id'] == $id;
    // });

    $contact = Arr::first($data, fn ($item) => $item['id'] == $id);
    // dd($contact);

    return view(view: 'cont',data: ['contactv' => $contact]);
});

Route::get('/meet-team', function () {
    return view('team');
});
