@extends('layout')

@section('content')
    @include('firstcontroller._songs', ["songs" => $songs])


@endsection
