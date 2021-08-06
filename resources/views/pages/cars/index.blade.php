@extends("layouts.main")

@section("title", "Document")

@section("content")
    <div class="container">

        @auth
            <a href="/cars/create">New</a>
        @else
            Sign to Add
        @endauth

        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Model</th>
                <th>Power</th>
                <th>Kilometer</th>
                <th>Price</th>
                <th>Year</th>
                <th>Action</th>
            </tr>


            @foreach($cars as $key => $car)

                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$car->name}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->power}}</td>
                    <td>{{$car->km}}</td>
                    <td>{{$car->price}}</td>
                    <td>{{$car->year}}</td>

                    <td class="d-flex">  

                        {{-- <a href="/cars/edit/{{$car->id}}" class="btn btn-warning">Edit</a> --}}

                        <a href="{{ route('cars.edit', ['id' => $car->id]) }}" class="btn btn-warning">Edit</a>


                        <form action="/cars/delete/{{$car->id}}" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>

            @endforeach
        </table>
    </div>

@endsection