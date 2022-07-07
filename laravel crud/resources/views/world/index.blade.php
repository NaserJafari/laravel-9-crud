<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Index</title>

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

        .read {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 24px;
            background-image: linear-gradient(#0AFFED, #BADEFC);
        }

        .create-city {
            width: auto;
            height: auto;
            display: flex;
            justify-content: center;
            background-color: #9D44B5;
            padding: 10px;
            box-shadow: 3px 3px #242423;
            color: #fff;
        }

        .table-city {
            border: 3px solid #000;
            padding: 5px;
        }

        .table-city button[value="show"] {
            background-color: green;
            padding: 10px;
            color: #000;
            box-shadow: 3px 3px #000;
            margin: 5px;
            font-weight: 700;
        }

        .table-city button[value="edit"] {
            background-color: yellow;
            padding: 10px;
            color: #000;
            box-shadow: 3px 3px #000;
            margin: 5px;
            font-weight: 700;
        }

        .table-city button[value="delete"] {
            background-color: red;
            padding: 10px;
            color: #000;
            box-shadow: 3px 3px #000;
            margin: 5px;
            font-weight: 700;
        }

        .table-city td {
            border-bottom: 5px solid #000;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    @extends('world.layout')
    @section('content')
    <div class="read">
        <a href="{{ url('/world/create') }}" class="create-city">Voeg hier een nieuwe stad</a><br>
        <div class="table-city">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>CountryCode</th>
                        <th>District</th>
                        <th>Population</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($world as $city)
                    <tr>
                        <td>{{ $city->ID }}</td>
                        <td>{{ $city->Name }}</td>
                        <td>{{ $city->CountryCode }}</td>
                        <td>{{ $city->District }}</td>
                        <td>{{ $city->Population }}</td>
                        <td>
                            <a href="{{ url('/world/' . $city->ID) }}"><button value="show">Show</button></a>
                            <a href="{{ url('/world/' . $city->ID . '/edit') }}"><button value="edit">Update</button></a>
                            <form method="POST" action="{{ url('/world' . '/' . $city->ID) }}" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" value="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>