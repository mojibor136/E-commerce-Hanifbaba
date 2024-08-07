<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model {
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'number',
        'address',
        'division',
        'city',
    ];

    public function customer() {
        return $this->belongsTo( User::class, 'customer_id' );
    }
}
