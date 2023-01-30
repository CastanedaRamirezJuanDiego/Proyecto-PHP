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

                <div class="row">
                    <header class="col-12 card-negocio p-1 mb-3">
                        <h2 class="fs-4">Tu pedido</h2>
                    </header>

                    <div class="col-12 card-negocio p-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Negocio</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio unitario</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>"El chingon"</td>
                                    <td>Tacos de pastor</td>
                                    <td>3</td>
                                    <td>$15.00</td>
                                    <td>$45.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>"El chingon"</td>
                                    <td>Torta campechana</td>
                                    <td>1</td>
                                    <td>$35.00</td>
                                    <td>$35.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>"El chingon"</td>
                                    <td>Coca Cola de vidrrio</td>
                                    <td>1</td>
                                    <td>$18.00</td>
                                    <td>$18.00</td>
                                </tr>
                                <tr>
                                    <th class="text-end" colspan="5">Subtotal:</th>
                                    <td>$98</td>
                                </tr>
                                <tr>
                                    <th class="text-end" colspan="5">Precio de envío:</th>
                                    <td>$15</td>
                                </tr>
                                <tr>
                                    <th class="text-end" colspan="5">Total: </th>
                                    <td>
                                        <h4><b>$113</b></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="d-grid text-center text-lg-start mt-4 pt-2">
                            <a href="./enviado.php" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Pedir</a>
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