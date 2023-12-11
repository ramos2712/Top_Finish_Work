<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luly Restaurant</title>
</head>

<body style="background-image: url(bg.jpeg); background-size: cover; opacity: 0.9;">
    <nav class="navbar shadow text-center">
        <div class="container mb-2">
        <a class="text-decoration-none " href="index.php"><img src="Luly.png" alt="Logo" width="180px" height="auto" class="navbar-brand me-3"></img></a>
            <h3 class="text-dark shadow rounded p-3 text-center fst-italic">Bem Vindo(a) ao Restaurante de Luly</h3>
            <ul class="navbar-nav">
                <li class="nav-link"><a class="btn btn-danger btn-lg" href="./Login/login.php">Entrar</a></li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner mt-5">
        <div class="carousel-item active">
                <img src="bg1.jpg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="bg2.webp" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="bg3.jpg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="bg4.jpg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="bg5.jpg" class="d-block w-50 mx-auto" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</body>

</html>