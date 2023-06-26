    @extends('layouts.app', ['activePage' => 'Services'])

    @section('content')

    <head>
        <style>
        img {
            height: 50px;
            width: 50px;
        }
        </style>
    </head>

    <?php
    // dd($services);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Services</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addServicesModal">Add Services</button>
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
                                    <th>Service Title</th>
                                    <th>Service Icon</th>
                                    <th>Status</th>
                                    <th>Service Description</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->service_title }}</td>
                                    <td style="padding-left: 32px; color: #175c64;">{!! $service->service_icon !!} </td>
                                    <td>
                                        @if ($service->status == 'active')
                                        <span class="text-success" style="padding-left: 8px; font-weight: 600;;">
                                            Active
                                        </span>

                                        @else
                                        <span class="text-danger" style="padding-left: 8px; font-weight: 600;">
                                            Inactive
                                        </span>
                                        @endif
                                    </td>
                                    <td>{{ $service->service_description }}</td>
                                    <td>
                                        <a href="{{ route('getEditService', $service->slug) }}"><button
                                                class="btn btn-success btn-sm">Edit</button></a>
                                        <a href="{{ route('getDeleteService', $service->slug) }}"><button
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
    <div class="modal fade" id="addServicesModal" tabindex="-1" aria-labelledby="addServicesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addServicesModalLabel"><b>Add Services</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('postAddService') }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Services Title*</label>
                                    <input type="text" name="service_title" class="form-control" id="service_title"
                                        value="{{ old('service_title') }}" placeholder="Enter Services Title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Services Icon*</label>
                                    <input type="text" class="form-control" id="service_icon" name="service_icon"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="status">Status*</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">Hidden</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="">Services Description*</label>
                                    <textarea name="service_description" class="form-control" id="service_description"
                                        cols="30" rows="10" required></textarea>
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