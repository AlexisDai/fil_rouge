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

/* home/rubrique.html.twig */
class __TwigTemplate_c80265f6e5ced518acc0b1bf6e6d5afe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'rubrique' => [$this, 'block_rubrique'],
            'produitphare' => [$this, 'block_produitphare'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/rubrique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/rubrique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/rubrique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light\">
      <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
            // line 14
            echo "            <li class=\"nav-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sousRubrique", ["id" => twig_get_attribute($this->env, $this->source, $context["rub"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">
                ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rub"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "
            </a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "          </ul>
        </div>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_rubrique($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rubrique"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rubrique"));

        // line 26
        echo "<div id=\"carouselExampleCaptions\" class=\"carousel carousel-dark slide mt-5 p-3 d-flex justify-content-center\" data-bs-ride=\"carousel\">
  <div class=\"carousel-indicators\">
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
  </div>
   <div class=\"carousel-inner rounded-pill shadow p-3 mb-5 bg-body rounded w-75\"> 
    <div class=\"carousel-item active\">
      <img src=\"/upload/img/produit/Thomann Zfan.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"Thomann Zfan\" title=\"Thomann Zfan\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Thomann Zfan</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"/upload/img/produit/Yamaha C3X PE.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"Yamaha C3X PE\" title=\"Yamaha C3X PE\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Yamaha C3X PE</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"/upload/img/produit/X2222USB.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"X2222USB\" title=\"X2222USB\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Behringer Xenyx</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"/upload/img/produit/SQB.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"SQB\" title=\"SQB\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Thomann SQB</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"/upload/img/produit/Varytec.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"Varytec\" title=\"Varytec\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Varytec</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>
    <div class=\"mainrubrique\">
        <div class=\"maintitle\">
            <h2>Nos Catégories</h2>
        </div>
        <div class=\"cardcomplete\">
    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
            // line 91
            echo "    <div class=\"cardrubrique\">
    <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sousRubrique", ["id" => twig_get_attribute($this->env, $this->source, $context["rub"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\">
        <div class=\"cardcontent\">
                    <img src=\"upload/img/rubrique/";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rub"], "photo", [], "any", false, false, false, 94), "html", null, true);
            echo "\">
                <h2> ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rub"], "nom", [], "any", false, false, false, 95), "html", null, true);
            echo " </h2>
        </div>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_produitphare($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produitphare"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produitphare"));

        // line 106
        echo "

    <div class=\"mainproduitphare\">
        <div class=\"maintitle\">
            <h2>Nos Produits Phares</h2>
        </div>

        <div class=\"cardcompletephare\">
            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
            // line 115
            echo "                <div class=\"cardphare1\">
                    <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sousRubrique", ["id" => twig_get_attribute($this->env, $this->source, $context["rub"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\">
                    <div class=\"cardphare2\">
                            <img src=\"upload/img/rubrique/";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rub"], "photo", [], "any", false, false, false, 118), "html", null, true);
            echo "\">
                            <h2> Nom produit</h2>
                    </div> 
                    <div class=\"cardphare3\">
                        <h3> Prix Produit </h3>      
                    </div> 
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/rubrique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 127,  257 => 118,  252 => 116,  249 => 115,  245 => 114,  235 => 106,  225 => 105,  213 => 100,  202 => 95,  198 => 94,  193 => 92,  190 => 91,  186 => 90,  120 => 26,  110 => 25,  97 => 18,  88 => 15,  83 => 14,  79 => 13,  70 => 6,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-light\">
      <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">
        {% for rub in rubrique %}
            <li class=\"nav-item\"><a href=\"{{ path('sousRubrique', {'id' : rub.id}) }}\">
                {{ rub.nom }}
            </a></li>
        {% endfor %}
          </ul>
        </div>
    </nav>
{% endblock %}



{% block rubrique %}
<div id=\"carouselExampleCaptions\" class=\"carousel carousel-dark slide mt-5 p-3 d-flex justify-content-center\" data-bs-ride=\"carousel\">
  <div class=\"carousel-indicators\">
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
  </div>
   <div class=\"carousel-inner rounded-pill shadow p-3 mb-5 bg-body rounded w-75\"> 
    <div class=\"carousel-item active\">
      <img src=\"/upload/img/produit/Thomann Zfan.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"Thomann Zfan\" title=\"Thomann Zfan\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Thomann Zfan</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"/upload/img/produit/Yamaha C3X PE.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"Yamaha C3X PE\" title=\"Yamaha C3X PE\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Yamaha C3X PE</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"/upload/img/produit/X2222USB.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"X2222USB\" title=\"X2222USB\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Behringer Xenyx</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"/upload/img/produit/SQB.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"SQB\" title=\"SQB\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Thomann SQB</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
    <div class=\"carousel-item\">
      <img src=\"/upload/img/produit/Varytec.jpg\" class=\"d-block w-25 rounded-pill\" alt=\"Varytec\" title=\"Varytec\">
      <div class=\"carousel-caption h-100\">
        <h5 class=\"display-4 fw-bold text-info\">Varytec</h5><hr class=\"text-info w-50\" size=\"7\" id=\"hr\">
        <p class=\"display-6 text-info\">à partir de </p>
        <p class=\"display-4 fw-bolder d-flex justify-content-end text-info\">150 €</p>
      </div>
    </div>
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>
    <div class=\"mainrubrique\">
        <div class=\"maintitle\">
            <h2>Nos Catégories</h2>
        </div>
        <div class=\"cardcomplete\">
    {% for rub in rubrique %}
    <div class=\"cardrubrique\">
    <a href=\"{{ path('sousRubrique', {'id' : rub.id}) }}\">
        <div class=\"cardcontent\">
                    <img src=\"upload/img/rubrique/{{rub.photo}}\">
                <h2> {{ rub.nom }} </h2>
        </div>
        </a>
    </div>
    {% endfor %}
            </div>
    </div>
{% endblock %}


{% block produitphare %}


    <div class=\"mainproduitphare\">
        <div class=\"maintitle\">
            <h2>Nos Produits Phares</h2>
        </div>

        <div class=\"cardcompletephare\">
            {% for rub in rubrique %}
                <div class=\"cardphare1\">
                    <a href=\"{{ path('sousRubrique', {'id' : rub.id}) }}\">
                    <div class=\"cardphare2\">
                            <img src=\"upload/img/rubrique/{{rub.photo}}\">
                            <h2> Nom produit</h2>
                    </div> 
                    <div class=\"cardphare3\">
                        <h3> Prix Produit </h3>      
                    </div> 
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}


", "home/rubrique.html.twig", "/home/florianptf/Bureau/FilRougeTestAuthen/templates/home/rubrique.html.twig");
    }
}
