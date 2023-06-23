@extends('layouts.app', ['activePage' => 'Product'])
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
                            <h5>Products</h5>
                        </div>
                        <div class="col-md-6 text-end">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#addProductModal">Add Product</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Product Title</th>
                                <th>Product Image</th>
                                <th>Category</th>
                                <!-- <th>Product Description</th> -->
                                <th>Stock</th>
                                <th>Origial Cost</th>
                                <th>Discounted Cost</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->product_title }}</td>
                                <td>
                                    @if ($item->product_image != null)
                                    <img src="{{ asset('uploads/product/' . $item->product_image) }}"
                                        class="img-responsive img-fluid" />
                                    @else
                                    <span class="text-danger">Image not available</span>
                                    @endif
                                </td>
                                <td>{{ $item->category->category_title }}</td>

                                <!-- <td>{{ $item->product_description }}</td> -->

                                <td>{{ $item->product_stock }}</td>
                                <!-- Yo chai original Cost -->
                                <td>Rs {{ $item->original_cost }}</td>
                                <!-- Yo chai discounted cost -->
                                <td>Rs {{ $item->discounted_cost }}</td>
                                <td>

                                    @if ($item->status == 'active')
                                    <span class="text-success" style="padding-left: 8px; font-weight: 600;;">Active</span>

                                    @else
                                    <span class="text-danger" style="padding-left: 8px; font-weight: 600;">Inactive</span>
                                    @endif

                                </td>
                                <td>15 June 2023</td>
                                <td>
                                    <a href="{{ route('getEditProduct', $item->slug) }}"><button class="btn btn-success btn-sm">Edit</button></a>
                                    <a href="{{ route('getDeleteProduct', $item->slug) }}"><button
                                            class="btn btn-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addProductModalLabel"><b>Add Product</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
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
                                    <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Product Image*</label>
                                <input type="file" class="form-control @error('product_image') is-invalid @enderror"
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
                                    value="{{ old('status') }}" required>
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
                                <input type="number" class="form-control @error('original_cost') is-invalid @enderror"
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
                                <input type="number" class="form-control @error('discounted_cost') is-invalid @enderror"
                                    value="{{ old('discounted_cost') }}" id="discounted_cost" name="discounted_cost"
                                    required />
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Save changes">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection