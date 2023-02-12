@extends('Template.template_customer')

@section('title', 'History | GameSlot')

@section('content')
<div class="mt-4">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex flex-row mb-3 mt-3">
        @if (count($historyTr) < 1)
            <div>
                <h2 class="mt-3">You don't have any transactions yet.</h2>
                <form action="{{route('home_customer')}}">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">See Game(s) to Purchase</button>
                </form>
            </div>
        @else
            <div class="accordion w-100" id="accordionExample">
                @foreach ($historyTr as $ht)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$ht->collapse}}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$ht->collapse}}" aria-expanded="true" aria-controls="collapse{{$ht->collapse}}">
                            @foreach ($ht as $ht1)
                                <h5>Transaction date and time: {{$ht1->transaction_date_time}}</h5>
                                @break
                            @endforeach
                        </button>
                        </h2>
                        <div id="collapse{{$ht->collapse}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$ht->collapse}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="text-align: center">Game Image</th>
                                                <th scope="col" style="text-align: center">Game Name</th>
                                                <th scope="col" style="text-align: center">Quantity</th>
                                                <th scope="col" style="text-align: center">Sub-Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ht as $ht1)
                                                <tr>
                                                    <td><a href="{{route('detail_customer', ['id' => $ht1->game->id])}}"><img src="{{asset($ht1->game->game_image)}}" width="150px" height="auto"></a></td>
                                                    <td><a href="{{route('detail_customer', ['id' => $ht1->game->id])}}" style="text-decoration: none; color: black"><h5>{{$ht1->game->game_name}}</h5></a></td>
                                                    <td><p style="text-align: center">{{$ht1->qty}}</p></td>
                                                    <td><p style="text-align: center">${{$ht1->qty * $ht1->game->game_price}}</p></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="flew-row d-flex justify-content-center mb-5">
                                        <h5 style="margin-right: 50px; font-weight: bold">Total Quantity: {{$ht->totalQty}} Item(s)</h5>
                                        <h5 style="margin-right: 50px; font-weight: bold">Total Price: ${{$ht->totalPrice}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        @endif
    </div>
</div>
@endsection
