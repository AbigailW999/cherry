@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My order</div>
                    <form method="post" >
                        <table>
                            <tr>
                                <td>Picture</td>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Amount</td>
                                <td>Sum</td>
                                <td>Act</td>
                            </tr>
                            @foreach($arr as $key=>$value)
                            @php
                                $sum=$products[$key]->price*$value;
                            @endphp
                            <tr>
                                <td><span id="picture_{{$key}}">
                                @if($products[$key]->picture !='')
                            <img src="{{asset('uploads/thumb/'.$products[$key]->picture)}}" />
                            @endif
                                </span></td>
                                <td><span name="name" id="name_{{$key}}">{{$products[$key]->name}}</span></td>
                                <td><span name="price" id="price_{{$key}}">{{$products[$key]->price}}</span></td>
                                <td><span name="{{$key}}" id="value_{{$key}}">{{$value}}</span></td>
                                <td><span name="summa" id="summa_{{$key}}">{{$sum}}</span></td>
                                <td><span name="act" id=""><a href="{{asset('basket/delete/'.$key)}}">&times;</a></span></td>
                            </tr>
    <!--                        <tr>
                                <td colspan="3">Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> -->
                            @endforeach
                        </table>
                    </form>

                    <p>Username</p><input type="text" name="username">
                    <p>Email</p><input type="email" name="email">
                    <p>Phone</p><input type="tel" name="phone"></br>
                    <button>Confirm order</button>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection