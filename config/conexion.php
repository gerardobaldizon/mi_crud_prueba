<?php 

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this -> dbh = new PDO("mysql:local=localhost;dbname=crus","root","123456")
                return $conectar;

            }catch(Exception $e){
                print "Error en DB" . $e -> getMessage() ."<br/>";
                die();

            }

        }

    }

    ?>