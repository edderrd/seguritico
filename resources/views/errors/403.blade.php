@extends('layouts/error-page')

@section('title', '403')

@section('styles')
    <style>
        body {
            background-color: #ad9e64;
            color: #e6e6e6 !important;
        }
    </style>
@stop

@section('content')
    <div class="title">{{ trans('messages.notAuthorized') }}</div>
    <a href="{{ url('/') }}" class="btn btn-primary">{{ trans('messages.backToHome') }}</a>
@endsection
