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

/* produit/show.html.twig */
class __TwigTemplate_dad2d5d3cb95cbc73e42c59d202454a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'produit' => [$this, 'block_produit'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Détails";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 6
        echo "
    
        <div class=\"row g-0 bg-white\" id=\"bgproduit\">
            <h1 class=\"fw-bold mx-3\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 9, $this->source); })()), "libelleCourt", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
            <img src=\"/upload/img/produit/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 10, $this->source); })()), "photo", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 10, $this->source); })()), "libelleCourt", [], "any", false, false, false, 10), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 10, $this->source); })()), "libelleCourt", [], "any", false, false, false, 10), "html", null, true);
        echo "\" class=\"img-fluid col-6\">

            <div class=\"col-6 text-center sticky-top\">
                
                <div class=\"fs-1 fw-bold\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 14, $this->source); })()), "prixHorsTaxe", [], "any", false, false, false, 14), "html", null, true);
        echo " €</div>
                <p class=\"fs-4\">Tous les prix TVA incl.(TTC)<p>
                <p class=\"fs-4 text-success\">Disponible immédiatement<p>
                <p class=\"fs-4\">Livraison gratuite estimée entre ******* et *******.<p>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"btn btn-primary rounded-pill\"> Ajouter au panier </a>
                <hr>

                <p class=\"fs-4\"><i class=\"fa-solid fa-eye\"></i> 81 visiteurs regardent ce produit</p>
                <p class=\"fs-4\"><i class=\"fa-solid fa-medal\"></i> TOP DES VENTES</p>
                <hr>
                                                    
                <p class=\"fs-5 fw-bold\">Garantie 30 jours satisfaits ou rembousés</p>

                ";
        // line 28
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 28, $this->source); })()), "rubrique", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">Retour</a>   
                
            </div>

            <p class=\"fs-4 col-6 text-center\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 32, $this->source); })()), "libelleLong", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
        </div>
    
    ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "
        <div class=\"text-end mx-3\">
            ";
            // line 39
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\">Modifier</a>
        
            ";
            // line 41
            echo twig_include($this->env, $context, "produit/_delete_form.html.twig");
            echo "
        </div>
    ";
        }
        // line 44
        echo "
    
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 44,  153 => 41,  147 => 39,  143 => 36,  141 => 35,  135 => 32,  127 => 28,  115 => 18,  108 => 14,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails{% endblock %}

{% block produit %}

    
        <div class=\"row g-0 bg-white\" id=\"bgproduit\">
            <h1 class=\"fw-bold mx-3\">{{produit.libelleCourt}}</h1>
            <img src=\"/upload/img/produit/{{produit.photo}}\" alt=\"{{produit.libelleCourt}}\" title=\"{{produit.libelleCourt}}\" class=\"img-fluid col-6\">

            <div class=\"col-6 text-center sticky-top\">
                
                <div class=\"fs-1 fw-bold\"> {{ produit.prixHorsTaxe }} €</div>
                <p class=\"fs-4\">Tous les prix TVA incl.(TTC)<p>
                <p class=\"fs-4 text-success\">Disponible immédiatement<p>
                <p class=\"fs-4\">Livraison gratuite estimée entre ******* et *******.<p>
                <a href=\"{{ path('cart_add', {'id': produit.id }) }}\" class=\"btn btn-primary rounded-pill\"> Ajouter au panier </a>
                <hr>

                <p class=\"fs-4\"><i class=\"fa-solid fa-eye\"></i> 81 visiteurs regardent ce produit</p>
                <p class=\"fs-4\"><i class=\"fa-solid fa-medal\"></i> TOP DES VENTES</p>
                <hr>
                                                    
                <p class=\"fs-5 fw-bold\">Garantie 30 jours satisfaits ou rembousés</p>

                {# produit.rubrique.id = le chemin complet pour le retour #}
                <a href=\"{{ path('app_produit_index', {'id': produit.rubrique.id}) }}\" class=\"btn btn-outline-secondary\">Retour</a>   
                
            </div>

            <p class=\"fs-4 col-6 text-center\">{{ produit.libelleLong }}</p>
        </div>
    
    {% if is_granted('ROLE_ADMIN') %}

        <div class=\"text-end mx-3\">
            {# {'id': produit.id} Récupère le chemin pour afficher le produit par son id #}
            <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-primary mt-2\">Modifier</a>
        
            {{ include('produit/_delete_form.html.twig') }}
        </div>
    {% endif %}

    
    
{% endblock %}
", "produit/show.html.twig", "/home/florianptf/Bureau/FilRougeTestAuthen/templates/produit/show.html.twig");
    }
}
