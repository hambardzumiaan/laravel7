@extends("layouts.main")

@section("title", "Create")

@section("content")

    <div class="container mt-5">


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
                <label for="">Model</label>
                <input type="text" class="form-control" name="model">

                @error('model')
                <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Power</label>
                <input type="text" class="form-control" name="power">

                @error('power')
                <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Kilometer</label>
                <input type="text" class="form-control" name="km">

                @error('km')
                <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" name="price">

                @error('price')
                <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Year</label>
                <input type="text" class="form-control" name="year">

                @error('year')
                <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            
            <div>
                <input type="submit" value="New" class="btn btn-primary">
            </div>
        </form>

    </div>

@endsection
