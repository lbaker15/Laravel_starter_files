@extends('layouts.app')

@section('content')

hello
@if (count($values))
    @foreach($values as $val)
        {{$val}}
    @endforeach
@endif

@stop