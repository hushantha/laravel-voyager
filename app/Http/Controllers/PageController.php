<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title="Movie Site | Homepage";
        return view('home')->with('title', $title);
    }
    public function movies() {
        $title="Movie Site | Movies";
        return view('pages.movie')->with('title', $title);
    }
    public function actors() {
        $title="Movie Site | Actors";
        return view('pages.actors')->with('title', $title);
    }
    public function blog() {
        $title="Movie Site | Movie Blog";
        return view('pages.blog')->with('title', $title);
    }
    public function about() {
        $title="Movie Site | About Us";
        return view('pages.about')->with('title', $title);
    }

}
