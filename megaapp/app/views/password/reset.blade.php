@extends('layout.main')
@section('title')
    Reset Password
@stop
@section('content')
    <div class="container">
        <div class="form">
            <form action="{{ action('RemindersController@postReset') }}"
                  method="POST">
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                <button type="submit">Reset Password</button>
            </form>
            <div class="re-link"> or <a href="{{action('RemindersController@getRemind')}}">Remind Password</a></div>
        </div>
    </div>
@stop