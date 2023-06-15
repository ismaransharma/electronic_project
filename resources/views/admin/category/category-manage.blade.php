@extends('layouts.app', ['activePage' => 'Category'])
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>
                        <h5>Category</h5>
                    </span>
                </div>
                <div class="card-body">
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
                            <tr>
                                <td>2</td>
                                <td>Mobile</td>
                                <td><img src="{{ asset('site/images/admin/mobile-img.png')}}" alt="mobile-img.png"></td>
                                <td><span style="padding-left: 10px;">🔴</span></td>
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