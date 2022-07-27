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

/* produit/index.html.twig */
class __TwigTemplate_faa26a845141a4decadf3d66ab01fb29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
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

        echo "Liste des produits";
        
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
    ";
        // line 8
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
            echo "\" class=\"btn btn-outline-info mt-2\">Ajouter un produit</a>
    ";
        }
        // line 11
        echo "
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 13
            echo "        <div class=\"offset-2\">
           <div class=\"card mt-3 mb-3 mx-5 col-9 rounded-pill border border-dark shadow p-3 mb-5 bg-body rounded\">
                <div class=\"row g-0 d-flex\">
                    <div class=\"col-md-4\">
                        <img src=\"/upload/img/produit/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"img-fluid rounded-pill\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "libelleCourt", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"col-md-8 text-center\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title fs-3 fw-bold\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "libelleCourt", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
                            <p class=\"card-text fs-1 fw-bold\"><small class\"text-muted\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixHorsTaxe", [], "any", false, false, false, 22), "html", null, true);
            echo "€</small></p>
                        </div>
                         
                                            
                        <a class=\"btn btn-primary mt-5\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Détail</a>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-info text-white mt-5\"> Ajouter </a> 
                        ";
            // line 29
            echo "                        ";
            // line 30
            echo "                        ";
            // line 31
            echo "                    </div>
                </div>
           </div>
        </div>       
            
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "           
                <div colspan=\"8\">Aucun résultat pour votre recherche
                    ";
            // line 40
            echo "                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 42,  160 => 40,  156 => 37,  146 => 31,  144 => 30,  142 => 29,  138 => 27,  134 => 26,  127 => 22,  123 => 21,  114 => 17,  108 => 13,  103 => 12,  100 => 11,  94 => 9,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des produits{% endblock %}

{% block produit %}

    {# <a href=\"{{ path('rubrique') }}\">Rurbiques</a> #}
    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-outline-info mt-2\">Ajouter un produit</a>
    {% endif %}

        {% for produit in produits %}
        <div class=\"offset-2\">
           <div class=\"card mt-3 mb-3 mx-5 col-9 rounded-pill border border-dark shadow p-3 mb-5 bg-body rounded\">
                <div class=\"row g-0 d-flex\">
                    <div class=\"col-md-4\">
                        <img src=\"/upload/img/produit/{{ produit.photo }}\" class=\"img-fluid rounded-pill\" alt=\"{{ produit.libelleCourt }}\">
                    </div>
                    <div class=\"col-md-8 text-center\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title fs-3 fw-bold\">{{ produit.libelleCourt }}</h5>
                            <p class=\"card-text fs-1 fw-bold\"><small class\"text-muted\">{{ produit.prixHorsTaxe }}€</small></p>
                        </div>
                         
                                            
                        <a class=\"btn btn-primary mt-5\" href=\"{{ path('app_produit_show', {'id': produit.id}) }}\">Détail</a>
                        <a href=\"{{ path('cart_add', {'id': produit.id }) }}\" class=\"btn btn-info text-white mt-5\"> Ajouter </a> 
                        {# {'idi': produit.id} Récupère le chemin pour afficher le produit par son id #}
                        {# <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\">Modifier</a> #}
                        {# {'idi': produit.id} Récupère le chemin pour afficher le produit par son id #}
                    </div>
                </div>
           </div>
        </div>       
            
        {% else %}
           
                <div colspan=\"8\">Aucun résultat pour votre recherche
                    {# Au cas ou il ne trouve pas de produit #}
                </div>
        {% endfor %}



{% endblock %}
", "produit/index.html.twig", "/home/florianptf/Bureau/FilRougeTestAuthen/templates/produit/index.html.twig");
    }
}
