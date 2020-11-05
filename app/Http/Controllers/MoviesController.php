<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use App\support\collection;
use App\genres;

class MoviesController extends Controller
{
    public function index(){
        $genre=genres::all();
        $movies=movies::all();
        // $genremovies=$genre->movies();
        return view('welcome',compact('movies','genre'));
    }

    public function show(movies $movies){
        // $movies = movies::find($id)->first();
        $episodes = App\episodes::where('movies_id', $movies->id)->paginate(1);
        // ddd($episodes);
        return view('description', ['movie'=>$movies,'episode'=>$episodes]);
    }
}
