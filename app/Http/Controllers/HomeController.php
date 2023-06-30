<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{

    public function index(){
        
return view('home.welcome');

    }
    public function prodPage(){
        $product = Product::where('active', 1)->get();
        return view('home.product',compact('product'));
    }
    public function redirect(){

        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            $product = Product::where('active', 1)->get();
            return view('home.userpage',compact('product'));
        }
    }
    public function wonBids()
    {
        $products = Product::where('winner_id', auth()->user()->username)
                            ->where('active', 0)
                            ->get();

        return view('home.won_bids', compact('products'));
}
}
