<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Weblog a Blogging Category Bootstrap responsive WebTemplate | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('css/jquery.desoslide.css')}}">
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{'css/fontawesome-all.css'}}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">
</head>

<body>
<!--Header-->

<header>
    <div class="top-bar_sub_w3layouts container-fluid">
        <div class="row">
            <div class="col-md-4 logo text-left">
                <a class="navbar-brand" href="{{route('index')}}">
                    <i class="fab fa-linode"></i> Weblog</a>
            </div>
            <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
                @auth
                <span>Welcome Back!</span>
                    <span class="mx-lg-4 mx-md-2  mx-1">
						<a href="{{route('exit')}}">
							<i class="fas fa-sign-out-alt"></i> Sign Out</a>
					</span>
                    <span>
                @else
                <span class="mx-lg-4 mx-md-2  mx-1">
						<a href="{{route('login')}}">
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
                <span>
						<a href="{{route('register')}}">
							<i class="far fa-user"></i> Register</a>
                </span>
                @endauth
            </div>
            <div class="col-md-4 log-icons text-right">

                <ul class="social_list1 mt-3">

                    <li>
                        <a href="#" class="facebook1 mx-2" >
                            <i class="fab fa-facebook-f"></i>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter2">
                            <i class="fab fa-twitter"></i>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="dribble3 mx-2">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header_top" id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="{{route('blog1')}}">Standard Blog</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('blog2')}}">2 Column Blog</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('blog3')}}">3 Column Blog</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>

                </ul>
                <form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                    <button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>



            </div>
        </nav>

    </div>
</header>
<!--//header-->


@yield('main')

<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-grid-agileits-w3ls text-left">
                <h3>About US</h3>
                <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>
                <div class="read">
                    <a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 footer-grid-agileits-w3ls text-left">

                <div class="tech-btm">
                    <h3>Latest Posts</h3>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-5 blog-grid-left">
                            <a href="{{route('single')}}">
                                <img src="{{asset('images/4.jpg')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-7 blog-grid-right">

                            <h5>
                                <a href="{{route('single')}}">Pellentesque dui, non felis. Maecenas male non felis </a>
                            </h5>
                            <div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
                            </div>
                        </div>

                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-5 blog-grid-left">
                            <a href="{{route('single')}}">
                                <img src="{{asset('images/5.jpg')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-7 blog-grid-right">

                            <h5>
                                <a href="{{route('single')}}">Pellentesque dui, non felis. Maecenas male non felis </a>
                            </h5>
                            <div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
                            </div>
                        </div>

                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-5 blog-grid-left">
                            <a href="{{route('single')}}">
                                <img src="{{asset('images/6.jpg')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-7 blog-grid-right">

                            <h5>
                                <a href="{{route('single')}}">Pellentesque dui, non felis. Maecenas male non felis </a>
                            </h5>
                            <div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- subscribe -->
            <div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
                <h2>Signup to our newsletter</h2>
                <div class="subscribe-main text-left">
                    <div class="subscribe-form">
                        <form action="{{route('newsletter')}}" method="post" class="subscribe_form">
                            @csrf
                            <input class="form-control" name="email" type="email" placeholder="Enter your email..." required="">
                            <button type="submit" class="btn btn-primary submit">Submit</button>
                        </form>
                        <div class="clearfix"> </div>
                    </div>
                    <p>We respect your privacy.No spam ever!</p>
                </div>
                <!-- //subscribe -->
            </div>
        </div>
        <!-- footer -->
        <div class="footer-cpy text-center">
            <div class="footer-social">
                <div class="copyrighttop">
                    <ul>
                        <li class="mx-3">
                            <a class="facebook" href="#">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a class="facebook" href="#">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a class="facebook" href="#">
                                <i class="fab fa-google-plus-g"></i>
                                <span>Google+</span>
                            </a>
                        </li>
                        <li>
                            <a class="facebook" href="#">
                                <i class="fab fa-pinterest-p"></i>
                                <span>Pinterest</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="w3layouts-agile-copyrightbottom">
                <p>© 2018 Weblog. All Rights Reserved | Design by
                    <a href="http://w3layouts.com/">W3layouts</a>
                </p>

            </div>
        </div>

        <!-- //footer -->


    </div>
</footer>

<!-- js -->
<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>

@yield('under')


<a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>


<!-- //Custom-JavaScript-File-Links -->
<script src="{{asset('js/bootstrap.js')}}"></script>


</body>

</html>
