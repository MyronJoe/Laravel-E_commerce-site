<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

use App\Models\order;

use App\Models\product;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminController extends Controller
{
    //admin homepage route
    public function admin_view(){

        

        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {

                return view('admin.home');
            }else{
                return redirect('/');
            }
            
        }else{
            return redirect('/');
        }

        
    }


    //display all category funtion
    public function view_category(){

        $data = category::all();

        return view('admin.category', compact('data'));
    }


    //add category form
    public function add_category(Request $request){

        return view('admin.add_category');
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

        $data = category::find($id);

        $data->delete();

        return redirect('view_category')->with('message', 'Category was deleted successfully');
    }


    //display product
    public function view_product(){

        $products = product::all();

        return view('admin.products', compact('products'));
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

        $data = product::find($id);

        $data->delete();

        return redirect('view_product')->with('message', 'Product deleted successfully');

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

        $orders = order::all();


        return view('admin.orders', compact('orders'));
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

        // $order = order::find($id);

        return view('admin.pdf');

    }

    

}
