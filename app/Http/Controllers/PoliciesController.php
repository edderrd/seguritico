<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PolicyType;
use App\Insurer;
use App\Policy;

class PoliciesController extends Controller
{
    protected $rules = [
        'name' => ['required', 'max:255'],
        'price' => ['required', 'numeric'],
        'insurer_id' => ['required'],
        'policy_type_id' => ['required'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policies = Policy::with('insurer', 'policyType')->orderBy('name')->paginate(10);
        return view('policies.index')->with(compact('policies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insurers = Insurer::lists('name', 'id');
        $policyTypes = PolicyType::lists('name', 'id');
        return view('policies.create')
            ->with(compact('insurers'))
            ->with(compact('policyTypes'))
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
        Policy::create($request->all());

        session()->flash('info', trans('messages.createdSuccessfully'));
        return redirect()->route('policies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $policy = Policy::findOrFail($id);
        $insurers = Insurer::lists('name', 'id');
        $policyTypes = PolicyType::lists('name', 'id');
        return view('policies.edit')
            ->with(compact('policy'))
            ->with(compact('insurers'))
            ->with(compact('policyTypes'))
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
        $this->validate($request, $this->rules);
        $policy = Policy::find($id);
        $policy->update($request->all());
        $policy->save();

        session()->flash('info', trans('messages.updatedSuccessfully'));
        return redirect()->route('policies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
