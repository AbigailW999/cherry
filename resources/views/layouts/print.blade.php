<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cherry</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        @section('styles')
	        <link rel="stylesheet" type="text/css" href="{{asset('/media/css/style.css')}}" media="all">
	        <style>
	            #sign{
	            margin-right:10px;          
	            }
	            a #lii{
	                margin-left: 20px;
	                color: blue;
	            }
	        </style>
        @show
        <script src="{{asset('/public/js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
    </head>
    <body>
        @yield('content')
    </body>
            <script src="{{asset('/public/js/main.js')}}" type="text/javascript"></script>
        @section('script')
        @show
</html>