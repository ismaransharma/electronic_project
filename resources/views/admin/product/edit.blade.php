@extends('layouts.app', ['activePage' => 'Edit'])
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Edit Product - {{ $product->product_title }}</h5>
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
                    <div class="modal-body">
                        <form action="{{ route('postAddProduct') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Product Title*</label>
                                        <input type="text" name="product_title"
                                            class="form-control @error('product_title') is-invalid @enderror"
                                            value="{{ old('product_title') }}" id="product_title"
                                            placeholder="Enter Product Title" required />
                                        @error('product_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="category_id">Category*</label>
                                        <select name="category_id" id="category_id" class="form-control" required>
                                            <option value="">-----------Choose Category-----------</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" <?php if($product->category_id == $category->id){ echo 'selected'; } ?>>{{ $category->category_title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Product Image*</label>
                                        <input type="file"
                                            class="form-control @error('product_image') is-invalid @enderror"
                                            value="{{ old('product_image') }}" id="product_image" name="product_image"
                                            required />
                                        @error('product_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="status">Status*</label>
                                        <select name="status" id="status"
                                            class="form-control @error('status') is-invalid @enderror"
                                            value="{{ $product->status }}" required>
                                            <option value="active">Active</option>
                                            <option value="inactive">Hidden</option>
                                        </select>
                                        @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="">Stock*</label>
                                        <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                            value="{{ old('stock') }}" id="stock" name="stock" required />

                                        @error('stock')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="">Original Cost*</label>
                                        <input type="number"
                                            class="form-control @error('original_cost') is-invalid @enderror"
                                            value="{{ old('original_cost') }}" id="original_cost" name="original_cost"
                                            required />
                                        @error('original_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="">Discounted Cost*</label>
                                        <input type="number"
                                            class="form-control @error('discounted_cost') is-invalid @enderror"
                                            value="{{ old('discounted_cost') }}" id="discounted_cost"
                                            name="discounted_cost" required />
                                        @error('discounted_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label for="">Product Description*</label>
                                        <textarea name="product_description"
                                            class="form-control @error('discounted_cost') is-invalid @enderror"
                                            id="product_description" cols="30" rows="10"
                                            required>{{ old('product_description') }}</textarea>
                                        @error('discounted_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Save changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection