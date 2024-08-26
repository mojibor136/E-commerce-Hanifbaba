<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;
// Product model import

class ReviewMail extends Mailable {
    use Queueable, SerializesModels;

    public $customerName;
    public $orderId;
    public $product;

    public function __construct( $customerName, $orderId, Product $product ) {
        $this->customerName = $customerName;
        $this->orderId = $orderId;
        $this->product = $product;
    }

    public function build() {
        return $this->view( 'mail.reviewmail' )
        ->subject( 'Product Review Request' )
        ->with( [
            'customerName' => $this->customerName,
            'orderId' => $this->orderId,
            'product' => $this->product,
        ] );
    }

}
