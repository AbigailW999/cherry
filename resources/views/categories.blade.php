@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                	@foreach($cats as $cat)
                	<h2 class="title">{{$cat->name}}</h2>
	                	@foreach($cat->products()->get() as $one)
	                	<h4>{{$one->name}}</h4>
	                		<!-- подключаем картинки -->
		                	@if($one->picture !='')
		                	<img src="{{asset('uploads/thumb/'.$one->picture)}}" />
		                	@endif

	                	{!!$one->body!!}
	                	@endforeach
                	@endforeach
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
