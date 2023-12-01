<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function homeIndex(){
        $all_games = Game::paginate(10);

        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return view('Home.admin', compact('all_games'));
            }else{
                return view('Home.customer', compact('all_games'));
            }
        }else{
            return view('Home.guest', compact('all_games'));
        }
    }

    public function detail(Request $request){
        $gameDetail = Game::where('id', $request->id)->first();

        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return view('Detail.detail_admin', compact('gameDetail'));
            }else{
                return view('Detail.detail_customer', compact('gameDetail'));
            }
        }else{
            return view('Detail.detail_guest', compact('gameDetail'));
        }
    }

    public function searchGame(Request $request){
        $search_game_name = $request->search_game_name;

        $search_games = Game::where('game_name', 'LIKE', "%$search_game_name%")->paginate(10)->withQueryString();

        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return view('Search.search_admin', compact('search_games'));
            }else{
                return view('Search.search_customer', compact('search_games'));
            }
        }else{
            return view('Search.search_guest', compact('search_games'));
        }
    }


}
