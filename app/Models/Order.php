<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'shipping_id',
        'payment_id',
        'status',
    ];

    public function shipping() {
        return $this->belongsTo(Shipping::class, 'shipping_id');
    }

    public function payment() {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function customer() {
        return $this->belongsTo(User::class, 'customer_id');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function ($order) {
            $order->shipping()->delete();
            $order->payment()->delete();
        });
    }
}
