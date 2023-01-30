<?php
    
    include("conexion.php");
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

 $nomnegocio = $_POST["nomnegocio"];
    $horario_abierto = $_POST["horario_abierto"];
    $horario_cerrado = $_POST["horario_cerrado"];
    $correoN = $_POST["correoN"];
    $Constraseña = $_POST["Constraseña"];

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO negocio ( nomnegocio, horario_abierto,horario_cerrado, correoN,Constraseña) 
	VALUES ('".$nomnegocio."', '".$horario_abierto."','".$horario_cerrado."','".$correoN."','".$Constraseña."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location: /proyecto/index.php");







?>