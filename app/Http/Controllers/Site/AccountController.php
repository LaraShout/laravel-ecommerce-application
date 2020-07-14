<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function getOrders()
    {
        $orders = auth()->user()->orders;

        return view('site.pages.account.orders', compact('orders'));
    }
}
