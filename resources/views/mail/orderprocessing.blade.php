<!DOCTYPE html>
<html>

<head>
    <title>Order Processing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            color: #333333;
        }

        p {
            color: #555555;
            line-height: 1.6;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background-color: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #888888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Order Processing</h1>
        <p>Dear {{ $customerName }},</p>
        <p>We are pleased to inform you that your order is currently being processed. Here are the details of your
            order:</p>
        <ul>
            <li><strong>Order ID:</strong> {{ $orderId->id }}</li>
            <li><strong>Total Amount:</strong> DKK {{ $orderId->payment->amount }}</li>
        </ul>
        <p>We will update you once your order has been shipped. If you have any questions or need further assistance,
            please feel free to contact us at <strong>(+45) 7142 1852</strong>.</p>
        <p>Thank you for choosing our store. We appreciate your business and look forward to serving you again.</p>
        <p>Best regards,</p>
        <p>Beauty by Samanta</p>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Beauty by Samanta . All rights reserved.</p>
        </div>
    </div>
</body>

</html>
