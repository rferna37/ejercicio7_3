<?php

/* principal.html.twig */
class __TwigTemplate_b8b51da45db51a9436be13e4d5aa86d393ea733048ef476ed3e7e578e9d7c532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
   <head>
      ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "   </head>
   <body>
        <header>
           <img src=\"imagenes/logo_fleming.jpg\" id=\"logo\"/>    
           <div id=\"daw\">Desenvolvimientu d'aplicaciones web</div>
        </header>
        <article>";
        // line 15
        $this->displayBlock('contenido', $context, $blocks);
        echo "</article>
        <footer>
          Institutu d'educación secundaria \"Doctor Fleming\". Departamentu d'informática.
        </footer>
   </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
          <link rel=\"stylesheet\" type=\"text/css\" href=\"estilo/estilo.css\" />
          <title>";
        // line 7
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
      ";
    }

    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "principal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  54 => 7,  50 => 5,  47 => 4,  37 => 15,  29 => 9,  27 => 4,  22 => 1,);
    }
}
