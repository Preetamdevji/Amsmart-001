<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable; // Import the Authenticatable trait
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign_up extends Model implements AuthenticatableContract 
{
    use HasFactory,  Authenticatable;

    protected $fillable = [
        'name', 'last_name','email', 'password','mobile','country','city','address'
    ];


     // Define a one-to-one relationship with the Sign_In model
     public function signIn()
     {
         return $this->hasOne(Sign_In::class, 'email', 'email');
     }

    // Required method from Authenticatable interface
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    // Required method from Authenticatable interface
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
}
