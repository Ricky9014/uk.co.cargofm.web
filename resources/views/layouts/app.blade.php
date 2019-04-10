<!DOCTYPE html>
<html lang="en">
<head>
    <title>CARGO</title>
    <!--bootstrap 4-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--bootstrap 4 end-->

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--style.css end-->

    <!--Font Awsome 5-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
          integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!--Font Awsome 5 end-->

    <!--slider-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <!--slider end-->
</head>
<body>
<!--responsive header-->
<div class="container-fluid mb-3 zeropadding" id="app">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand logoText" href="{{ route('index') }}">CARGO FM </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNavDropdown" class="navbar-collapse collapse ">
                <ul class="navbar-nav mr-auto">
                    @if (Auth::user() != null)
                    <li class="nav-item accout_arrow ">
                        <a class="nav-link header_texts accout_arrow1" href="#"><i
                                class='far fa-user-circle header_user_icon'></i>Your Account
                        </a>
                    </li>
                    <li class="nav-item nav_border1 ">
                        <a class="nav-link header_texts" href="#">213 Hours Listened</a>
                    </li>
                    @else
                        <li class="nav-item nav_border1">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
                    {{--<li class="nav-item nav_border">--}}
                        {{--<a class="nav-link" href="{{ route('index') }}">Home</a>--}}
                    {{--</li>--}}
                    <li class="nav-item nav_border1">
                        <div class="dropdown nav-link">
                            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                Team
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dropdown1 baoys" href="#">About</a>
                                <a class="dropdown-item dropdown2" href="#">Apply</a>
                                <a class="dropdown-item" href="#">Contact</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav_border1">
                        <a class="nav-link" href="#">Schedule</a>
                    </li>


                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connect with Us</a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <i class='fab fa-discord header_icons'></i>
                            <i class='fab fa-android header_icons'></i>
                            <i class='fab fa-apple header_icons'></i>
                            <i class='fab fa-patreon header_icons'></i>
                            <i class='fab fa-twitter header_icons'></i>
                            <i class='fab fa-instagram header_icons'></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--responsive header end-->

<!--section 1-->
<div class="container-fluid mb-3">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-6 on_air">
            <b>ON-AIR <i class='fas fa-circle on-air-mark'></i></b><br>
            <div class="col-md-10">
                <button class="listen_btn"><i class='fas fa-caret-right'></i>&nbsp;&nbsp;&nbsp;&nbsp;Listen</button>
            </div>
            <p class="also_on">Also on</p>
            <div class="d-flex align-items-center justify-content-center mb-2 mt-1">
                <i class='fab fa-android header_icons'></i>
                <i class='fab fa-apple header_icons'></i>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6 zeropadding">
            <img src="images/team-1.jpg" class="team_img">
        </div>
        <div class="col-lg-8 col-md-8 col-12 zeropadding">
            <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-12 infoborder">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-8 duration">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <p><b>Duration : </b>19:00 - 21:00</p><br>
                                            <b>Dj Rob</b><br>
                                            <p>21/3/2019</p>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <p><b>Request or chat to Dj Rob <i
                                                        class='far fa-comment-dots fa-2x'></i></b></p><br>
                                            <p class="slider_requests">Rob has the latest hits from the UK top
                                                40</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-4 nextdj">
                                    <p><b>Next </b>19:00 - 21:00</p><br>
                                    <b>The weekend show with Ricky</b><br>
                                    <p>12/02/2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-12 infoborder">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-8 duration">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <p><b>Duration : </b>19:00 - 21:00</p><br>
                                            <b>Dj Rob</b><br>
                                            <p>21/3/2019</p>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <p><b>Request or chat to Dj Rob <i
                                                        class='far fa-comment-dots fa-2x'></i></b></p><br>
                                            <p class="slider_requests">Rob has the latest hits from the UK top
                                                40</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-4 nextdj">
                                    <p><b>Next </b>19:00 - 21:00</p><br>
                                    <b>The weekend show with Ricky</b><br>
                                    <p>12/02/2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-12 infoborder">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-8 duration">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <p><b>Duration : </b>19:00 - 21:00</p><br>
                                            <b>Dj Rob</b><br>
                                            <p>21/3/2019</p>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <p><b>Request or chat to Dj Rob <i
                                                        class='far fa-comment-dots fa-2x'></i></b></p><br>
                                            <p class="slider_requests">Rob has the latest hits from the UK top
                                                40</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-4 nextdj">
                                    <p><b>Next </b>19:00 - 21:00</p><br>
                                    <b>The weekend show with Ricky</b><br>
                                    <p>12/02/2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <ul class="arrows">
                    <li>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <div class="arrow_style">
                                <i class="fas fa-angle-left fa-2x"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <div class="arrow_style">
                                <i class="fas fa-angle-right fa-2x"></i>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- Left and right controls -->
            </div>
        </div>
    </div>
</div>

<!--section 1 end-->
@yield('content')

<!--footer-->
<div class="container-fluid footer mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <b>Follow Us</b><br><br>
                    <i class='fab fa-discord header_icons'></i>
                    <i class='fab fa-patreon header_icons'></i>
                    <i class='fab fa-twitter header_icons'></i>
                    <i class='fab fa-instagram header_icons'></i>
                </div>
                <div class="col-md-4">
                    <b>Support Us</b><br><br>
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-6">
                            <button class="patron"><img src="{{ asset('images/patron.png') }}" class="patron_img">BECOME A PATRON
                            </button>
                        </div>
                        <div class="col-md-4 col-6">
                            <button class="donate"><img src="{{ asset('images/paypal.png') }}" class="patron_img">DONATE</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <b>Listen on the Go</b><br><br>
                    <i class='fab fa-android header_icons'></i>
                    <i class='fab fa-apple header_icons'></i>
                </div>
            </div>
        </div>

    </div>
</div>
<!--footer end-->
</body>
@yield('scripts')

</html>
