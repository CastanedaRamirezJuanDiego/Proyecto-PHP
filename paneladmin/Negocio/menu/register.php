<?php
    
    include("../../conexion.php");
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

  
    $Nombreproducto = $_POST["Nombreproducto"];
    $Precio = $_POST["Precio"];
    $descripcion = $_POST["descripcion"];
    $id_negocio = $_POST["id_negocio"];

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO producto ( Nombreproducto, Precio, descripcion) 
	VALUES ('".$Nombreproducto."', '".$Precio."','".$descripcion."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location: add.php");







?>