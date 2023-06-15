<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getAdminDashboard()
    {
        return view('admin.dashboard.dashboard');
    }


    public function getAdminProductManage()
    {
        return view('admin.product.product-manage');
    }

    public function getAdminCategoryManage()
    {
        return view('admin.category.category-manage');
    }

    public function getAdminCartsManage()
    {
        return view('admin.carts.carts-manage');
    }

    public function getAdminOrderManage()
    {
        return view('admin.order.order-manage');
    }

    public function getAdminPaymentManage()
    {
        return view('admin.payment.payment-manage');
    }

    public function getAdminServicesManage()
    {
        return view('admin.services.services-manage');
    }

    public function getAdminSliderManage()
    {
        return view('admin.slider.slider-manage');
    }

    public function getAdminAboutUsManage()
    {
        return view('admin.about-us.about-us-manage');
    }
}
