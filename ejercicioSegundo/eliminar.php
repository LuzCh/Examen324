<?php
    include("conexion.inc.php");
    $id = $_GET["nro_cuenta"];
    $username=$_GET["username"];
    $sql = "UPDATE cuentas SET estado_cuenta='CONGELADA' WHERE nro_cuenta='$id'";
    mysqli_query($conn, $sql);
    header("Location: usuario.php?username=".$username);
    exit();
?>
