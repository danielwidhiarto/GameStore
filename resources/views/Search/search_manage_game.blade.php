@extends('Template.template_manage_game')

@section('title', 'Search | GameSlot')

@section('content')
<div class="mt-4">
    <form action={{route('manage_game_add_game_view')}}>
        <button type="submit" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add game</button>
    </form>

    <header class="d-flex mt-2 justify-content-between">
        <h2>Search Results</h2>
    </header>
    <div class="d-flex flex-row mb-3 mt-3">
        @if (count($search_games) < 1)
            <h2 class="mt-3">Sorry, game(s) in this genre is unavailabe</h2>
        @else
            <div class="w-100">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center">game Image</th>
                            <th scope="col" style="text-align: center">game Name</th>
                            <th scope="col" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($search_games as $sp)
                            <tr>
                                <td><img src="{{asset($sp->game_image)}}" width="250px" height="auto"></td>
                                <td><h5>{{$sp->game_name}}</h5></td>
                                <td><form action="{{route('manage_game_update_view', ['id' => $sp->id])}}">
                                    <button type="submit" class="btn btn-warning"><i class="bi bi-pencil" style="font-size: 18px"></i></button>
                                </form></td>
                                <td>
                                    <form action="{{route('manage_game_delete', ['id' => $sp->id])}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-trash3" style="font-size: 18px"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <div style="margin: 2rem">
        {{$search_games->links()}}
    </div>
</div>
@endsection
