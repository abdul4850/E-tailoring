<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Checkout;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getIndex()
    {
        $users = User::all();
        return view('admin.dashboard', ['users' => $users]);
    }
    public function getProduct()
    {
        $products = Product::all();
        return view('admin.adminproducts', ['products' => $products]);
    }
    public function getOrder()
    {
        $orders = Checkout::all();
        return view('admin.adminorder', ['orders' => $orders]);
    }
}
