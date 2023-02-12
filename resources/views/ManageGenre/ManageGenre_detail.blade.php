@extends('Template.template_manage_genre')

@section('title', 'Genre Detail | GameSlot')

@section('content')

<form action="{{route('manage_genre_update_name', ['id' => $genre->id])}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Game Genre<span style="color: red">*</label>
            <input type="text" value="{{ $genre->genre_name }}" class="form-control @error('genre_name') is-invalid @enderror" id="" name="genre_name">        @error('game_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-warning mt-4">Update game</button>

</form>

@endsection
