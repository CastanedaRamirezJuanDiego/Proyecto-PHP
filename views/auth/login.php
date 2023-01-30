<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

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

    <section class="vh-100 mt-5">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="../../assets/img/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="mb-3 d-flex flex-row align-items-center justify-content-center justify-content-lg-start" href= >
                            <p class="lead fw-normal mb-0 me-3">Inicia sesión</p>
                        </div>
                        

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Email</label>
                            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Correo electronico" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Contraseña" />
                        </div>

                        <div class="d-flex align-items-center mb-2">
                            <!-- Checkbox -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">¿Eres estudiente?</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">¿Eres negocio?</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Recuerdame
                                </label>
                            </div>
                            <a href="#!" class="text-body">¿Olvidaste tu contraseña?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <a class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="../../paneladmins">Iniciar sesión</a>
                            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="./selection.php" class="link-danger">Registrate</a></p>
                            
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