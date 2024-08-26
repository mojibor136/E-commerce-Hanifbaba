@extends('admin.dashboard')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <style>
        .main {
            grid-template-columns: 1fr;
        }

        .all-product-container {
            background: #fff;
            padding: 30px 15px;
            width: 100%;
            overflow: auto;
            display: flex;
            flex-direction: column;
        }

        .product-header {
            text-transform: uppercase;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            padding: 10px 0;
        }

        .status-btn {
            padding: 3px 6px !important;
            font-size: 14px !important;
            border: none;
            border-radius: 3px;
        }

        .table> :not(caption)>*>* {
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            vertical-align: middle;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .table-wrapper {
            white-space: nowrap;
        }

        .table {
            width: 100%;
        }

        tr .status a {
            text-transform: capitalize;
            text-decoration: none;
        }

        tr .button a {
            text-decoration: none;
            font-size: 16px;
            color: #ff0000;
            margin: 0 2px;
        }

        .status-pending {
            background-color: #ffc107;
        }

        .status-processing {
            background-color: #17a2b8;
        }

        .status-completed {
            background-color: #28a745;
        }

        .status-cancelled {
            background-color: #dc3545;
        }

        .dropdown-item {
            font-size: 14px;
        }

        .main .card h3 {
            font-size: 15px;
        }

        @media (max-width: 768px) {
            .all-product-container {
                background: transparent;
                padding: 0px 5px;

            }

            .main .card {
                overflow: auto;
            }
        }
    </style>
    @section('content')
        <div class="card">
            <div class="content">
                <div class="icons">
                    <h1>{{ $orderCount }}</h1>
                    <i class="ri-shopping-bag-line"></i>
                </div>
                <h3>TOTAL ORDER</h3>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="icons">
                    <h1>{{ $productCount }}</h1>
                    <i class="ri-file-list-line"></i>
                </div>
                <h3>TOTAL PRODUCTS</h3>
            </div>
        </div>
        <div class="card">
            <div class="all-product-container">
                <div class="product-header">
                    <span>All Orders</span>
                </div>
                @if (session()->has('success'))
                    <li class="alert alert-success">{{ session()->get('success') }}</li>
                @endif
                <div class="all-product-content">
                    <div class="product-content">
                        <div class="table-wrapper">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Payment Status</th>
                                    <th>Total Price</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->shipping->name }}</td>
                                        <td>{{ $order->payment->paymentStatus }}</td>
                                        <td>{{ $order->payment->amount }}</td>
                                        <td>{{ \Carbon\Carbon::parse($order->payment->paymentDate)->format('Y-m-d') }}</td>
                                        <td>
                                            @if ($order->status == 'pending')
                                                <span class="btn btn-warning status-btn status-pending">Pending</span>
                                            @elseif ($order->status == 'processing')
                                                <span class="btn btn-info status-btn status-processing">Processing</span>
                                            @elseif ($order->status == 'completed')
                                                <span class="btn btn-success status-btn status-completed">Completed</span>
                                            @elseif ($order->status == 'cancelled')
                                                <span class="btn btn-danger status-btn status-cancelled">Cancelled</span>
                                            @endif
                                        </td>
                                        <td style="text-align: center">
                                            <div class="dropdown">
                                                <i class="ri-more-2-fill" id="dropdownMenuButton{{ $order->id }}"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="cursor: pointer;"></i>
                                                <ul class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton{{ $order->id }}">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            onclick="viewOrder({{ $order->id }})">Order View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            onclick="deleteOrder({{ $order->id }}, 'deleteOrder')">Delete
                                                            Order</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            onclick="processing({{ $order->id }}, 'processing')">processing</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            onclick="cancelled({{ $order->id }}, 'cancelled')">cancelled</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"
                                                            onclick="completed({{ $order->id }}, 'completed')">completed</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="d-flex justify-content-end text-end">
                                {{ $orders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            let currentOrderId;

            function viewOrder(orderId) {
                const url = `{{ url('/admin/view/order') }}/${orderId}`;
                window.location.href = url;
            }

            function deleteOrder(orderId) {
                const url = `{{ url('/admin/delete/order') }}/${orderId}`;
                window.location.href = url;
            }

            function processing(orderId) {
                const url = `{{ url('/admin/processing/order') }}/${orderId}`;
                window.location.href = url;
            }

            function completed(orderId) {
                const url = `{{ url('/admin/completed/order') }}/${orderId}`;
                window.location.href = url;
            }

            function cancelled(orderId) {
                const url = `{{ url('/admin/cancelled/order') }}/${orderId}`;
                window.location.href = url;
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
