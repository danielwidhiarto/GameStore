{{-- @dd($genres) --}}

@extends('Template.template_manage_genre')

@section('title', 'Manage Genre | GameSlot')

@section('content')

<h3>Manage Genre</h3>
<br>


<div class="card" style="display: flex; justify-content: center;">
    <div class="card-header">
      Game Genre
    </div>
    <ul class="list-group list-group-flush">
        @foreach($genres as $genre)
        <li class="list-group-item" style="display: flex; justify-content: space-between;">{{ $genre->genre_name }}
            <a href="{{ route('manage_genre_detail', ['id' => $genre->id]) }}">
                Edit</a></li>
            @endforeach
      </ul>
  </div>

@endsection
