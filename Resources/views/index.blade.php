@extends('oauth2::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('oauth2.name') !!}
    </p>
@stop
