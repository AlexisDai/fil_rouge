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
            'body' => [$this, 'block_body'],
            'rubrique' => [$this, 'block_rubrique'],
            'produitphare' => [$this, 'block_produitphare'],
            'produit' => [$this, 'block_produit'],
            'panier' => [$this, 'block_panier'],
            'admin' => [$this, 'block_admin'],
            'login' => [$this, 'block_login'],
            'newuser' => [$this, 'block_newuser'],
            'edituser' => [$this, 'block_edituser'],
            'javascripts' => [$this, 'block_javascripts'],
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
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

        
    </head>
<body>
<div class=\"bg\">
    <div class=\"container1\">
        <div class=\"navgauche\">
        <ul>
            <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique");
        echo "\" ><i class=\"fa-solid fa-house\"></i></a></li>
            <li><i class=\"fa-solid fa-house\" id=\"homehidden\"></i></li>
        </ul>
        </div>

        <div class=\"navmilieu\">
            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique");
        echo "\">The Blue Village</a>
            <input type=\"text\" class=\"search\" placeholder=\"Rechercher\">
        </div>
        
        <div class=\"navdroite\">
            <ul>
                <li><a href=\"#\" data-bs-toggle=\"offcanvas\" 
                data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\"><i class=\"fa-solid fa-user\"></i></a></li>         
                <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\" ><i class=\"fa-solid fa-cart-shopping\"></i></a></li>
            </ul>


            <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasRight\" aria-labelledby=\"offcanvasRightLabel\">
            <div class=\"offcanvas-header\">
            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "                <h5 class=\"offcanvas-title\" id=\"offcanvasRightLabel\">Vous êtes connecté</h5>
            ";
        }
        // line 46
        echo "                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <div class=\"offcanvas-body\">


<form method=\"post\" action=\"/login\">
      ";
        // line 53
        echo "
      ";
        // line 54
        if ((array_key_exists("error", $context) && twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", true, true, false, 54))) {
            // line 55
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 55, $this->source); })()), "messageKey", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 55, $this->source); })()), "messageData", [], "any", false, false, false, 55), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 57
        echo "
    ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            echo "


        <div class=\"mb-3 d-flex flex-column text-center\">
            Bonjour ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "userIdentifier", [], "any", false, false, false, 63), "html", null, true);
            echo " <br>


            <a href=\"#\" class=\"btn btn-outline-info mt-5 text-dark w-50 align-self-center\">Mon profil</a>

            <a href=\"#\" class=\"btn btn-outline-success mt-5 text-dark w-50 align-self-center\">Mes commandes</a>


            <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-outline-danger text-dark mt-5 w-50 align-self-center\">Déconnexion</a>
        </div>


";
        } else {
            // line 76
            echo "



    <h1 class=\"h3 mb-3 font-weight-normal\">Connectez-vous</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Mot de passe</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\"
    >

    ";
            // line 100
            echo "
    <button class=\"btn btn-lg btn-primary mt-3\" type=\"submit\">
        Connexion
    </button>
</form>

Vous n'avez pas de compte ?<a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> Inscivez-vous !</a>

    ";
        }
        // line 109
        echo "            </div>
            </div>

        </div>
    </div>








        ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "


            ";
        // line 143
        $this->displayBlock('rubrique', $context, $blocks);
        // line 145
        echo "

            ";
        // line 147
        $this->displayBlock('produitphare', $context, $blocks);
        // line 149
        echo "
            ";
        // line 150
        $this->displayBlock('produit', $context, $blocks);
        // line 152
        echo "
            ";
        // line 153
        $this->displayBlock('panier', $context, $blocks);
        // line 155
        echo "
            ";
        // line 156
        $this->displayBlock('admin', $context, $blocks);
        // line 158
        echo "
";
        // line 175
        echo "                <div class=\"container\" id=\"bodylogin\">
                        ";
        // line 176
        if (array_key_exists("message", $context)) {
            // line 177
            echo "                                <div class=\"alert alert-danger\">
                                        ";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 178, $this->source); })()), "html", null, true);
            echo "
                                </div>
                        ";
        }
        // line 181
        echo "
                        
                        ";
        // line 183
        $this->displayBlock('login', $context, $blocks);
        // line 185
        echo "
                        ";
        // line 186
        $this->displayBlock('newuser', $context, $blocks);
        // line 188
        echo "
                        ";
        // line 189
        $this->displayBlock('edituser', $context, $blocks);
        // line 191
        echo "
                </div>



        ";
        // line 198
        echo "                <div class=\"footer\">
                    ";
        // line 200
        echo "                        <div class=\"footergauche\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fa-solid fa-circle-info\"></i> Information légales </a></li>            
                                <li><a href=\"#\"><i class=\"fa-solid fa-circle-info\"></i> Politiques de confidentialité</a></li>
                                <li><a href=\"#\"><i class=\"fa-solid fa-location-pin\"></i> 73 Boulevard Bertin, 44432 Tessier</a></li>
                                <li><a href=\"#\"><i class=\"fa-solid fa-envelope\"></i> VillageGreen@exemple.com</a></li>
                            </ul>
                        </div>
                    ";
        // line 209
        echo "
                ";
        // line 211
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
        // line 226
        echo "

                ";
        // line 229
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
        // line 241
        echo "
    </body>
        <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
        <script src=\"https://kit.fontawesome.com/c1bbff1c35.js\" crossorigin=\"anonymous\"></script>
        <script src=\"/js/script.js\"></script>

        ";
        // line 248
        $this->displayBlock('javascripts', $context, $blocks);
        // line 252
        echo "</html>
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

    // line 122
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 123
        echo "            <nav class=\"navbar navbar-expand-lg navbar-light bg-info col-12\" id=\"rubriques\">
                <div class=\"container-fluid\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
            // line 129
            echo "                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sousRubrique", ["id" => twig_get_attribute($this->env, $this->source, $context["rub"], "id", [], "any", false, false, false, 132)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rub"], "nom", [], "any", false, false, false, 132), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                </div>
            </nav>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 143
    public function block_rubrique($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rubrique"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rubrique"));

        // line 144
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_produitphare($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produitphare"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produitphare"));

        // line 148
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 150
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 151
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 153
    public function block_panier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        // line 154
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        // line 157
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 183
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 184
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 186
    public function block_newuser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "newuser"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "newuser"));

        // line 187
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 189
    public function block_edituser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edituser"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edituser"));

        // line 190
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 248
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 249
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
            
        ";
        
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
        return array (  617 => 249,  607 => 248,  597 => 190,  587 => 189,  577 => 187,  567 => 186,  557 => 184,  547 => 183,  537 => 157,  527 => 156,  517 => 154,  507 => 153,  497 => 151,  487 => 150,  477 => 148,  467 => 147,  457 => 144,  447 => 143,  435 => 137,  422 => 132,  417 => 129,  413 => 128,  406 => 123,  396 => 122,  382 => 11,  372 => 10,  353 => 6,  342 => 252,  340 => 248,  331 => 241,  320 => 229,  316 => 226,  300 => 211,  297 => 209,  287 => 200,  284 => 198,  277 => 191,  275 => 189,  272 => 188,  270 => 186,  267 => 185,  265 => 183,  261 => 181,  255 => 178,  252 => 177,  250 => 176,  247 => 175,  244 => 158,  242 => 156,  239 => 155,  237 => 153,  234 => 152,  232 => 150,  229 => 149,  227 => 147,  223 => 145,  221 => 143,  216 => 140,  214 => 122,  199 => 109,  193 => 106,  185 => 100,  179 => 87,  166 => 76,  158 => 71,  147 => 63,  141 => 59,  139 => 58,  136 => 57,  130 => 55,  128 => 54,  125 => 53,  117 => 46,  113 => 44,  111 => 43,  102 => 37,  91 => 29,  82 => 23,  71 => 14,  68 => 10,  62 => 6,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}The Blue Village{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
                    {{ encore_entry_link_tags('app') }}
                    <link rel=\"stylesheet\" href=\"/css/styles.css\">
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
                <li><a href=\"#\" data-bs-toggle=\"offcanvas\" 
                data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\"><i class=\"fa-solid fa-user\"></i></a></li>         
                <li><a href=\"{{ path('app_cart') }}\" ><i class=\"fa-solid fa-cart-shopping\"></i></a></li>
            </ul>


            <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasRight\" aria-labelledby=\"offcanvasRightLabel\">
            <div class=\"offcanvas-header\">
            {% if app.user %}
                <h5 class=\"offcanvas-title\" id=\"offcanvasRightLabel\">Vous êtes connecté</h5>
            {% endif %}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
            </div>
            <div class=\"offcanvas-body\">


<form method=\"post\" action=\"/login\">
      {# <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div> #}

      {% if error is defined and error.messageKey is defined %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}



        <div class=\"mb-3 d-flex flex-column text-center\">
            Bonjour {{ app.user.userIdentifier }} <br>


            <a href=\"#\" class=\"btn btn-outline-info mt-5 text-dark w-50 align-self-center\">Mon profil</a>

            <a href=\"#\" class=\"btn btn-outline-success mt-5 text-dark w-50 align-self-center\">Mes commandes</a>


            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger text-dark mt-5 w-50 align-self-center\">Déconnexion</a>
        </div>


{% else %}




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

Vous n'avez pas de compte ?<a href=\"{{ path('app_register') }}\"> Inscivez-vous !</a>

    {% endif %}
            </div>
            </div>

        </div>
    </div>








        {% block body %}
            <nav class=\"navbar navbar-expand-lg navbar-light bg-info col-12\" id=\"rubriques\">
                <div class=\"container-fluid\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                {% for rub in rubrique %}
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('sousRubrique', {'id' : rub.id}) }}\">{{ rub.nom }}</a>
                        </li>
                    </ul>
                    </div>
                    {% endfor %}
                </div>
            </nav>
        {% endblock %}



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
                <div class=\"container\" id=\"bodylogin\">
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

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
            
        {% endblock %}
</html>
", "base.html.twig", "/home/florianptf/Bureau/FilRougeAuthenCSS/templates/base.html.twig");
    }
}
