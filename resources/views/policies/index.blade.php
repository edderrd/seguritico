@extends('layouts.app')

@section('content')

@section('breadcrumbs')
    <li class="active">
        <a href="{{route("policies.index")}}"><i class="fa fa-file-text-o"></i> {{ trans('messages.policies') }}</a>
    </li>
@stop


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="panel-title"><i class="fa fa-file-text-o"></i> {{trans('messages.policies')}}</span>
                    <div class="btn-group pull-right">
                        <a href="{{route('policies.create')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> {{ trans('messages.add') }}</a>
                    </div>
                </div>

                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{trans('messages.name')}}</th>
                            <th>{{trans('messages.insurer')}}</th>
                            <th>{{trans('messages.price')}}</th>
                            <th>{{trans('messages.type')}}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($policies as $policy)
                            <tr>
                                <td>
                                    <a href="#">{{$policy->name}}</a>
                                </td>
                                <td>{{$policy->insurer->name}}</td>
                                <td>{{$policy->priceFormatted}}</td>
                                <td>{{$policy->policyType->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('policies.edit', $policy->id)}}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
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
            {{$policies->links() }}
        </div>
    </div>
</div>
@endsection
