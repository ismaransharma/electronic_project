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
        <div class="com-md-12">
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Title</th>
                                <th>Product Image</th>
                                <th>Product</th>
                                <th>Stock</th>
                                <th>Origial Cost</th>
                                <th>Discounted Cost</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Gaming Laptop</td>
                                <td>
                                    <img src="{{ asset('site/images/category-images/asus-rog-strix-g15-gaming-laptop.png')}}"
                                        alt="gaming Laptop Image">
                                </td>
                                <td>Laptop</td>
                                <td>20</td>
                                <!-- Yo chai original Cost -->
                                <td>$915</td>
                                <!-- Yo chai discounted cost -->
                                <td>$905.47</td>
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
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addProductModalLabel"><b>Add Product</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Product Title*</label>
                                <input type="text" name="product_title" class="form-control" id="product_title"
                                    placeholder="Enter Product Title" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Select Category*</label>
                                <select name="select_category" class="form-control" id="select_category" required>
                                    <option value=""> ------ Select Category ------ </option>
                                    <option value="1">Laptop</option>
                                    <option value="2">Mobile</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Product Image*</label>
                                <input type="file" class="form-control" id="select_image" name="select_image" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="status">Status*</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="active">Active</option>
                                    <option value="hidden">Hidden</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <label for="">Stock*</label>
                                <input type="number" class="form-control" id="stock" name="stock" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <label for="">Original Cost*</label>
                                <input type="number" class="form-control" id="original_cost" name="original_cost" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <label for="">Discounted Cost*</label>
                                <input type="number" class="form-control" id="discounted_cost" name="discounted_cost" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Product Description*</label>
                                <textarea name="product_description" class="form-control" id="product_description" cols="30" rows="10" required></textarea>
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