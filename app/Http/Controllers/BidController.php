<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Bid;
use App\Models\User;

class BidController extends Controller
{
    public function submit(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $this->validate($request, [
        'bid' => 'required|numeric|min:' . ($product->current_price + 1)
    ]);

    $product->current_price = $request->input('bid');
    $product->winner_id = Auth::user()->username;
    $product->save();

    return redirect()->route('product.show', $product->id)->with('message', 'Bid placed Successfully');
}
public function activeBids()
{
    $user = Auth::user(); // Get the authenticated user
    $activeBids = Product::where('active', '=', 1)
        ->where('winner_id', '=', $user->username)
        ->orderBy('current_price', 'desc')
        ->get(); // Retrieve the user's active bids

    return view('home.active_bids', [
        'activeBids' => $activeBids
    ]);
}
}
