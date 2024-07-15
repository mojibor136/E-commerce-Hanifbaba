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
}
