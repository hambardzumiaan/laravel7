@extends("layouts.main")

@section("title", "Document")

@section("content")
    <div class="container">

        @auth
        <a href="/countries/create">New</a>
        @else
            Sign to Add
        @endauth

        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Capital</th>
                <th>Population</th>
                <th>Member Of Nato</th>
                <th>Action</th>
            </tr>


            @foreach($countries as $key => $country)

            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$country->name}}</td>
                <td>{{$country->capital}}</td>
                <td>
                    @php
                        if ($country->population >= 1000000000){
                            $country->population = floor($country->population/1000000000) . "B";
                        }elseif ($country->population >=1000000){
                            $country->population = floor($country->population/1000000) . "M";
                        }elseif ($country->population >= 1000){
                            $country->population = floor($country->population/1000) . "K";
                        }
                    @endphp

                    {{$country->population}}
                </td>
                <td>
                    <span class="badge badge-<?= $setting[$country->is_nato]["bg"] ?>">{{$setting[$country->is_nato]["mark"]}}</span>
                </td>

                <td class="d-flex">


                    <a href="/countries/edit/{{$country->id}}" class="btn btn-warning">Edit</a>


                    <form action="/countries/delete/{{$country->id}}" method="POST">
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>

@endsection
