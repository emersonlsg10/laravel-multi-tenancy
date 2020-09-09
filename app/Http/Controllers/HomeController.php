<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Shopping;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $accounts = Account::where('status', 1)
            ->get();

        $totalAccounts = 0;
        foreach ($accounts as $account) {
            $totalAccounts += floatval($account->value);
        }

        $totalAccounts = number_format($totalAccounts, 2, ',', '.');

        return view('tenant.index', compact('totalAccounts'));
    }

    public function calendar()
    {
        $shoppings = Shopping::all();

        return view('calendar', compact('shoppings'));
    }
}
