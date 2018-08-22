@extends('layout.main')
@section('title')
    Remind Password
@stop
@section('content')
    <div class="container">
        <div class="form">
            <form action="{{ action('RemindersController@postRemind') }}"
                  method="POST">
                <input type="email" name="email" placeholder="E-mail">
                <button type="submit">Send</button>
            </form>
            <div class="re-link"> or <a href="{{action('RemindersController@getReset')}}">Reset Password</a></div>

        </div>
    </div>
@stop