@extends('admin.dashboard')
@include('admin.logo.logo')
@section('content')
    <title>Banner Change</title>
    <style>
        .main {
            grid-template-columns: 1fr;
        }

        .table td,
        .table th {
            text-align: center;
            vertical-align: middle;
        }
    </style>
    <div class="container mt-5">
        <div class="all-setting-container p-4 bg-white rounded shadow-sm">
            <div class="setting-header mb-4">
                <h3 class="text-uppercase">Banner Change</h3>
            </div>
            <div class="all-setting-content">
                <div class="row">
                    <div class="col-md-6 col-12">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('bannerupload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="banner" class="form-label">Upload New Banner</label>
                                <input type="file" class="form-control" id="banner" name="banner" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Upload</button>
                        </form>

                        <div class="banner-table mt-3">
                            <table class="table">
                                <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($banners as $banner)
                                    <tr>
                                        <td>{{ $banner->id }}</td>
                                        <td>
                                            <img src="{{ asset('BannerImg/' . $banner->banner) }}"
                                                class="img-fluid rounded">
                                        </td>
                                        <td><a href="{{ route('bannerdelete', $banner->id) }}"
                                                class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No banners available.</td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 mt-5">
                        <h5>Current Banner</h5>
                        @forelse ($banners as $banner)
                            <div class="banner-image">
                                <img src="{{ asset('BannerImg/' . $banner->banner) }}" class="img-fluid rounded mb-3"
                                    alt="Current Banner">
                            </div>
                        @empty
                            <p>No banners currently set.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
