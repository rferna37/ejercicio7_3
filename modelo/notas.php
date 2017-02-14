<?php
 /**************************************************************************
  *  Esta clase pertenece al MODELO del ejercicio7_3. Curso 2016/17.      *
  *************************************************************************/
    require_once "conexion.php";
    require_once "nota.php";
   
	class Notas{
      
        public function leerNota($alumno, $modulo){
            $gbd = Conexion::obtenerConexion(); 
            
            // Lo sinónimos de las columnas son necesarios para que el nombre de las columnas
            // del resultado coincida con el de las propiedades del objeto Nota.
            // Van entre comillas porque sino Oracle seguiría poniendo el nombre de las
            // columnas del resultado en mayúsculas.
            $consulta = "SELECT FECHA as \"fecha\", NOTA as \"nota\" FROM AGA_NOTAS 
                         WHERE NIF_ALU = :alumno AND COD_MODULO = :modulo
                         ORDER BY FECHA DESC";
            $resultado = $gbd->prepare($consulta);
            $resultado->bindParam(':alumno', $alumno, PDO::PARAM_STR, 9);
            $resultado->bindParam(':modulo', $modulo, PDO::PARAM_STR, 6);
            $resultado->execute();
            $notas = $resultado->fetchAll(PDO::FETCH_CLASS, "Nota"); 
            $resultado->closeCursor();
            $gbd = null;
            
            if($notas == null){
              return "El alumnu nun tien ninguna nota nesi módulo";
            } else {
              return $notas;
            }
        }

        public function existeAlumno($alumnos){
            $gbd = Conexion::obtenerConexion(); 
            $consulta = "SELECT count(*) FROM AGA_NOTAS WHERE NIF_ALU = ?";
            $sentencia = $gbd->prepare($consulta);
            $sentencia->execute(array($alumnos));
            $cuenta = $sentencia->fetchColumn();
            $sentencia->closeCursor();
            $gbd = null;

            if ($cuenta > 0){
              return true;
            } else {
              return false;
            }
        }

        public function existenNotas($modulo){
            $gbd = Conexion::obtenerConexion(); 
            $consulta = "SELECT count(*) FROM AGA_NOTAS WHERE COD_MODULO = ?";
            $sentencia = $gbd->prepare($consulta);
            $sentencia->execute(array($modulo));
            $cuenta = $sentencia->fetchColumn();
            $gbd = null;
            
            if ($cuenta > 0){
              return true;
            } else {
              return false;
            }
        }
   }