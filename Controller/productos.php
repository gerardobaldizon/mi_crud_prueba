<?php
    require_once("../config/conexion.php");
    require_once("../Model/productos.php");
    $Productos = new Producto();

    switch($_GET["OP"]){

        case "listar":
            $datos=$Productos->get_producto();
            $data=Array();
            foreach($datos as $row){
                $subarray = array();
                $subarray[] = $row[$pro_nombre]; 
                $subarray[] = '<button type="button" onClick="editar('.$row["prod_id"].');" id="'.$row["prod_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $subarray[] = '<button type="button" onClick="eliminar('.$row["prod_id"].');" id="'.$row["prod_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>($data),
                "aaData"=>$data);
            echo json_encode($results);

            break;




    }


?>