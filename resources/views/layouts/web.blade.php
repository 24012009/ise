<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>{{$seo->og_title}}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield("head")
</head>
<body>
<header id="header" class="fixed-top">
    @yield('header-promotion')
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="container-fluid">
            <a class="navbar-brand customize-logo-size" href="/">
                <img src="{{asset($properties->logo)}}" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                <span class="bi bi-filter"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <div class="nav-links mx-auto mt-2 mt-lg-0">
                    <ul>
                        {!! $menu !!}
                    </ul>
                </div>
                <form action="/search" class="lead-search-form-collapsible d-none d-lg-inline-block" method="POST" role="search">
                    {{ csrf_field() }}
                    <input type="search" class="collapsible-form-control" name="q" id="search" placeholder="Search..">
                </form>
                <ul class="navbar-nav">
                    @if(session('StudentID'))
                        <li class="nav-item nav-item-profile">
                            <a href="#">
                                <i class="bi bi-person-fill"></i>
                                Profile
                            </a>
                            <ul>
                                <li>
                                    <a href="{{URL::to("/student/dashboard/profiles")}}">Profile</a>
                                </li>
                                <li>
                                    <a href="{{URL::to("/student/dashboard/logout")}}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{url("/student/login")}}">
                                <i class="bi bi-person-fill"></i>
                                Log In
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<main role="main">
    @yield("slide")
    @yield('content')
</main>
<footer>
    @yield('footer')
</footer>
<!-- Optional JavaScript -->

<script src="{{ URL::asset('js/app.js')}}"></script>
@yield("script")
<script>
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });
    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
      $('.dropdown-menu a').click(function(e){
        e.preventDefault();
          if($(this).next('.submenu').length){
            $(this).next('.submenu').toggle();
          }
          $('.dropdown').on('hide.bs.dropdown', function () {
         $(this).find('.submenu').hide();
      })
      });
    }
</script>
</body>
</html>
