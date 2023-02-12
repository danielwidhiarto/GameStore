@extends('Template.template_guest')

@section('title', 'Search | GameSlot')

@section('content')
    <header class="d-flex mt-2 justify-content-between">
        <h2>Search Results</h2>
    </header>

    <div class="d-flex flex-row mb-3">
        @if (count($search_games) < 1)
            <h2 class="mt-3">Sorry, the product you are looking for is not available</h2>
        @else
            <div class="row pt-1">
                @foreach ($search_games as $sg)
                    <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                        <img src="{{asset($sg->game_image)}}" class="card-img-top" width="100px" height="250px">
                        <div class="card-body">
                            <h5 class="card-title">{{Str::limit($sg->game_name, 30)}}</h5>
                            <p class="card-text">IDR {{$sg->game_price}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div style="margin: 2rem">
        {{$search_games->links()}}
    </div>
@endsection
