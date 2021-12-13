<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class UpdateKeyboardController extends Controller
{
    public function index($id)
    {
        if(auth()->user()->role_id != 1)
        {
            return redirect('/');
        }

        $categories = Category::all();
        $keyboardSelected = Keyboard::find($id);
        $title = 'Update Keyboard';
        return view('update_keyboard', compact('title', 'categories', 'keyboardSelected'));
    }

    public function update(Request $request, $id)
    {
        $keyboard = Keyboard::find($id);

        $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:5',
            'price' => 'required|integer|min:1',
            'description' => 'required|min:20',
            'image' => 'nullable|mimes:jpg,jpeg,png,svg',
        ]);

        if($request->category_id == $keyboard->category_id && $request->name == $keyboard->name && $request->price == $keyboard->price && $request->description == $keyboard->description && $request->image == null) {
            return back()->withErrors('Nothing was changed.');
        }

        $keyboard->category_id = $request->category_id;
        $keyboard->name = $request->name;
        $keyboard->price = $request->price;
        $keyboard->description = $request->description;
        if($request->image != null)
        {
            $newImageName = time() . '-' . $request->file('image')->getClientOriginalName();
            // Will save image to public/images as $newImageName
            $request->image->move(public_path('/images'), $newImageName);
            $keyboard->image = $newImageName;
        }
        
        $keyboard->save();

        $request->session()->flash('success', 'Keyboard updated successfully.');
        // Will redirect to the new keyboard category page
        return redirect('/view_keyboard/' . $request->category_id);
    }
}
