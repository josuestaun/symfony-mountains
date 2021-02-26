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

/* mountains/index.html.twig */
class __TwigTemplate_943de9592ae541af50330616697c83efb9fe66c74d1b33786dbe3925ea4105de extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mountains/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mountains/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mountains";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center\">Mountains</h1>
    <div class=\"jumbotron\">
        <h3 class=\"text-center\">Bienvenido al proyecto de Josué Martínez sobre Montañas</h3>
        <div class=\"list-group\">
            <a class=\"my-4 btn btn-info text-center\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zonas_index");
        echo "\">ZONAS</a>
        </div>
        <div class=\"list-group\">
            <a class=\"my-4 btn btn-info text-center\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mountains_new");
        echo "\">Añadir nueva montaña</a>
        </div>
    </div>
    <!-- card -->
    <div class=\"row mx-1\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mountains"]) || array_key_exists("mountains", $context) ? $context["mountains"] : (function () { throw new RuntimeError('Variable "mountains" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mountain"]) {
            // line 19
            echo "            <div class=\"my-2 col-sm-4 col-lg-4 col-md-4\">
                <div class=\"card\" min-height=\"450px\">
                    <img class=\"card-img-top rounded mx-auto d-block avatar\" src='";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mountain"], "imagen", [], "any", false, false, false, 21), "html", null, true);
            echo "' alt=\"Card image cap\">
                    <div class=\"card-block\">
                        <h2 class=\"card-title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mountain"], "nombre", [], "any", false, false, false, 23), "html", null, true);
            echo "</h2>
                        <p class=\"card-text description\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mountain"], "descripcion", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                        <h4 class=\" card-text description\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mountain"], "altura", [], "any", false, false, false, 25), "html", null, true);
            echo " metros</h4>
                    </div>
                    <div  class=\" btn-group card-footer\" role=\"group\">
                        <a class=\"btn btn-dark\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mountains_show", ["id" => twig_get_attribute($this->env, $this->source, $context["mountain"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Opciones</a>
                        <a class=\"btn btn-dark\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mountains_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["mountain"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Editar</a> 
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <p>no records found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mountain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mountains/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 36,  135 => 34,  125 => 29,  121 => 28,  115 => 25,  111 => 24,  107 => 23,  102 => 21,  98 => 19,  93 => 18,  85 => 13,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mountains{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Mountains</h1>
    <div class=\"jumbotron\">
        <h3 class=\"text-center\">Bienvenido al proyecto de Josué Martínez sobre Montañas</h3>
        <div class=\"list-group\">
            <a class=\"my-4 btn btn-info text-center\" href=\"{{ path('zonas_index') }}\">ZONAS</a>
        </div>
        <div class=\"list-group\">
            <a class=\"my-4 btn btn-info text-center\" href=\"{{ path('mountains_new') }}\">Añadir nueva montaña</a>
        </div>
    </div>
    <!-- card -->
    <div class=\"row mx-1\">
        {% for mountain in mountains %}
            <div class=\"my-2 col-sm-4 col-lg-4 col-md-4\">
                <div class=\"card\" min-height=\"450px\">
                    <img class=\"card-img-top rounded mx-auto d-block avatar\" src='{{ mountain.imagen }}' alt=\"Card image cap\">
                    <div class=\"card-block\">
                        <h2 class=\"card-title\">{{ mountain.nombre }}</h2>
                        <p class=\"card-text description\">{{ mountain.descripcion }}</p>
                        <h4 class=\" card-text description\">{{ mountain.altura }} metros</h4>
                    </div>
                    <div  class=\" btn-group card-footer\" role=\"group\">
                        <a class=\"btn btn-dark\" href=\"{{ path('mountains_show', {'id': mountain.id}) }}\">Opciones</a>
                        <a class=\"btn btn-dark\" href=\"{{ path('mountains_edit', {'id': mountain.id}) }}\">Editar</a> 
                    </div>
                </div>
            </div>
        {% else %}
            <p>no records found</p>
        {% endfor %}
    </div>
{% endblock %}
", "mountains/index.html.twig", "C:\\workspace_symfony\\symfony-mountains\\templates\\mountains\\index.html.twig");
    }
}
