<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function view() {
        $products = product::all();
        //dd($products);
        return view("products", ["products"=> $products]);
    }
}
