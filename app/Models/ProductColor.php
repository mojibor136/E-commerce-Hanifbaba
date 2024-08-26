<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model {
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color_id',
        'product_color',
    ];

    public function product() {
        return $this->belongsTo( Product::class );
    }
}
