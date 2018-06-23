@extends('layouts.app')

@section('content')
    <div class="sidenav">
        <a href="/home">Home</a> {{-- eta diye admin datbase er  home e jabo--}}
        <a href="/data/create">Add Item</a> {{-- eta diye admin kono item add korte parbe  --}}
        <a href="/data">All Food</a> {{-- eta diye admin all food item dekte parbe  --}}
        <a href="#clients">Clients Order</a>
        <a href="#services">All Admin</a>
        <a href="/aboutsection">About Section</a>
        <a href="/aboutsection/create ">About Store</a>
        <a href="/videosection">Video Section</a>
        {{--<a href="/videosection/create">Video Store</a>--}}
        <a href="/">Visit Site</a> {{-- eta diye user er  home e jabo--}}
    </div>

    <div class="main">
        <h2>Analysis Type er kisu rakbo,,,,,,</h2>

    </div>
@endsection
