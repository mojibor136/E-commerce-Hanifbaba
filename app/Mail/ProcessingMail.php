<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProcessingMail extends Mailable {
    use Queueable, SerializesModels;

    public $customerName;
    public $orderId;

    public function __construct( $customerName, $orderId ) {
        $this->customerName = $customerName;
        $this->orderId = $orderId;
    }

    public function build() {
        return $this->view( 'mail.orderprocessing' )
        ->with( [
            'customerName' => $this->customerName,
            'orderId' => $this->orderId,
        ] );
    }
}
