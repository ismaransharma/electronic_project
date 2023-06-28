<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function getHome(){

        
        $data = [
            // jati ota categories ko status active xan tyo sabbai dekhaunxa
            //   'categories' => Category::where('deleted_at', null)->where('status', 'active')->orderby('category_title', 'asc')->get()  
            
            // eauta certain amount samma category dekhauni cmd   
            'categories' => Category::where('deleted_at', null)->where('status', 'active')->orderby('category_title', 'asc')->limit(3)->get(), 
            
            'products' => Product::where('deleted_at', null)->where('status', 'active')->orderby('product_title', 'asc')->limit(3)->get(),
            
            'services' => Service::where('deleted_at', null)->where('status', 'active')->get(),
        
        
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
        
        // if(is_null($product)){} yo pani use garna milne

        if($product->stock < 0){
            return redirect()->back()->with('error', 'Product not found.');
        }

        $categories = Category::where('deleted_at', null)->where('status', 'active')->orderby('category_title', 'asc')->get();


        $data = [ 
            'category' => $categories,
            'product' => $product

        ];

        return view('site.product-page', $data);
    }




    

    // Proceed to checkout
    public function getProceedToCheckout()
    {
        return view('site.proceed-to-checkout');
    }

    // Direct add to cart logic

    public function addToCartDirect(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->where('status', 'active')->limit(1)->first();
    
        if(is_null($product)){
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart_code = $this->getCartCode();

        $quantity = 1;
        
        $stock = $product->product_stock;
        $new_stock = $stock - $quantity;
        if ($new_stock < 1){
            return redirect()->back()->with('error', 'Product is out of stock');
        }

        $price = $product->orginal_cost - $product->discounted_cost;
        $total_price = $quantity * $price;

        $cart = new Cart;

        $cart->cart_code = $cart_code;
        $cart->product_id = $product_id;
        $cart->quantity = $quantity;
        $cart->price = $price;
        $cart->total_price = $total_price;
        $cart->save();

        $product->product_stock = $new_stock;

        return redirect()->back()->with('success', 'Product added to cart');
    
    
    }

    public function postAddToCart(Request $request, $slug){
        $request -> validate([
            'quantity' => 'required|integer|min:1|max:10',
        ]);

        $product = Product::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->limit(1)->first();

        if(is_null($product)){
            return redirect()->back()->with('error', 'Product not found.');
        }
        
        $quantity = $request->input('quantity');    
        
        $stock = $product->product_stock;
        $new_stock = $stock - $quantity;
        if($new_stock < 1){
            return redirect()->back()->with('error', 'Product is out of stock');
        }

        $cart_code = $this->getCartCode();

        $price = $product->orginal_cost - $product->discounted_cost;
        $total_price = $quantity * $price;

        $cart = new Cart;
        $cart->cart_code = $cart_code;
        $cart->product_id = $product->id;
        $cart->quantity = $quantity;
        $cart->price = $price;
        $cart->total_price = $total_price;
        $cart->save();

        $product->product_stock = $new_stock;
        $product->save();
        
        return redirect()->back()->with('success', 'Product added to cart');



    }

    // Go To Cart
    public function getCart()
    {
        $cart_code = $this->getCartCode();

        $data = [
            'carts' => Cart::where('cart_code', $cart_code)->get()
        ];
        return view('site.go-to-cart', $data);
    }

    public function getCartCode() {

        // Session import garne.
        // session bata cart code taneko
        $cart_code = Session::get('cart_code');

        // Eadi Session ma cart code xaina vane
        if(is_null($cart_code)){
            // New cart code generate garne { (8) '8' esko satta ma jati ni lekhna paiyo } 

            $cart_code = Str::random(8);

            session(['cart_code' => $cart_code]);
            return($cart_code);

        }

        // eadi session ma alrdy $cart_code xa vane
        else{

            // eadi $cart_code order table ma xa vane tesko checkout vayo ki nai vanera check gareko
            $check = Order::where('cart_code', $cart_code)->limit(1)->first();

            // Order table ma tyo cart_code xaina cart_code return gardeko

            if(is_null($check)){
                return ($cart_code);
            }

            else{
                $cart_code = Str::random(8);

                return($cart_code);
            }

        }
        


    } 
    
}