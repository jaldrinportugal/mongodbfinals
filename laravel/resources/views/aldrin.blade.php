@extends('layout.app')

@section('content')
<br>
<h1 class="text-success">event registration</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>eventaname</th>
        <th>date</th>
        <th>location</th>
        <th>attendees</th>
        <th>Action</th>

    </tr>   
</thead>
<tbody>
    
</tbody>

</div>

    <div class="row">
        <form action="{{ route('save-registration') }}" method="POST">
            @csrf
            
            <label class="col"><h6>Event Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here.." name="eventname">
            
            
            <label class="col"><h6>Date</h6></label>
            <input class="inputs" type="text" placeholder="Input here.." name="date">
            
            
            <label class="col"><h6>Location</h6></label>
            <input class="inputs" type="text" placeholder="Input here.." name="location">
            
            <label class="col"><h6>Attendees</h6></label>
            <input class="inputs" type="text" placeholder="Input here.." name="attendees">
           
            <div class="col" >
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
        <br>
</div>  
@endsection

@section('title')
    registration
@endsection