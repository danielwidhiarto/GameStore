@extends('Template.template_guest')

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
                    <br>
					<h4 class="price">Price: <span class="text-primary">IDR {{$gameDetail->game_price}}</span></h4>
				</div>
			</div>
		</div>
	</div>
@endsection
