@extends('layout.main')
@section('content')

<form method="post" action="">
<input type="text" name="nickname">
{{$errors->first('nickname')}}
<input type="text" name="email">
{{$errors->first('email')}}
<input type="password" name"password">
{{$errors->first('password')}}
<button type="submit">Register</button>
</form>

@stop