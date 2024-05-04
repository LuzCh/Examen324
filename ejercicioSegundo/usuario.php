<?php include "header_estilo.inc.php";?>

<div class="nombreUsuario">
    <h2>Nombre de Usuario:</h2>
<?php
    $username=$_GET["username"];
    echo "<p style='font-size: 25px;'>".$username."</p>";
?>
</div>


<?php
    include("conexion.inc.php");
    $sql = "SELECT c.nro_cuenta, c.monto_cuenta, c.tipo_cuenta, c.tasainteres_cuenta, c.estado_cuenta, c.id_usuario
            FROM cuentas c, usuarios u 
            WHERE c.estado_cuenta LIKE 'DISPONIBLE' AND u.nombre_usuario = '$username' AND u.id_usuario = c.id_usuario;";

    $resultado = mysqli_query($conn, $sql);
?>

<div class="tabla">
<p>Se muestran todas las cuentas existentes:</p>
<table>
    <tr>
    <th>NRO CUENTA</th>
    <th>MONTO CUENTA</th>
    <th>TIPO CUENTA</th>
    <th>TASA DE INTERES</th>
    <th>ESTADO DE CUENTA</th>
    <th>ID USUARIO</th>
    <th>NOMBRE USUARIO</th>
    <th>OPCIONES</th>
    </tr>

<?php
while($row = mysqli_fetch_array($resultado))
    {
            echo "<tr>
            <td>".$row["nro_cuenta"]."</td>
            <td>".$row["monto_cuenta"]."</td>
            <td>".$row["tipo_cuenta"]."</td>
            <td>".$row["tasainteres_cuenta"]."</td>
            <td>".$row["estado_cuenta"]."</td>
            <td>".$row["id_usuario"]."</td>
            <td>".$username."</td>
            <td><a href=eliminar.php?username=".$username."&nro_cuenta=".$row["nro_cuenta"].">Eliminar</a>
            <a href=formulario.php?username=".$username."&nro_cuenta=".$row["nro_cuenta"]."&opcion=editar&iduser=".$row["id_usuario"].">Editar</a>
            <a href=formulario.php?username=".$username."&nro_cuenta=".$row["nro_cuenta"]."&opcion=agregar&iduser=".$row["id_usuario"].">Agregar</a>
            </tr>";
    }
?>

</table>

<a href=ini.php>Volver</a>
</div>
<?php include "footer_estilo.inc.php";?>
