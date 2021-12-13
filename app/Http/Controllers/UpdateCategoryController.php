<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UpdateCategoryController extends Controller
{
    public function index($id)
    {
        if(auth()->user()->role_id != 1)
        {
            return redirect('/');
        }

        $categories = Category::all();
        $categorySelected = Category::find($id);
        $title = 'Update Category';
        return view('update_category', compact('title', 'categories', 'categorySelected'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        // I want to use this $request->validate, but they gave an error.

        // ERROR message:
        // SQLSTATE[42S22]: Column not found: 1054 Unknown column 'id' in 'where clause' (SQL: select count(*) as aggregate from `categories` where `name` = Corsair and `id` <> 1)

        // The error happens as if 'categories' table have a primary key column called 'id' even though I already changed it to 'category_id' in model and migration file.

        // $request->validate([
        //     'name' => 'required|min:5|unique:categories,name,'.$id,
        //     'image' => 'nullable|mimes:jpg,jpeg,png,svg',
        // ]);

        // A way to circumvent the error:
        if($request->name == $category->name)
        {
            $request->validate([
                'name' => 'required|min:5',
                'image' => 'nullable|mimes:jpg,jpeg,png,svg',
            ]);
        } else {
            $request->validate([
                'name' => 'required|min:5|unique:categories',
                'image' => 'nullable|mimes:jpg,jpeg,png,svg',
            ]);
        }

        if($request->name == $category->name && $request->image == null)
        {
            return back()->withErrors('Nothing was changed.');
        }

        $category->name = $request->name;
        if($request->image != null)
        {
            $newImageName = time() . '-' . $request->file('image')->getClientOriginalName();
            // Will save image to public/images as $newImageName
            $request->image->move(public_path('/images'), $newImageName);
            $category->image = $newImageName;
        }

        $category->save();

        $request->session()->flash('success', 'Category updated successfully.');
        return redirect('/manage_category');
    }
}
