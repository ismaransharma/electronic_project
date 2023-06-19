<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
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



    // Category add garni function
    public function postManageProduct(Request $request)
    {
        $request->validate([
            'category_title' => 'required|unique:categories,category_title',
            'category_image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'status' => 'required|in:active,hidden'
        ]);

        // dd($request->all());

        // $function_ko_variable = $request->input('form_ko_name_ma_vayeko_value');

        $category_title = $request->input('category_title');
        
        // SLug Generate Garna
        $slug = Str::slug($category_title);

        $status = $request->input('status');
        $category_description = $request->input('category_description');
        $image = $request->file('category_image');

        // dd($category_title,$slug,$status,$category_description,$image);

        // Eadi Form ma image xa vane

        if('$image'){
            // aaba image ko lagi saddhai unique name hunu parxa
            // unique name generate garne 2 ta tarika xa 
              // md5()
              // sha1()
            
            // Yo tala lekheko cmd chai pailai laravel le provide gareko ho (fix code)...

            $unique_name = sha1(time());

            // dd($category_title,$slug,$status,$category_description,$unique_name);

            // mathi ko cmd le unique name generate garepaxi aaba image ko extension patta launu paryo..
            // Image ko extension patta launa pani pailai bata jo laravel le code deko hunxa...
            $extension = $image->getClientOriginalExtension();
            // dd($extension);

            // aaba unique name sanga file ko extension lagaunu paryo (uniqename.extension)
            $category_image = $unique_name . '.' . $extension;

            // dd($category_image);

            // Yo chai image hmro project ma save gareko..

            // $image->move('uploads/category/', $category_image);
            // dd($category_image,$image);
            
        }
        
        // Sabbai data lai database ma save garne

        $category = new Category;
        // model_access_gareko_variable->database_ko_column_ko_field = database_ko_column_ko_field_ko_data_rakehko_variable;
        $category->category_title=$category_title;
        $category->status=$status;
        $category->slug=$slug;
        $category->category_description=$category_description;

        if($image){
            $category->category_image=$category_image;
        }

        $category->save();
        return redirect()->back()->with('success', 'Category Added Successfully...');

    }


    
}