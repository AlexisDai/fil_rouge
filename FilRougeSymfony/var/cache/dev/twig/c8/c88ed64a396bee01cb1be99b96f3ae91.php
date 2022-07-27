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

/* base.html.twig */
class __TwigTemplate_0eaabee642b947ed0c537b2e5175303b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'rubrique' => [$this, 'block_rubrique'],
            'produitphare' => [$this, 'block_produitphare'],
            'produit' => [$this, 'block_produit'],
            'panier' => [$this, 'block_panier'],
            'admin' => [$this, 'block_admin'],
            'login' => [$this, 'block_login'],
            'newuser' => [$this, 'block_newuser'],
            'edituser' => [$this, 'block_edituser'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
    ";
        // line 6
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "

        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
<body>
<div class=\"bg\">
    <div class=\"container1\">
        <div class=\"navgauche\">
        <ul>
            <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique");
        echo "\" ><i class=\"fa-solid fa-house\"></i></a></li>
            <li><i class=\"fa-solid fa-house\" id=\"homehidden\"></i></li>
        </ul>
        </div>

        <div class=\"navmilieu\">
            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique");
        echo "\">The Blue Village</a>
            <input type=\"text\" class=\"search\" placeholder=\"Rechercher\">
        </div>
        
        <div class=\"navdroite\">
            <ul>
                <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><i class=\"fa-solid fa-user\"></i></a></li>          
                <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\" ><i class=\"fa-solid fa-cart-shopping\"></i></a></li>
            </ul>
        </div>
    </div>






    <div id=\"modal1\" class=\"modal modal-fixed-footer\">
 
        <div class=\"modal-content\">



<form method=\"post\" action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
    ";
        // line 55
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 55, $this->source); })()))) {
            // line 56
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 56, $this->source); })()), "messageKey", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 56, $this->source); })()), "messageData", [], "any", false, false, false, 56), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            echo "        <div class=\"mb-3\">
            Vous êtes connecté en tant que : ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "userIdentifier", [], "any", false, false, false, 61), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        </div>
    ";
        }
        // line 64
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal\">Connectez-vous</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Mot de passe</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    ";
        // line 85
        echo "
    <button class=\"btn btn-lg btn-primary mt-3\" type=\"submit\">
        Connexion
    </button>
</form>
    </div>
        <div class=\"modal-footer\">
            <li class=\"modal-action modal-close waves-effect btn-flat \">Fermer</li>
        </div>
 
 
    </div>












    <div class=\"rubriques\">
        <ul>
            ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "        </ul>
    </div>


            ";
        // line 117
        $this->displayBlock('rubrique', $context, $blocks);
        // line 119
        echo "

            ";
        // line 121
        $this->displayBlock('produitphare', $context, $blocks);
        // line 123
        echo "
            ";
        // line 124
        $this->displayBlock('produit', $context, $blocks);
        // line 126
        echo "
            ";
        // line 127
        $this->displayBlock('panier', $context, $blocks);
        // line 129
        echo "
            ";
        // line 130
        $this->displayBlock('admin', $context, $blocks);
        // line 132
        echo "
";
        // line 149
        echo "                <div class=\"container\">
                        ";
        // line 150
        if (array_key_exists("message", $context)) {
            // line 151
            echo "                                <div class=\"alert alert-danger\">
                                        ";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 152, $this->source); })()), "html", null, true);
            echo "
                                </div>
                        ";
        }
        // line 155
        echo "
                        
                        ";
        // line 157
        $this->displayBlock('login', $context, $blocks);
        // line 159
        echo "
                        ";
        // line 160
        $this->displayBlock('newuser', $context, $blocks);
        // line 162
        echo "
                        ";
        // line 163
        $this->displayBlock('edituser', $context, $blocks);
        // line 165
        echo "
                </div>



        ";
        // line 172
        echo "                <div class=\"footer\">
                    ";
        // line 174
        echo "                        <div class=\"footergauche\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fa-solid fa-circle-info\"></i> Information légales </a></li>            
                                <li><a href=\"#\"><i class=\"fa-solid fa-circle-info\"></i> Politiques de confidentialité</a></li>
                                <li><a href=\"#\"><i class=\"fa-solid fa-location-pin\"></i> 73 Boulevard Bertin, 44432 Tessier</a></li>
                                <li><a href=\"#\"><i class=\"fa-solid fa-envelope\"></i> VillageGreen@exemple.com</a></li>
                            </ul>
                        </div>
                    ";
        // line 183
        echo "
                ";
        // line 185
        echo "                    <div class=\"footermilieu\">
                        <ul>
                            <li><i class=\"fa-brands fa-paypal\"></i></li>            
                            <li><i class=\"fa-brands fa-cc-visa\"></i></li>
                        </ul>    
                        <ul>
                            <li><i class=\"fa-brands fa-apple-pay\"></i></li>
                            <li><i class=\"fa-brands fa-cc-mastercard\"></i></li> 
                        </ul>
                        <ul>               
                            <li><i class=\"fa-brands fa-amazon-pay\"></i></li>
                            <li><i class=\"fa-brands fa-cc-amex\"></i></li>
                        </ul>
                    </div>        
                ";
        // line 200
        echo "

                ";
        // line 203
        echo "                    <div class=\"footerdroite\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a></li>            
                            <li><a href=\"#\"><i class=\"fa-brands fa-snapchat\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa-brands fa-twitter\"></i></a></li>                
                        </ul>
                    </div>  
                </div>    
            ";
        // line 215
        echo "
    </body>
        <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
        <script src=\"https://kit.fontawesome.com/c1bbff1c35.js\" crossorigin=\"anonymous\"></script>
        <script src=\"/js/script.js\"></script>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "The Blue Village";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "                    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
                    <link rel=\"stylesheet\" href=\"/css/styles.css\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 111
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_rubrique($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rubrique"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rubrique"));

        // line 118
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function block_produitphare($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produitphare"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produitphare"));

        // line 122
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 124
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 125
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_panier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        // line 128
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 130
    public function block_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        // line 131
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 158
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 160
    public function block_newuser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "newuser"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "newuser"));

        // line 161
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 163
    public function block_edituser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edituser"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edituser"));

        // line 164
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 164,  559 => 163,  549 => 161,  539 => 160,  529 => 158,  519 => 157,  509 => 131,  499 => 130,  489 => 128,  479 => 127,  469 => 125,  459 => 124,  449 => 122,  439 => 121,  429 => 118,  419 => 117,  409 => 112,  399 => 111,  386 => 17,  376 => 16,  362 => 11,  352 => 10,  333 => 6,  316 => 215,  305 => 203,  301 => 200,  285 => 185,  282 => 183,  272 => 174,  269 => 172,  262 => 165,  260 => 163,  257 => 162,  255 => 160,  252 => 159,  250 => 157,  246 => 155,  240 => 152,  237 => 151,  235 => 150,  232 => 149,  229 => 132,  227 => 130,  224 => 129,  222 => 127,  219 => 126,  217 => 124,  214 => 123,  212 => 121,  208 => 119,  206 => 117,  200 => 113,  198 => 111,  170 => 85,  164 => 72,  154 => 64,  146 => 61,  143 => 60,  141 => 59,  138 => 58,  132 => 56,  130 => 55,  126 => 54,  107 => 38,  103 => 37,  94 => 31,  85 => 25,  77 => 19,  75 => 16,  71 => 14,  68 => 10,  61 => 6,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
    {# <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> #}
        <title>{% block title %}The Blue Village{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
                    {{ encore_entry_link_tags('app') }}
                    <link rel=\"stylesheet\" href=\"/css/styles.css\">
        {% endblock %}


        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
<body>
<div class=\"bg\">
    <div class=\"container1\">
        <div class=\"navgauche\">
        <ul>
            <li><a href=\"{{ path('rubrique') }}\" ><i class=\"fa-solid fa-house\"></i></a></li>
            <li><i class=\"fa-solid fa-house\" id=\"homehidden\"></i></li>
        </ul>
        </div>

        <div class=\"navmilieu\">
            <a href=\"{{ path('rubrique') }}\">The Blue Village</a>
            <input type=\"text\" class=\"search\" placeholder=\"Rechercher\">
        </div>
        
        <div class=\"navdroite\">
            <ul>
                <li><a href=\"{{ path('app_login') }}\"><i class=\"fa-solid fa-user\"></i></a></li>          
                <li><a href=\"{{ path('app_cart') }}\" ><i class=\"fa-solid fa-cart-shopping\"></i></a></li>
            </ul>
        </div>
    </div>






    <div id=\"modal1\" class=\"modal modal-fixed-footer\">
 
        <div class=\"modal-content\">



<form method=\"post\" action=\"{{ path('app_login')}}\">
    {% if error is defined and error%}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            Vous êtes connecté en tant que : {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
        </div>
    {% endif %}

    <h1 class=\"h3 mb-3 font-weight-normal\">Connectez-vous</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Mot de passe</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}

    <button class=\"btn btn-lg btn-primary mt-3\" type=\"submit\">
        Connexion
    </button>
</form>
    </div>
        <div class=\"modal-footer\">
            <li class=\"modal-action modal-close waves-effect btn-flat \">Fermer</li>
        </div>
 
 
    </div>












    <div class=\"rubriques\">
        <ul>
            {% block body %}
            {% endblock %}
        </ul>
    </div>


            {% block rubrique %}
            {% endblock %}


            {% block produitphare %}
            {% endblock %}

            {% block produit %}
            {% endblock %}

            {% block panier %}
            {% endblock %}

            {% block admin %}
            {% endblock %}

{#             <nav class=\"navbar navbar-light bg-light\">
                        <a class=\"navbar-brand\">Navbar</a>
                            {% if app.user %}
                                        <a class=\"btn btn-outline-info\" href=\"{{ path('membre') }}\">Page membre</a>
                                {% if is_granted('ROLE_ADMIN') %}
                                        <a class=\"btn btn-outline-warning\" href=\"{{ path('admin') }}\">Page admin</a>
                                {% endif %}                                <div>
                                        Bonjour {{ app.user.username }} <a class=\"btn btn-sm btn-danger\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                                </div>
                        {% else %}
                                <div>
                                        <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_register') }}\">S'inscrire</a>
                                        <a class=\"btn btn-sm btn-success\" href=\"{{ path('app_login') }}\">Se connecter</a>
                                </div>
                        {% endif %}
                </nav> #}
                <div class=\"container\">
                        {% if message is defined %}
                                <div class=\"alert alert-danger\">
                                        {{ message }}
                                </div>
                        {% endif %}

                        
                        {% block login %}
                        {% endblock %}

                        {% block newuser %}
                        {% endblock %}

                        {% block edituser %}
                        {% endblock %}

                </div>



        {# <div class=\"container-fluid\">
            <div class=\"row\"> #}
                <div class=\"footer\">
                    {# <div class=\"col-md-4 col-sm-12\"> #}
                        <div class=\"footergauche\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fa-solid fa-circle-info\"></i> Information légales </a></li>            
                                <li><a href=\"#\"><i class=\"fa-solid fa-circle-info\"></i> Politiques de confidentialité</a></li>
                                <li><a href=\"#\"><i class=\"fa-solid fa-location-pin\"></i> 73 Boulevard Bertin, 44432 Tessier</a></li>
                                <li><a href=\"#\"><i class=\"fa-solid fa-envelope\"></i> VillageGreen@exemple.com</a></li>
                            </ul>
                        </div>
                    {# </div> #}

                {# <div class=\"col-md-4 col-sm-12\"> #}
                    <div class=\"footermilieu\">
                        <ul>
                            <li><i class=\"fa-brands fa-paypal\"></i></li>            
                            <li><i class=\"fa-brands fa-cc-visa\"></i></li>
                        </ul>    
                        <ul>
                            <li><i class=\"fa-brands fa-apple-pay\"></i></li>
                            <li><i class=\"fa-brands fa-cc-mastercard\"></i></li> 
                        </ul>
                        <ul>               
                            <li><i class=\"fa-brands fa-amazon-pay\"></i></li>
                            <li><i class=\"fa-brands fa-cc-amex\"></i></li>
                        </ul>
                    </div>        
                {# </div>     #}


                {# <div class=\"col-md-4 col-sm-12\"> #}
                    <div class=\"footerdroite\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a></li>            
                            <li><a href=\"#\"><i class=\"fa-brands fa-snapchat\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa-brands fa-twitter\"></i></a></li>                
                        </ul>
                    </div>  
                </div>    
            {# </div>
        </div>
    </div> #}

    </body>
        <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
        <script src=\"https://kit.fontawesome.com/c1bbff1c35.js\" crossorigin=\"anonymous\"></script>
        <script src=\"/js/script.js\"></script>
</html>
", "base.html.twig", "/home/florianptf/Bureau/FilRougeTestAuthen/templates/base.html.twig");
    }
}
