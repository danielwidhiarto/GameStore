
@extends('Components.customer')

@section('title', 'Home | GameSlot')

@section('content')

    <div class="d-flex flex-row mb-3">
            <div class="row pt-1">
                @foreach ($all_games as $a)
                    <div class="card mx-2 mt-2 mb-4 px-0" style="width: 15rem;">
                        <a href="{{route('detail_guest', ['id' => $a->id])}}"><img src="{{asset($a->game_image)}}" class="card-img-top" width="100px" height="250px"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{Str::limit($a->game_name, 30)}}</h5>
                            <p class="card-text">${{$a->game_price}}</p>
                            <p class="cart-text"> {{ $a->genre->genre_name }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{$all_games->links()}}
                </div>
            </div>




@endsection
