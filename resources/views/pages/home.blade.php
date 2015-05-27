@extends('master')

@section('content')

	<h1>{{ $name }}</h1>
	<h2>{!! $name !!}</h2> 
	
	@foreach ($lessons as $lesson)
		<h3>{{ $lesson }}</h3>
	@endforeach	
	
@stop