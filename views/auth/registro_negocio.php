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

<section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="../../assets/img/icon/negocio.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form  action="register.php" method="post">
                        <div class="mb-3 d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Registro de negocio</p>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Nombre del negocio</label>
                            <input type="text" name='nomnegocio' id="form3Example3" class="form-control" />
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Horario de </label>
                                <input type="text" name='horario_abierto' id="form3Example1" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2"></label>
                                <input type="text" name='horario_cerrado' id="form3Example2" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Correo</label>
                            <input type="text" name='correoN' id="form3Example3" class="form-control" />
                        </div>


                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Contraseña</label>
                            <input type="password" name='Constraseña' id="form3Example3" class="form-control" />
                        </div>


                        <div class="d-grid text-center text-lg-start mt-4 pt-2">
                        <input type="submit" value="Registrar" class="btn">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Archivos javascript -->
    <?php
    include('../../layouts/script.html');
    ?>
</body>

</html>