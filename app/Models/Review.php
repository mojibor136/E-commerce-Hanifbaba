<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    use HasFactory;

    protected $fillable = [
        'orderId',
        'productId',
        'title',
        'rating',
        'image'
    ];

    public function product() {
        return $this->belongsTo( Product::class, 'productId', 'id' );
    }
}
