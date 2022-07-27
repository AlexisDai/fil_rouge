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
<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sousRubrique", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 9, $this->source); })()), "rubrique", [], "any", false, false, false, 9), "rubrique", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 9, $this->source); })()), "rubrique", [], "any", false, false, false, 9), "rubrique", [], "any", false, false, false, 9), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo " <i class=\"fa-solid fa-angle-right mx-2\"></i></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 16, $this->source); })()), "rubrique", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 16, $this->source); })()), "rubrique", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo " <i class=\"fa-solid fa-angle-right mx-2\"></i></a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()), "libelleCourt", [], "any", false, false, false, 20), "html", null, true);
        echo "</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <div class=\"row g-0 bg-white\" id=\"bgproduit\">
            <h1 class=\"fw-bold mx-3\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 28, $this->source); })()), "libelleCourt", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>
            <img src=\"/upload/img/produit/";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 29, $this->source); })()), "photo", [], "any", false, false, false, 29), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 29, $this->source); })()), "libelleCourt", [], "any", false, false, false, 29), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 29, $this->source); })()), "libelleCourt", [], "any", false, false, false, 29), "html", null, true);
        echo "\" class=\"img-fluid col-6\">

            <div class=\"col-6 text-center sticky-top\">
                
                <div class=\"fs-1 fw-bold\"> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 33, $this->source); })()), "prixHorsTaxe", [], "any", false, false, false, 33), "html", null, true);
        echo " €</div>
                <p class=\"fs-4\">Tous les prix TVA incl.(TTC)<p>
                <p class=\"fs-4 text-success\">Disponible immédiatement<p>
                <p class=\"fs-4\">Livraison gratuite estimée entre ******* et *******.<p>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" class=\"btn btn-primary rounded-pill\"> Ajouter au panier </a>
                <hr>

                <p class=\"fs-4\"><i class=\"fa-solid fa-eye\"></i> 81 visiteurs regardent ce produit</p>
                <p class=\"fs-4\"><i class=\"fa-solid fa-medal\"></i> TOP DES VENTES</p>
                <hr>
                                                    
                <p class=\"fs-5 fw-bold\">Garantie 30 jours satisfaits ou rembousés</p>

                ";
        // line 47
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 47, $this->source); })()), "rubrique", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">Retour</a>   
                
            </div>

            <p class=\"fs-4 col-6 text-center\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 51, $this->source); })()), "libelleLong", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
        </div>
    
    ";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "
        <div class=\"text-end mx-3\">
            ";
            // line 58
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-outline-info mt-2\">Modifier</a>
        
            ";
            // line 60
            echo twig_include($this->env, $context, "produit/_delete_form.html.twig");
            echo "
        </div>
    ";
        }
        // line 63
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
        return array (  191 => 63,  185 => 60,  179 => 58,  175 => 55,  173 => 54,  167 => 51,  159 => 47,  147 => 37,  140 => 33,  129 => 29,  125 => 28,  114 => 20,  105 => 16,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails{% endblock %}

{% block produit %}

<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{ path('sousRubrique', {'id':produit.rubrique.rubrique.id }) }}\">{{ produit.rubrique.rubrique.nom }} <i class=\"fa-solid fa-angle-right mx-2\"></i></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_produit_index', {'id':produit.rubrique.id}) }}\">{{ produit.rubrique.nom }} <i class=\"fa-solid fa-angle-right mx-2\"></i></a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">{{produit.libelleCourt}}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
            <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-outline-info mt-2\">Modifier</a>
        
            {{ include('produit/_delete_form.html.twig') }}
        </div>
    {% endif %}

    
    
{% endblock %}
", "produit/show.html.twig", "/home/florianptf/Bureau/FilRougeAuthenCSS/templates/produit/show.html.twig");
    }
}
