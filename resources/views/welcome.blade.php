@extends('layout')

@section('content')

<div class="container">
    <h1 align='center'>My Gallery </h1>
    <div class="row">
        @foreach($image as $items)
        <div class="col-md-3 gallery-item">
            <div><img src="{{$items->image}}" alt="img" class="img-thumbnail">
                <a href="/show/{{$items->id}}" class="btn btn-info my_button">Show</a>
                <a href="/edit/{{$items->id}}" class="btn btn-warning my_button">Edit</a>
                <a href="/delate/{{$items->id}}" class="btn btn-danger my_button" onclick="return confirm('Are you sure?')">Delate</a>

            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection

@section('header')
<h1>main info </h1>
@endsection