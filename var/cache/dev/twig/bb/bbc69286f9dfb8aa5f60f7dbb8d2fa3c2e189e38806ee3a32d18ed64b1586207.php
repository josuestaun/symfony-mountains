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

/* mountains/new.html.twig */
class __TwigTemplate_1f43c9ccbea6648a4445461fd14efbb91927a3eb50693e98401efe1f23e6d83b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mountains/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mountains/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Mountains";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Añade una nueva montaña</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "mountains/_form.html.twig");
        echo "

    ";
        // line 78
        echo "    
    <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mountains_index");
        echo "\">Volver</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mountains/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 79,  82 => 78,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Mountains{% endblock %}

{% block body %}
    <h1>Añade una nueva montaña</h1>

    {{ include('mountains/_form.html.twig') }}

    {#
    Finalmente para evitar fallos y tener todas las funcionalidades quito
    <div class=\"container\">
        <form class=\"form-horizontal\">
            <fieldset>

                <!-- Form Name -->
                <legend>Nueva montaña</legend>

                <!-- Text input-->
                <div class=\"form-group\">
                    {{ form_label(form.nombre) }}
                    <div class=\"col-md-4\">
                        {{ form_widget(form.nombre) }} 
                    </div>
                </div>
                <!-- Text input-->
                <div class=\"form-group\">
                    {{ form_label(form.descripcion) }}
                    <div class=\"col-md-4\">
                        {{ form_widget(form.descripcion) }} 
                    </div>
                </div>

                <!-- Text input-->
                <div class=\"form-group\">
                    {{ form_label(form.altura) }}
                    <div class=\"col-md-4\">
                        {{ form_widget(form.altura) }}  
                    </div>
                </div>

                <!-- Text input-->
                <div class=\"form-group\">
                    {{ form_label(form.desnivel) }}
                    <div class=\"col-md-4\">
                        {{ form_widget(form.desnivel) }}
                    </div>
                </div>

                <!-- Text input-->
                <div class=\"form-group\">
                    {{ form_label(form.imagen) }}
                    <div class=\"col-md-4\">
                        {{ form_widget(form.imagen) }}  
                    </div>
                </div>

                <!-- Text input-->
                <div class=\"form-group\">
                    {{ form_label(form.zona) }}
                    <div class=\"col-md-4\">
                        {{ form_widget(form.zona) }} 
                    </div>
                </div>

                <!-- Button -->
                <div class=\"form-group\">
                    <div class=\"col-md-4\">
                        <!-- <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-primary\">Enviar</button> -->
                        {{ form_widget(form.save) }}
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    #}
    
    <a href=\"{{ path('mountains_index') }}\">Volver</a>
{% endblock %}
", "mountains/new.html.twig", "C:\\workspace_symfony\\symfony-mountains\\templates\\mountains\\new.html.twig");
    }
}
