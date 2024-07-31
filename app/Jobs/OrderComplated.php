<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderComplatedMail;
use App\Mail\ReviewMail;

class OrderComplated implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $customerEmail;
    protected $customerName;
    protected $orderId;
    protected $products;

    public function __construct( $customerEmail, $customerName, $orderId, $products ) {
        $this->customerEmail = $customerEmail;
        $this->customerName = $customerName;
        $this->orderId = $orderId;
        $this->products = $products;
    }

    public function handle() {
        foreach ( $this->products as $product ) {
            Mail::to( $this->customerEmail )->send( new ReviewMail( $this->customerName, $this->orderId, $product ) );
        }
    }
}
