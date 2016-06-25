@extends('layouts.app')

@section('breadcrumbs')
    <li>
        <a href="{{route("clients.index")}}"><i class="fa fa-clients"></i> {{ trans('messages.clients') }}</a>
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
                    <div class="panel-heading">
                        <span class="panel-title"><i class="fa fa-pencil"></i> {{trans('messages.edit')}} {{trans('messages.clients')}}</span>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($client, ['route' => 'clients.store', 'class' => 'form-horizontal', 'method' => 'post']) !!}
                            @include('clients._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
