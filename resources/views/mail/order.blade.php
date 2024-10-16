<!DOCTYPE html>
<html>

<head>
    <title>Order Confirmation</title>
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
        <h1>Order Confirmation</h1>
        <p>Dear {{ $shipping->fullName }},</p>
        <p>Thank you for your order! We are delighted to confirm your purchase. Here are the details of your order:</p>
        <div>
            <table class="table">
                <tr>
                    <th>OrderId</th>
                    <th>Total Ammount</th>
                </tr>
                <tr>
                    <td>ID {{ $order->id }}</td>
                    <td>BDT {{ $payment->amount }}</td>
                </tr>
            </table>
        </div>
        <p>We will notify you as soon as your order is shipped. If you have any questions or need further assistance,
            please feel free to contact us at <strong>01880-117714</strong>.</p>
        <p>Thank you for choosing our store. We appreciate your business and look forward to serving you again.</p>
        <p>Best regards,</p>
        <p>Hanifbaba.com</p>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Hanifbaba.com . All rights reserved.</p>
        </div>
    </div>
</body>

</html>
