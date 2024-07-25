<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use App\Mail\AdminMail;

class Admin implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $order;
    public $shipping;
    public $payment;
    public $recipientEmail;

    public function __construct( $order, $shipping, $payment, $recipientEmail ) {
        $this->order = $order;
        $this->shipping = $shipping;
        $this->payment = $payment;
        $this->recipientEmail = $recipientEmail;
    }

    public function handle() {
        Mail::to( $this->shipping->customer->email )->send( new OrderMail( $this->order, $this->shipping, $this->payment ) );
        Mail::to( $this->recipientEmail )->send( new AdminMail( $this->order, $this->shipping, $this->payment ) );
    }
}
