<?php

/* formulario.html.twig */
class __TwigTemplate_cf9a25a531c137d55317c10219fe3cbb0f0ff127ec1f14368999738878b128b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("principal.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "principal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Consulta de notes";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Consulta de notes</h1>
    <form action=\"\" method=\"post\">
        <div class=\"izquierda\">
            <label for=\"nif\">NIF:</label>
            <label for=\"modulo\">Módulu</label>
        </div>
        <div class=\"derecha\">
            <input type=\"text\" class=\"valor\" name=\"nif\" id=\"nif\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nif"]) ? $context["nif"] : null), "html", null, true);
        echo "\" />
            <select class=\"valor\" name=\"modulo\" id=\"modulo\">
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modulos"]) ? $context["modulos"] : null));
        foreach ($context['_seq'] as $context["codigo"] => $context["nombre"]) {
            echo " 
                   <option value=\"";
            // line 16
            echo twig_escape_filter($this->env, $context["codigo"], "html", null, true);
            echo "\" ";
            echo ((($context["codigo"] == (isset($context["moduloSel"]) ? $context["moduloSel"] : null))) ? ("selected") : (" "));
            echo " >
                         ";
            // line 17
            echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['codigo'], $context['nombre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </select>
        </div>
        <div class=\"linea\">
            <input class=\"boton\" type=\"submit\" value=\"Consultar\" />
        </div>
    </form>
    <div class=\"linea\">
        <div class=\"error\">
            ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
        </div>
        <div class=\"resultado\">
            ";
        // line 31
        if ((isset($context["notas"]) ? $context["notas"] : null)) {
            // line 32
            echo "                <table><tr><th>Fecha</th><th>Nota</th></tr>
                ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notas"]) ? $context["notas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
                // line 34
                echo "                    <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "fecha", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "nota", array()), "html", null, true);
                echo "</td></tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </table>
            ";
        }
        // line 38
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  109 => 36,  98 => 34,  94 => 33,  91 => 32,  89 => 31,  83 => 28,  73 => 20,  64 => 17,  58 => 16,  52 => 15,  47 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
