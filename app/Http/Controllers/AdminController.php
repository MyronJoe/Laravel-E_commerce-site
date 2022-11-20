<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_view(){

        return view('admin.home');
    }



    public function view_category(){

        return view('admin.category');
    }

    

    public function product(){

        return view('admin.products');
    }


    public function add_category(){

        return view('admin.add_category');
    }
}
