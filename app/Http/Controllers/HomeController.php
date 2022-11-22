<?php

namespace App\Http\Controllers;

use App\Models\cart;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\product;

class HomeController extends Controller
{
    public function redirect(){

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $products = product::paginate(6);

            return view('home.userpage', compact('products'));
        }
        

    }

    public function index(){

        $products = product::paginate(6);

        return view('home.userpage', compact('products'));
    }


    public function product_detail($id){

        $product=product::find($id);

        return view('home.product_detail', compact('product'));
    }

    //add tocart function
    public function add_cart(Request $request, $id){

        if(Auth::id()){

            $product = product::find($id);
            $user = Auth::user();
            $cart = new cart();

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;

            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->image=$product->image;
            $cart->product_id=$product->id;

            $cart->quantity=$request->quantity;


            $cart()->save();

            // return redirect()->back();

        }else{

            return redirect('login');
        }

    }

    
    //view cart
    public function view_cart(){

        $data = cart::all();

    }
}
