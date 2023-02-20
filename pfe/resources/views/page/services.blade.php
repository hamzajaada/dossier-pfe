<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alegreya+Sans+SC:ital@1&family=Bebas+Neue&family=Dosis&family=Kanit:ital,wght@0,100;0,200;1,100&family=Open+Sans&family=Oswald&family=Poiret+One&family=Poppins:wght@500&family=Prompt:ital,wght@1,200&family=Questrial&family=Roboto+Condensed&family=Rowdies:wght@700&family=Slabo+27px&family=Unbounded:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav style="position: fixed;width: 100%" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" >
                Store <span style="color:orangered">of</span>  Skills
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->nom}} {{ Auth::user()->prenom}}
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
    </nav> <section class="services-p">
  
    @extends('page.fixeBarre')
    
    <section class="P-2">
   
    <h2 class="titre-part3">Les dernières <span id="span-t2" style="color:#ff3c74">Services</span></h2>
    <div class="demandes">

                <article>
                    <div class="info-per">
                         <div class="img-prfl"><img src="images/profil1.jpg" alt="" srcset=""></div>
                         <h4 class="info-prfl">Alyan GETEREZ</h4>
                    </div>
                    <div class="image-dem">
                            <img src="images/dem1.jpg" alt="" srcset="">
                    </div>
                    <div class="desc-dem">
                              <p class="text-dem">Bonjour, nous avons un problème de toilette bouché impossible de le débouché 
                                on apprécierait un coup de main pour ceux qui le peuvent
                              </p>
                    </div>
                    <center><div class="button-commander"><a href="" class="but-post">commander</a></div></center>

                </article>
                <article>
                    <div class="info-per">
                        <div class="img-prfl"><img src="images/profil2.jpg" alt="" srcset=""></div>
                        <h4 class="info-prfl">Mamado Sedebi</h4>
                    </div>
                    <div class="image-dem">
                        <img src="images/dem2.jpg" alt="" srcset="">
                    </div>
                    <div class="desc-dem">
                        <p class="text-dem">Bonjour, nous ne sommes pas véhiculé du coup nous recherchons
                             une personne véhiculé pour nous aider à récupérer un salon de jardin au 6 rue Clau
                          </p>
                    </div>
                    <center><div class="button-commander"><a href="" class="but-post">commander</a></div></center>

                </article>
                <article>
                    <div class="info-per">
                        <div class="img-prfl"><img src="images/profil3.jpg" alt="" srcset=""></div>
                        <h4 class="info-prfl">Mamado Sedebi</h4>
                    </div>
                    <div class="image-dem">
                        <img src="images/dem3.jpg" alt="" srcset="">

                    </div>
                    <div class="desc-dem">
                        <p class="text-dem">
                            Bonjour, Je souhaiterai que quelqu'un m'installe les étagères murales comme indiqué sur le croquis.
                             Notre mur est en placo, nous avons donc achete
                          </p>
                    </div>
                    <center><div class="button-commander"><a href="" class="but-post">commander</a></div></center>

                </article>
                <article>
                    <div class="info-per">
                        <div class="img-prfl"><img src="images/profil3.jpg" alt="" srcset=""></div>
                        <h4 class="info-prfl">Mamado Sedebi</h4>
                    </div>
                    <div class="image-dem">
                        <img src="images/dem3.jpg" alt="" srcset="">

                    </div>
                    <div class="desc-dem">
                        <p class="text-dem">
                            Bonjour, Je souhaiterai que quelqu'un m'installe les étagères murales comme indiqué sur le croquis.
                             Notre mur est en placo, nous avons donc achete
                          </p>
                    </div>
                    <center><div class="button-commander"><a href="" class="but-post">commander</a></div></center>

                </article>
                <article>
                    <div class="info-per">
                        <div class="img-prfl"><img src="images/profil3.jpg" alt="" srcset=""></div>
                        <h4 class="info-prfl">Mamado Sedebi</h4>
                    </div>
                    <div class="image-dem">
                        <img src="images/dem3.jpg" alt="" srcset="">

                    </div>
                    <div class="desc-dem">
                        <p class="text-dem">
                            Bonjour, Je souhaiterai que quelqu'un m'installe les étagères murales comme indiqué sur le croquis.
                             Notre mur est en placo, nous avons donc achete
                          </p>
                    </div>
                    <center><div class="button-commander"><a href="" class="but-post">commander</a></div></center>

                </article>
                <article>
                    <div class="info-per">
                        <div class="img-prfl"><img src="images/profil3.jpg" alt="" srcset=""></div>
                        <h4 class="info-prfl">Mamado Sedebi</h4>
                    </div>
                    <div class="image-dem">
                        <img src="images/dem3.jpg" alt="" srcset="">

                    </div>
                    <div class="desc-dem">
                        <p class="text-dem">
                            Bonjour, Je souhaiterai que quelqu'un m'installe les étagères murales comme indiqué sur le croquis.
                             Notre mur est en placo, nous avons donc achete
                          </p>
                    </div>
                    <center><div class="button-commander"><a href="" class="but-post">commander</a></div></center>

                </article>
                <article>
                    <div class="info-per">
                        <div class="img-prfl"><img src="images/profil3.jpg" alt="" srcset=""></div>
                        <h4 class="info-prfl">Mamado Sedebi</h4>
                    </div>
                    <div class="image-dem">
                        <img src="images/dem3.jpg" alt="" srcset="">

                    </div>
                    <div class="desc-dem">
                        <p class="text-dem">
                            Bonjour, Je souhaiterai que quelqu'un m'installe les étagères murales comme indiqué sur le croquis.
                             Notre mur est en placo, nous avons donc achete
                          </p>
                    </div>
                    <center><div class="button-commander"><a href="" class="but-post">commander</a></div></center>

                </article>
                <article>
                    <div class="info-per">
                        <div class="img-prfl"><img src="images/profil3.jpg" alt="" srcset=""></div>
                        <h4 class="info-prfl">Mamado Sedebi</h4>
                    </div>
                    <div class="image-dem">
                        <img src="images/dem3.jpg" alt="" srcset="">

                    </div>
                    <div class="desc-dem">
                        <p class="text-dem">
                            Bonjour, Je souhaiterai que quelqu'un m'installe les étagères murales comme indiqué sur le croquis.
                             Notre mur est en placo, nous avons donc achete
                          </p>
                    </div>
                    <center><div class="button-commander"><a href="" class="but-post">commander</a></div></center>
                </article>  
    </div>     
    </section> 
</section>
<script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
