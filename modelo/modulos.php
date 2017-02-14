<?php
 /**************************************************************************
  *  Esta clase pertenece al MODELO del ejercicio7_3. Curso 2016/17.      *
  * ************************************************************************/
   require_once "conexion.php";
   
   class Modulos{
      
      public function leerModulos($notas){
            $gbd = Conexion::obtenerConexion(); 
            $consulta = "SELECT CODIGO, NOMBRE FROM AGA_MODULOS ORDER BY NOMBRE";
            $resultado = $gbd->query($consulta);
            $gbd = null; 
            $salida = array();
            foreach ($resultado->fetchAll(PDO::FETCH_ASSOC) as $fila) {
              if ($notas->existenNotas($fila['CODIGO'])){
                  $salida[$fila['CODIGO']] = $fila['NOMBRE'];
              }
            }
            return $salida;
      }
   }