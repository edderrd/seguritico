<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Payment;
use App\Client;

class ClientPaymentsController extends Controller
{
    protected $rules = [
        'policy_id' => 'required',
        'amount' => 'numeric',
    ];

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $client = Client::findOrFail($id);
        $policies = $client->policies()->get()->lists('name', 'id');
        return view('clients.payments.create')
            ->with(compact('client'))
            ->with(compact('policies'))
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, $this->rules);

        $attributes = $request->all();
        $attributes['user_id'] = \Auth::user()->id;
        $attributes['client_id'] = $id;
        $attributes['paid_at'] = new \DateTime();

        $payment = Payment::create($attributes);

        session()->flash('info', 'messages.createdSuccessfully');
        return redirect()->route('clients.show', $id);
    }
}
