<?php
    include("conexionRodrigo.php");

    $codigo= $_POST['txtCodigo'];
    $descripcionCalzado= $_POST['txtDescripcion'];
    $colorCalzado= $_POST['txtColor'];
    $cantidad= $_POST['txtCantidad'];
    $talla= $_POST['txtTalla'];
    $precioCalzado= $_POST['txtPrecio'];
    $idMarca= $_POST['cmbMarca'];

    $sentencia = "UPDATE calzado SET 
        DescripcionCalzado = '$descripcionCalzado',
        ColorCalzado = '$colorCalzado',
        Stock = '$cantidad',
        Talla = '$talla',
        PrecioCalzado = '$precioCalzado',
        IdMarca = (SELECT IdMarca FROM marca WHERE NombreMarca = '$idMarca')
        WHERE Codigo ='$codigo';  
    ";
    


    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../lista-producto.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>