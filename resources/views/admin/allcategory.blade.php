@extends('admin.layout.tempalate')
@section('content')
    <style>
        .main-content .content-ul {
            right: 0px;
        }
    </style>
    <div class="all-category">
        <div class="table-container">
            <table class="table">
                <div class="card-header d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">ALL CATEGORY</h5>
                    <small class="text-muted float-end">
                        <a href="{{ route('addcategory') }}" class="btn btn-primary">Add Data</a>
                    </small>
                </div>
                @if (session()->has('massage'))
                    <li class="text-success mb-2">{{ session()->get('massage') }}</li>
                @endif
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CATEGORY NAME</th>
                        <th>CATEGORY IMAGE</th>
                        <th>SLUG</th>
                        <th>PRODUCT COUNT</th>
                        <th>SUBCATEGORY COUNT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adminCategoires as $adminCategoires)
                        <tr>
                            <td>{{ $adminCategoires->id }}</td>
                            <td>{{ $adminCategoires->category_name }}</td>
                            <td>
                                <img src="{{ asset('assets/CategoryImg/' . $adminCategoires->category_img) }}" alt=""
                                    width="45" height="45">
                            </td>
                            <td>{{ $adminCategoires->slug }}</td>
                            <td>{{ $adminCategoires->product_count }}</td>
                            <td>{{ $adminCategoires->subcategory_count }}</td>
                            <td>
                                <a href="{{ route('deletecategory', $adminCategoires->id) }}" class="btn btn-danger"><i
                                        class="ri-close-line"></i></a>
                                <a href="{{ route('editcategory', $adminCategoires->id) }}" class="btn btn-success"><i
                                        class="ri-edit-2-fill"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
