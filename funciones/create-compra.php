<?php
    include("conexionJonathan.php");

    //$idCompra= $_POST['cmbCodigo'];
    $Codigo = $_POST['cmbCodigoCompra'];
    $CantidadCompra= $_POST['txtCantidadCompra'];
    $FechaHoraCompra= $_POST['txtFechaCompra'];
    $PrecioCompra= $_POST['txtPrecioCompra'];
    $IdProveedor = $_POST['cmbProveedor'];
    
    $sentencia = "INSERT INTO compra VALUES(
        DEFAULT,
        '$Codigo',
        '$CantidadCompra',
        '$FechaHoraCompra',
        '$PrecioCompra',
        '$IdProveedor'                                                          
        )";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../compra.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>