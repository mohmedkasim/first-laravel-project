<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model {
    use HasFactory;
    
    protected $table = "contact_listings";

    // for security reason [Mass assigned] to update through website it required for fillable fields to do that like(name, phone, email), else will be blocked
    protected $fillable = [
        'name',
        'phone',
        'email',
    ];
}