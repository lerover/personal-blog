<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .content-container {
            position: relative;
        }

        .navbarmenu {
            position: sticky;
            top: 0;
            left: 0;
        }


        .sidenav {
            background-color: black;
            width: 200px;
            height: 100vh;

            position: fixed;
        }

        .sidenav a {
            display: block;
            font-size: 20px;
            text-decoration: none;
            color: white;
            padding: 6px;
        }
    </style>
</head>

<body>
    <div class="container-fluid content-container px-0">
        <div class="row">
            <div class="col-md-12">

                <!-- navigation -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary navbarmenu ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{url('admin/dashboard')}}">Personal Blog</a>


                        <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        {{Auth::user()->name}}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn border-0"
                                                    onclick="return confirm('Are you sure you want to logout?')">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>

                        </div>
                    </div>
                </nav>

                <div class="row ">

                    <!-- sidebar menu -->
                    <div class="sidenav col-md-4">
                        <a href="{{url('/admin/users')}}">Users</a>

                        <a href="{{url('admin/skills')}}">Skill</a>

                        <a href="{{url('admin/projects')}}">Projects</a>

                        <a href="{{url('admin/studentcount')}}">Students</a>

                        <a href="{{url('admin/categories/')}}">Post Category</a>
                    
                        <a href="{{url('admin/posts/')}}">Posts</a>
                    </div>

                    <!-- main content -->
                    <div class="main col-md-8 ms-auto me-auto">

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>