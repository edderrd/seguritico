@extends('layouts.app')

@section('breadcrumbs')
    <li class="active">
        <a href="{{route("clients.index")}}"><i class="fa fa-users"></i> {{ trans('messages.clients') }}</a>
    </li>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="panel-title"><i class="fa fa-users"></i> {{trans('messages.clients')}}</span>
                    <div class="btn-group pull-right">
                        <a href="{{route('clients.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> {{trans('messages.add')}}</a>
                    </div>
                </div>

                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{trans('messages.indentification')}}</th>
                            <th>{{trans('messages.name')}}</th>
                            <th>{{trans('messages.email')}}</th>
                            <th>{{ trans('messages.policies') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($clients as $client)
                            <tr>
                                <td><a href="{{route('clients.show', $client->id)}}">{{$client->identification}}</a></td>
                                <td><a href="{{route('clients.show', $client->id)}}">{{$client->name}}</a></td>
                                <td>{{$client->email}}</td>
                                <td><span class="badge">{{$client->policies->count()}}</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('clients.edit', $client->id)}}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <confirm
                                            href="{{route('clients.destroy', $client->id) }}"
                                            class="btn btn-danger"
                                            method="delete"
                                            message="{{trans('messages.confirmDelete')}}"
                                        ><i class="fa fa-trash"></i></confirm>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <center><b>{{trans('messages.noData')}}</b></center>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{$clients->links()}}
        </div>
    </div>
</div>
@endsection
