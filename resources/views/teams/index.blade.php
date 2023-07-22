@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Teams list page</h4>
   <a href="{{ route('create_team') }}"><button>Create new team</button></a>
   
     @forelse ($teams as $team)
     <div style="display: flex; justify-content: space-around; align-items: center"> 
          <p >{{ $team->name }}</p>
             
          <div style="display: flex; justify-content: space-around; align-items: center ">
               <p>

                    <a href="/teams/{{ $team->id }}/edit" style="display: block; margin-right: 20px">
                         <button type="submit">Edit</button>
                    </a>
               </p>
                  
               <div>

                    <form action="/teams/{{ $team->id }}/" method="post">
                         @csrf 
                         @method("DELETE")
                         {{-- <a href="/teams/{{ $team->id }}/delete"> --}}
                              <button type="submit">Delete</button>
                         </form>
               </div>
          </div>
     </div>
     @empty
            <p>There are no teams to display</p>
         
     @endforelse

</div>

@endsection
   