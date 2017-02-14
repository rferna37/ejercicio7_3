<?php
 /**************************************************************************
  *  Esta clase pertenece a la VISTA del ejercicio7_3. Curso 2016/17.      *
  * ************************************************************************/
   class Formulario{
      public static function mostrar($dic){
          $plantilla = file_get_contents('formulario.html');
          foreach ($dic as $key => $valor){
              $plantilla = str_replace('{'.$key.'}',$valor,$plantilla);
          }
          print $plantilla;
      }
   }