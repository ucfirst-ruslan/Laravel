@extends('layout.main')
@section('title')
    Log In
@stop
@section('content')

    <div class="container">


        <div class="form">
            <form method="POST" action="">
                <input type="text" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="password">
                @if(isset($error))
                    <div class="error">{{$error}}</div>
                @endif
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>

@stop
