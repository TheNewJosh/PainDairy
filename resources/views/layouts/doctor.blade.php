<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
        <title>
            @yield('title') || Pain Diary
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
    </head>
    <body class="g-sidenav-show  bg-gray-200">
        <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
            <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <span class="ms-1 font-weight-bold text-white">Computer-Based Pain Diary</span>
            </a>
            </div>
            <hr class="horizontal light mt-0 mb-2">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="{{ url('dashboarddoc')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white " href="{{ url('reportpaindoc')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Pain Records</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white " href="{{ url('healthconditiondoc')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Health Conditions</span>
                </a>
                </li>
                <!--<li class="nav-item">
                <a class="nav-link text-white " href="{{ url('profiledoc')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
                </li> -->
            </ul>
            </div>
            <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
            </div>
            </div>
        </aside>

        @yield('content')

        <form method="post" action="{{ route('logout')}}" id="logout-form">
            @csrf
        </form>

        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets/js/material-dashboard.min.js')}}"></script>

        @if(session()->get('sucess'))
        <script>
        alert("{{session()->get('sucess')}}");
        </script>
        @endif
    </body>
</html>