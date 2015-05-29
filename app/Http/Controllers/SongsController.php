<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSongRequest;

use App\Song;

class SongsController extends Controller {
	
	//private $song;
	
	//public function __construct (Song $song) 
	//{
		//$this->song = $song;
	//}

	public function index(Song $song) {
		
		//$songs = $this->getSongs();
		//$songs = DB::table('songs')->get();
		//$songs = Song::get();
		$songs = $song->get();
		//dd($songs);
		
		return view('songs.index', compact('songs'));
	}
	
	public function show(Song $song) {
	
		//$song = $this->getSongs()[$id];
		//$song = DB::table('songs')->find($id);
		//$song = Song::find($id);
		//$song = $this->song->whereSlug($slug)->first();
		
		//$song = $song->first();
		
		return view('songs.show', compact('song'));
	}
	
	public function edit(Song $song) 
	{
		//return 'Edit the song with a title of '.$song->title;
		//return view('songs.edit', compact('song'));
		
		//$song = $this->song->whereSlug($slug)->first();
		
		return view('songs.edit', compact('song'));
	}
	
	public function update(Song $song, Request $request) 
	{
		//dd(\Request::input());
		//dd(\Request::get('title'));
		
		//$song = $this->song->whereSlug($slug)->first();
		
		//$song->title = $request->get('title');
		//$song->save();
		
		//$song->fill(['title' => $request->get('title')])->save();
		$song->fill($request->input())->save();
		
		return redirect('songs');
	}
	
	public function create()
	{
		return view('songs.create');	
	}
	
	public function store(CreateSongRequest $request, Song $song)
	{
		$song->create($request->all());
		
		return redirect()->route('songs.index');
	}
	
	//private function getSongs()
	//{
		//return ['Boyfriend', 'Be Alright', 'Fall'];	
	//}
}
