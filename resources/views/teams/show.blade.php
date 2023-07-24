@extends("layouts.base")

@section("content")


<div class="flex justify-between items-center">

    <h4 class="text-center" style="text-align: center">{{ $team->name }} </h4>

    <p>City: {{ $team->city }}</p>
    <p>Country: {{ $team->country }}</p>
    <p>City: {{ $team->city }}</p>

    <p>Manager: {{ $team->manager->first_name }}</p>

    {{-- <div>
        @forelse ($team->players as $player )
        <p>
            <a href="/players/{{ $player->id }}">
                {{ $player->first_name }} {{ $player->last_name }}
            </a>
        </p>
            
        @empty
            <p>No players to display</p>
        @endforelse
    </div> --}}


</div>


@endsection