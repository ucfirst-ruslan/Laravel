@extends('layout.main')
@section('content')
@if(isset($error))
<p>{{$error}}</p>
@endif
<form method="POST" action="">
<input type="text" name="email">
<input type="password" name="password">
<button type="submit">Log In</button>
</form>
@stop
