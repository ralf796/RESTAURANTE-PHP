<?php
    require('..\Conexion\ConexionBD.php');

    public function insertar($nombre_cliente, $direccion, $nit, $telefono, $correo_electronico){
        $sql="INSERT INTO cat_cliente(nombre_cliente,direccion,nit,telefono,correo_electronico,estado)
        VALUES('$nombre_cliente', '$direccion', '$nit', '$telefono', '$correo_electronico','1')";
        return ejecutarConsulta($sql);
   }
?>