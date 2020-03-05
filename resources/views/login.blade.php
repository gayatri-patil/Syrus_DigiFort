@extends('layout.common')

@section('content')

<br>
<br>

@if(session('error'))
<div class="alert alert-danger">
                <center><p> {{session('error')}}</p></center>
                </div>
            @endif 

<div align="center">

<form method="post" action="{{route('login')}}">
        @csrf
<img src="{{ URL::to('img/user.png') }}" alt="brand logo" width="150" height="150">
<br>
<br>
       
    <input type="email" size="40" placeholder="Email id" name="email_id" maxlength="40" required><br>
    <br><br>
      
    <input type="password" name="phone_number" placeholder="Password" required>
    <br><br>
    
    <input class="btn btn-success" type="submit" name="submit" type="button" value="Login In" ></button>
</form>
</div>


@endsection

