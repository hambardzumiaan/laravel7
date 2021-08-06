@extends("layouts.main")

@section("title", "Create")

@section("content")

    <div class="container mt-5">

{{--        @include("errors.form")--}}

        <form method="POST">

            @csrf

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">

                @error('name')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Capital</label>
                <input type="text" class="form-control" name="capital">

                @error('capital')
                <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Population</label>
                <input type="text" class="form-control" name="population">

                @error('population')
                <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Member Of Nato:</label>

                <select name="is_nato">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div>
                <input type="submit" value="New" class="btn btn-primary">
            </div>
        </form>

    </div>

@endsection
