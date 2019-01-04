@extends('layouts.'.$temp)<!-- $temp из PageController -->
@section('styles')
@parent
<link href="{{asset('public/css/page.css')}}" rel="stylesheet">
@endsection
@section('content')
<a href="{{$_SERVER['REQUEST_URI'].'?print=Y'}}">Версия для печати</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$obj->name}}</div>

                <div class="card-body">
                    {!! $obj->body !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
