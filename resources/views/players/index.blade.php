<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h4>Players list page</h4>
     @foreach ($players as $player)
         <p>{{ $player }}</p>
    @endforeach

</body>
</html>
