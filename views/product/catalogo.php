<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>

    <!-- Estilos css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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

                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img src="../../assets/img/productos/tacos.jpg" class="card-img-top" style="height: 180px; object-fit: cover;" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Tacos al Pastor</h5>
                              <span class="badge rounded-pill bg-primary mb-2">Comida rápida</span>
                              <p class="card-text" style="text-align: justify;">
                                Influenciados por inmigrantes libaneses, los tacos al pastor están hechos con carne de cerdo a la parrilla sazonada.
                              </p>
                              <div class="mb-2">
                                <span>Calificación: </span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star-half"></i></span>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h4>$32.00</h4>
                                <a href="../carrito/carrito.php" class="btn btn-primary">
                                    Pedir
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <img src="../../assets/img/productos/hamburguesa.jpg" class="card-img-top" style="height: 180px; object-fit: cover;" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Hamburguesa doble carne</h5>
                              <span class="badge rounded-pill bg-primary mb-2">Comida rápida</span>
                              <p class="card-text" style="text-align: justify;">
                                Influenciados por inmigrantes libaneses, los tacos al pastor están hechos con carne de cerdo a la parrilla sazonada.
                              </p>
                              <div class="mb-2">
                                <span>Calificación: </span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h4>$54.00</h4>
                                <a href="../carrito/carrito.php" class="btn btn-primary">
                                    Pedir
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <img src="../../assets/img/productos/chilaquiles.jpg" class="card-img-top" style="height: 180px; object-fit: cover;" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Chilaquiles</h5>
                              <span class="badge rounded-pill bg-primary mb-2">Comida rápida</span>
                              <p class="card-text" style="text-align: justify;">
                                Influenciados por inmigrantes libaneses, los tacos al pastor están hechos con carne de cerdo a la parrilla sazonada.
                              </p>
                              <div class="mb-2">
                                <span>Calificación: </span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star-half"></i></span>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h4>$35.50</h4>
                                <a href="../carrito/carrito.php" class="btn btn-primary">
                                    Pedir
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <img src="../../assets/img/productos/pizza.jpg" class="card-img-top" style="height: 180px; object-fit: cover;" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Rebanada de pizza</h5>
                              <span class="badge rounded-pill bg-primary mb-2">Comida rápida</span>
                              <p class="card-text" style="text-align: justify;">
                                Influenciados por inmigrantes libaneses, los tacos al pastor están hechos con carne de cerdo a la parrilla sazonada.
                              </p>
                              <div class="mb-2">
                                <span>Calificación: </span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star-half"></i></span>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h4>$15.50</h4>
                                <a href="../carrito/carrito.php" class="btn btn-primary">
                                    Pedir
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <img src="../../assets/img/productos/pizza.jpg" class="card-img-top" style="height: 180px; object-fit: cover;" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Rebanada de pizza</h5>
                              <span class="badge rounded-pill bg-primary mb-2">Comida rápida</span>
                              <p class="card-text" style="text-align: justify;">
                                Influenciados por inmigrantes libaneses, los tacos al pastor están hechos con carne de cerdo a la parrilla sazonada.
                              </p>
                              <div class="mb-2">
                                <span>Calificación: </span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                <span class="text-warning"><i class="fa-solid fa-star-half"></i></span>
                              </div>
                              <div class="d-flex justify-content-between">
                                <h4>$15.50</h4>
                                <a href="../carrito/carrito.php" class="btn btn-primary">
                                    Pedir
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                              </div>
                            </div>
                        </div>
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
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