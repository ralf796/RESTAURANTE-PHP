<?php
function Conectar()
{
    $user = "root";
    $password = "";
    $server = "localhost";
    $db = "restaurante";

    $conn = mysqli_connect($server, $user, $password, $db);
    if (!$conn) {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    } else {
        echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
    }
    return $conn;
}

?>
