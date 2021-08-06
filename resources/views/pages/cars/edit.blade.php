@extends("layouts.main")

@section("title", "Create")

@section("content")

<div class="container mt-5">
    <form method="POST">

        @csrf

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$car->name}}">
        </div>

        <div class="form-group">
            <label for="">Model</label>
            <input type="text" class="form-control" name="model" value="{{$car->model}}">
        </div>

        <div class="form-group">
            <label for="">Power</label>
            <input type="text" class="form-control" name="power" value="{{$car->power}}">
        </div>

        <div class="form-group">
            <label for="">Kilometer</label>
            <input type="text" class="form-control" name="km" value="{{$car->km}}">
        </div>

        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" value="{{$car->price}}">
        </div>

        <div class="form-group">
            <label for="">Year</label>
            <input type="text" class="form-control" name="year" value="{{$car->year}}">
        </div>


        <div>
            <input type="submit" value="Update" class="btn btn-primary">
        </div>
    </form>

</div>

@endsection
