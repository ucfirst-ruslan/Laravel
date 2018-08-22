@extends('layout.main')
@section('title')
    Register User
@stop
@section('content')
    <div class="container">
        <div class="form">
            <form method="POST" action="">
                <div class="error"> {{$errors->first('nickname') }}</div>
                <input type="text" name="nickname" placeholder="Nickname">
                <div class="error">{{$errors->first('email') }}</div>
                <input type="text" name="email" placeholder="E-mail">
                <div class="error">{{$errors->first('password') }}</div>
                <input type="password" name="password" placeholder="Password">

                <button type="submit">Register</button>
            </form>
        </div>
    </div>

@stop
