@extends('layouts.app', ['activePage' => 'Prodct'])

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
                            <h5>Order</h5>
                        </div>
                        <div class="col-md-6 text-end">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addOrderModal">Add Order</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

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
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addOrderModalLabel"><b>Add Order</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Order Title*</label>
                                <input type="text" name="Order_title" class="form-control" id="Order_title"
                                    placeholder="Enter Order Title" required>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Order Image*</label>
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
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Order Description*</label>
                                <textarea name="Order_description" class="form-control" id="Order_description"
                                    cols="30" rows="10" required></textarea>
                            </div>
                        </div> -->




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