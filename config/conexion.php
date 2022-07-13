<?php
    //Clase para establecer la conexión de la BD usando PDO
    class Conectar{
        protected $dbhost; //Es una variable protegida reconocida en su clase
        
        //Función para conectar la BD
        protected function conexion(){
            try{
                $conectar = $this -> dbhost = new PDO("mysql:host=us-cdbr-east-06.cleardb.net; dbname=heroku_9d53a5ac12ead03", "b5452a2fe92394", "893a538e");
                return $conectar;
            } catch(Exception $e){
                print "!!!Error: ".$e -> getMessage()." <br> ";
                die();
            }
        }

        //Función para la codificación de caracteres UTF
        public function set_names(){
            return $this -> dbhost -> query("SET NAMES 'utf8'");
        }
    }
?>