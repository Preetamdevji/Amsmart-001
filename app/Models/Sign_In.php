<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign_In extends Model
{
    use HasFactory;

    protected $fillable = [
        'email','password'
    ];

    // Define a one-to-one relationship with the Sign_up model
    public function signUp()
    {
        return $this->belongsTo(Sign_up::class,'email','email');
    }
}
