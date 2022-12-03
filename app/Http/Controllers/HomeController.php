<?php

namespace App\Http\Controllers;

use App\Models\cart;

use App\Models\order;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\product;

use Session;

use Stripe;

class HomeController extends Controller
{
    public function redirect(){

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            $allProducts = product::all()->count();

            $allUsers = User::all()->count();

            $allorders = order::all()->count();

            $order = order::all();
            $totalIncome = '0';
            foreach ($order as $order) {
                $totalIncome += $order->price;
            }

            $odersDeliverd = order::where('delivery_status', '=', 'Delivered')->count();

            $odersNotDeliverd = order::where('delivery_status', '=', 'Processing')->count();



            return view('admin.home', compact('allProducts', 'allUsers', 'allorders', 'totalIncome', 'odersDeliverd', 'odersNotDeliverd'));

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

            $cart = new cart();

            $product = product::find($id);
            $user = Auth::user();
            

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;

            $cart->product_title=$product->title;

            if ($product->discount_price != null) {
                $cart->price=$product->discount_price * $request->quantity;
            }else{
                $cart->price=$product->price * $request->quantity;
            }

            $cart->image=$product->image;
            $cart->product_id=$product->id;

            $cart->quantity=$request->quantity;


            $cart->save();

            return redirect()->back();

        }else{

            return redirect('login');
        }

    }

    
    //view cart
    public function view_cart(){

        if(Auth::id()){

            $id = Auth::user()->id;

            $datas = cart::where('user_id', '=', $id)->get();

            $counter = cart::where('user_id', '=', $id)->count();

            return view('home.view_cart', compact('datas', 'counter'));

        }else{

            return redirect('login');
        }
    }


    // remove from cart
    public function remove_cart($id){

        $cart = cart::find($id);

        $cart->delete();

        return redirect('view_cart')->with('message', 'Cart was removed successfully');
    }


    //cash on delivery function
    public function cash_order(){

        $user=Auth::user();
        $userid= $user->id;

        $datas = cart::where('user_id', '=', $userid)->get();

        // dd($datas);

        foreach ($datas as $key => $data) {

            $order = new order();
            
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;

            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->image=$data->image;
            $order->product_id=$data->id;
            $order->quantity=$data->quantity;

            $order->delivery_status = "Processing";
            $order->payment_status = "Cash on delivery";


            $order->save();

            $cartid = $data->id;
            $cart = cart::find($cartid);
            $cart->delete();


        }

        return redirect('/')->with('message', 'Your order was recived successfully, we will get back to you soon');;
    }


    public function stripe($totalPrice){


        return view('home.stripe', compact('totalPrice'));
    }


    public function stripePost(Request $request, $totalPrice)
    {
        // dd($totalPrice);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalPrice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks For Payment" 
        ]);

        $user=Auth::user();
        $userid= $user->id;

        $datas = cart::where('user_id', '=', $userid)->get();

        foreach ($datas as $key => $data) {

            $order = new order();
            
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;

            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->image=$data->image;
            $order->product_id=$data->id;
            $order->quantity=$data->quantity;

            $order->delivery_status = "Processing";
            $order->payment_status = "Paid";


            $order->save();

            $cartid = $data->id;
            $cart = cart::find($cartid);
            $cart->delete();


        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }


    public function view_order(){

        if (Auth::id()) {

            $user = Auth::user();

            $id = $user->id;
            
            $order = order::where('user_id', '=', $id)->get();

            $orderNum = order::where('user_id', '=', $id)->get()->count();
            
            return view('home.order', compact('order', 'orderNum'));

        }else{
            return redirect('login');
        }


    }

    public function cancel_order($id){

        $order = order::find($id);

        $order->delivery_status = 'Canceled';

        // $order->delete();

        $order->save();

        return redirect('/view_order')->with('message', 'Your order was canceled');;

    }

    //product page
    public function product(){

        $products = product::paginate(6);

        return view('home.all_product', compact('products'));

        // dd($products);
    }

}
