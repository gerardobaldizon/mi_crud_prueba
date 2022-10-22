<?php 
    class Producto extends Conectar{
        public function get_producto(){
            $conectar = parent::conexion();
            $sql = "Select * from crud where Activo=1";
            $sql = $conectar->prepare($sql);
            $sql-> execute();
            return $resultado =$sql->fetchAll();
        }

        public function get_producto_id($prod_id){
            $conectar = parent::conexion();
            $sql = "Select * from crud where id_=?";
            $sql = $conectar->prepare($sql);
            $sql-> bindvalue(1,$prod_id);
            $sql-> execute();
            return $resultado =$sql->fetchAll();
        }    
        public function delete_producto_id($prod_id){
            $conectar = parent::conexion();
            $sql = "update crud set Activo=0, where id_=?";
            $sql = $conectar->prepare($sql);
            $sql-> bindvalue(1,$prod_id);
            $sql-> execute();
            return $resultado =$sql->fetchAll();
        }
        public function insertar_producto($pro_nombre){
            $conectar = parent::conexion();
            $sql = "INSERT INTO proveedores (id_, NIT, Razón social, Nombre comercial, Activos) VALUES (NULL, '?', '?', '?', 1);";
            $sql = $conectar->prepare($sql);
            $sql-> bindvalue(1,$pro_nombre);
            $sql-> execute();
            return $resultado =$sql->fetchAll();
        }
        public function update_producto_id($prod_id, $pro_nombre){
            $conectar = parent::conexion();
            $sql = "update crud set nombre=?, where id_=?";
            $sql = $conectar->prepare($sql);
            $sql-> bindvalue(1,$pro_nombre);
            $sql-> bindvalue(2,$prod_id);
            $sql-> execute();
            return $resultado =$sql->fetchAll();
        }
    }