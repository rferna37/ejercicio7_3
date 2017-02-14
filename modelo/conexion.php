<?php
 /**************************************************************************
  *  Esta clase pertenece al MODELO del ejercicio7_3. Curso 2016/17.      *
  * ************************************************************************/
   class Conexion{
      private static $conexion = null; 
      public static function obtenerConexion(){
			if (self::$conexion == null){
          try {
            /*self::$conexion = new PDO('oci:dbname=//hpproliant.fleming.as:1521/orclhp.fleming.as;charset=AL32UTF8', 
                                                       'daim15', 'daim15', array(PDO::ATTR_PERSISTENT => true)); */
              self::$conexion = new PDO('mysql:host=localhost;dbname=aga', 'aga', "aga",
                                                     array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
          } catch(PDOException $ex){
            //echo 'No se pudo conectar',$ex->getMessage();
            echo 'No se pudo conectar con la base de datos<br>';
            die();
          }
			    
			}
			return self::$conexion;	   
      }
   }