<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "jonathan070918";
    $db = "zapateria";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $db) OR DIE
        ("No se puede conectar......".mysqli_connect_error());
?>