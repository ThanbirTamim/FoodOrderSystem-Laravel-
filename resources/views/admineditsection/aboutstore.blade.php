@extends('layouts.app')

@section('content')
    <div class="sidenav">
        <a href="/home">Home</a>
        <a href="/data/create">Add Item</a>
        <a href="/data">All Food</a>
        <a href="#clients">Clients Order</a>
        <a href="#services">All Admin</a>
        <a href="/aboutsection">About Section</a>
        <a href="/aboutsection/create ">About Store</a>
        <a href="/videosection">Video Section</a>
        {{--<a href="/videosection/create">Video Store</a>--}}
        <a href="/">Visit Site</a> {{-- eta diye user er  home e jabo--}}
    </div>

    <div class="main">
        <br>
        <center><h2>Add New About Section Photos</h2></center>
        <div class="container">
            <div class="row">

                <form action="/aboutsection" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label for="file">Select Image</label><br>
                    <input type="file" name="file"><br><br>


                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <center><i><h4 style="color:#ff0000;"><br>**{{$error}}** <br></h4></i></center>
            @endforeach
        @endif
    </div>


@endsection