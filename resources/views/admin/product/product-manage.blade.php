@extends('layouts.app', ['activePage' => 'Prodct'])

@section('content')

<head>
    <style>
        img{
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
                    <h5>Products</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Title</th>
                                <th>Product Image</th>
                                <th>Product Description</th>
                                <th>Slug</th>
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
                                <td><img src="{{ asset('site/images/category-images/asus-rog-strix-g15-gaming-laptop.png')}}" alt="gaming Laptop Image"></td>
                                <td>Gaming Laptop Ho Hai</td>
                                <td>Product</td>
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
                            <tr>
                                <td>1</td>
                                <td>Gaming Laptop</td>
                                <td><img src="{{ asset('site/images/admin/mobile-img.png')}}" alt="Mobile Img"></td>
                                <td>Gaming Laptop Ho Hai</td>
                                <td>Product</td>
                                <td>20</td>
                                <!-- Yo chai original Cost -->
                                <td>$255</td>
                                <!-- Yo chai discounted cost -->
                                <td>$248</td>
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

@endsection