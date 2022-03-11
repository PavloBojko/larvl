@extends('layout')

@section('content')
<div class="container">
    <div class="col-md-5">
        <h1>Add Imege</h1>
        <form action="/stor" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-control">
                <input type="file" name="image" id="">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection