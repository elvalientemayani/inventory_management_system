<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Transaction;

class DashboardController extends Controller
{
    //
    public function dashboard()
{
    $totalItems = Item::count();
    $lowStockItems = Item::where('quantity', '<', 10)->count();
    $recentTransactions = Transaction::orderBy('created_at', 'desc')->take(5)->get();
    
    return view('dashboard', compact('totalItems', 'lowStockItems', 'recentTransactions'));
}

}
