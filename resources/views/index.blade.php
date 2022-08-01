<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="shortcut icon" href="http://localhost/adsi_2141297/07_sitioWeb/images/logo.png">
    
    <link href="css/stilo.css" rel="stylesheet">


    <title>Pagina principal Tecno Academia Popayán 2021</title>
</head>

<body>

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo-brand" width="80" height="80" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="grid-sharp"></ion-icon>
                <i class="icon-screen-smartphone"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="home">
                            <ion-icon name="home-outline"></ion-icon>
                        </a>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="portafolio">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="precio">Precio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" id="testimonio">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" id="contacto">Iniciar sesion</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <!-- seccion imagen -->

    <section id="hero">
        <div class="container">

            <div class="content-center topmargin-lg">
                <h1 class="mt-5">Tecno Academia Popayán</h1>
                <p>Te invitamos a que revises nuestras actividades del mes de marzo </p>
                <p> Que esperas para inscribirte desde tu computador o movil</p>

            </div>
        </div>
    </section>

    <!-- seccion portafolio-->
    <section id="portfolio">
        <div class="container-fluid">
            <div class="content-center">
                <h2>Conoce en que estamos trabajando para ti <b>Tecno Academía Popayán</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Marzo mes de deporte y vida</h2>
                            </a>
                            <a href="#">
                                <p>Tecno Academía App</p>
                            </a>
                        </div>
                        <img src="images/deporte.jpg" class="img-fluid" alt="Portfolio 01">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Sociedad y cultura Popayán 2021</h2>
                            </a>
                            <a href="#">
                                <p>Nuevos programas para disfrutar</p>
                            </a>
                        </div>
                        <img src="images/cultura.jpg" class="img-fluid" alt="Portfolio 02">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- pie de pagina footer-->

    <footer class="bgDark">
        <div class="container">

            <small>Todos los derechos reservados. ©2021 </small>
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>