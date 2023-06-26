@extends('layouts.app', ['activePage' => 'Edit'])
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Edit Service - {{ $service->service_title }}</h5>
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
                        <form action="{{ route('postEditService', $service->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Service Title*</label>
                                        <input type="text" name="service_title"
                                            class="form-control @error('service_title') is-invalid @enderror"
                                            value="{{ $service->service_title }}" id="service_title"
                                            placeholder="Enter Service Title" />
                                        @error('service_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Service Icon*</label>
                                        <input type="text" name="service_icon"
                                            class="form-control @error('service_icon') is-invalid @enderror"
                                            value="{{ $service->service_icon }}" id="service_icon"
                                            placeholder="Enter Service Icon" />
                                        @error('service_icon')
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
                                                <?php if($service->status == 'active') {echo('selected');}?>>
                                                Active</option>
                                            <option value="inactive"
                                                <?php if($service->status == 'inactive') { echo('selected'); } ?>>
                                                Hidden</option>
                                        </select>

                                        @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label for="">Service Description*</label>
                                        <textarea name="service_description"
                                            class="form-control @error('service_description') is-invalid @enderror"
                                            id="service_description" cols="30" rows="10"
                                            required>{{ $service->service_description }}</textarea>
                                        @error('service_description')
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