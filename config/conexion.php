<?php 

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this -> dbh = new PDO("mysql:local=localhost;dbname=crus","root","")

            }catch(Exception $e){

            }

        }

    }

    ?>