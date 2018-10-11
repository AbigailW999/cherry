<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cherry</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="stylesheet" type="text/css" href="{{asset('/media/css/style.css')}}" media="all">
        <style>
            #sign{
            margin-right:10px;          
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="headerContent">
                    <div class="left"><h1><a href="#">Cherry</a></h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></div>
                    <div class="right">
                        <a href="#" id="sign">Sign in/Sign out</a>
                        <form class="search">
                            <input type="text" placeholder="Search...">
                            <input type="image" src="{{asset('/media/img/search.png')}}" title="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="itemSlider">
                    <div class="bgSlide"><img src="{{asset('/media/img/bg-slide.jpg')}}"></div>
                    <div class="descSlide">
                        <h1>Eaten berry</h1>
                        <p>and go for a walk</p>
                        <span>Duis aute irure dolor...</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="nav">
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
            </div>
            <div class="breadcrumbs"><a href="#">Home</a> / <a href="#">Another Page</a> / This page</div>
            <div class="main">
                <div class="leftCol">
                    <form>
                        <h2>Contact us</h2>
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                        <input type="text" disabled="disabled" placeholder="Addres">
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
                    <h1>What We Do…</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in <a href="#">voluptate velit esse cillum dolore</a> eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ul class="img">
                        <li><a href="#"><img src="{{asset('/media/img/img1.png')}}"></a></li>
                        <li><a href="#"><img src="{{asset('/media/img/img2.png')}}"></a></li>
                        <li><a href="#"><img src="{{asset('/media/img/img3.png')}}"></a></li>
                    </ul>
                    <h1>Lists</h1>
                    <div class="row">
                        <div class="span">
                            <h4>List style type circle <code>&lt;ul&gt;</code></h4>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Sed ut perspiciatis unde</li>
                                <li>At vero eos et accusamus
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Sed ut perspiciatis unde</li>
                                        <li>At vero eos et accusamus</li>
                                    </ul>
                                </li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Sed ut perspiciatis unde</li>
                                <li>At vero eos et accusamus</li>
                            </ul>
                        </div>
                        <div class="span">
                            <h4>Unstyled <code>&lt;ul class="unstyled"&gt;</code></h4>
                            <ul class="unstyled">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Sed ut perspiciatis unde</li>
                                <li>At vero eos et accusamus
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Sed ut perspiciatis unde</li>
                                        <li>At vero eos et accusamus</li>
                                    </ul>
                                </li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Sed ut perspiciatis unde</li>
                                <li>At vero eos et accusamus</li>
                            </ul>
                        </div>
                        <div class="span">
                            <h4>Ordered <code>&lt;ol&gt;</code></h4>
                            <ol>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Sed ut perspiciatis unde</li>
                                <li>At vero eos et accusamus</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Sed ut perspiciatis unde</li>
                                <li>At vero eos et accusamus</li>
                            </ol>
                        </div>
                    </div>
                    <h1>Tables</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lorem</th>
                                <th>Ipsum</th>
                                <th>Dolor</th>
                                <th>Sit</th>
                                <th>Amet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum</td>
                                <td>At vero eos</td>
                                <td>Sed ut</td>
                                <td>Dolor sit amet</td>
                                <td><a href="#">Epd.</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sed ut</td>
                                <td>Dolor sit amet</td>
                                <td>Lorem ipsum</td>
                                <td>At vero eos</td>
                                <td><a href="#">Epd.</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>At vero eos</td>
                                <td>Lorem ipsum</td>
                                <td>Sed ut</td>
                                <td>Dolor sit amet</td>
                                <td><a href="#">Epd.</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dolor sit amet</td>
                                <td>At vero eos</td>
                                <td>Lorem ipsum</td>
                                <td>Sed ut</td>
                                <td><a href="#">Epd.</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>At vero eos</td>
                                <td>Lorem ipsum</td>
                                <td>Sed ut</td>
                                <td>Dolor sit amet</td>
                                <td><a href="#">Epd.</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
</html>