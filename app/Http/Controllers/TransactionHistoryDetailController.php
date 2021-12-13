<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionHistoryDetailController extends Controller
{
    public function index($id)
    {
        $transaction = Transaction::find($id);

        // If the authenticated customer try to see other customer's transaction detail, they will be redirected to the Home page
        if(auth()->user()->role_id != 2 || auth()->user()->user_id != $transaction->user_id)
        {
            return redirect('/');
        }

        $transactionDetails = TransactionDetail::leftJoin('keyboards', 'transaction_details.keyboard_id', '=', 'keyboards.keyboard_id')
        ->where('transaction_details.transaction_id', '=', $id)
        ->get([
            'transaction_details.transaction_detail_id',
            'transaction_details.transaction_id',
            'transaction_details.keyboard_id',
            'transaction_details.quantity',
            'keyboards.name',
            'keyboards.price',
            'keyboards.image',
            DB::raw('keyboards.price * transaction_details.quantity as sub_total'),
        ]);

        $grandTotal = TransactionDetail::join('keyboards', 'transaction_details.keyboard_id', '=', 'keyboards.keyboard_id')
        ->where('transaction_details.transaction_id', '=', $id)
        ->get([
            DB::raw('SUM(keyboards.price * transaction_details.quantity) as grand_total'),
        ]);

        $categories = Category::all();
        $title = 'Transaction History Detail';
        return view('transaction_history_detail', compact('title', 'categories', 'transactionDetails', 'transaction', 'grandTotal'));
    }
}
