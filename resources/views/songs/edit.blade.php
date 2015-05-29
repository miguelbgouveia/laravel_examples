@extends('master')

@section('content')

	<h2>{{ $song->title }}</h2>
	
	{{-- {!! Form::model($song, ['url' => 'songs/' . $song->slug, 'method' => 'PATCH']) !!} --}}
	{!! Form::model($song, ['route' => ['songs.update', $song->slug], 'method' => 'PATCH']) !!}
	
		@include('songs.form')
	
	{!! Form::close() !!}
	
@stop