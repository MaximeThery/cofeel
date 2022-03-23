@extends('layout')

@section('content')
<img src="{{ asset('about.png') }}" alt="">
@auth
        {{Auth::user()->name}}
        @else
        @endauth
@endsection
