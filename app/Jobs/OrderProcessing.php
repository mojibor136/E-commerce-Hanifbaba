<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProcessingMail;

class OrderProcessing implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $customerEmail;
    public $customerName;
    public $orderId;

    public function __construct( $customerEmail, $customerName, $orderId ) {
        $this->customerEmail = $customerEmail;
        $this->customerName = $customerName;
        $this->orderId =  $orderId;
    }

    public function handle() {
        Mail::to( $this->customerEmail )->send( new ProcessingMail( $this->customerName, $this->orderId ) );
    }
}
