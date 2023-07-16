@extends("layouts.base")

@section("content")

<div style="margin: 20px 10px">
   <h4>Create a player page</h4>
   

   <form action="/players/create" method="post">
    @csrf

    <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Name</label>
        <input type="text" name="playerName" placeholder="Enter player name here" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
    <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Age</label>
        <input type="number" name="age" placeholder="Enter the player age here" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
      <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Club</label>
        <input type="text" name="club" placeholder="Enter the player's football club" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>
     <div>
        <label for="" style="display: block; font-size: 15px; margin-top: 10px;">Shirt number</label>
        <input type="number" name="shirtNumber" placeholder="Enter the player's shirt number" style="border: 1px solid gray; padding: 5px 10px; border-radius: 5px">
    </div>


    <button type="submit" style="margin-top: 10px; padding: 5px 10px; ">Create player</button>
   </form>
</div>

@endsection
   
