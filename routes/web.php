<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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
        'data' => [
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
        ],
    ]);
});

Route::get('/contact/{id}', function ($id)  {
    // dd($id);
    $data = [
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
