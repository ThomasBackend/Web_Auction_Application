<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\User;
use App\Models\Bid;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('home.product_details', compact('product'));
    }

    public function updateDelivery($id)
    {
        $product = Product::findOrFail($id);
        $product->delivery = 2;
        $product->save();
        return redirect()->back()->with('message', 'Delivery status updated successfully.');
    }
}
