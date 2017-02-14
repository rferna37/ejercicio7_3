<?php
 /****************************************************************
  *  Esta clase permite obtener el texto de una tabla HTML.      *
  ****************************************************************/
 
	class Tabla{
      
        private $cabecera, $filas;

        /**
           Al constructor se le pasa como primer argumento un array 
           con los nombres de las columnas a poner en la cabecera
           y como segundo un array bidimensional con los valores
           de las celdas de cada fila.
        */
        public function __construct($cabecera, $filas){
            $this->cabecera = $cabecera;
            $this->filas = $filas; 
        }


        /**
           Devuelve el código HTML de la tabla.
        */
        public function obtenerTabla(){
            $salida = "<table><tr>";
            foreach ($this->cabecera as $nombre) {
              $salida .= "<th>$nombre</th>";
            }
            $salida .= "</tr>";
            foreach ($this->filas as $fila) {
              $salida .= "<tr>";
              foreach ($fila as $celda) {
                $salida .= "<td>$celda</td>";
              }
              $salida .= "</tr>";
            }
            $salida .= "</table>";
            return $salida;
        }
   }