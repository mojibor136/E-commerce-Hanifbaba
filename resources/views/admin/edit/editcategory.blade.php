@extends('admin.layout.tempalate')
@section('content')
    <style>
        .add-category {
            margin: 50px 100px;
            padding: 20px;
            background-color: #Fff;
            border-radius: 10px;
        }

        .main-content .content-ul {
            right: 0px;
        }
    </style>
    <div class="add-category">
        <div class="card-header d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">UPDATE CATEGORY</h5>
            <small class="text-muted float-end"><a href="{{ route('allcategory') }}" style="text-decoration: none;"
                    class="text-success">View Data</a></small>
        </div>
        <div class="card-body">
            <form action="{{ route('updatecategory') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach ($category as $category)
                    <input type="hidden" value="{{ $category->id }}" name="category_id">
                    <div class="mb-2">
                        <label class="form-label mb-1" for="basic-default-fullname">UPDATE CATEGORY</label>
                        <input type="text" class="form-control" id="basic-default-fullname" name="category_name"
                            value="{{ $category->category_name }}" placeholder="ADD CATEGORY" required>
                    </div>
                    <div>
                        <label for="formFileDisabled" class="form-label mb-1">UPDATE CATEGORY IMG</label>
                        <input class="form-control" type="file" id="formFileDisabled" name="category_img" />
                    </div>
                    <div class="img">
                        <img src="{{ asset('assets/CategoryImg/' . $category->category_img) }}" alt=""
                            width="50" height="50" class="mt-2">
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary mt-2">UPDATE CATEGORY</button>
            </form>
        </div>
    </div>
@endsection
