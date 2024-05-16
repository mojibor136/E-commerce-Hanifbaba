@extends('admin.layout.tempalate')
@section('content')
    <style>
        .main-content .content-ul {
            right: 0px;
        }
    </style>
    <div class="table-container">
        <table class="table">
            <div class="card-header d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">ALL SUBCATEGORY</h5>
                <small class="text-muted float-end">
                    <a href="{{ route('addsubcategory') }}" class="btn btn-primary">Add Data</a>
                </small>
            </div>
            @if (session()->has('massage'))
                <li class="text-success mb-2">{{ session()->get('massage') }}</li>
            @endif
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SUBCATEGORY NAME</th>
                    <th>SLUG</th>
                    <th>PRODUCT COUNT</th>
                    <th>CATEGORY NAME</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($adminSubCategories as $adminSubCategory)
                    <tr>
                        <td>{{ $adminSubCategory->id }}</td>
                        <td>{{ $adminSubCategory->subcategory_name }}</td>
                        <td>{{ $adminSubCategory->slug }}</td>
                        <td>{{ $adminSubCategory->product_count }}</td>
                        <td>{{ $adminSubCategory->category_name }}</td>
                        <td>
                            <a href="{{ route('deletesubcategory', $adminSubCategory->id) }}" class="btn btn-danger"><i
                                    class="ri-close-line"></i></a>
                            <a href="{{ route('editsubcategory', $adminSubCategory->id) }}" class="btn btn-success"><i
                                    class="ri-edit-2-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-container mt-3 mb-3">
            @if ($adminSubCategories->count() > 0)
                {{ $adminSubCategories->links() }}
            @endif
        </div>
    </div>
@endsection
