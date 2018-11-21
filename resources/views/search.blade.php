@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search results</div>

                <div class="card-body">
					@foreach($products as $one)
					<h2><a href="{{asset('product/'.$one->id)}}">{{$one->name}}</a></h2>
					@endforeach

					@foreach($products_more as $one)
					<p><a href="{{asset('product/'.$one->id)}}">{!! $one->body !!}</a></p>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
