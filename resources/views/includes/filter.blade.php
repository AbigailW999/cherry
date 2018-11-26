@foreach($products as $one)
	<a href="{{asset('products/'.$one->id)}}">{{$one->name}}</a>
@endforeach