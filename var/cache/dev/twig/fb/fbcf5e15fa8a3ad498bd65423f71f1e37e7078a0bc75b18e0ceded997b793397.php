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

/* zonas/new.html.twig */
class __TwigTemplate_87ab5d7cdc788e4b76a5f4452876d505cd84e70b886a956821ef66e9dad9c5f3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "zonas/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "zonas/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Zonas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Crear nueva zona</h1>

     ";
        // line 8
        echo twig_include($this->env, $context, "zonas/_form.html.twig");
        echo " 
    ";
        // line 45
        echo "
    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zonas_index");
        echo "\">back to list</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "zonas/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 46,  81 => 45,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Zonas{% endblock %}

{% block body %}
    <h1>Crear nueva zona</h1>

     {{ include('zonas/_form.html.twig') }} 
    {# Finalmente para evitar fallos y tener todas las funcionalidades quito
        los form a mano
            <div class=\"container\">
        <form class=\"form-horizontal\">
            <fieldset>

                <!-- Form Name -->
                <legend>Nueva Zona</legend>

                <!-- Text input-->
                <div class=\"form-group\">
                    {{ form_label(form.pais) }}
                    <div class=\"col-md-4\">
                        {{ form_widget(form.pais) }} 
                    </div>
                </div>
                <!-- Text input-->
                <div class=\"form-group\">
                    {{ form_label(form.provincia) }}
                    <div class=\"col-md-4\">
                        {{ form_widget(form.provincia) }} 
                    </div>
                </div>

                <!-- Button -->
                <div class=\"form-group\">
                    <div class=\"col-md-4\">
                        <!-- <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-primary\">Enviar</button> -->
                        {{ form_widget(form.save) }}
                    </div>
                </div>
               {{ form_end(form) }}
            </fieldset>
        </form>
    </div>
    #}

    <a href=\"{{ path('zonas_index') }}\">back to list</a>
{% endblock %}
", "zonas/new.html.twig", "C:\\workspace_symfony\\symfony-mountains\\templates\\zonas\\new.html.twig");
    }
}
