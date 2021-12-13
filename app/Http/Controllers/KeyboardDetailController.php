<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyboardDetailController extends Controller
{
    public function index($id)
    {
        $keyboardSelected = Keyboard::find($id);
        $categories = Category::all();
        $title = 'Keyboard Detail';
        return view('keyboard_detail', compact('title', 'categories', 'keyboardSelected'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Find if there is a cart with the same user_id and keyboard_id
        $cart = Cart::where('user_id', '=', auth()->user()->user_id)
        ->where('keyboard_id', '=', $id)
        ->first();
  
        // If not, create a new cart
        if($cart == null)
        { 
            $cart = [
                'user_id' => auth()->user()->user_id,
                'keyboard_id' => $id,
                'quantity' => $request->quantity,
            ];
            Cart::Create($cart);
            $request->session()->flash('success', 'Keyboard successfully added to a new cart.');
        // If there is, add the quantity
        } else {
            $cart->quantity += $request->quantity;
            $cart->save();
            $request->session()->flash('success', 'Keyboard successfully added to an existing cart.');
        }

        return back();
    }
}
