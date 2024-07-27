<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable {
    use Queueable, SerializesModels;
    public $order;
    public $shipping;
    public $payment;

    public function __construct( $order, $shipping, $payment ) {
        $this->order = $order;
        $this->shipping = $shipping;
        $this->payment = $payment;
    }

    public function build() {
        return $this->view( 'mail.order' )
        ->subject( 'Order Confirmation from Hanifbaba' );
    }
}
