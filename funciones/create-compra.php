<?php
    include("conexionJonathan.php");

    $idCompra= $_POST['cmbCodigo'];
    $Codigo = $_POST['txtCodigoCompra'];
    $CantidadCompra= $_POST['txtCantidadCompra'];
    $FechaHoraCompra= $_POST['txtFechaCompra'];
    $PrecioCompra= $_POST['txtPrecioCompra'];
    
    $sentencia = "INSERT INTO compra VALUES(
        DEFAULT,
        '$Codigo',
        '$CantidadCompra',
        '$FechaHoraCompra',
        '$PrecioCompra',
        '$idProveedor'                                                          
        )";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../compra.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>