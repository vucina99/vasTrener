<!doctype html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/efd70ed668.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}">


    <!--    SEO OPTIMIZATION-->
    <title>@yield('title' , '')  - Pronadji Trenera </title>
    <link rel="icon" type="image/x-icon"  href="{{asset('')}}">

    {{--    <link rel="canonical" href="https://majski-architecture-solutions.com"/>--}}
    {{--    <meta property="og:url" content="https://majski-architecture-solutions.com/"/>--}}

<!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('img/logo/app-icon.png')}}" sizes="12x12"/>
    <link href="{{asset('img/logo/app-icon.png')}}" rel="apple-touch-icon">

    <meta name="robots" content="index, follow">
    <meta name="description"
          content=" @yield('description'  , '')"/>
    <meta property="og:title" content=" @yield('title'  , '') "/>
    <meta name="keywords"
          content=" @yield('keywords' , '')"/>
    <meta property="og:keywords"
          content="@yield('keywords'  , '')"/>
    <meta property="og:description"
          content=" @yield('description'  , '')"/>
    <meta property="og:image" content="{{asset('img/logo/logo-crni.png')}}"/>
    <meta property="og:type" content="Website"/>
    <meta name="language" content="Serbian, Srpski">
    <meta name="copyright" content="Copyright ©️ 2023 pronadjiTrenera  sva prava zadržana">
    <meta property="og:locale" content="sr"/>

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-color pt-2 pb-2  fixed-top ">
        <div class="container">
            <a class="navbar-brand logo-size" href="/">
                <img src="{{asset('img/logo/logo-plavo-beli.png')}}" class="img-fluid" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ms-auto  mb-2 mb-lg-0">
                    <li class="nav-item "><a href="/" class="nav-link  text-light">POČETNA</a></li>
                    <li class="nav-item "><a href="/treneri" class="nav-link  text-light">TRENERI</a></li>
                    <li class="nav-item "><a href="/onama" class="nav-link text-light">O NAMA</a></li>
                    <li class="nav-item scrollto"><a href="/#partneri" class="nav-link  text-light">PARTNERI</a></li>
                    <li class="nav-item scrollto"><a href="/#partneri" class="nav-link  text-light">BLOG</a></li>
                    <li class="nav-item scrollto"><a href="/#kontakt" class="nav-link text-light">KONTAKT</a></li>
                    @guest
                    <li class="margin-button">

                        <a  href="/register">
                            <button class="  btn py-0 px-2 btn-outline-primary"> REGISTRACIJA TRENERA <i
                                    class="fa-solid fa-right-to-bracket"></i></button>
                        </a>
                    </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link active dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Vuk
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    <header>
        @yield('header' , '')
    </header>
    <main >
        <div>
            @yield('content')
        </div>

    </main>

    <footer class="pt-5 bg-dark text-light ">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-12 ">
                    <div class="row">

                        <div class="col-lg-4 col-md-12 text-center">
                            <div class="w-100 d-flex justify-content-center">
                            <div class="logo-footer">
                                <img src="{{asset('img/logo/logo-plavo-beli.png')}}" class="img-fluid  "
                                     alt="logo_beli">
                            </div><br><br>
                            </div><br>
                            <div>
                                <p> <span class="text-primary">Phone: </span> +381 65 9377030 <br>
                                    <span class="text-primary">E-mail: </span> pronadjitrenera@gmail.com<br>
                                    <span class="text-primary">Location: </span> Srbija</p>
                            </div>


                        </div>

                        <div class="col-lg-4 col-md-12 mb-3  text-center">
                            <h4 class="text-primary">Meni</h4>
                            <ul class="nav flex-column text-center">
                                <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-light">Početna</a></li>
                                <li class="nav-item mb-2"><a href="/treneri" class="nav-link p-0 text-light">Treneri</a></li>
                                <li class="nav-item mb-2"><a href="/onama" class="nav-link p-0 text-light">O nama</a></li>
                                <li class="nav-item mb-2"><a href="/#partneri" class="nav-link p-0 text-light">Partneri</a></li>
                                <li class="nav-item mb-2"><a href="/#kontakt" class="nav-link p-0 text-light">Kontakt</a></li>
                                <li class="nav-item mb-2"><a href="/#kontakt" class="nav-link p-0 text-light">Blog</a></li>
                                <li class="nav-item mb-2"><a href="/login" class="nav-link p-0 text-light">Login</a></li>
                                <li class="nav-item mb-2"><a href="/register" class="nav-link p-0 text-light">Registracija trenera</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-3  text-center">
                            <h4 class="text-primary">Korisni linkovi</h4>
                            <ul class="nav flex-column  text-center">
                                <li class="nav-item mb-2"><a href="http://www.ukts.rs/" class="nav-link p-0 text-light">UKTS</a></li>
                                <li class="nav-item mb-2"><a href="https://fss.rs/vesti/treneri/" class="nav-link p-0 text-light">FSS</a></li>
                                <li class="nav-item mb-2"><a href="https://treneri-rss.rs/" class="nav-link p-0 text-light">RSS</a></li>
                                <li class="nav-item mb-2"><a href="https://www.ossrb.org/" class="nav-link p-0 text-light">OSSRB</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12  mb-3">
                    <form class=" text-center">
                        <h4>Prijavite se na newsletter</h4>
                        <p>U našem newsletteru možete pronaći najnovije informacije o našim trenerima partnerima i jos
                            mnogo toga. Pretplatite se danas kako biste ostali u toku sa najnovijim vestima i
                            ponudama!.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Vaš e-mail</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Vaš e-mail">
                            <button class="btn btn-primary" type="button">Prijava</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between  border-top ">
                <div class="pt-3 text-center">
                    <p>&copy; 2023 PronadjiTrenera, Sva prava zadržana.</p>
                </div>
                <div class="pt-3">
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li class="ms-3 text-light"><a class="link-light" href="#"><i
                                    class="fa-brands fa-square-facebook fa-2x"></i></a></li>
                        <li class="ms-3 text-light"><a class="link-light" href="#"><i
                                    class="fa-brands fa-instagram fa-2x"></i></a></li>
                        <li class="ms-3 text-light"><a class="link-light" href="#">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook"/>
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
    </footer>
</div>

<script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@vite( 'resources/js/app.js')


</body>
</html>
