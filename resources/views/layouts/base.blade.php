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
        <div class="wrapper">
            <div class="header">
                <div class="headerContent">
                    <div class="left"><h1><a href="#">Cherry</a></h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>

                    <div class="right">
                        <form class="search"  method="get" action="{{asset('search')}}">
                            {{ csrf_field() }}<!-- Laravel form protection -->
                            <input type="text" name="search" placeholder="Search...">
                            <input type="image" src="{{asset('/media/img/search.png')}}" title="Search">
                        </form>
                       
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="itemSlider">
                    <div class="bgSlide"><img id="picture" src="{{asset('/media/img/bg-slide.jpg')}}"></div><!-- Link picture , my default pic - cherry pic -->
                    <div class="descSlide">
                        <h1>Eaten berry</h1>
                        
	                        <p>and go for a walk</p>
	                        <span id="name">Duis aute irure dolor...</span> <!-- Link name -->
	                    <div id="body"> <!-- Link body -->
	                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <ul class="menu">
                    <li><a href="#">{{__('pagination.home')}}</a></li>
                    <li><a href="#" data-name="news" data-body="Abot interesting news" data-picture="news.png">{{__('pagination.news')}}</a></li>
                    <li><a href="{{asset('categories')}}" data-name="products" data-body="About interesting products" data-picture="products.jpg">{{__('pagination.products')}}</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#" data-name="blog" data-body="About interesting company events" data-picture="blog.jpg">{{__('pagination.blog')}}</a></li>
                    <li><a href="#" data-name="forum" data-body="About interestin thoughts" data-picture="forum.jpg">{{__('pagination.forum')}}</a></li>
                    <li><a href="{{asset('about')}}">{{__('pagination.about_us')}}</a></li>
                    <li>
                                                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </li>
                </ul>
            </div>

            <div class="breadcrumbs"><a href="/">Home</a> / <a href="{{(asset($world))}}">{{ $world }}</a> / <a href="{{(asset($world2))}}">{{ $world2 }}</a></div>
            <div class="main">
                <a href="{{asset('basket')}}" style="text-align:right; font-weight:bold; font-size:17px; text-decoration:none; display:inline-block; margin-left:600px;">BASCKET ({{$counts}})</a>
                <div class="leftCol">
                    <form>
                        <h2>Contact us</h2>
                        <input type="text" placeholder="{{(asset($user)) ? $user->name : 'First Name'}}">
                        <input type="text" placeholder="Last Name">
                        <input type="email" placeholder="{{(asset($user)) ? $user->email : 'Email'}}">
                        <input type="text" placeholder="Phone number">
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <div class="row">
                            <h4>What kind of delivery do you need?</h4>
                            <input type="radio">
                            <label>Airlines delivery</label>
                            <div class="clear"></div>
                            <input type="radio">
                            <label>Railroads delivery</label>
                            <div class="clear"></div>
                            <input type="radio">
                            <label>Sea delivery</label>
                            <div class="clear"></div>
                        </div>
                        <div class="row">
                            <h4>What kind of notifications you want to receive?</h4>
                            <input type="checkbox" />
                            <label>Our new options</label>
                            <div class="clear"></div>
                            <input type="checkbox" />
                            <label>Our sales</label>
                            <div class="clear"></div>
                        </div>
                        <button type="submit" class="minWidth">Send</button>
                        <button type="reset" class="minWidth">Reset</button>
                    </form>
                    <div class="row">
                        <h2>Headline</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p><a href="#">More about</a></p>
                    </div>
                </div>
                <div class="rightCol">
                    @yield("content")
                </div>
            </div>

                    <div class="lang">
                        <ul class="menu1">
                            <li><a href="">{{$lang}}</a><!-- из LangComposer.php через SiteProvider.php-->
                                <ul class="menu2">
                                    <li><a href="/?lang=en">English</a></li>
                                    <li><a href="/?lang=ru">Russian</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
            <div class="footer">
                <div class="footerContent">
                    <div class="span1">
                        <h1>Sed ut</h1>
                        <div class="borderBottom"></div>
                        <p>Lorem ipsum dolor sit</p>
                        <ul class="clock">
                            <li>Nights! Absolutely No Extra Charge</li>
                            <li>Weekends! Absolutely No Extra Charge</li>
                            <li>Holidays! Absolutely No Extra Charge</li>
                        </ul>
                        <div class="social">
                            <div>Мы в социальных сетях: </div><ul><li><a target="newtab" href="http://www.facebook.com/?sk=app_2309869772"><img src="{{asset('/media/img/facebook.png')}}"></a></li><li><a target="newtab" href="https://twitter.com/psdhtmlcss"><img src="{{asset('/media/img/twitter.png')}}" /></a></li><li><img src="{{asset('/media/img/vk.png')}}" /></li></ul>
                        </div>
                    </div>
                    <div class="span1">
                        <h1>At vero eos</h1>
                        <div class="borderBottom"></div>
                        <p>Lorem ipsum dolor sit</p>
                        <ul>
                            <li>West Hollywood (323) 221-1107</li>
                            <li>Beverly Hills (310) 202-5428</li>
                            <li>Pasadena (626) 296-2664</li>
                            <li>West Hollywood (323) 221-1107</li>
                            <li>Beverly Hills (310) 202-5428</li>
                        </ul>
                        <p><strong>Lorem ipsum dolor sit amet</strong></p>
                    </div>
                    <div class="span1">
                        <h1>Lorem ipsum dolor</h1>
                        <div class="borderBottom"></div>
                        <p>Lorem ipsum dolor sit</p>
                        <ul class="unstyled">
                            <li>Hi-Tech Cherry Company</li>
                            <li><a href="mailto:psdhtmlcss@mail.ru">infocherry@gmail.com</a></li>
                            <li>5104 W. Washington Blvd</li>
                            <li>Los Angeles , CA , 90016 United States</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
            <script src="{{asset('/public/js/main.js')}}" type="text/javascript"></script>
        @section('script')
        @show
</html>