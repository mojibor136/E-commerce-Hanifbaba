<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_desc',
        'product_img',
        'product_price',
        'regular_price',
        'product_quantity',
        'product_brand',
        'product_category_id',
        'product_category_name',
        'product_subcategory_id',
        'product_subcategory_name',      
    ];
}
