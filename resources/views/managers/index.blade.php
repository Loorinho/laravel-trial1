@extends("layouts.base")

@section("content")


<div style="margin: 20px 10px">
   <h4>Managers list page</h4>
   {{-- <a href="{{ route('create_manager') }}"><button>Create new</button></a> --}}
   
     @foreach ($managers as $manager)
        {{-- <a href="{{ route('show_manager', ['id' => $manager->id]) }}"> --}}
        <a href="/managers/{{ $manager->id }}">

            <p>{{ $manager->first_name }} {{ $manager->last_name }} </p>
            {{-- <p>{{ $manager->name }}</p> --}}

            {{-- <p>{{ $manager->name }}</p> --}}

        </a>
    @endforeach
@endsection