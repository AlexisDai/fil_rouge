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

/* home/sousRubrique.html.twig */
class __TwigTemplate_95d30287d5c5cd00550ae8029d56f81b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'rubrique' => [$this, 'block_rubrique'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/sousRubrique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/sousRubrique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/sousRubrique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_rubrique($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rubrique"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rubrique"));

        // line 4
        echo "    <div class=\"mainrubrique\">
        <div class=\"maintitle\">
            <h2>Nos Catégories</h2>
        </div>
        <div class=\"cardcomplete\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sousRubrique"]) || array_key_exists("sousRubrique", $context) ? $context["sousRubrique"] : (function () { throw new RuntimeError('Variable "sousRubrique" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ssRub"]) {
            // line 10
            echo "        <div class=\"cardrubrique\">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["id" => twig_get_attribute($this->env, $this->source, $context["ssRub"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
                <div class=\"cardcontent\">
                            <img src=\"/upload/img/rubrique/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ssRub"], "photo", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                        <h2> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ssRub"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo " </h2>
                </div>
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ssRub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/sousRubrique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  91 => 14,  87 => 13,  82 => 11,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block rubrique %}
    <div class=\"mainrubrique\">
        <div class=\"maintitle\">
            <h2>Nos Catégories</h2>
        </div>
        <div class=\"cardcomplete\">
    {% for ssRub in sousRubrique %}
        <div class=\"cardrubrique\">
            <a href=\"{{ path('app_produit_index', {'id':ssRub.id}) }}\">
                <div class=\"cardcontent\">
                            <img src=\"/upload/img/rubrique/{{ssRub.photo}}\">
                        <h2> {{ ssRub.nom }} </h2>
                </div>
            </a>
        </div>
    {% endfor %}
            </div>
    </div>
{% endblock %}


{# {{ssRub.photo}} #}", "home/sousRubrique.html.twig", "/home/florianptf/Bureau/FilRougeAuthenCSS/templates/home/sousRubrique.html.twig");
    }
}
