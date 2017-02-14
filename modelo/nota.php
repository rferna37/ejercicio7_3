<?php
 /**************************************************************************
  *  Esta clase pertenece al MODELO del ejercicio7_3. Curso 2016/17.      *
  *************************************************************************/
 	class Nota{
 		private $fecha;
 		private $nota;

 		public function getFecha(){
 			$fecha = new DateTime($this->fecha); 
            return $fecha->format('d/m/Y');
 		}

 		public function getNota(){
 			return $this->nota;
 		}
 	}
?>
