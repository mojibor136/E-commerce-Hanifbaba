@extends('admin.layout.tempalate')
@section('content')
    <style>
        .add-subcategory {
            margin: 50px 100px;
            padding: 20px;
            background-color: #Fff;
            border-radius: 10px;
        }
    </style>
    <div class="add-subcategory">
        <div class="card-header d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">UPDATE SUBCATEGORY</h5>
            <small class="text-muted float-end"><a href="{{ route('allsubcategory') }}" style="text-decoration: none;"
                    class="text-success">View Data</a></small>
        </div>
        @if (session()->has('massage'))
            <li class="text-success mb-2">{{ session()->get('massage') }}</li>
        @endif
        <div class="card-body">
            <form action="{{ route('updatesubcategory') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $subcategories->id }}" name="subcategory_id">
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">UPDATE SUBCATEGORY</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="subcategory_name"
                        value="{{ $subcategories->subcategory_name }}" placeholder="ADD CATEGORY" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">UPDATE SUBCATEGORY</button>
            </form>
        </div>
    </div>
@endsection
