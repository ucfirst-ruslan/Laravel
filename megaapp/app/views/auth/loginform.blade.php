@extends('layout.main')
@section('content')

@if(isset($error))
	<p>{{$error}}</p>
@endif

<form method="post" action="">
<input type="text" name="email">
<input type="password" name"password">
<button type="submit">Login</button>
</form>

@stop