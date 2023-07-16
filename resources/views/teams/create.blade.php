@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Create a team page</h4>
   

   <form action="/teams/create" method="post">
    @csrf

    <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Team Name</label>
        <input type="text" name="teamName" placeholder="Enter team name here..." style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
    <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Found date</label>
        <input type="date" name="foundDate" placeholder="WHen was the team founded" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
      <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">City</label>
        <input type="text" name="city" placeholder="Enter the city in which the team resides" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
     <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Country</label>
        <input type="text" name="country" placeholder="Enter the team's country of origin" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>


    <button type="submit" style="margin-top: 10px; padding: 5px 10px; ">Create team</button>
   </form>
</div>

@endsection
   
