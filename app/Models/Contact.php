<?php 

namespace App\Models;

use Illuminate\Support\Arr;
class Contact {
    public static function all(): array {
        return  [
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
    }

    /**
     * Get a contact by ID
     *
     * @param int $id Contact ID
     * @return array|null Contact data or null if not found
     */
    public static function find(int $id) : array 
    {
        return Arr::first(static::all(), fn($contact) => $contact['id'] == $id);
    
    }
}