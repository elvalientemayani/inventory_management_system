<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    //
    public function transactionHistory()
{
    $transactions = Transaction::orderBy('created_at', 'desc')->take(20)->get();  
    
    return view('transaction_history', compact('transactions'));
}

}
