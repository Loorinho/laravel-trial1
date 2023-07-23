@extends("layouts.base")


@section("content")
    <a href="/players" >
        <button style="padding: 5px 10px; margin-top: 20px">Go back home</button>
    </a>
        
    <h3>Player page</h3>

    <p>Player's name: {{ $player->name }}</p>

    <p>Player's Age: {{ $player->age }}</p>

    <p>Player's club: {{ $player->club }}</p>

    <p>Player's shirt number: {{ $player->shirt_number }}</p>

@endsection
     
