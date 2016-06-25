<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PaymentType;
use App\Client;
use App\Policy;

class ClientsController extends Controller
{
    protected $rules = [
        'name' => 'required',
        'email' => 'email|required',
        'identification' => 'required',
        'policy_id' => 'required',
        'payment_type_id' => 'required',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('policies')->byUser(\Auth::user())->paginate(10);
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $policies = Policy::orderBy('name')->lists('name', 'id');
        $paymentTypes = PaymentType::orderBy('name')->lists('name', 'id');
        return view('clients.create')
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
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $policy = Policy::findOrFail($request->policy_id);
        $all = $request->all();
        $all['user_id'] = \Auth::user()->id;
        $client = Client::create($all);
        $client->policies()->save($policy, ['payment_type_id' => $all['payment_type_id']]);

        session()->flash('info', trans('messages.createdSuccessfully'));
        return redirect()->route("clients.show", $client->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::with(['policies', 'payments'])->findOrFail($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $policies = Policy::orderBy('name')->lists('name', 'id');
        $paymentTypes = PaymentType::orderBy('name')->lists('name', 'id');

        return view('clients.edit')
            ->with(compact('client'))
            ->with(compact('policies'))
            ->with(compact('paymentTypes'))
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        session()->flash('info', trans('messages.deleteSuccessfully'));
    }
}
