<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    Protected $fillable = 
    ['product_name', 'category_id', 'brand_id', 'availability', 'old_price', 'new_price', 'color_family', 'product_img', 'hot_selling', 'description', 'status'];
 

		public function LinkProductCategory()
		    {
		        return $this->belongsTo(Product_Category::class, 'category_id', 'id');
		    }

	    public function LinkProductBrand()
	    {
	        return $this->belongsTo(Brand::class, 'brand_id', 'id');
	    }
}
