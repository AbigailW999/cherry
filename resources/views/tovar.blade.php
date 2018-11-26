@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <div class="card">
                	
                    
                	<h2 class="title">{{$obj->name}}</h2>
	                	
	                		<!-- подключаем картинки -->
		                	@if($obj->picture !='')
		                	<img src="{{asset('uploads/thumb/'.$obj->picture)}}" />
		                	@endif

	                	{!!$obj->body!!}
                        <!-- Link - product more -->
                        <a href="#" data-id="{{$obj->id}}" class="prod_more"  style="text-decoration:none; display:block; text-align:right; font-weight:bold; font-size:16px; color:grey;">More</a><br>
                        <!-- ссылка на Добавить в корзину -->
                        <a href="{{asset('basket/add/'.$obj->id)}}" class="add_cart" data-id="{{$obj->id}}" style="text-decoration:none; display:block; text-align:right; font-weight:bold; font-size:16px;">
                            Добавить в корзину
                        </a>
	                	

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
