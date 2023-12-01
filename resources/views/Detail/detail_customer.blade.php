
@extends('Template.template_customer')

@section('title', 'Game Detail | GameSlot')

@section('content')
	<div class="card mt-5 mb-5 px-5 py-5" style="background-color: #eee; line-height: 1.5em">
		<div class="container-fliud">
			<div class="wrapper row">
				<div class="preview col-md-6">
					<div class="preview-pic tab-content">
					    <div class="tab-pane active" id="pic-1">
                            <img src="{{asset($gameDetail->game_image)}}" class="card-img-top" width="100px" height="auto">
                        </div>
					</div>
				</div>
				<div class="details col-md-6">
					<h3 class="card-title">{{$gameDetail->game_name}}</h3>
					<p class="card-text" style="font-family: 'Open Sans'; font-size: 18px">{{$gameDetail->game_detail}}</p>
                    <p class="card-text">PEGI Rating: {{$gameDetail->game_pegi_rating}}</p>
					<h4 class="price">Price: <span class="text-primary">IDR {{$gameDetail->game_price}}</span></h4>

                    <form action="{{route('add_to_cart')}}" method="POST">
                        @csrf
                        <div class="row flex-wrap d-flex justify-content-between">
                            <p class="qty">Qty:
                            <input type="text" class="form-control w-50" placeholder="Input Quantity Here..." name="qty"></p>
                            <input type="hidden" class="form-control w-50" placeholder="" value="{{$gameDetail->id}}" name="game_id"></p>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Add to Cart</button>
                    </form>

                </div>
			</div>
		</div>
	</div>
@endsection
