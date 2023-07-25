@extends("layouts.base")

@section("content")


<div class="flex justify-between items-center">

    <h4 class="text-center" style="text-align: center">{{ $team->name }} </h4>

    <p>City: {{ $team->city }}</p>
    <p>Country: {{ $team->country }}</p>
    <p>City: {{ $team->city }}</p>

    <p>Manager: {{ $team->manager->first_name }}</p>

    <div>
        <p>Team players</p>
        <ul>
            @forelse ($team->players as $player )
            
                 <li>
                <a href="/players/{{ $player->id }}">
                        {{ $player->name }} 
                    </a>
                </li>  
            @empty
            <p>No players to display</p>
            @endforelse
        </ul>
        {{-- @endforeach --}}
    </div>


</div>


@endsection