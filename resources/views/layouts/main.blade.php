<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield("title")</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

  <div>
        <ul class="row" style="list-style: none;">

            <li class="col-2">
                <a href="/countries" class="btn
                   {{--  @if(
                    Route::current()->getName() == 'countries.index' || 
                    Route::current()->getName() == 'countries.edit' || 
                    Route::current()->getName() == 'countries.create' 

                    ) --}}

                    @if(explode('.', Route::current()->getName())[0] == 'countries') 

                        btn-primary
                    @else
                        btn-secondary
                    @endif
                display-block w-100">
                    Countries
                </a>
            </li>

            <li class="col-2">
                <a href="{{ route("cars.index") }}" class="btn
                    @if(explode('.', Route::current()->getName())[0] == 'cars') 
                   
                        btn-primary
                    @else
                        btn-secondary
                    @endif
                display-block w-100">
                    Cars
                </a>
            </li>
        </ul>
    </div>


    @yield("content");




    @stack("__js")
</body>
</html>
