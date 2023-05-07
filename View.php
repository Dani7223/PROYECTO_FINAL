<?php

//Operaciones con la BBDD

require_once "LibreriaPDO.php";
require_once "Model.php";

$db = new DB("hotelgd");
$model = new Model();

class View
{
    public function mostrarCabecera()
    {
        echo '<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/zapatos.png" alt="Tu logo" width="50" height="130"
                    class="d-inline-block align-text-top">
            </a>
            <h2>ALMACÉN DE ZAPATOS </h2>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </nav>';
    }


    public function mostrarMenu()
    {
        echo '   <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menu-hombres" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Hombres
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-hombres">
                        <a class="dropdown-item" href="#">Zapatillas de running</a>
                        <a class="dropdown-item" href="#">Zapatillas de baloncesto</a>
                        <a class="dropdown-item" href="#">Zapatillas de skate</a>
                        <a class="dropdown-item" href="#">Zapatillas de moda</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menu-mujeres" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Mujeres
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-mujeres">
                        <a class="dropdown-item" href="#">Zapatillas de running</a>
                        <a class="dropdown-item" href="#">Zapatillas de baloncesto</a>
                        <a class="dropdown-item" href="#">Zapatillas de skate</a>
                        <a class="dropdown-item" href="#">Zapatillas de moda</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menu-ninos" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Niños
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-ninos">
                        <a class="dropdown-item" href="#">Zapatillas de running</a>
                        <a class="dropdown-item" href="#">Zapatillas de baloncesto</a>
                        <a class="dropdown-item" href="#">Zapatillas de skate</a>
                        <a class="dropdown-item" href="#">Zapatillas de moda</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menu-deporte" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Deporte
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-deporte">
                        <a class="dropdown-item" href="#">Zapatillas de running</a>
                        <a class="dropdown-item" href="#">Zapatillas de baloncesto</a>
                        <a class="dropdown-item" href="#">Zapatillas de skate</a>
                        <a class="dropdown-item" href="#">Zapatillas de moda</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#" id="menu-deporte" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" name="Identificate">
                        Identifícate
                    </a>
 
                </li>
            </ul>
        </div>
    </nav>';
    }

    function mostrarCarousel()
    {
        echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="https://i8.amplience.net/i/jpl/desktop-top-banner-1920x840-2-adcd5c83314b4d4ef1af40f1d7393896?fmt=webp"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://i8.amplience.net/i/jpl/desktop-top-banner-1920x840-9-5440ec7fbc491f922c58cc23e5c51862?fmt=webp"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://i8.amplience.net/i/jpl/desktop-top-banner-1920x840-6ed8da2d2cdeb1bd3a73f9dd572366ee?fmt=webp"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>';
    }

    function mostrarOfertas(){
        
    }
}
