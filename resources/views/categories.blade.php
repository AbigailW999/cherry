@extends('layouts.base')

@section('script') <!-- подключаем modal.js,filter.js добавляя к скрипту в base.blade.php -->
@parent
<script src="{{asset('public/js/modal.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/filter.js')}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card-header">Categories</div>

                <p style="text-align:right;">Filter</br>
                        <select id="filter" name="filter">
                            <option name="all" value="0">all transportations</option>
                            <option name="land" value="1">land transportation</option>
                            <option name="air" value="2">air transportation</option>
                            <option name="sea" value="3">sea transportation</option>
                        </select>
                    </p>

                    <div class="card">
                	
                    @foreach($cats as $cat)
                	<h2 class="title">{{$cat->name}}</h2>
	                	@foreach($cat->products()->get() as $one)
	                	<h4>{{$one->name}}</h4>
	                		<!-- подключаем картинки -->
		                	@if($one->picture !='')
		                	<img src="{{asset('uploads/thumb/'.$one->picture)}}" />
		                	@endif

	                	{!!$one->body!!}
                        <!-- Link - product more -->
                        <a href="#" data-id="{{$one->id}}" class="prod_more"  style="text-decoration:none; display:block; text-align:right; font-weight:bold; font-size:16px; color:grey;">More</a><br>
                        <!-- ссылка на Добавить в корзину -->
                        <a href="{{asset('basket/add/'.$one->id)}}" class="add_cart" data-id="{{$one->id}}" style="text-decoration:none; display:block; text-align:right; font-weight:bold; font-size:16px;">
                            Добавить в корзину
                        </a>
	                	@endforeach
                	@endforeach
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
