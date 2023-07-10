@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Players list page</h4>
     @foreach ($players as $player)
         <p>{{ $player['name'] }}</p>
    @endforeach
</div>

@endsection
   
