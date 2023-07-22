@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Edit team page</h4>
   

   <form action="/teams/{{ $team->id }}" method="post">
    @csrf
    @method('PUT')
 
    <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Team Name</label>
        <input type="text" name="teamName" value="{{ $team->name }}" placeholder="Enter team name here..." style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
    <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Found date</label>
        <input type="date" name="foundDate" value="{{ $team->found_date }}" placeholder="WHen was the team founded" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
      <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">City</label>
        <input type="text" name="city" value="{{ $team->city }}" placeholder="Enter the city in which the team resides" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
     <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Country</label>
        <input type="text" name="country" value="{{ $team->country }}" placeholder="Enter the team's country of origin" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>


    <button type="submit" style="margin-top: 10px; padding: 5px 10px; ">Create team</button>
   </form>
</div>

@endsection
   
