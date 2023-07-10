@extends("layouts.base")


@section("content")

<div style="margin: 20px 10px">
    {{-- @foreach ($teams as $team)
        <p>{{ $team['name'] }}</p>        
    @endforeach --}}

    {{ dd($teams) }}
</div>

@endsection