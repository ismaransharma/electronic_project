@extends('layouts.app', ['activePage' => 'Category'])
@section('content')

<head>
    <style>
    img {
        height: 50px;
        width: 50px;
    }
    </style>
</head>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Category</h5>
                        </div>
                        <div class="col-md-6 text-end">
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addCategoryModal">Add Category</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                                <th>Category Image</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Laptop</td>
                                <td><img src="{{ asset('site/images/admin/laptop-img.png')}}" alt="laptop-img.png"></td>
                                <td><span style="padding-left: 10px;">🟢</span></td>
                                <td>15 June 2023</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addCategoryModalLabel"><b>Add Category</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('postAddCategory') }}" method="POST" enctype="multipart/form-data">
                    <!-- Yo csrf le chai token generate garne kam garna which is tooo muchhh useful -->
                    @csrf
                    <div class="form-group mb-2">
                        <label for="title">Category Title*</label>
                        <input type="text" class="form-control @error('category_title') is-invalid @enderror"
                            value="{{ old('category_title') }}" id="title" name="category_title"
                            placeholder="Enter Category Title" required />

                        @error('category_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Category Image*</label>

                        <input type="file" class="form-control @error('category_image') is-invalid @enderror" id="image"
                            name="category_image" placeholder="Enter Category Title" value="{{ old('category_image') }}"
                            required />

                        @error('category_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="status">Status*</label>
                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                            required>
                            <option value="active">Active</option>
                            <option value="hidden">Hidden</option>
                        </select>

                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="category_description">Description</label>
                        <textarea name="category_description" id="category_description" cols=" 30" rows="10"
                            class="form-control @error('category_description') is-invalid @enderror">{{ old('category_description') }}</textarea>
                        @error('category_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save changes">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection