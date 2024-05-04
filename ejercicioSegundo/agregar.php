<?php
    include("conexion.inc.php");
    $username = $_GET["username"];
    //$nro_cuenta = $_GET["nro_cuenta"];
    $monto = $_GET["monto"];
    $tipo = $_GET["tipo"];
    $tasa = $_GET["tasa"];
    $estado = $_GET["estado"];
    $iduser = $_GET["iduser"];

    $sql = "INSERT INTO cuentas VALUES (NULL, $monto, '$tipo', '$tasa', '$estado', $iduser)";
    mysqli_query($conn, $sql);
    header("Location: usuario.php?username=".$username);
    //exit();
?>