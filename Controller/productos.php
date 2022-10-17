<?php
    require_once("../config/conexion.php");
    require_once("../Model/productos.php");
    $Productos = new Productos();

    switch($_GET["OP"]){

        case "listar":
            $datos=$Productos->get_producto();
            $data=Arras();




    }


?>