@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Teams list page</h4>
   <a href="{{ route('create_team') }}"><button>Create new team</button></a>
   
     @forelse ($teams as $team)
          <div style="display: flex; justify-content: space-around; align-items: center"> 
               <p>{{ $team->name }}</p>
                    {{-- <form action="/teams/{{ $team->id }}/edit" method="post">
                         @csrf --}}
                         <a href="/teams/{{ $team->id }}/edit">
                              <button type="submit">Edit</button>
                         </a>
                    {{-- </form> --}}
          </div>
     @empty
            <p>There are no teams to display</p>
         
     @endforelse

</div>

@endsection
   