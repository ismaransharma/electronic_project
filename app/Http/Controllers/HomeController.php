<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
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


    public function getAdminCartsManage()
    {
        return view('admin.carts.carts-manage');
    }

    public function getAdminOrderManage()
    {   
        
        $data = [
            'orders' => Order::all(),
        ];

        return view('admin.order.order-manage', $data);
    }

    // Admin Panel bata Payment lai Complete / Incomplete garne logic
    public function makePaymentComplete($id)
    {
        $order = Order::where('id', $id)->limit(1)->first();
        if (is_null($order)) {
            return redirect()->back()->with('error', 'Order not found');
        }

        if ($order->payment_status == 'Y') {
            $order->payment_status = 'N';
            $order->save();
        } else {
            $order->payment_status = 'Y';
            $order->save();
        }

        return redirect()->back()->with('success', 'Order payment status changed.');
    }

    public function getAdminPaymentManage()
    {
        return view('admin.payment.payment-manage');
    }

    

    public function getAdminSliderManage()
    {
        return view('admin.slider.slider-manage');
    }

    public function getAdminAboutUsManage()
    {
        return view('admin.about-us.about-us-manage');
    }






    // Category manage Garne Function
    public function getAdminCategoryManage()
    {
        $data = [
            'categories' => Category::where('deleted_at', null)->orderby('id', 'asc')->get(),
        ];

        return view('admin.category.category-manage', $data);
    }

    // Category add garni function
    public function postAddCategory(Request $request)
    {
        $request->validate([
            'category_title' => 'required|unique:categories,category_title',
            'category_image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'status' => 'required|in:active,inactive'
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

        if($image){
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

            $image->move('uploads/category/', $category_image);
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


    // Category edit delete garene sabbai logic
    // Category Delete Garne Command/Logic

    public function getDeleteCategory($slug){
        $category = Category::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();
        if (is_null ($category)) {
            return redirect()->back()->with('error', 'Category not found');
        }

        // dd($category);

        $category->deleted_at = Carbon::now();
        $category->save();

        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }

    // Category Edit Garne Page ma jani
    public function getEditCategory($slug)
    {
        $category = Category::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();
        if (is_null ($category)) {
            return redirect()->back()->with('error', 'Category not found');
        }

        
        $data = [
            'category' => $category
        ];

        return view('admin.category.edit', $data);
    }


    //Category Edit Garne Command/Logic
    public function postEditCategory(Request $request, $slug){
        {

            $category = Category::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();
            if (is_null ($category)) {
                return redirect()->back()->with('error', 'Category not found');
            
            }   
            $request->validate([
                'category_title' => 'required|unique:categories,category_title,' . $category->id,
                'category_image' => 'image|mimes:jpeg,jpg,png,gif',
                'status' => 'required|in:active,inactive'
            ]);
    
            // dd($request->all());
    
    
            $category_title = $request->input('category_title');

            // SLug generate gareko
            $slug = Str::slug($category_title);

            $status = $request->input('status');
            $category_description = $request->input('category_description');
            $image = $request->file('category_image');
    
            // dd($category_title,$slug,$status,$category_description,$image);
    
            // Eadi Form ma image xa vane
    
            if($image){
                // aaba image ko lagi saddhai unique name hunu parxa
                // unique name generate garne 2 ta tarika xa 
                  // md5()
                  // sha1()
                
                // Yo tala lekheko cmd chai pailai laravel le provide gareko ho (fix code)...
    
                $unique_name = sha1(time());
                
                
                // dd($category_title,$slug,$status,$category_description,$unique_name);
    
                // Image ko extension patta launa pani pailai bata jo laravel le code deko hunxa...
                $extension = $image->getClientOriginalExtension();
                // dd($extension);
    
                // aaba unique name sanga file ko extension lagaunu paryo (uniqename.extension)
                $category_image = $unique_name . '.' . $extension;
    
                // dd($request->all());

    
                // Yo chai image hmro project ma save gareko..
                $image->move('uploads/category/', $category_image);
                // dd($category_image,$image);

                // New image choose garesi purano image faldine
                if ($category->category_image !=null){
                    unlink('uploads/category/'. $category->category_image);
                }
                
            }


            
            // Sabbai data lai database ma save garne
            // model_access_gareko_variable->database_ko_column_ko_field = database_ko_column_ko_field_ko_data_rakehko_variable;
            $category->category_title=$category_title;
            $category->status=$status;
            $category->slug=$slug;
            $category->category_description=$category_description;
    
            if($image){
                $category->category_image = $category_image; 
            }
            
            // dd($image);
    
            $category->save();
            return redirect()->route('getAdminCategoryManage')->with('success', 'Category Edited Successfully...');
    
        }
    
    }



    // Product edit delete garene sabbai logic
    
    // Product manage garni function
    public function getAdminProductManage()
    {
        $data = [
            'categories' => Category::where('deleted_at', null)->orderby('category_title', 'asc')->get(),

            'products' => Product::where('deleted_at', null)->orderby('id', 'asc')->get(),
        ];
        return view('admin.product.product-manage', $data);
    }
    
    // Product add garni function
    public function postAddProduct(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'product_title' => 'required|unique:products,product_title',
            'category_id' => 'required|integer|exists:categories,id',
            'product_image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'status' => 'required|in:active,inactive',
            'stock'=>'required| integer',
            'orginal_cost'=>'required|numeric',
            'discounted_cost'=>'numeric',
            'brand' => 'required|string',
            'product_little_description'=>'required',
            'product_full_description'=>'required',
        ]);
        
        // dd($request->all());
        
        // $function_ko_variable = $request->input('form_ko_name_ma_vayeko_value');
        
        $product_title = $request->input('product_title');
        
        $category_id = $request->input('category_id');
        
        // dd($product_title);
        
        // SLug Generate Garna
        $slug = Str::slug($product_title);
        
        $status = $request->input('status');
        $product_little_description = $request->input('product_little_description');
        $product_full_description = $request->input('product_full_description');
        
        $category_id = $request->input('category_id');
        $category = Category::where('id', $category_id)->where('deleted_at', null)->limit(1)->first();

        if (is_null($category)) {
            return redirect()->back()->with('error', 'Category Not Found');
        }

        $image = $request->file('product_image');
        $stock = $request->input('stock');
        $orginal_cost = $request->input('orginal_cost');
        $discounted_cost = $request->input('discounted_cost');
        $brand = $request->input('brand');
        

        // dd($request->all());
        

        // // Eadi Form ma image xa vane
        
        if($image){
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
            $product_image = $unique_name . '.' . $extension;

            // dd($category_image);

            // Yo chai image hmro project ma save gareko..
            
            $image->move('uploads/product/', $product_image);
            // dd($category_image,$image);
            
        }
        
        // Sabbai data lai database ma save garne
        
        $product = new Product;
        // model_access_gareko_variable->database_ko_column_ko_field = database_ko_column_ko_field_ko_data_rakehko_variable;
        $product->product_title=$product_title;
        $product->category_id=$category_id;
        $product->status=$status;
        $product->slug=$slug;
        $product->product_little_description=$product_little_description;
        $product->product_full_description=$product_full_description;
        $product->product_stock=$stock;
        $product->orginal_cost=$orginal_cost;
        $product->discounted_cost=$discounted_cost;
        $product->brand=$brand;
        
        if($image){
            $product->product_image=$product_image;
        }

        

        $product->save();
        return redirect()->back()->with('success', 'Product Added Successfully...');
        
    }
    
    // Product Delete Garne Command/Logic
    public function getDeleteProduct($slug)
    {
        $product = Product::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();
        if (is_null ($product)) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // dd($category);

        $product->deleted_at = Carbon::now();
        $product->save();

        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
    
    // Product Edit page ma jani cmd

    public function getEditProduct($slug)
    {
        $product = Product::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();

        if (is_null ($product)) {
            return redirect()->back()->with('error', 'Product not found');
        }

        $categories = Category::where('deleted_at', null)->orderby('category_title', 'asc')->get();

        $data = [
            'product' => $product,
            'categories' => $categories
        ];

        return view('admin.product.edit', $data);
    }

    // Product add garni function
    public function postEditProduct(Request $request, $slug)
    {

        $product = Product::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();

        if (is_null ($product)) {
            return redirect()->back()->with('error', 'Product not found');
        }
        
        // dd($request->all());
        $request->validate([
            'product_title' => 'required|unique:products,product_title,' . $product->id, 
            'category_id' => 'integer|exists:categories,id',
            'product_image' => 'image|mimes:jpeg,jpg,png,gif',
            'status' => 'in:active,inactive',
            'stock'=>'integer',
            'orginal_cost'=>'required|numeric',
            'discounted_cost'=>'numeric',
            'brand' => 'required',
            'product_little_description'=>'required',
            'product_full_description'=>'required',
            
        ]);
        
        // dd($request->all());
        
        $product_title = $request->input('product_title');
        
        // dd($product_title);
        
        // Slug Generate gareko
        $slug = Str::slug($product_title);
        
        
        $category_id = $request->input('category_id');
        $category = Category::where('id', $category_id)->where('deleted_at', null)->limit(1)->first();
        
        if (is_null($product)) {
            return redirect()->back()->with('error', 'Product Not Found');
        }
        
        $status = $request->input('status');
        $product_little_description = $request->input('product_little_description');
        $product_full_description = $request->input('product_full_description');
        $image = $request->file('product_image');
        $stock = $request->input('stock');
        $orginal_cost = $request->input('orginal_cost');
        $discounted_cost = $request->input('discounted_cost');
        $brand = $request->input('brand');
        
        // dd($request->all());
        
        // // dd($product_title,$slug,$status,$product_description,$image);

        // // Eadi Form ma image xa vane
        
        if($image){
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
            $product_image = $unique_name . '.' . $extension;
            
            // dd($category_image);
            
            // Yo chai image hmro project ma save gareko..
            
            $image->move('uploads/product/', $product_image);

            if ($category->category_image != null){
                unlink('uploads/product/' . $product->product_image);
            }
            // dd($category_image,$image);
            
            // dd($image);
        }
        
        // Sabbai data lai database ma save garne
        
        // model_access_gareko_variable->database_ko_column_ko_field = database_ko_column_ko_field_ko_data_rakehko_variable;
        $product->product_title=$product_title;
        $product->category_id=$category_id;
        $product->status=$status;
        $product->slug=$slug;
        $product->product_little_description=$product_little_description;
        $product->product_full_description=$product_full_description;
        $product->product_stock=$stock;
        $product->orginal_cost=$orginal_cost;
        $product->discounted_cost=$discounted_cost;
        $product->brand=$brand;

        // dd($product);
        if($image){
            $product->product_image=$product_image;
            
        }
        

        $product->save();
        return redirect()->route('getAdminProductManage')->with('success', 'Product Edited Successfully...');
        
    }


    public function getAdminServicesManage()
    {
        $data = [
            'services' => Service::where('deleted_at', null)->get(),
        ];

        return view('admin.services.services-manage', $data);
    }


    // Service Add Garne Logic
    
    public function postAddService(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'service_title' => 'required|unique:services,service_title',
            'service_icon' => 'required',
            'status' => 'required|in:active,inactive',
            'service_description'=>'required',
        ]);
        
        // dd($request->all());
        
        $service_title = $request->input('service_title');
        $service_icon = $request->input('service_icon');
        
        
        // dd($service_title);
        
        // SLug Generate Garna
        $slug = Str::slug($service_title);
        
        $status = $request->input('status');
        $service_description = $request->input('service_description');

        $service = new Service;

        $service->service_title = $service_title;
        $service->service_icon = $service_icon;
        $service->status = $status;
        $service->slug = $slug;
        $service->service_description = $service_description;


        // dd($request->all());

        $service->save();
        return redirect()->back()->with('success', 'Service Added Successfully...');
    }

    
    // Service Delete Garne Command/Logic
    public function getDeleteService($slug){
        $service = Service::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();
        if (is_null ($service)) {
            return redirect()->back()->with('error', 'Service not found');
        }

        // dd($category);

        $service->deleted_at = Carbon::now();
        $service->save();

        return redirect()->back()->with('success', 'Service Deleted Successfully');
    }

    public function getEditService($slug)
    {
        $service = Service::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();

        if (is_null ($service)) {
            return redirect()->back()->with('error', 'Service not found');
        }

        $data = [
            'service' => $service,
        ];
        

        return view('admin.services.edit', $data);
    }

    public function postEditService(Request $request, $slug)
    {

        $service = Service::where('slug', $slug)->where('deleted_at', null)->limit(1)->first();

        if (is_null ($service)) {
            return redirect()->back()->with('error', 'Service not found');
        }
        
        // dd($request->all());
        $request->validate([
            'service_title' => 'required|unique:services,service_title,' . $service->id, 
            'service_icon' => 'required',
            'status' => 'in:active,inactive',
            'service_description'=>'required',
            
        ]);
        
        // dd($request->all());
        
        $service_title = $request->input('service_title');
        $service_icon = $request->input('service_icon');
        
        
        // Slug Generate gareko
        $slug = Str::slug($service_title);
        
        
        if (is_null($service)) {
            return redirect()->back()->with('error', 'Service Not Found');
        }
        
        $status = $request->input('status');
        $service_description = $request->input('service_description');
        
        
        $service->service_icon = $service_icon;
        $service->service_title = $service_title;
        $service->status = $status;
        $service->slug = $slug;
        $service->service_description = $service_description;
        
        

        $service->save();
        return redirect()->route('getAdminServicesManage')->with('success', 'Services Edited Successfully...');
        
    }

    
}