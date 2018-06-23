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
        <div class="container">
            <div class="row">
                @foreach($value as $item)
                    <div class="col-sm-2" >
                        <div class="panel panel-success">
                            <div class="panel-heading">About Section's Photos</div>
                            <div class="panel-body"><img src="{{'/storage/aboutsection/'.$item->photo}}" style="width:100%" class="img-responsive"></div>
                            <div class="panel-footer">
                                {{--start delete part--}}
                                <form class="" action="/aboutsection/{{$item->id}}" method="post">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="Delete">
                                </form>
                                {{--close delete part--}}

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><br>

    </div>
@endsection