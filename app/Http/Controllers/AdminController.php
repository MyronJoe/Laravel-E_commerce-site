<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

use App\Models\product;

class AdminController extends Controller
{
    //admin homepage route
    public function admin_view(){

        return view('admin.home');
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


    //add product page
    public function add_product(){

        return view('admin.add_products');
    }
       
    //add product functions
    public function addAllProducts(Request $request){

        $data = new product();

    }

    public function product(){

        return view('admin.products');
    }

}
