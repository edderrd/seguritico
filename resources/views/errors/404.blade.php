@extends('layouts/error-page')

@section('title', 'Seguritico | 404')

@section('styles')
    <style>
        body {
            background-color: #ad9e64;
            color: #e6e6e6 !important;
        }
    </style>
@stop

@section('content')
    <div class="title">{{ trans('messages.notFound') }}</div>
    <a href="{{ url('/') }}" class="btn btn-primary">{{ trans('messages.backToHome') }}</a>
@endsection
