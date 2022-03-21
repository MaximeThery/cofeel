@extends('layout')

@section('content')
    <h1>Article n°{{$id}}</h1>
    {{$s->note}}
@endsection
