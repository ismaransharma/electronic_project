@extends('layouts.app', ['activePage' => 'adminDashboard'])

@section('content')

<head>
    <style>
    .dashboard-title p {
        font-size: 30px;
        font-weight: 600;
    }

    .card:hover {
        box-shadow: 1px 1px 5px #917f7f;
    }

    .card-header h5 span {
        color: #ff6700;
        font-weight: 600;
    }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<div class="container">
    <div class="dashboard-title">
        <p class="text-center">Admin Dashboard</p>
    </div>
    <div class="row">
        <div class="col-md-4 category">
            <div class="card">
                <div class="card-header">
                    <h5><span>Cate</span>gory</h5>
                </div>
                <div class="card-body">
                    <p>Manage Category section and Category from here. You can manage many things of category.</p>
                    <div class="button text-center">
                        <a href="{{ route('getAdminCategoryManage') }}"><button
                                class="btn btn-success btn-sm">Manage</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 product">
            <div class="card">
                <div class="card-header">
                    <h5><span>Pro</span>duct</h5>
                </div>
                <div class="card-body">
                    <p>Manage Products section from here. You can manage many things of category.</p>
                    <div class="button text-center">
                        <a href="{{ route('getAdminProductManage') }}"><button
                                class="btn btn-success btn-sm">Manage</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 services">
            <div class="card">
                <div class="card-header">
                    <h5><span>Serv</span>ices</h5>
                </div>
                <div class="card-body">
                    <p>Manage Services section from here. You can manage many things of category.</p>
                    <div class="button text-center">
                        <a href="{{ route('getAdminServicesManage') }}"><button
                                class="btn btn-success btn-sm">Manage</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 slider">
            <div class="card">
                <div class="card-header">
                    <h5><span>Sli</span>der</h5>
                </div>
                <div class="card-body">
                    <p>Manage Your Slider Section from here.</p>
                    <div class="button text-center">
                        <a href=" {{ route('getAdminSliderManage') }} "><button
                                class="btn btn-success btn-sm">Manage</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 about-us">
            <div class="card">
                <div class="card-header">
                    <h5><span>About</span> Us</h5>
                </div>
                <div class="card-body">
                    <p>Manage Your About Us Section from here.</p>
                    <div class="button text-center">
                        <a href=" {{ route('getAdminAboutUsManage') }} "><button
                                class="btn btn-success btn-sm">Manage</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 order">
            <div class="card">
                <div class="card-header">
                    <h5><span>Ord</span>er</h5>
                </div>
                <div class="card-body">
                    <p>Manage Your Order Section from here.</p>
                    <div class="button text-center">
                        <a href=" {{ route('getAdminOrderManage') }} ">
                            <button class="btn btn-success btn-sm">Manage</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection