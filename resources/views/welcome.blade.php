<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <body style="background:coral">
        <a href="http://127.0.0.1:8000/">
        <h1 style="color: darkblue" >Beeflix</h1>
    </a>
    <div class="p-3 mb-2 bg-warning" style="border-radius:0.5%">
    <a href="{{url()->previous()}}">
        <button type ="button" class="btn btn-light btn-lg">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="black" xmlns="http://www.w3.org/2000/svg" >
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        </button>
    </a>
    <a href="http://127.0.0.1:8000/">
        <button type ="button" class="btn btn-light btn-lg">
            All Film
        </button>
    </a>
        <a href="/category?type=Drama">
        <button type ="button" class="btn btn-light btn-lg">
            Drama
        </button>
        </a>
        <a href="/category?type=Kids">
        <button type ="button" class="btn btn-light btn-lg">
            Kids
        </button>
        </a>
        <a href="/category?type=TV Show">
        <button type ="button" class="btn btn-light btn-lg">
            Tv Shows
        </button>
    </a>
        <div>
            @yield('content')
        </div>
    </div>
    </body>
    <!-- <style>
        button {
            font-size: larger;
            text-decoration: double;
            border: 2px red;
        }
        </style> -->
</html>
