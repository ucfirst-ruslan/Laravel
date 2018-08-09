@extends('layout.main')
@section('content')
<form method="POST" action="">
<input type="text" name="nickname">
{{$errors->first('nickname') }}
<input type="text" name="email">
{{$errors->first('email') }}
<input type="password" name="password">
{{$errors->first('password') }}
<button type="submit">Register Me</button>
</form>
@stop
