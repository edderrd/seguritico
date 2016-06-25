@extends('layouts/error-page')

@section('title', 'Seguritico | 500')

@section('styles')
    <style>
        body {
            background-color: #ad6464;
        }
    </style>
@stop

@section('content')
    <div class="title">{{ trans('messages.applicationError') }}</div>
    <a href="{{ url('/') }}" class="btn btn-primary">{{ trans('messages.backToHome') }}</a>
@endsection
