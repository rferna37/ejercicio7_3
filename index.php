<?php
 /**************************************************************************
  *  Ejercicio7_3, curso 2016/17.                                          *
  * ************************************************************************/
   require_once 'Autoloader.php';
   require_once 'modelo/notas.php';
   require_once 'modelo/modulos.php';

   abstract class Index{
        private static $diccionario = array('nif' => "", 'error' => "", 'resultado' => "", 
                                            'modulos' => "", 'moduloSel' => "", 'notas' => null);

        static function run(){
              Twig_Autoloader::register();
              $loader = new Twig_Loader_Filesystem('plantillas');
              $twig = new Twig_Environment($loader, array(
                  'cache' => 'compiladas','auto_reload' => true));

              $codModulo = "";
              $notas = new Notas();
              if (isset($_POST['nif'])){ 
                  $nif = trim($_POST['nif']);
                  $codModulo = $_POST['modulo']; 
                  self::$diccionario['nif'] = $nif;
                  self::$diccionario['moduloSel'] = $codModulo; 
                  if ($nif == null){
                      self::$diccionario['error'] = "Debe teclear un NIF";
                  } elseif (!$notas->existeAlumno($nif)){
                      self::$diccionario['error'] = "Nun existe ninguna nota pal alumnu";
                  } elseif (gettype($notasModulo = $notas->leerNota($nif,$codModulo)) == 'string') { 
                      self::$diccionario['error'] = "Nun existe nota pal alumnu nesi módulu";
                  } else {
                      self::$diccionario['notas'] = $notasModulo; 
                  }  
              }

              $modulos = new modulos(); 
              self::$diccionario['modulos'] = $modulos->leerModulos($notas); 
              
              $plantilla = $twig->loadTemplate('formulario.html.twig');
              print $plantilla->render(self::$diccionario);
        }
   }

   Index::run();
?>
