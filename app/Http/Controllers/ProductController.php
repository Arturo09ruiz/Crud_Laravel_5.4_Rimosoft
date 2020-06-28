<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return view('products.index');
    }
}
