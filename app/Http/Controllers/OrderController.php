<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Jobs\OrderComplated;
use App\Jobs\OrderCancelled;
use App\Jobs\OrderProcessing;

class OrderController extends Controller {
    public function AllOrder() {
        $orders = Order::with( [ 'shipping', 'payment.user' ] )
        ->orderBy( 'created_at', 'desc' )
        ->paginate( 10 );
        return view( 'admin.allorder', compact( 'orders' ) );
    }

    public function ViewOrder ( $orderId ) {
        $products = OrderDetails::where( 'order_id', $orderId )->get();
        $order = Order::with( [ 'shipping', 'payment.user' ] )->find( $orderId );
        return view( 'admin.vieworder', compact( 'products', 'order' ) );
    }

    public function DeleteOrder( $id ) {
        $order = Order::find( $id )->delete();
        return back()->with( 'success', 'Order  deleted successfully' );
    }

    public function processing( $id ) {
        $order = Order::find( $id );
        $order->update( [
            'status' => 'processing',
        ] );
        $orderId = $order;
        $customerEmail = $order->customer->email;
        $customerName = $order->customer->name;
        OrderProcessing::dispatch( $customerEmail, $customerName, $orderId );
        return back()->with( 'success', 'Order  processing successfully' );
    }

    public function cancelled( $id ) {
        $order = Order::find( $id );
        $order->update( [
            'status' => 'cancelled',
        ] );
        $orderId = $order;
        $customerEmail = $order->customer->email;
        $customerName = $order->customer->name;
        OrderCancelled::dispatch( $customerEmail, $customerName, $orderId );
        return back()->with( 'success', 'Order  cancelled successfully' );
    }

    public function completed( $id ) {
        $order = Order::find( $id );

        if ( !$order ) {
            return back()->with( 'error', 'Order not found.' );
        }

        $order->update( [
            'status' => 'completed',
        ] );

        $customerEmail = $order->customer->email;
        $customerName = $order->customer->name;

        $orderDetails = OrderDetails::where( 'order_id', $order->id )->get();
        $productIds = $orderDetails->pluck( 'productId' );
        $products = Product::whereIn( 'id', $productIds )->get();
        $orderId = $order->id;
        OrderComplated::dispatch( $customerEmail, $customerName, $orderId, $products );

        return back()->with( 'success', 'Order completed successfully.' );
    }
}
