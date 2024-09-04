<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- BOOTSTRAP CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- CUSTOM CSS  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- HEADER SECTION-->
                <div class="header">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <img src="images/profile.jpg" id="headerImg" alt="">
                        </div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <div>
                                <p class="hello">HELLO!</p>
                                <p class="itme">IT'S ME</p>
                                <p class="yms">YE MYINT SOE</p>
                                <p class="hc">THE HAPPY CODER</p>
                                <br>
                                <a href="posts.html">
                                    <button class="btn btn-info">
                                        <i class="fa fa-plus-circle"></i>
                                        Explore My Blogs
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

                <!-- NAVBAR SEXTION -->
                <div class="position-sticky" id="navbar">
                    <a href="index.html">HOME</a>
                    <a href="posts.html">BLOGS</a>

                    @if (Auth::check())
                        <a href="{{url('/register')}}" class="float-end">{{strtoupper(Auth::user()->name)}}</a>
                        <a href="{{ url('/logout')}}" class="float-end"
                            onclick="event.preventDefault(); if(confirm('Are you sure you want to logout?')){document.getElementById('logout-form').submit()}">LOGOUT</a>
                        <form action="{{url('/logout')}}" method="post" id="logout-form" class="d-none">
                            @csrf

                        </form>
                    @else
                        <a href="{{url('/login')}}" class="float-end">LOGIN</a>
                    @endif
                </div>

                @yield('content')

                <!-- FOOTER SECTION  -->
                <div class="footer">
                    <div class="row">

                        <div class="col-sm-12 col-md-4 mb-4">
                            <h5>ABOUT THIS WEBSITE</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto
                                laborum excepturi molestiae dolore? Beatae distinctio.
                            </p>
                        </div>

                        <div class="col-sm-12 col-md-4 mb-4">
                            <h5>CONTACT INFO</h5>
                            <span> <i class="fas fa-mobile-alt"></i> 09403438913 </span> <br>
                            <span> <i class="far fa-envelope"></i> yms.yemyintsoe@gmail.com </span>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <h5>FOLLOW ME ON</h5>
                            <a href="https://www.facebook.com/ye.m.soe.96387/" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://www.instagram.com/yemyintsoe_salai/" target="_blank">
                                <i class="fab fa-instagram-square"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://www.linkedin.com/in/ye-myint-soe-28a2aa1a0/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CUSTOMS JS  -->
    <script src="js/main.js"></script>
    <!-- BOOTSTRAP JS  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>