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

/* zonas/index.html.twig */
class __TwigTemplate_baa6dea4e9cd3c7b61fb6e84aff9c944c16bfa6c89d13d982e119cdaa7a9f93e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "zonas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "zonas/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Zonas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center\">Zonas senderismo</h1>
    
    <!-- crear zona -->
        <div class=\"jumbotron\">
        <div class=\"list-group\">
            <a class=\"my-4 btn btn-info text-center\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zonas_new");
        echo "\">Nueva zona</a>
        </div>
    </div>

    <!-- card -->
    <div class=\"row mx-1\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zonas"]) || array_key_exists("zonas", $context) ? $context["zonas"] : (function () { throw new RuntimeError('Variable "zonas" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["zona"]) {
            // line 18
            echo "            <div class=\"my-2 col-sm-4 col-lg-4 col-md-4\">
                <div class=\"card\" min-height=\"450px\">
                    <div class=\"card-block\">
                        <h2 class=\"card-title\">Pais: ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["zona"], "pais", [], "any", false, false, false, 21), "html", null, true);
            echo "</h2>
                        <p class=\"card-text description\"><strong>Lugar o Provincia:</strong> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["zona"], "provincia", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                    </div>
                    <div  class=\" btn-group card-footer\" role=\"group\">
                        <a class=\"btn btn-dark\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zonas_show", ["id" => twig_get_attribute($this->env, $this->source, $context["zona"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Ver</a>
                        <a class=\"btn btn-dark\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zonas_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["zona"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Editar</a> 
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <p>no records found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "zonas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  123 => 31,  113 => 26,  109 => 25,  103 => 22,  99 => 21,  94 => 18,  89 => 17,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Zonas{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Zonas senderismo</h1>
    
    <!-- crear zona -->
        <div class=\"jumbotron\">
        <div class=\"list-group\">
            <a class=\"my-4 btn btn-info text-center\" href=\"{{ path('zonas_new') }}\">Nueva zona</a>
        </div>
    </div>

    <!-- card -->
    <div class=\"row mx-1\">
        {% for zona in zonas %}
            <div class=\"my-2 col-sm-4 col-lg-4 col-md-4\">
                <div class=\"card\" min-height=\"450px\">
                    <div class=\"card-block\">
                        <h2 class=\"card-title\">Pais: {{ zona.pais }}</h2>
                        <p class=\"card-text description\"><strong>Lugar o Provincia:</strong> {{ zona.provincia }}</p>
                    </div>
                    <div  class=\" btn-group card-footer\" role=\"group\">
                        <a class=\"btn btn-dark\" href=\"{{ path('zonas_show', {'id': zona.id}) }}\">Ver</a>
                        <a class=\"btn btn-dark\" href=\"{{ path('zonas_edit', {'id': zona.id}) }}\">Editar</a> 
                    </div>
                </div>
            </div>
        {% else %}
            <p>no records found</p>
        {% endfor %}
    </div>
{% endblock %}
", "zonas/index.html.twig", "C:\\workspace_symfony\\symfony-mountains\\templates\\zonas\\index.html.twig");
    }
}
