@extends('admin.layout.tempalate')
@section('content')
    <style>
        .main-content .content-ul {
            right: 0px;
        }
    </style>
    <div class="all-product">
        <div class="table-container">
            <table class="table">
                <div class="card-header d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">ALL PRODUCT</h5>
                    <small class="text-muted float-end">
                        <a href="{{ route('addproduct') }}" class="btn btn-primary">Add Data</a>
                    </small>
                </div>
                @if (session()->has('massage'))
                    <li class="text-success mb-2">{{ session()->get('massage') }}</li>
                @endif
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
                            <td>{{ $product->id }}</td>
                            <td>
                                <img src="{{ asset('assets/ProductImg/'.$product->product_img) }}" alt="" width="45" height="45">
                            </td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->regular_price }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->product_quantity }}</td>
                            <td>{{ $product->product_category_name }}</td>
                            <td>
                                <a href="{{route('deleteproduct', $product->id)}}" class="btn btn-danger"><i class="ri-close-line"></i></a>
                                <a href="" class="btn btn-success"><i class="ri-edit-2-fill"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
