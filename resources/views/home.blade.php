@extends('layouts.app', ['activePage' => 'adminDashboard'])

@section('content')

<head>
    <style>
    .dashboard-title p {
        font-size: 30px;
        font-weight: 600;
        margin: 0;
        margin-bottom: 2px;
        color: #43dfdf;
    }

    .card:hover {
        box-shadow: 1px 1px 5px #917f7f;
    }

    .card-header h5 span {
        color: #ff6700;
        font-weight: 600;
    }

    .card:hover{
        background-image: linear-gradient(to right, rgba(210,0,0,1), rgba(254,0,0,0));
        box-shadow: 1px 1px 5px #07076c;
        scale: 1.01;
    }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<div class="container">
    <div class="dashboard-title">
        <p class="text-center">Welcome {{ Auth::user()->name}}</p>
        <p class="text-center">To Admin Dashboard</h2>
    </div>

    <div class="top-extra mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Hello Admin!</h4>
                    </div>
                    <div class="card-body">
                        <p>Take control of your online store, manage products, orders, and user accounts, and keep your
                        business running smoothly. If you need any assistance, feel free to reach out to our support
                        team.</p>
                    </div>
                </div>
            </div>
        </div>
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

<script>
window.onload = function() {
    if (localStorage.getItem("loggedIn") === "true") {
        alert(
            "Welcome to the Admin Dashboard! You have successfully logged in as an administrator. Take control of your online store, manage products, orders, and user accounts, and keep your business running smoothly. If you need any assistance, feel free to reach out to our support team. Happy managing!"
            );
        localStorage.removeItem("loggedIn"); // Remove the flag
    }
};
</script>

@endsection