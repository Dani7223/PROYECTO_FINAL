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
                <button class="btn btn-outline-warning mx-5" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg></button>
        </div>
    </nav>';
  }


  public function mostrarFooter()
  {
    echo '<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p>&copy; 2023 Tienda de Zapatillas. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </footer>
  
  
  ';
  }


  public function mostrarMenu()
  {
    echo '   <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
          </svg></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex w-100">
                <li class="nav-item dropdown flex-fill">
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
                <li class="nav-item dropdown flex-fill">
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
                <li class="nav-item dropdown flex-fill">
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
                <li class="nav-item flex-fill">
                    <a class="nav-link" href="http://localhost/Almacen/Almacen_Zapatos/index.php?Identificate" id="menu-deporte">
                        Identifícate
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    ';
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

  function mostrarOfertas()
  {
  }


  function mostrarFormulario()
  {
    echo "<script>
                 let main = $('#main');

                 main.empty();
               </script>";

    echo '

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Registro e Inicio de Sesión</title>
  <style>
    .card {
      flex: 1;
      margin: 10px;
    }

    .card-header {
      background-color: #007bff;
      color: #fff;
      font-weight: bold;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 d-flex">

        <div class="card">
          <div class="card-header">
            <h5 class="card-title text-center mb-0">Registro</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresa tu email">
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
              </div>
              <input type="submit" class="btn btn-primary btn-block" value="Registrarse">
            </form>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h5 class="card-title text-center mb-0">Inicio de Sesión</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="email-login">Email</label>
                <input type="email" class="form-control" id="email-login" placeholder="Ingresa tu email">
              </div>
              <div class="form-group">
                <label for="password-login">Contraseña</label>
                <input type="password" class="form-control" id="password-login" placeholder="Ingresa tu contraseña">
              </div>
              <input type="submit" class="btn btn-primary btn-block" value="Iniciar Sesión" name="Iniciar">
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        
        ';
  }


  function mostrarZapa()
  {

    echo "<script>
        let main = $('#main');

        main.empty();
      </script>";


    echo ' 

        
        
        <style>
  .carousel-control-prev,
  .carousel-control-next {
    font-size: 2rem;
    width: 4rem;
    height: 4rem;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    font-size: 2rem;
    width: 3rem;
    height: 3rem;
  }
</style>

        
        <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/air_zoom.jpg" class="d-block w-100" alt="Zapatilla 1">
            </div>
            <div class="carousel-item">
              <img src="./img/520.jpg" class="d-block img-fluid" alt="Zapatilla 2">
            </div>
            <div class="carousel-item">
              <img src="ruta/a/la/imagen3-zapatilla.jpg" class="d-block img-fluid" alt="Zapatilla 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <h2>Nombre de la Zapatilla</h2>
        <p>Precio: $XX</p>
        <div class="form-group">
          <label for="talla">Talla:</label>
          <select class="form-control" id="talla">
            <option>37</option>
            <option>38</option>
            <option>39</option>
            <!-- Agrega más opciones de tallas aquí -->
          </select>
        </div>
        <button class="btn btn-primary" id="btn-add-to-cart">Añadir al carrito</button>

        <hr>

        <h4>Características:</h4>
        <ul>
          <li>Material exterior: XYZ</li>
          <li>Material interior: ABC</li>
          <li>Suela: XYZ</li>
          <!-- Agrega más características aquí -->
        </ul>

        <hr>

        <h4>Comentarios de los usuarios:</h4>
        <div class="card">
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">Usuario 1</h6>
            <p class="card-text">¡Me encantan estas zapatillas! Son muy cómodas y tienen un diseño genial.</p>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">Usuario 2</h6>
            <p class="card-text">La calidad de estas zapatillas es excepcional. Sin duda, las recomendaría.</p>
          </div>
        </div>

        <!-- Agrega más comentarios de usuarios aquí -->

      </div>
    </div>
  </div>';
  }
}
