<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function index() {
		
		$lessons = ['Primeira lição', 'Segunda lição', 'Terceira Lição'];
		$name = "<strong>Miguel Gouveia</strong>";
		
		//return view('pages.home', ['name' => $name, 'lessons' => $lessons]);
		return view('pages.home', compact('name', 'lessons'));
		//return view('pages.home')->with('name', $name)->with('lessons', $lessons);
		//return view('pages.home')->withName($name)->withLessons($lessons);
	}
	
	public function about() {
		
		return view('pages.about');
	}

}
