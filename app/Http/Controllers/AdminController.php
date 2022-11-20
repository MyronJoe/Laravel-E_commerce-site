<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

class AdminController extends Controller
{
    public function admin_view(){

        return view('admin.home');
    }



    public function view_category(){

        return view('admin.category');
    }


    public function add_category(Request $request){

        return view('admin.add_category');
    }

    public function add_categories(Request $request){

        $date = new category();

        $date->category_name = $request->category_name;

        $date->save();

        return redirect('view_category')->with('message', 'Category was added successfully');

    }


       

    public function product(){

        return view('admin.products');
    }

}
