@extends('admin.layout.tempalate')
@section('content')
    <div class="add-category">
        <div class="card-header d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">ADD CATEGORY</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('storecategory') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label class="form-label mb-1" for="basic-default-fullname">ADD CATEGORY</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="category_name"
                        value="" placeholder="ADD CATEGORY" required>
                </div>
                <div>
                    <label for="formFileDisabled" class="form-label mb-1">ADD CATEGORY IMG</label>
                    <input class="form-control" type="file" id="formFileDisabled" name="category_img" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add Category</button>
            </form>
        </div>
    </div>
@endsection
