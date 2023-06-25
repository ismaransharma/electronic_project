<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function getHome(){

        $data = [
        // jati ota categories ko status active xan tyo sabbai dekhaunxa
        //   'categories' => Category::where('deleted_at', null)->where('status', 'active')->orderby('category_title', 'asc')->get()  

        // eauta certain amount samma category dekhauni cmd   
        'categories' => Category::where('deleted_at', null)->where('status', 'active')->orderby('category_title', 'asc')->limit(3)->get(), 
        
        'products' => Product::where('deleted_at', null)->where('status', 'active')->orderby('product_title', 'asc')->limit(3)->get()  
        
        
        ];

        // dd($data);

        return view('site.home', $data);
    }
    
    public function getAbout(){
        return view('site.about-us');
    }
    
    public function getServices(){
        return view('site.services');
    }
    
    public function getLaptopCategory($slug){
        $categories = Category::where('deleted_at', null)->where('status', 'active')->orderby('category_title', 'asc')->get();
        
        $product = Product::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->orderby('product_title', 'asc')->get();
        if(is_null($product)){
            return redirect()->back()->with('error', 'Product not found.');
        }
        
        // dd($categories);
        $data = [
            'categories' => $categories,
            'products' => $product
        ];

        return view('site.laptop-category-all-in-one', $data);
    }

    public function getProductsByCategory($slug)
    {
        
        $category = Category::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->first();
        if (is_null($category)) {
            return redirect()->back()->with('error', 'Category not found');
        }

        $product = Product::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->orderby('product_title', 'asc')->get();
        if(is_null($product)){
            return redirect()->back()->with('error', 'Product not found.');
        }

        $data = [
            'category' => $category,
            'products' => $product
        ];
        return view('site.products-by-category', $data);
    }
    
    public function getContactUs(){
        return view('site.contact-us');
    }
    
    public function test(){
        return view('site.test');
    }
    
    public function getfooter(){
        return view('layouts.footer');
    }
    
    public function productPage($slug){

        $product = Product::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->limit(1)->first();
        
        $categories = Category::where('deleted_at', null)->where('status', 'active')->orderby('category_title', 'asc')->get();

        $data = [ 
            'category' => $categories,
            'product' => $product

        ];

        return view('site.product-page', $data);
    }
    
}