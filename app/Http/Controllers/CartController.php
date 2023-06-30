<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Product;
use Cart;
use App\Models\User;
use App\Models\Bid;
use App\Models\Order;
use App\Models\OrderProduct;

class CartController extends Controller
{
   
    public function index()
    {
        $products = Product::where('winner_id', auth()->user()->username)
                            ->where('active', 0)
                            ->where('delivery', 0)
                            ->get();

        return view('home.cart', compact('products'));
}
public function updateDelivery()
{
    $products = Product::where('delivery', 0)->where('active', 0)->where('winner_id', auth()->user()->username)->get();

    if ($products->isEmpty()) {
        return redirect()->back()->with('message', 'There are no products to be delivered');
    }
    
    foreach ($products as $product) {
        $product->delivery = 1;
        $product->save();
    }
    
    return redirect()->back()->with('message', 'Delivery status updated!');
}
}