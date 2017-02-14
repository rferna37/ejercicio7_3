<?php
 /**************************************************************************
  *  Ejercicio7_3, curso 2016/17.                                          *
  * ************************************************************************/
  
   include('vista/formulario.php');
   include('vista/tabla.php');
   require_once('modelo/notas.php');
   require_once('modelo/modulos.php');

   abstract class Index{
        private static $diccionario = array('nif' => "", 'error' => "", 'resultado' => "", 
                                            'listaModulos' => "");

        static function run(){
              $codModulo = "";
              $notas = new Notas();
              if (isset($_POST['nif'])){ 
                  $nif = trim($_POST['nif']);
                  self::$diccionario['nif'] = $nif;
                  $codModulo = $_POST['modulo'];  
                  if ($nif == null){
                      self::$diccionario['error'] = "Debe teclear un NIF";
                  } elseif (!$notas->existeAlumno($nif)){
                      self::$diccionario['error'] = "Nun existe ninguna nota pal alumnu";
                  } elseif (gettype($nota = $notas->leerNota($nif,$codModulo)) == 'string') {
                      self::$diccionario['error'] = "Nun existe nota pal alumnu nesi módulu";
                  } else {
                      $tabla = new Tabla(array("Fecha", "Nota"), $nota);
                      self::$diccionario['resultado'] = $tabla->obtenerTabla();
                      //print_r($tabla->obtenerTabla()); die();
                  }  
              }

              $modulos = new modulos();
   
              foreach ($modulos->leerModulos() as $modulo){ 
                if ($notas->existenNotas($modulo['CODIGO'])){
                    self::$diccionario['listaModulos'] .= '<option value="'.$modulo['CODIGO'].'" ';   
                    if ($modulo['CODIGO'] == $codModulo){ 
                        self::$diccionario['listaModulos'] .= "selected";  
                    } 
                    self::$diccionario['listaModulos'] .= ' >'.$modulo['NOMBRE']."</option>\n";
                }
              }  
              Formulario::mostrar(self::$diccionario);
        }
   }

   Index::run();
?>
