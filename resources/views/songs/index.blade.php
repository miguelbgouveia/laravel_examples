@extends('master')

@section('content')
	
	{{-- @foreach ($songs as $index => $song) --}}
	
	@foreach ($songs as $song)
		{{-- <li> <a href="/songs/{{ $song->slug }}"> {{ $song->title }}</a></li> --}}
		{{-- <li> 
			<a href="{{ route('song_path', [$song->slug]) }}"> 
				{{ $song->title }}
			</a>
		</li> --}}

		<li>
			{{-- {!! link_to_route('song_path', $song->title, [$song->slug]) !!} --}}
			{!! link_to_route('songs.show', $song->title, [$song->slug]) !!}		
		</li>
				
		
	@endforeach
	
@stop