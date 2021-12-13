<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $title = 'Change Password';
        return view('change_password', compact('title', 'categories'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|min:8',
            'new_confirm_password' => 'required|same:new_password',
        ]);

        // bcrypt('') is the same as Hash::make('')
        User::find(auth()->user()->user_id)->update(['password' => bcrypt($request->new_password)]);

        $request->session()->flash('success', 'Password updated successfully.');
        return back();
    }
}
