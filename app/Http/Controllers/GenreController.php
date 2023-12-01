<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Genre;
use App\Models\Game;

class GenreController extends Controller
{

    public function genre_index(){
        $genres = Genre::all();
        return view('ManageGenre.ManageGenre_home', compact('genres'));
      }

      public function genre_detail($id) {
        $genre = Genre::find($id);
        return view('ManageGenre.ManageGenre_detail', compact('genre'));
    }

    }

