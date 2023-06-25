@extends('layouts.app', ['activePage' => 'Edit'])
@section('content')


<?php
// dd($product);
?>
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
                        <form action="{{ route('postEditProduct', $product->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Product Title*</label>
                                        <input type="text" name="product_title"
                                            class="form-control @error('product_title') is-invalid @enderror"
                                            value="{{ $product->product_title }}" id="product_title"
                                            placeholder="Enter Product Title" />
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
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="">-----------Choose Category-----------</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                <?php if($product->category_id == $category->id){ echo 'selected'; } ?>>
                                                {{ $category->category_title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="image">Product Image<span class="text-danger">*</span></label>

                                        <input type="file"
                                            class="form-control  @error('product_image') is-invalid @enderror"
                                            id="image" name="product_image" placeholder="Enter Product iImage"
                                            value="{{ $product->product_image }}" />
                                        @if ($product->product_image != null)
                                        <img src="{{ asset('uploads/product/' . $product->product_image) }}"
                                            class="img-responsive img-fluid" width="150" height="150" />
                                        @else
                                        <span class="text-danger">Image not available</span>
                                        @endif
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
                                            class="form-control @error('status') is-invalid @enderror">
                                            <option value="active"
                                                <?php if($product->status == 'active') {echo('selected');}?>>
                                                Active</option>
                                            <option value="inactive"
                                                <?php if($product->status == 'inactive') { echo('selected'); } ?>>
                                                Hidden</option>
                                        </select>

                                        @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-2">
                                        <label for="">Stock*</label>
                                        <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                            value="{{ $product->product_stock }}" id="stock" name="stock" />

                                        @error('stock')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="">Orginal Cost*</label>
                                        <input type="number"
                                            class="form-control @error('orginal_cost') is-invalid @enderror"
                                            value="{{ $product->orginal_cost }}" id="orginal_cost"
                                            name="orginal_cost" />
                                        @error('orginal_cost')
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
                                            value="{{ $product->discounted_cost }}" id="discounted_cost"
                                            name="discounted_cost" />
                                        @error('discounted_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-2">
                                        <label for="">Brand*</label>
                                        <input type="text" class="form-control @error('brand') is-invalid @enderror"
                                            value="{{ $product->brand }}" id="brand" name="brand" required />
                                        @error('brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label for="">Product Short Description*</label>
                                        <textarea name="product_little_description"
                                            class="form-control @error('product_little_description') is-invalid @enderror"
                                            id="product_little_description" cols="10" rows="5"
                                            placeholder="Write in 15 Word "
                                            required>{{ $product->product_little_description }}</textarea>
                                        @error('product_little_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label for="">Product Description*</label>
                                        <textarea name="product_full_description"
                                            class="form-control @error('product_little_description') is-invalid @enderror"
                                            id="product_full_description" cols="30" rows="10"
                                            required>{{ $product->product_full_description }}</textarea>
                                        @error('product_little_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
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