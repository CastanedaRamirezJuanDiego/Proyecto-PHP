<?php
    
    include("conexion.php");
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $Nombre = $_POST["Nombre"];
    $ApellidoP = $_POST["ApellidoP"];
    $ApellidoM = $_POST["ApellidoM"];
    $Correo = $_POST["Correo"];
    $Contraseña = $_POST["Contraseña"];
    $Telefono = $_POST["Telefono"];
    
    

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO cliente (Nombre, ApellidoP, ApellidoM, Correo, Contraseña, Telefono) VALUES ('".$Nombre."', '".$ApellidoP."','".$ApellidoM."','".$Correo."','".$Contraseña."','".$Telefono."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location: /proyecto/index.php");







?>




?>