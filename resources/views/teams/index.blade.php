@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Teams list page</h4>
   <a href="{{ route('create_team') }}"><button>Create new team</button></a>
   
     @forelse ($teams as $team)
          <p>{{ $team->name }}</p>
     @empty
            <p>There are no teams to display</p>
         
     @endforelse

</div>

@endsection
   