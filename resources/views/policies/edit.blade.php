@extends('layouts.app')

@section('breadcrumbs')
    <li>
        <a href="{{route("policies.index")}}"><i class="fa fa-file-text-o"></i> {{ trans('messages.policies') }}</a>
    </li>
    <li class="active">
        {{ trans('messages.edit') }}
    </li>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-pencil"></i> {{trans('messages.edit')}} {{trans('messages.policy')}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('policies.update', $policy->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">{{trans('messages.name')}}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $policy->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">{{trans('messages.price')}}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">₡</span>
                                    <input id="price" type="number" class="form-control" value="{{$policy->price}}" name="price">
                                </div>
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('insurer_id') ? ' has-error' : '' }}">
                            <label for="insurer_id" class="col-md-4 control-label">{{trans('messages.insurer')}}</label>
                            <div class="col-md-6">
                                {!! Form::select('insurer_id', $insurers, $policy->insurer_id, ['class' => 'form-control']) !!}
                                @if ($errors->has('insurer_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('insurer_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('policy_type_id') ? ' has-error' : '' }}">
                            <label for="policy_type_id" class="col-md-4 control-label">{{trans('messages.policyType')}}</label>
                            <div class="col-md-6">
                                {!! Form::select('policy_type_id', $policyTypes, $policy->policy_type_id, ['class' => 'form-control']) !!}
                                @if ($errors->has('policy_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('policy_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('messages.save')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
