<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>

    <!-- Estilos css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../../assets/styles/estilos.css">
</head>

<body>
    <!-- Menu de navegación -->
    <?php
    include('../../layouts/navbar.html');
    ?>


    <main class="container mt-3">
        <div class="row">

            <!-- Contenedor de productos -->
            <div class="col-8">

                <div class="card-negocio text-center text-success pt-4 ">
                    <h1><i class="fa-solid fa-circle-check"></i></h1>
                    <h3>Su pedido a sido enviado</h3>
                    <p>Llegara en un tiempo aproximado de 15 minutos.</p>

                    <div class="d-grid text-center text-lg-start mt-4 pt-2">
                            <a href="./carrito.php" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"><i class="fa-solid fa-arrow-left me-2"></i> Regresar</a>
                        </div>
                </div>
            </div>

            <!-- Anuncios -->
            <aside class="col-4">
                <div class="form-content">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../../assets/img/anuncios/carr.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../../assets/img/anuncios/lap.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../../assets/img/anuncios/shein.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div><br>

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../../assets/img/anuncios/live.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../../assets/img/anuncios/ped.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../../assets/img/anuncios/shein.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <!-- Archivos javascript -->
    <?php
    include('../../layouts/script.html');
    ?>
</body>

</html>