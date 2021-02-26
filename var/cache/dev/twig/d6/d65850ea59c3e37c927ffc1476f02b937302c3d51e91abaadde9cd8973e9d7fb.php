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

/* mountains/show.html.twig */
class __TwigTemplate_48aa07fde1103df14400c5c60d4a984636a105372127b2924f4a619935c14939 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mountains/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mountains/show.html.twig", 1);
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
        echo "    <h1 class=\"text-center\">Mountain</h1>
    <!-- card -->
    <div class=\"container\">
        <div class=\"card\" >
            <img class=\"card-img-top rounded mx-auto d-block avatar\" src='";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mountain"]) || array_key_exists("mountain", $context) ? $context["mountain"] : (function () { throw new RuntimeError('Variable "mountain" does not exist.', 10, $this->source); })()), "imagen", [], "any", false, false, false, 10), "html", null, true);
        echo "' alt=\"Card image cap\">
            <div class=\"card-block\">
                <h2 class=\"card-title\"> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mountain"]) || array_key_exists("mountain", $context) ? $context["mountain"] : (function () { throw new RuntimeError('Variable "mountain" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
                <h4 class=\"card-text description\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mountain"]) || array_key_exists("mountain", $context) ? $context["mountain"] : (function () { throw new RuntimeError('Variable "mountain" does not exist.', 13, $this->source); })()), "altura", [], "any", false, false, false, 13), "html", null, true);
        echo " m</h4>
                <h4 class=\"card-text description\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mountain"]) || array_key_exists("mountain", $context) ? $context["mountain"] : (function () { throw new RuntimeError('Variable "mountain" does not exist.', 14, $this->source); })()), "desnivel", [], "any", false, false, false, 14), "html", null, true);
        echo " m</h4>
                <p class=\" card-text description\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mountain"]) || array_key_exists("mountain", $context) ? $context["mountain"] : (function () { throw new RuntimeError('Variable "mountain" does not exist.', 15, $this->source); })()), "descripcion", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            </div>
            <div  class=\" btn-group card-footer\" role=\"group\">
                <a type=\"button\" class=\"btn btn-success\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mountains_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mountain"]) || array_key_exists("mountain", $context) ? $context["mountain"] : (function () { throw new RuntimeError('Variable "mountain" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">Modificar</a>
                <a type=\"button\" class=\"btn btn-info\" href=\"https://www.google.es/maps/preview\">Ver en Maps</a>
                ";
        // line 20
        echo twig_include($this->env, $context, "mountains/_delete_form.html.twig");
        echo "
            </div>
        </div>
    </div>
    <!--Volver a la principal-->
    <a type=\"button\" class=\"float-right mt-3 btn btn-light\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mountains_index");
        echo "\">Volver</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mountains/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  107 => 20,  102 => 18,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mountains{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Mountain</h1>
    <!-- card -->
    <div class=\"container\">
        <div class=\"card\" >
            <img class=\"card-img-top rounded mx-auto d-block avatar\" src='{{ mountain.imagen }}' alt=\"Card image cap\">
            <div class=\"card-block\">
                <h2 class=\"card-title\"> {{ mountain.nombre }}</h2>
                <h4 class=\"card-text description\"> {{ mountain.altura }} m</h4>
                <h4 class=\"card-text description\"> {{ mountain.desnivel }} m</h4>
                <p class=\" card-text description\"> {{ mountain.descripcion }}</p>
            </div>
            <div  class=\" btn-group card-footer\" role=\"group\">
                <a type=\"button\" class=\"btn btn-success\" href=\"{{ path('mountains_edit', {'id': mountain.id}) }}\">Modificar</a>
                <a type=\"button\" class=\"btn btn-info\" href=\"https://www.google.es/maps/preview\">Ver en Maps</a>
                {{ include('mountains/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
    <!--Volver a la principal-->
    <a type=\"button\" class=\"float-right mt-3 btn btn-light\" href=\"{{ path('mountains_index') }}\">Volver</a>

{% endblock %}
", "mountains/show.html.twig", "C:\\workspace_symfony\\symfony-mountains\\templates\\mountains\\show.html.twig");
    }
}
