@extends('layout.common')

<br>

<hr>

<br>
<br>


@if(session('error'))
<div class="alert alert-danger">
                <center><p> {{session('error')}}</p></center>
                </div>
            @endif 

<div class="container">
  
<form method="post" action="{{route('register')}}">

	@csrf
	<h2>Register Page</h2>
  <div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
        </div>

        <div class="form-group">
          <label >Phone Number</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>

        <div class="form-group">
          <label >Email ID</label>
          <input type="email" class="form-control" id="email_id" name="email_id" >
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>

  <center><button type="submit" class="btn btn-success">Submit</button></center>

</form>

</div>

