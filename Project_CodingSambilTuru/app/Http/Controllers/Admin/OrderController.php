<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ordrer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index()
    {
        $pending_orders = Ordrer::where('status', 'pending')->latest()->get();
        return view('admin.pendingorders', compact('pending_orders'));
    }
}
