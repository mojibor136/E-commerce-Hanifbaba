@extends('admin.layout.tempalate')
@section('content')
    <div class="add-category">
        <div class="card-header d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">ADD SUBCATEGORY</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        @if (session()->has('massage'))
            <li class="text-success mb-2">{{ session()->get('massage') }}</li>
        @endif
        <div class="card-body">
            <form action="{{ route('storesubcategory') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">SELECT CATEGORY</label>
                    <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                        <option selected class="font">SELECT CATEGORY</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->slug }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">ADD SUBCATEGORY</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="subcategory_name"
                        value="" placeholder="ADD CATEGORY" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add SubCategory</button>
            </form>
        </div>
    </div>
@endsection
