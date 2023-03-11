<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* animales/edicion.html.twig */
class __TwigTemplate_f7956749b5f973bfaba10d7f59ab0199 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "animales/edicion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["animal"] ?? null)) {
            echo " 
Editando al animal: [";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["animal"] ?? null), "nombre", [], "any", false, false, false, 5), "html", null, true);
            echo "]
";
        } else {
            // line 7
            echo "Creando al animal
";
        }
        // line 9
        echo "
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animales_guardar", ["animal" => ((($context["animal"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["animal"] ?? null), "id", [], "any", false, false, false, 13)) : ("?"))]), "html", null, true);
        echo "\">
  <div class=\"mb-3\">
    <label for=\"name\" class=\"form-label\">Nombrecito</label>
    <input type=\"text\" class=\"form-control\" id=\"name\" name = \"name\" value=\"";
        // line 16
        ((($context["animal"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["animal"] ?? null), "nombre", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "\">
  </div>
  <div class=\"mb-3\">
    <label for=\"steps\" class=\"form-label\">Pasos</label>
    <input type=\"number\" class=\"form-control\" id=\"steps\" name=\"steps\" value=\"";
        // line 20
        ((($context["animal"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["animal"] ?? null), "pasos", [], "any", false, false, false, 20), "html", null, true))) : (print ("")));
        echo "\">
  </div>
  <div class=\"mb-3\">
    <label for=\"birthdate\" class=\"form-label\">Nacimiento</label>
    <input type=\"datetime-local\" class=\"form-control\" id=\"birthdate\" name= \"birthdate\" 
    value=\"";
        // line 25
        ((($context["animal"] ?? null)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["animal"] ?? null), "nacimiento", [], "any", false, false, false, 25), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "\">
  </div>

  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "animales/edicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  87 => 20,  80 => 16,  73 => 13,  69 => 12,  64 => 9,  60 => 7,  55 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "animales/edicion.html.twig", "/Users/diego/Desktop/UpgradeHUB/Ejercicios/PHP/06-Clone-Alberto-Ortiz/symfony-practica/templates/animales/edicion.html.twig");
    }
}
