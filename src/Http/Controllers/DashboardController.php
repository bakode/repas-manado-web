<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Merchant\Building;
use App\Models\Merchant\Owner;
use App\Models\Transaction;

class DashboardController extends Controller
{

    public function index($request, $response)
    {
        $transaction_month = Transaction::whereMonth('payment_time', date('m'))->sum('total');
        $transaction_year = Transaction::whereYear('payment_time', date('Y'))->sum('total');

        $building_total= Building::all()->count();
        $owner_total = Owner::all()->count();

        $data = [
            'path' => 'home',
            'building_total' => $building_total ? $building_total : 0,
            'owner_total' => $owner_total ? $owner_total : 0,
            'transaction_month' => $transaction_month ? $transaction_month : 0,
            'transaction_year' => $transaction_year ? $transaction_year : 0
        ];

        return $this->view->render($response, 'index.twig', compact('data'));
    }

}