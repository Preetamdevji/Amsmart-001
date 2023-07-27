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
}
