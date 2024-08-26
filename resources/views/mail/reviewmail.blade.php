<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Customer Review Request</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 24px;
            color: #333333;
        }

        .product-info {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .product-info img {
            max-width: 80px;
            border-radius: 5px;
        }

        .product-info table {
            width: 100%;
            margin-bottom: 0;
        }

        .product-info td {
            vertical-align: middle;
            padding: 8px;
        }

        .product-info .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            font-size: 14px;
            font-weight: bold;
        }

        .product-info .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #666666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Customer Review Request</h1>
        </div>

        <p>Hello <strong>{{ $customerName }}</strong>,</p>

        <p>Thank you for your recent purchase with us. We hope you are enjoying your products!</p>

        <p>We would love to hear your feedback. Please take a moment to review the products you purchased. Your opinion
            matters to us!</p>

        <div class="product-info">
            <table>
                <tr>
                    <td>
                        <p>Product Name: {{ $product->product_name }}</p>
                        <p>Order ID: #{{ $orderId }}</p>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('review', ['orderId' => $orderId, 'productId' => $product->id]) }}">Leave a
                            Review</a>
                    </td>
                </tr>
            </table>
        </div>

        <p>If you have any questions or concerns, please don't hesitate to contact us. Thank you for being a valued
            customer!</p>

        <p>Sincerely,<br>The Hanifbaba.com Team</p>

        <div class="footer">
            <p>&copy; 2024 Hanifbaba.com. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
