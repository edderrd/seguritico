<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Payment;
use App\Client;
use App\Policy;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientsCount = Client::byUser(\Auth::user())->get()->count();
        $policiesCount = Policy::byUser(\Auth::user())->get()->count();
        $paymentTotal = Payment::byUserOwner(\Auth::user())->get()->sum('amount');

        return view('home')
            ->with(compact('clientsCount'))
            ->with(compact('policiesCount'))
            ->with(compact('paymentTotal'))
        ;
    }
}
