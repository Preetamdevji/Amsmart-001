<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    Protected $fillable = 
    ['product_name','category_id','brand_id','availability','old_price','new_price','color_family','product_img','description','status'];
 
}
