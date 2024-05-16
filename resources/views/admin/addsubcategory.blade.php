@extends('admin.layout.tempalate')
@section('content')
    <style>
        .add-subcategory {
            margin: 50px 100px;
            padding: 20px;
            background-color: #Fff;
            border-radius: 10px;
        }

        .form-control {
            text-transform: capitalize;
        }

        form label {
            text-transform: capitalize;
        }
    </style>
    <div class="add-subcategory">
        <div class="card-header d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">ADD SUBCATEGORY</h5>
            <small class="text-muted float-end"><a href="{{ route('allsubcategory') }}" style="text-decoration: none;"
                    class="text-success">View Data</a></small>
        </div>
        @if (session()->has('massage'))
            <li class="text-success mb-2">{{ session()->get('massage') }}</li>
        @endif
        <div class="card-body">
            <form action="{{ route('storesubcategory') }}" method="POST">
                @csrf
                <div class="mb-3">
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label" for="basic-default-fullname">Select Category</label>
                    <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                        <option selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->slug }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    @error('subcategory_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label mb-1" for="basic-default-fullname">add subcategory</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="subcategory_name"
                        value="" placeholder="add subcategory">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add Subcategory</button>
            </form>
        </div>
    </div>
@endsection
