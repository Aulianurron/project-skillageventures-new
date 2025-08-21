<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Programs;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        
        $dashboard['product'] = Product::count();
        $dashboard['program'] = Programs::count();
        $dashboard['order'] = Order::count();
        $dashboard['income'] = Order::where('status', 'paid')->sum('total');

        return view('pages.admin.dashboard', $dashboard);
    }
}
