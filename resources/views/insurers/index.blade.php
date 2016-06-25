@extends('layouts.app')

@section('breadcrumbs')
    <li class="active">
        <a href="{{route("insurers.index")}}"><i class="fa fa-building-o"></i> {{ trans('messages.insurers') }}</a>
    </li>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-building"></i> {{trans('messages.insurers')}}
                    </div>
                </div>

                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{trans('messages.name')}}</th>
                            <th>Policies</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($insurers as $insurer)
                            <tr>
                                <td>{{$insurer->id}}</td>
                                <td>{{$insurer->name}}</td>
                                <td><span class="badge">{{$insurer->policies->count()}}</span></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">
                                    <h4>{{trans('messages.noData')}}</h4>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{$insurers->links()}}
        </div>
    </div>
</div>
@endsection
