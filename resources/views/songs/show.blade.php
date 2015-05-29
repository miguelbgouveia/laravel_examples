@extends('master')

@section('content')
	
	<h2>{{ $song->title }}</h2>
	
	@if ($song->lyrics)
		<article>
			{!! nl2br($song->lyrics) !!}	
		</article>
	@endif
	
	<p>
		{{-- {!! link_to_route('songs_path', '<- Go Back Home') !!} --}}
		{!! link_to_route('songs.index', '<- Go Back Home') !!}
	</p>
	
	
@stop