<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit</title>

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

        .edit {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(#FF0054, #FFBD00);
        }

        .edit form {
            display: flex;
            justify-content: center;
            flex-direction: column;
            color: #fff;
        }

        .edit input {
            padding: 5px;
        }

        .edit input[value="update"] {
            margin: 5px;
            display: flex;
            justify-content: center;
            background-color: #C4F7A1;
            color: #000;
            padding: 10px;
        }

        .edit button {
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
    <div class="edit">
        <form action="{{ url('world/' .$world->ID) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="ID" id="ID" value="{{$world->ID}}" id="ID" />
            <label>Name</label></br>
            <input type="text" name="Name" id="Name" value="{{$world->Name}}"></br>
            <label>CountryCode</label></br>
            <input type="text" name="CountryCode" id="CountryCode" value="{{$world->CountryCode}}"></br>
            <label>District</label></br>
            <input type="text" name="District" id="District" value="{{$world->District}}"></br>
            <label>Population</label></br>
            <input type="text" name="Population" id="Population" value="{{$world->Population}}"></br>
            <input type="submit" value="update"></br>
            <a href="{{ url('world') }}" class="index-terug-knop"><button value="show">Index</button></a>
        </form>
    </div>
    @stop
</body>

</html>