<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class AddKeyboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->role_id != 1)
        {
            return redirect('/');
        }
        
        $categories = Category::all();
        $title = 'Add Keyboard';
        return view('add_keyboard', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        $keyboard = $request->validate([
            'category_id' => 'required',
            'name' => 'required|unique:keyboards|min:5',
            'price' => 'required|integer|min:1',
            'description' => 'required|min:20',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);
        
        $newImageName = time() . '-' . $request->file('image')->getClientOriginalName();
        // Will save image to public/images as $newImageName
        $request->image->move(public_path('/images'), $newImageName);
        $keyboard['image'] = $newImageName;
        
        Keyboard::create($keyboard);

        $request->session()->flash('success', 'Keyboard added successfully.');
        return back();
    }
}
