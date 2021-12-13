<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewKeyboardController extends Controller
{
    public function index($id)
    {
        $keyboards = DB::table('keyboards')
        ->where('category_id', '=', $id)
        ->paginate(8);

        // Redirect to N-1 page if you delete all items in page N, if you are at page 1 when you deleted all the items, then the page will just show no items
        if($keyboards->count() == 0 && $keyboards->currentPage() != 1)
        {
            return redirect($keyboards->previousPageUrl());
        }

        if(request('search'))
        {
            // SELECT * FROM keyboards WHERE category_id = 1 AND (name LIKE '%10%' OR price = 10)
            $keyboards = DB::table('keyboards')
            ->where('category_id', '=', $id)
            ->where(function($query) {
                $query
                    ->where('name', 'like', '%' . request('search') . '%')
                    ->orWhere('price', '=', request('search'));
            })
            ->paginate(8);
        }

        $categories = Category::all();
        $categorySelected = Category::find($id);

        $title = 'View Keyboard';
        return view('view_keyboard', compact('title', 'categories', 'categorySelected', 'keyboards'));
    }

    public function destroy($id)
    {
        $keyboard = Keyboard::find($id);
        $keyboard->delete();
        return back();
    }
}
