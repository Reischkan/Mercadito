<?php

    class Basedatos{

        public $usuariobd = "root";
        public $passwordbd = "";


        public function __construct(){}


        public function conectarbd(){


            $infobd= "mysql:host=localhost;dbname=tienda";

            try{

                $conexionbd = new PDO($infobd, $this->usuariobd, $this->passwordbd);
                return ($conexionbd);

            }catch (PDOException $error){

                echo ($error->getMessage());

            }

        }

        
        public function agregarproducto($consultasql){

            $conexionbd = $this->conectarbd();

            $agregarproducto = $conexionbd->prepare($consultasql);

            $resultado = $agregarproducto->execute();

            if ($resultado)
            {
                echo ("se agrego el producto con exito");
            }
            else
            {
                echo ("error al agregar");
            }

        }

        public function lista($consultasql){

            $conexionbd = $this -> conectarbd();
    
            $consultaproducto = $conexionbd -> prepare ($consultasql);
    
            $consultaproducto -> setFetchMode (PDO::FETCH_ASSOC);
    
            $resultado = $consultaproducto -> execute();
    
            return ($consultaproducto -> fetchALL());
    
    
        }

        public function eliminarproducto($consultasql){

            
            // 1. establecer conexion con la bd

           $conexionbd=$this->conectarbd();

           // 2. preparar la consulta

           $consultaeliminar=$conexionbd->prepare($consultasql);

           // 3. ejecutar la consulta

           $resultado=$consultaeliminar->execute();

           // 4. verificar el resultado

           if ($resultado)
           {

            echo ("se elimino el producto con exito");

           }
           else
           {

            echo ("error eliminando");

           }

        }

        public function editarproducto($consultasql){

           // 1. establecer conexion con la bd

           $conexionbd=$this->conectarbd();

           // 2. preparar la consulta

           $consultaeditar=$conexionbd->prepare($consultasql);

           // 3. ejecutar la consulta

           $resultado=$consultaeditar->execute();

           // 4. verificar el resultado

           if ($resultado)
           {

            echo ("se editó el producto con exito");

           }
           else
           {

            echo ("error editando");

           }

        }

    }

?>