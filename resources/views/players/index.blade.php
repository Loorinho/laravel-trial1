@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Players list page</h4>
   <a href="{{ route('create_player') }}"><button>Create new</button></a>
   
     @foreach ($players as $player)
        <a href="{{ route('show_player', ['id' => $player->id]) }}">
            <p>{{ $player->name }}</p>
        </a>
    @endforeach
</div>

@endsection
   
