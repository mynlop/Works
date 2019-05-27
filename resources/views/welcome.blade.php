@extends('layouts.app')

@section('content')
    <div class="content">
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


            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-center">Sitio desarrollado por <strong>Mynor Lopez</strong> 2019 </p>
                    </div>
                </div>
            </div>

    </div>
@endsection
