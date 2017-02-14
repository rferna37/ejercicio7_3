<?php
/*****************************************************************************
  * Cuando en un fichero se invoca una clase por primera vez y ésta no está  *
  * definida en el, ni existe el correspondiente include, el procesador PHP  *
  * invocará el método cargar de esta clase. El procesador le pasa el nombre *
  * de la clase invocada y la función será responsable de cargar el fichero  *
  * que la contiene.                                                         *
  *	Para que todo funcione, cada fichero contendrá una sola clase y su       *
  * nombre será igual al de dicha clase. La búsqueda de ficheros se          *
  * realizará en los directorios cuyos nombres se cargaron en $directorios.  *    
  * *************************************************************************/

	Class Autocargador{
    // Contendrá los nombres de directorios en los que se buscarán ficheros
    // de clase a cargar. 
    private $directorios = array();

    // Registra el método cargar de esta misma clase en el procesador PHP.
    public function registrar(){
      spl_autoload_register(array($this, 'cargar'));
    }

    // Permite añadir directorios al array $directorios.
    public function addDirectorio($dir){
      $this->directorios[] = $dir;
    }


    function cargar($Clase){ 
      foreach ($this->directorios as $directorio) { 
        foreach (glob("$directorio/".strtolower($Clase).".php") as $nombre_fichero) {
            include_once $nombre_fichero; 
            break 2;
        }
      }
    }

  }

?>