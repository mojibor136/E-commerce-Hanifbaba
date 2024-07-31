<!DOCTYPE html>
<html>

<head>
    <title>Product Review Request</title>
</head>

<body>
    <h1>Hello, {{ $customerName }}</h1>
    <p>Thank you for your order with ID {{ $orderId }}. We would appreciate it if you could take a moment to review
        the product: {{ $product->name }}.</p>
    <p>Thank you!</p>
</body>

</html>
