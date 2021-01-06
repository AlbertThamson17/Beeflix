<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Episode;
class MovieController extends Controller
{
    public function detail(Request $request){
        // dd($request->type);
        $dramas = Movie::where('genre_id',1)->get();
        // dd($dramas);
        $kids = Movie::where('genre_id',2)->get();
        $tvShow = Movie::where('genre_id',3)->get();
        $movies = [
            "Dramas"=> $dramas,
            "Kids" => $kids,
            "Tv Show"=> $tvShow
        ];
        return view ('detail')->with('movies', $movies);
    }
    public function movie($movie_id){
        // dd($movie_id);
        $movie = Movie::where('id', $movie_id)->first();
        $episodes = Episode::where('movie_id',$movie_id)->paginate(3);
        // dd($episodes);
        // dd($movie->genre);
        // dd($movie);
        return view ('movie')->with('movie',$movie)->with('episodes',$episodes);
    }

    public function category(Request $request){
        if ($request->type === 'Drama'){
            $result = Movie::where('genre_id',1)->get();
        }
        else if($request->type === 'Kids'){
            $result = Movie::where('genre_id',2)->get();
        }
        else if($request->type === 'TV Show'){
            $result = Movie::where('genre_id',3)->get();
        }
        return view('category')->with('result',$result);
    }
}
