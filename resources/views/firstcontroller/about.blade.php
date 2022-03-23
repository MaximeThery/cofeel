@extends('layout')

@section('content')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
<div class="img__log">
<img src="{{ asset('about.png') }}" alt="">
<p>
@auth
        {{Auth::user()->name}}
        @else
@endauth
</p>


<a href="/nouvelle/chanson" class="New__song">Add a new song</a>
</div>
@endsection
