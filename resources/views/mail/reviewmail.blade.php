<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Customer Review Request</title>
    <style>
        /* Add your custom styles here */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .product-info {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .product-info img {
            max-width: 80px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="font-size: 24px; margin-bottom: 20px;">Customer Review Request</h1>

        <p>Hello {{ $customerName }},</p>

        <p>Thank you for your recent purchase with us. We hope you are enjoying your products!</p>

        <p>We would love to hear your feedback. Please take a moment to review the products you purchased. Your opinion
            matters to us!</p>

        <div class="product-info">
            <img src="{{ asset('ProductImg/' . $product->productImg) }}" alt="{{ $product->name }}">
            <div>
                <p>Product Name: {{ $product->productName }}</p>
                <p>Order ID: #{{ $orderId }}</p>
                <a href="{{ route('review', ['orderId' => $orderId, 'productId' => $product->id]) }}"
                    class="btn btn-success">Leave a Review</a>
            </div>
        </div>
        <p>If you have any questions or concerns, please don't hesitate to contact us. Thank you for being a valued
            customer!</p>

        <p>Sincerely,<br>The Beauty by Samanta Team</p>
    </div>
</body>

</html>
