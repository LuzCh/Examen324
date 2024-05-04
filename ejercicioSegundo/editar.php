<?php
    include("conexion.inc.php");
    $username = $_GET["username"];
    $nro_cuenta = $_GET["nro_cuenta"];
    $monto = $_GET["monto"];
    $tipo = $_GET["tipo"];
    $tasa = $_GET["tasa"];
    $estado = $_GET["estado"];
    $iduser = $_GET["iduser"];

    $sql = "UPDATE cuentas SET nro_cuenta='$nro_cuenta', monto_cuenta='$monto',tipo_cuenta='$tipo',
    tasainteres_cuenta='$tasa',estado_cuenta='$estado',id_usuario='$iduser' WHERE nro_cuenta=$nro_cuenta";
    mysqli_query($conn, $sql);
    header("Location: usuario.php?username=".$username);
    //exit();
?>

