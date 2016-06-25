@extends('layouts.app')

@section('breadcrumbs')
    <li>
        <a href="{{route("clients.index")}}"><i class="fa fa-clients"></i> {{ trans('messages.clients') }}</a>
    </li>
    <li class="active">
        {{ trans('messages.details') }}
    </li>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
              <h1>{{$client->name}}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">{{trans('messages.profile')}}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">{{trans('messages.identification')}}</strong></span>{{$client->identification}}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">{{trans('messages.email')}}</strong></span>{{$client->email}}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">{{trans('messages.phone')}}</strong></span>{{$client->phone}}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">{{trans('messages.address')}}</strong></span>{{$client->address}}</li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <span class="panel-title"><i class="fa fa-building-o"></i> {{trans('messages.policies')}}</span>
                    <div class="btn-group pull-right">
                        <a href="{{route('clients.policies.create', $client->id)}}" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> {{trans('messages.add')}}</a>
                    </div>
                </div>
                @include('clients/_policies-table')
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <span class="panel-title"><i class="fa fa-money"></i> {{trans('messages.payments')}}</span>
                    <div class="btn-group pull-right">
                        <a href="{{route('clients.payments.create', $client->id)}}" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> {{trans('messages.add')}}</a>
                    </div>
                </div>
                @include('clients/_payments-table')
            </div>
        </div>
    </div>
</div>
@endsection
