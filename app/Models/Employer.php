<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    
    protected $table = "employer_listings";

    protected $fillable = [
        'first-name',
        'last-name',
        'address'
    ];
}
