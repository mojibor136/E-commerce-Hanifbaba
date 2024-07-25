<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model {
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'product_price',
        'quantity',
        'product_img',
    ];

    public function product() {
        return $this->belongsTo( Product::class, 'product_id' );
    }
}
