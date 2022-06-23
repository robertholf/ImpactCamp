@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-bottom:50px;"><h1><strong>Welcome {{$user->username}}</strong></h1></div> <!-- this is a way to echo in laravel, in Profile controller we attributed to the variable $user all the info and we take only the username -->

        <div class="row">
            <iframe src="https://www.google.com/maps/d/embed?mid=1Z_0bhno8wteqR3rtpeQKFT1HzOohgAU&ehbc=2E312F"
                    width="640"
                    height="480"></iframe>
        </div>

        <div style="margin-top:50px;"><h1><strong>Available Campsites</strong></h1></div>

        <div style="margin-top:50px;"><h2><a href=""</h2></div>
    </div>
@endsection
