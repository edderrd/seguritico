@extends('layouts.app')

@section('breadcrumbs')
    <li class="active">
        <a href="{{route("home")}}"><i class="fa fa-home"></i> {{ trans('messages.home') }}</a>
    </li>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                @include('home/clients-widget')
            </div>
            <div class="col-lg-4 col-md-6">
                @include('home/policies-widget')
            </div>
            <div class="col-lg-4 col-md-6">
                @include('home/revenue-widget')
            </div>
        </div>
    </div>


{{-- <div class="container">
    <div class="row">
        <div class="col-md-6">
            @include('home/top-clients-widget')
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="panel-title">Top Policies</span></div>

                <ul class="list-group">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}
@endsection
