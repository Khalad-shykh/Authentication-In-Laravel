<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function ShowProducts()
    {
        $products = Products::all();
        return view("AdminDashboard.AllProducts")->with('products',$products);
    }
}
