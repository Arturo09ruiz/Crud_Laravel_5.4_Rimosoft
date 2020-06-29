<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;
use Crud\Product;
use Crud\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    public function index (){
        $products = Product::orderBy('id','DESC')->paginate();
        return view('products.index', compact('products'));
    }

    public function store(ProductRequest $request){
        return'Producto Guardado';
    }

    public function update(ProductRequest $request, $id){
        return'Producto Actualizado'. $id ;
    }

    public function create (){
        return view('products.create');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return back()->with('info', 'El Producto Fue Eliminado');
    }
}
