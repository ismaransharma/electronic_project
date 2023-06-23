@extends('layouts.app', ['activePage' => 'Edit'])
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Edit Category - {{ $category->category_title }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ route('postEditCategory', $category->slug) }}" method="POST" enctype="multipart/form-data">
                        <!-- Yo csrf le chai token generate garne kam garna which is tooo muchhh useful -->
                        @csrf
                        <div class="form-group mb-2">
                            <label for="title">Category Title*</label>
                            <input type="text" class="form-control @error('category_title') is-invalid @enderror"
                                value="{{ $category->category_title }}" id="title" name="category_title"
                                placeholder="Enter Category Title" />

                            @error('category_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="image">Category Image*</label>

                            <input type="file" class="form-control @error('category_image') is-invalid @enderror"
                                id="image" name="category_image" placeholder="Enter Category Image"
                                value="{{ $category->category_image }}" />

                            @if ($category->category_image != null)
                                <img src="{{ asset('uploads/category/' . $category->category_image) }}"
                                    class="img-responsive img-fluid" width="150" height="150" />
                            @else
                                <span class="text-danger">Image not available</span>
                            @endif

                            @error('category_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group mb-2">
                            <label for="status">Status*</label>
                            <select name="status" id="status"
                                class="form-control @error('status') is-invalid @enderror">
                                <option value="active" <?php if($category->status == 'active') {echo('selected');}?>>
                                    Active</option>
                                <option value="inactive"
                                    <?php if($category->status == 'inactive') { echo('selected'); } ?>>Hidden</option>
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
                                class="form-control @error('category_description') is-invalid @enderror">{{ $category->category_description }}</textarea>
                            @error('category_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Save changes">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection