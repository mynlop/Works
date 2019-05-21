<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Works | Motivacion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            body{
                background-color: #f5f5f5;
            }
            .carousel-item {
                height: 650px;
            }
            .carousel-item > img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: auto;
                filter: blur(5px);
            }
        </style>
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height"> --}}
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <header>
                    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                        <a class="navbar-brand" href="#">Works</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Buscar</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Motivacion</a>
                                </li>
                            </ul>
                            <span class="navbar-text">
                                <a href="{{ url('/login') }}">Login</a>
                            </span>
                      </div>
                    </nav>
                </header>
                <main>
                    <div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.pexels.com/photos/220444/pexels-photo-220444.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><strong>El emprendedor siempre busca el cambio, responde a él y lo utiliza como oportunidad</strong></h3>
                                    <p>Peter Drucker</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/1143008/pexels-photo-1143008.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><strong>Trabaja duro en silencio, que el éxito sea tu ruido</strong></h3>
                                    <p>Frank Ocean</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><strong>Lo que haces hoy puede mejorar todos tus mañanas</strong></h3>
                                    <p>Ralph Marston</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/1046896/pexels-photo-1046896.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><strong>Tienes que hacer que ocurra</strong></h3>
                                    <p>Denis Diderot</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/1068523/pexels-photo-1068523.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><strong>Elige un trabajo que te guste y no tendrás que trabajar ni un día en tu vida</strong></h3>
                                    <p>Confucio</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </main>
            </div>
        {{-- </div> --}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
