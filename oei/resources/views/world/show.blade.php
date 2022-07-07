<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Show</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            scroll-behavior: smooth;
        }

        .show {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 100px;
            background-image: linear-gradient(#7D80DA, #C6AFB1);
        }

        .show p {
            margin: 10px;
            color: #fff;
        }

        .show button {
            height: auto;
            padding: 10px;
            background-color: blue;
            color: #fff;
            box-shadow: 3px 3px #000;
        }
    </style>
</head>

<body>
    @extends('world.layout')
    @section('content')
    <div class="show">
        <p>{{ $world->ID }}</p>
        <p>{{ $world->Name }}</p>
        <p>{{ $world->CountryCode }}</p>
        <p>{{ $world->District }}</p>
        <p>{{ $world->Population }}</p>
        <a href="{{ url('world') }}" class="index-terug-knop"><button value="show">Index</button></a>
    </div>
    @endsection
</body>

</html>