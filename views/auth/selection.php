<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccione tipo de usuario</title>

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

    <div class="container">
    <section class="text-center">
          <div class="text-center">
            <h4><strong>Seleciona tipo de registro</strong></h4>
          </div>

          <div class="row mt-5">
            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <div class="bg-image shadow-1-strong rounded">
                    <a href="./regristro_estudiante.php" class="position-relative d-inline-block text-light">
                        <img src="../../assets/img/estudiante.jpg" class="w-100 h-100" alt="Sample">
                        <div class="d-block position-absolute top-0 start-0 w-100 h-100"  style="background-color: rgba(0, 0, 0, 0.6)">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                                <h2>Estudiante</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

              <div class="bg-image shadow-1-strong rounded">
                    <a href="./registro_negocio.php" class="position-relative d-inline-block text-light">
                        <img src="../../assets/img/negocio.jpg" class="w-100 h-100" alt="Sample">
                        <div class="d-block position-absolute top-0 start-0 w-100 h-100"  style="background-color: rgba(0, 0, 0, 0.6)">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                                <h2>Negocio</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--Grid column-->
          </div>


        </section>

    </div>

    <!-- Archivos javascript -->
    <?php
    include('../../layouts/script.html');
    ?>
</body>

</html>