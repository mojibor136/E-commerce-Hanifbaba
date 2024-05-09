
@extends('admin.layout.tempalate')
@section('content')
    <style>
        .main-content .content-ul{
            right: 0px;
        }
        .all-product {
            margin: 20px 0px;
            padding: 20px 0px;
        }
    </style>
    <div class="all-product">
        <div class="table-container">
            <table class="table">
                <div class="table-header">
                    <span>Product Page</span>
                </div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PRODUCT IMAGE</th>
                        <th>PRODUCT NAME</th>
                        <th>RAGULAR PRICE</th>
                        <th>PRODUCT PRICE</th>
                        <th>QUANTITY</th>
                        <th>CATEGORY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>
                            <img src="{{ asset('products/product1.png') }}" alt=""
                                width="40" height="40">
                        </td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->regular_price}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>{{$product->product_quantity}}</td>
                        <td>{{$product->product_category_name}}</td>
                        <td>
                            <a href="" class="btn btn-danger"><i class="ri-close-line"></i></a>
                            <a href="" class="btn btn-success"><i class="ri-edit-2-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
