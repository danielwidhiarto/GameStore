@extends('Template.template_customer')

@section('title', 'Cart | GameSlot')

@section('content')
<div class="mt-4">
    <div class="d-flex flex-row mb-3 mt-3">
        @if (count($carts) < 1)
            <div>
                <h2 class="mt-3">You don't have any items in your cart yet.</h2>
                <form action="{{route('home_customer')}}">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">See game(s) to Purchase</button>
                </form>
            </div>
        @else
            <div class="w-100">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center">game Image</th>
                            <th scope="col" style="text-align: center">game Name</th>
                            <th scope="col" style="text-align: center">Quantity</th>
                            <th scope="col" style="text-align: center">Sub-Total Price</th>
                            <th scope="col" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $c)
                            <tr>
                                <td><a href="{{route('detail_customer', ['id' => $c->game->id])}}"><img src="{{asset($c->game->game_image)}}" width="250px" height="auto"></a></td>
                                <td><a href="{{route('detail_customer', ['id' => $c->game->id])}}" style="text-decoration: none; color: black"><h5>{{$c->game->game_name}}</h5></a></td>
                                <td><p style="text-align: center">{{$c->qty}}</p></td>
                                <td><p style="text-align: center">${{$c->qty * $c->game->game_price}}</p></td>
                                <td>
                                    <form action="{{route('delete_game_in_cart', ['id' => $c->id])}}" method="POST" class="flew-row d-flex justify-content-center">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-trash3" style="font-size: 18px"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flew-row d-flex justify-content-center">
                    <h5 style="margin-right: 50px; font-weight: bold">Total Price: ${{$totalPrice}}</h5>
                    <form action="{{route('purchase')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Purchase</button>
                    </form>
                </div>
            </div>

        @endif
    </div>

</div>
@endsection
