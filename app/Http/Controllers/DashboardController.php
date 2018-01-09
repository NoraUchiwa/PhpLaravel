<?php

namespace App\Http\Controllers;
use App\Spending; // alias
use App\TraitSpending;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use TraitSpending;

    public function index() {
        $totalSpending = $this->totalSpending();
        $totalSpendingByUser = $this->totalSpendingByUser();
        return view('back.dashboard', ['total'=>$totalSpending, 'spendings'=>$totalSpendingByUser]) ;
    }


}
