<?php
 /**************************************************************************
  *  Esta clase pertenece al MODELO del ejercicio7_3. Curso 2016/17.      *
  * ************************************************************************/
   
   class Modulos{
      
      public function leerModulos(){
            $gbd = Conexion::obtenerConexion(); 
            $consulta = "SELECT CODIGO, NOMBRE FROM AGA_MODULOS ORDER BY NOMBRE";
            $resultado = $gbd->query($consulta);
            $gbd = null; 
            return ($resultado->fetchAll(PDO::FETCH_ASSOC));
      }
   }