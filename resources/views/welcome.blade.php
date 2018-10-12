@extends("layouts.base")
@section("content")
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
@endsection