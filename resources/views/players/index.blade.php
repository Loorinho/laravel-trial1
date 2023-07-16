@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Players list page</h4>
   <a href="{{ route('create_player') }}"><button>Create new</button></a>
   
     @foreach ($players as $player)
         <p>{{ $player->name }}</p>
    @endforeach
</div>

@endsection
   
