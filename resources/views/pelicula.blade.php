<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/menu.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/pelicula.css" media="screen" /> 

    {{-- Importados --}}
        
    {{-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"> --}}

    <link rel="stylesheet" href="\css\Carrusel\templatemo-hexashop.css"> 

    <link rel="stylesheet" href="\css\Carrusel\owl-carousel.css">

    <link rel="stylesheet" href="\css\Carrusel\lightbox.css">

    <title>Pelicula</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg -tertiary menuColor">
        <div class="container-fluid">
            <h4 class="menuTitulo" >Filmedia</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar menu" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style= "padding-right: 10px;">
                        <a class="nav-link menuTexto activo" aria-current="page" href='{{route('menu')}}' style="text-decoration: none;"> <b>Películas</b> </a>
                    </li>
                    <li class="nav-item" style= "padding-right: 10px;">
                        <a class="nav-link menuTexto"  href='{{route('historial')}}' style="text-decoration: none;"> <b>Historial</b> </a>
                    </li>
                    <li class="nav-item dropdown btnFondo" style= "padding-right: 10px;">
                        <a class="nav-link dropdown-toggle menuTexto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/assets/avatar.png" alt="Logo" width="24" height="24" class="d-inline-block align-text-top">
                            <b>César</b> 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='{{route('inicio')}}'>Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- {{-- Contenido --}} -->

    <section class= "left-form"> 

            <div class="imagen">
                <img src="/assets/pelicula1.jpg" class="card-img-top pelicula" alt="...">
            </div>

    </section>
    

    <section class= "right-form ">
        <h1 class="texto titulo">Shang Chi (2021)  </h1>
        <div class="descripcion">
            <span class="mb-4 descripcion" >Shang Chi debe enfrentar a su pasado cuando se ve envuelto en la red de la misteriosa organización de los Diez Anillos. </span>
        </div>

        <br>

        <h5> <b>Director:</b> Destin Daniel Cretton.</h5>

        <h5> <b>Géneros:</b>  Acción, Fantasía. </h5>

        <br>

        <form>
            <h1 class="texto">Establecer función</h1>
            <div class="line-2"></div>

            <div class="row row-cols-1 row-cols-md-3 formulario" >
                <div class="col">
                    <label  class="form-label texto fuenteLabel">Sala</label>
                    <input type="" class="mb-3"  placeholder="">
                </div>

                <div class="col">
                    <label  class="form-label texto fuenteLabel">Fecha</label>
                    <input type="date" class="mb-3"  placeholder="">
                </div>

                <div class="col">
                    <label  class="form-label texto fuenteLabel">Hora</label>
                    <input type="datetime" class="mb-3"  placeholder="">
                </div>
            </div>

            <br>

            <div class="">
                <button type="button" class="btn boton2" style="width:30%;" > Establecer función</button> 
            </div>

        </form>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>