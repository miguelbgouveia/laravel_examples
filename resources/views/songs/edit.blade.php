@extends('master')

@section('content')

	<h2>{{ $song->title }}</h2>
	
	{{-- {!! Form::model($song, ['url' => 'songs/' . $song->slug, 'method' => 'PATCH']) !!} --}}
	{!! Form::model($song, ['route' => ['songs.update', $song->slug], 'method' => 'PATCH']) !!}
	
		@include('songs.form')
	
	{!! Form::close() !!}
	
	{{--
	{!! Form::open(['method' => 'DELETE', 'route' => ['songs.destroy', $song->slug ]]) !!}
		<div class="form-group">
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
		</div>	
	
	{!! Form::close() !!}
	--}}
	
	{!! delete_form(['songs.destroy', $song->slug]) !!}
	
@stop