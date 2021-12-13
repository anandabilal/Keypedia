<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ManageCategoryController extends Controller
{
    public function index()
    {
        if(auth()->user()->role_id != 1)
        {
            return redirect('/');
        }
        
        $categories = Category::all();
        $title = 'Manage Category';
        return view('manage_category', compact('title', 'categories'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
