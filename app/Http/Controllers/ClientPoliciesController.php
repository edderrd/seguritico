<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Policy;
use App\Client;
use App\PaymentType;

class ClientPoliciesController extends Controller
{
    protected $rules = [
        'payment_type_id' => 'required',
        'policy_id' => 'required',
    ];

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $client = Client::findOrFail($id);
        $paymentTypes = PaymentType::lists('name', 'id');
        $policies = Policy::lists('name', 'id');

        return view('clients.policies.create')
            ->with(compact('client'))
            ->with(compact('policies'))
            ->with(compact('paymentTypes'))
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
        $policy = Policy::findOrFail($request->policy_id);
        $client = Client::findOrFail($id);
        $client->policies()->save($policy, ['payment_type_id' => $request->payment_type_id]);

        session()->flash('info', 'messages.createdSuccessfully');
        return redirect()->route('clients.show', $id);
    }
}
