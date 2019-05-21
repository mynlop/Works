<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Motivacion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            body{
                background-color: #f5f5f5;
            }
            main{
                margin-top: 75px;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Works</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Informacion Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tabla empleos</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="{{ url('/login') }}">Correo</a>
                    </span>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-light">
                            <div class="card-header">Programador</div>
                            <div class="card-body">
                                <p class="card-text">Encargado de la creacion de los sitios pedidos por...</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-light">
                            <div class="card-header">Chef</div>
                            <div class="card-body">
                                <p class="card-text">Persona dispuesta a ser el chef para una empresa que...</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-light">
                            <div class="card-header">Chofer</div>
                            <div class="card-body">
                                <p class="card-text">Persona encargada de manejar transportes pesados que...</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-light">
                            <div class="card-header">Maestra</div>
                            <div class="card-body">
                                <p class="card-text">Persona con buena actitud para dar clases a niños de...</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            
        </main>
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>