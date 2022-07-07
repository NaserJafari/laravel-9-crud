<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create</title>

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

        .create {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 90px;
            background-image: linear-gradient(#BADEFC, #0AFFED);
        }

        .create h2 {
            font-weight: 900;
            margin: 10px;
        }

        .create form {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .create input {
            padding: 5px;
        }

        .create input[value="create"] {
            margin: 5px;
            display: flex;
            justify-content: center;
            background-color: #C4F7A1;
            color: #000;
            padding: 10px;
        }

        .create button {
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
    <div class="create">
        <h2>Maak nieuwe land aan!</h2>
        <form action="{{ url('world') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="Name" id="Name" placeholder="Name:"></br>
            <label>CountryCode</label></br>
            <input type="text" name="CountryCode" id="CountryCode" placeholder="CountryCode:"></br>
            <label>District</label></br>
            <input type="text" name="District" id="District" placeholder="District:"></br>
            <label>Population</label></br>
            <input type="text" name="Population" id="Population" placeholder="Population:"></br>
            <input type="submit" value="create"></br>
            <a href="{{ url('world') }}" class="index-terug-knop"><button value="show">Index</button></a>
        </form>
    </div>
    @stop
</body>

</html>