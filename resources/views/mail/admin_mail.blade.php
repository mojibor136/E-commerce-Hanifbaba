<!DOCTYPE html>
<html>

<head>
    <title>New Order Notification</title>
</head>

<body>
    <h1>New Order Notification</h1>
    <p>A new order has been placed. Here are the details:</p>

    <h2>Shipping Details</h2>
    <ul>
        <li>Name: {{ $shipping->name }}</li>
        <li>Email: {{ $shipping->email }}</li>
        <li>Phone: {{ $shipping->number }}</li>
        <li>Address: {{ $shipping->address }}, {{ $shipping->city }}, {{ $shipping->country }} - {{ $shipping->postal }}
        </li>
    </ul>

    <h2>Order Details</h2>
    <ul>
        <li>Order ID: {{ $order->id }}</li>
        <li>Order Status: {{ $order->status }}</li>
    </ul>

    <h2>Payment Details</h2>
    <ul>
        <li>Payment Method: {{ $payment->paymentMethod }}</li>
        <li>Payment Status: {{ $payment->paymentStatus }}</li>
        <li>SenderNumber: {{ $payment->senderNumber }}</li>
        <li>Amount: {{ $payment->amount }} {{ $payment->currency }}</li>
    </ul>
</body>

</html>
