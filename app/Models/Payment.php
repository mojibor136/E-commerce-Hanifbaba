<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model {
    use HasFactory;
    protected $fillable = [
        'userId',
        'paymentMethod',
        'amount',
        'currency',
        'senderNumber',
        'transactionId',
        'paymentStatus',
        'paymentDate',
    ];

    public function user() {
        return $this->belongsTo( User::class, 'user_id' );
    }

    public function orders() {
        return $this->hasMany( Order::class, 'payment_id' );
    }
}
