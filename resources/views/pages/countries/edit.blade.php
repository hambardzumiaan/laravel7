@extends("layouts.main")

@section("title", "Create")

@section("content")

<div class="container mt-5">
    <form method="POST">

        @csrf

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$country->name}}">
        </div>

        <div class="form-group">
            <label for="">Capital</label>
            <input type="text" class="form-control" name="capital" value="{{$country->capital}}">
        </div>

        <div class="form-group">
            <label for="">Population</label>
            <input type="text" class="form-control" name="population" value="{{$country->population}}">
        </div>

        <div class="form-group">
            <label for="">Member Of Nato:</label>

            <select name="is_nato">
                <option value="1" @php

                    if($country->is_nato == 1){@endphp
                        selected
                    @php } @endphp >Yes</option>
                <option value="0" @php

                    if($country->is_nato == 0){@endphp
                selected
                    @php } @endphp>No</option>
            </select>
        </div>
        <div>
            <input type="submit" value="New" class="btn btn-primary">
        </div>
    </form>

</div>

@endsection