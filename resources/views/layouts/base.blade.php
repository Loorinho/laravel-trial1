<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ URL('') }}"> --}}
    <title>UPL Fantasy</title>
    @yield('header')


    <style>
        /* *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

        header {
            background-color: white; 
            border-bottom: 1px solid gray; 
            display: flex; 
            justify-content: space-between; 
            align-items: center
        }
        li{
            list-style-type: none;
            margin: 0 10px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            color: orange;
        }

    </style>
</head>
<body>

    @include("layouts.header")

    @yield('content')

    @include("layouts.footer")
    
</body>
</html>