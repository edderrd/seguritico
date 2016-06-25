@extends('layouts.app')

@section('breadcrumbs')
    <li>
        <a href="{{route("clients.index")}}"><i class="fa fa-clients"></i> {{ trans('messages.clients') }}</a>
    </li>
    <li class="active">
        {{ trans('messages.add') }}
    </li>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title"><i class="fa fa-plus"></i> {{trans('messages.add')}} {{trans('messages.clients')}}</span>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'clients.store', 'class' => 'form-horizontal', 'method' => 'post']) !!}
                            @include('clients._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
