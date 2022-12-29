<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

use App\Models\order;

use App\Models\product;

use Illuminate\Support\Facades\Auth;

use PDF;

use App\Models\User;

use App\Notifications\SendEmailNotification;

use Notification;

class AdminController extends Controller
{
    //admin homepage route
    public function admin_view(){

        if (Auth::id()) {

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

                $odersDeliverd = order::where('delivery_status', '=', 'Delivered')->get()->count();

                $odersNotDeliverd = order::where('delivery_status', '=', 'Processing')->get()->count();

                return view('admin.home', compact('allProducts', 'allUsers', 'allorders', 'totalIncome', 'odersDeliverd', 'odersNotDeliverd'));

            }else{
                return redirect('/');
            }
            
        }else{
            return redirect('/');
        }

        
    }


    //display all category funtion
    public function view_category(){

        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {

                $data = category::all();

                return view('admin.category', compact('data'));

            }
            else{
                return redirect('/');
            }

        }else{
            return redirect('/');
        }
    }


    //add category form
    public function add_category(Request $request){

        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {

                return view('admin.add_category');

            }
            else{
                return redirect('/');
            }

        }else{
            return redirect('/');
        }
    }

    //add category funtion
    public function add_categories(Request $request){

        $date = new category();

        $date->category_name = $request->category_name;

        $date->save();

        return redirect('view_category')->with('message', 'Category was added successfully');

        

    }


    //delete category function
    public function delete_category($id){

        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {

                $data = category::find($id);

                $data->delete();

                return redirect('view_category')->with('message', 'Category was deleted successfully');

            }
            else{
                return redirect('/');
            }

        }else{
            return redirect('/');
        }
    }


    //display product
    public function view_product(){


        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {

                $products = product::all();

                return view('admin.products', compact('products'));

            }
            else{
                return redirect('/');
            }

        }else{
            return redirect('/');
        }
    }


    //add product page
    public function add_product(){

        $data = category::all();

        return view('admin.add_products', compact('data'));
    }
       
    //add product functions
    public function addAllProducts(Request $request){

        $data = new product();

        $data->title = $request->title;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->discount_price = $request->dis_price;
        $data->quantity = $request->quantity;
       
        // $imageName = time(). '_' . $request->image->getClientOriginalName();
        $imageName = time(). '_' . $request->image->getClientOriginalExtension();
        $request->image->move('product', $imageName);

        $data->image = $imageName;

        $data->save();

        return redirect('view_product')->with('message', 'Product Created successfully');
    }

    //delete product function
    public function delete_product($id){

        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {

                $data = product::find($id);

                $data->delete();

                return redirect('view_product')->with('message', 'Product deleted successfully');

            }
            else{
                return redirect('/');
            }

        }else{
            return redirect('/');
        }

    }

    //update product page
    public function update_product($id){

        $data = product::find($id);
        $category = category::all();

        return view('admin.update_product', compact('data', 'category'));

    }


    //update product function
    public function updateAllProducts(Request $request, $id){

        $data = product::find($id);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->discount_price = $request->dis_price;
        $data->quantity = $request->quantity;

        $image = $request->image;
        if ($image) {
            $imageName = time(). '_' . $image->getClientOriginalExtension();
            $request->image->move('product', $imageName);

            $data->image = $imageName;
        }
        
        $data->save();

        return redirect('view_product')->with('message', 'Product updated successfully');

    }


    //view all orders
    public function view_orders(){

        

        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {

                $orders = order::all();

                $searchedWord = '';

                return view('admin.orders', compact('orders', 'searchedWord'));

            }
            else{
                return redirect('/');
            }

        }else{
            return redirect('/');
        }
    }


    //changing delivery & payment status
    public function deliverd($id){

        $order = order::find($id);

        $order->delivery_status = 'Delivered';

        $order->payment_status = 'Paid';

        $order->save();

        return redirect()->back()->with('message', 'Order delivered');

    }

    
    //print pdf function
    public function print_pdf($id){

        $order = order::find($id);

        $pdf = PDF::loadView('admin.pdf', compact('order'));

        return $pdf->download('order_details.pdf');

        // return view('admin.pdf', compact('order'));

    }



    //send email notification
    public function send_mail($id){

        $order=order::find($id);

        return view('admin.mailer', compact('order'));

    }


    //send email to user
    public function send_user_email(Request $request, $id){

        $order = order::find($id);

        $details = [

            'greeting'=>$request->greeting,
            'firstline'=>$request->firstline,
            'content'=>$request->content,
            'button'=>$request->button,
            'url'=>$request->url,
            'lastline'=>$request->lastline,

        ];

        Notification::send($order, new SendEmailNotification($details));


        return redirect('view_orders')->with('message', 'Mail sent successfully');
    }

    public function search(Request $request){

        $searchedWord = $request->search;

        $orders = order::where('name', 'LIKE', "%$searchedWord%")->orWhere('product_title', 'LIKE', "%$searchedWord%")->orWhere('phone', 'LIKE', "%$searchedWord%")->get();

        return view('admin.orders', compact('orders', 'searchedWord'));
    }

    

}
