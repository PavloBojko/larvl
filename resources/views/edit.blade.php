@extends('layout')

@section('content')
<div class="container">
    <div class="col-md-5">
        <h1>Edit Imege</h1>
        <img src="/{{$image->image}}" alt="qqq" class="img-thumbnail galery-img">

        <form action="/update/{{$image->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" value="{{$image->image}}" name="src">
            <div class="form-control">
                <input type="file" name="image" id="">
            </div>

            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
    </div>
</div>
@endsection