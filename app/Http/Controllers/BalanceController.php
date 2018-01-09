<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Part;
use App\Spending;

class BalanceController extends Controller
{
    public function index(){

        $totalSpending = Spending::sum('price');
        $totalPart = Part::sum('day');

        $pricePart = round($totalSpending / $totalPart, 2);

        $users = User::all();

        return view('back.balance.index', compact('users', 'pricePart', 'totalSpending', 'totalPart'));
    }
}
