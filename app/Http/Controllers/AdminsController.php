<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminsController extends Controller
{
    public function game_index(){
        $games = Game::paginate(10)->withQueryString();

        return view('ManageGame.ManageGame_home', compact('games'));
    }

    public function genre_index(){
        $genres = Genre::paginate(10);
        return view('ManageGenre.ManageGenre_home', compact('genres'));
    }

    public function addGameLogic(Request $request){

        if($request->game_genre_id == "Choose genre"){
            $request->session()->flash('error', 'Please select a genre');
            return redirect()->back();
        }

        $request->validate([
            'game_name' => 'required',
            'game_detail' => 'required',
            'game_price' => 'required|integer',
            'game_image' => 'required|mimes:png,jpg,jpeg',
            'game_pegi_rating' => 'required|integer|in:0,3,7,12,16,18',
            // 'game_genre_id' => 'required:not_in:Choose genre',
        ]);

        $original_name = $request->file('game_image')->getClientOriginalName();
        $original_ext = $request->file('game_image')->getClientOriginalExtension();
        $game_image_name = $original_name . time() . '.' . $original_ext;

        $request->file('game_image')->storeAs('public/images', $game_image_name);
        $game_image = 'storage/images/' . $game_image_name;


        DB::table('games')->insert([
            'game_name' => $request->game_name,
            'game_detail' => $request->game_detail,
            'game_price' => $request->game_price,
            'game_image' => $game_image,
            'game_pegi_rating' => $request->game_pegi_rating,
            'game_genre_id' => $request->game_genre_id
        ]);

        return redirect()->route('manage_game')->with('success', 'Add New Game Successful');


    }

    public function deleteGame(Request $request){
        Game::where('id', $request->id)->delete();

        return redirect()->route('manage_game');
    }

    public function updateGameView($id, Request $request){
        // $games = Game::where('id', $request->id)->first();
        // $genres = Genre::all();
        // return view('ManageGame.ManageGame_update', compact('games'));
        // return view('ManageGame.ManageGame_update', ['genres' => $genres]);


        $game = Game::findOrFail($id);
        $genres = Genre::all();
        return view('ManageGame.ManageGame_update', ['game' => $game, 'genres' => $genres]);

    }

    public function updateGameLogic(Request $request){

        if($request->game_genre_id == "Choose genre"){
            $request->session()->flash('error', 'Please select a genre');
            return redirect()->back();
        }

        $request->validate([
            'game_name' => 'required',
            'game_detail' => 'required',
            'game_price' => 'required|integer',
            'game_image' => 'required|mimes:png,jpg,jpeg',
            'game_pegi_rating' => 'required|integer|in:0,3,7,12,16,18',
            // 'game_genre_id' => 'required:not_in:Choose genre',
        ]);

        $original_name = $request->file('game_image')->getClientOriginalName();
        $original_ext = $request->file('game_image')->getClientOriginalExtension();
        $game_image_filename = $original_name . time() . '.' . $original_ext;

        $request->file('game_image')->storeAs('public/mages', $game_image_filename);
        $game_image = 'storage/mages/' . $game_image_filename;

        DB::table('games')->where('id', '=', $request->id)->update([
            'game_name' => $request->game_name,
            'game_detail' => $request->game_detail,
            'game_price' => $request->game_price,
            'game_image' => $game_image,
            'game_pegi_rating' => $request->game_pegi_rating,
            'game_genre_id' => $request->game_genre_id
        ]);

        return redirect()->route('manage_game')->with('success2', 'Update Game Successful');
    }

    public function searchManageGames(Request $request){
        $search_game_name = $request->search_game_name;

        $search_games = Game::where('game_name', 'LIKE', "%$search_game_name%")->paginate(10)->withQueryString();

        return view('Search.search_manage_game', compact('search_games'));
    }

        public function updateGenreName(Request $request) {
            $validatedData = $request->validate([
                'genre_name' => 'required|unique:genres,genre_name,'.$request->id,
            ]);

            DB::table('genres')->where('id', '=', $request->id)->update([
                'genre_name' => $request->genre_name,
            ]);

            return redirect()->route('manage_genre')->with('success', 'Genre updated successfully');
        }

        public function createGame()
        {
            $genres = Genre::all();
            return view('ManageGame.ManageGame_add', ['genres' => $genres]);
    }


}
