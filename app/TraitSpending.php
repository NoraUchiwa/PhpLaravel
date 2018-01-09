<?php

namespace App;

use DB;

trait TraitSpending {

public function totalSpending():int
{
// code qui permet de retourner le total des dépenses
    $spendingsTotal= DB::table('spendings')->sum('price');
}

public function totalSpendingByUser(){

// le total par utilisateur avec le nom de l'utilisateur
    $users = DB::table('spendings_user')
        ->groupBy('user_id')
        ->havingRaw('SUM(price) > 2500')
        ->get();
}

}