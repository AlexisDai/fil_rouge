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

/* cart/index.html.twig */
class __TwigTemplate_cd4b0a8f6fbec2686ea305c56d0bd430 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'panier' => [$this, 'block_panier'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Votre panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_panier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panier"));

        // line 6
        echo "
    <h1 id=\"titrepanier\">Votre panier</h1>

<div class=\"container-fluid g-0\" id=\"bodypanier\">
<div class=\"row\">
<div class=\"col-9\">



    ";
        // line 16
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            echo "        <table class=\"table\">
            <thead>
                <tr>
                    <th class=\"col-4\">Produit</th>
                    <th></th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "                    <tr>
                        <td id=\"bgpanier\"><img src=\"/upload/img/produit/";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 32), "photo", [], "any", false, false, false, 32), "html", null, true);
                echo "\" class=\"w-25\"></td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 33), "LibelleCourt", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 34), "prixHorsTaxe", [], "any", false, false, false, 34), "html", null, true);
                echo " €</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 36), "prixHorsTaxe", [], "any", false, false, false, 36) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36)), "html", null, true);
                echo " €</td>
                        <td>
                        ";
                // line 39
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
                                <i class=\"fas fa-trash\"></i>
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 45, $this->source); })())) > 0)) {
                // line 46
                echo "                        <tr>
                            <td id=\"bgpanier\"><img src=\"/upload/img/frais-de-livraison-.jpg\" class=\"w-25\"></td>
                            <td>Frais de port</td>
                            <td>10.00 €</td>
                            <td>1</td>
                            <td>10.00 €</td>
                            <td></td>
                        </tr>
                    ";
            }
            // line 55
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\" class=\"text-end\">Total :</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()), "html", null, true);
            echo " €</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        </div>
        <div class=\"col-3\">
            <div class=\"cardpanier\">
                <p> Montant total : ";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 67, $this->source); })()), "html", null, true);
            echo " €</p>
                    <div class=\"divpayer\">
                        <button class=\"btnpayer\">Payer</button>
                    </div>            
                    </div>
        </div>
            

";
            // line 76
            echo "    ";
        } else {
            // line 77
            echo "    </div>
        <div class=\"paniervide\">
            <div class=\"cardpaniervide\">
                <p>Votre panier est vide !</p>
            </div>
        </div>
    ";
        }
        // line 84
        echo "</div>
</div>

    <div class=\"panierfooter\">
        <div class=\"panierfooter1\">
            <hr>
                <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique");
        echo "\"><i class=\"fa-solid fa-plus\"></i>Ajouter un article</a>
                            <hr>
            ";
        // line 92
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 92, $this->source); })())) > 0)) {
            // line 93
            echo "                <a href=\"#\"><i class=\"fa-solid fa-print\"></i>Imprimer la facture</a>
                            <hr>
    ";
        }
        // line 96
        echo "        </div>
    </div>

    <div class=\"panierfooterbot\">
        <div class=\"panierfooter2\">
            <h3> Informations sur l'achat</h3>
                <hr>
                    <ul>
                        <li id=\"info1\" tabindex=\"0\"><a href=\"#\"><i class=\"fa-solid fa-plus\"></i>Garantie</a>
                            <ul>
                                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Voluptas minus earum corrupti voluptate eos animi impedit sequi ducimus? Sapiente sint, 
                                tenetur dolorem nesciunt eius veritatis! Fugiat eaque itaque sequi quo dignissimos provident molestiae vero quasi, 
                                nobis commodi assumenda iusto molestias perferendis. Non maxime velit consequuntur ipsum in dolorum molestiae sint 
                                doloremque explicabo minus asperiores ex, consectetur adipisci totam incidunt dolorem maiores aut eius atque perspiciatis 
                                expedita tenetur tempora. Quasi, consectetur. Libero at autem ullam rem quam fugit rerum nisi voluptatum temporibus delectus. 
                                Facilis dolor mollitia ipsam neque pariatur repudiandae minus saepe, voluptatem culpa quo, cumque tempora hic beatae! 
                                Dolor, impedit.</p></li>
                            </ul>
                            </li>
                        <hr>
                        <li id=\"info1\" tabindex=\"0\"><a href=\"#\"><i class=\"fa-solid fa-plus\"></i>Sécurité de paiement maximale</a>
                            <ul>
                                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Voluptas minus earum corrupti voluptate eos animi impedit sequi ducimus? Sapiente sint, 
                                tenetur dolorem nesciunt eius veritatis! Fugiat eaque itaque sequi quo dignissimos provident molestiae vero quasi, 
                                nobis commodi assumenda iusto molestias perferendis. Non maxime velit consequuntur ipsum in dolorum molestiae sint 
                                doloremque explicabo minus asperiores ex, consectetur adipisci totam incidunt dolorem maiores aut eius atque perspiciatis 
                                expedita tenetur tempora. Quasi, consectetur. Libero at autem ullam rem quam fugit rerum nisi voluptatum temporibus delectus. 
                                Facilis dolor mollitia ipsam neque pariatur repudiandae minus saepe, voluptatem culpa quo, cumque tempora hic beatae! 
                                Dolor, impedit.</p></li>
                                </ul>
                            </li>
                        <hr> 
                        <li id=\"info1\" tabindex=\"0\"><a href=\"#\"><i class=\"fa-solid fa-plus\"></i>Que se passe-t-il ensuite ?</a>
                            <ul>
                                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Voluptas minus earum corrupti voluptate eos animi impedit sequi ducimus? Sapiente sint, 
                                tenetur dolorem nesciunt eius veritatis! Fugiat eaque itaque sequi quo dignissimos provident molestiae vero quasi, 
                                nobis commodi assumenda iusto molestias perferendis. Non maxime velit consequuntur ipsum in dolorum molestiae sint 
                                doloremque explicabo minus asperiores ex, consectetur adipisci totam incidunt dolorem maiores aut eius atque perspiciatis 
                                expedita tenetur tempora. Quasi, consectetur. Libero at autem ullam rem quam fugit rerum nisi voluptatum temporibus delectus. 
                                Facilis dolor mollitia ipsam neque pariatur repudiandae minus saepe, voluptatem culpa quo, cumque tempora hic beatae! 
                                Dolor, impedit.</p></li>
                                </ul>
                            </li>
                        <hr> 
                        <li id=\"info1\" tabindex=\"0\"><a href=\"#\"><i class=\"fa-solid fa-plus\"></i>Mode de paiement</a>
                            <ul>
                                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Voluptas minus earum corrupti voluptate eos animi impedit sequi ducimus? Sapiente sint, 
                                tenetur dolorem nesciunt eius veritatis! Fugiat eaque itaque sequi quo dignissimos provident molestiae vero quasi, 
                                nobis commodi assumenda iusto molestias perferendis. Non maxime velit consequuntur ipsum in dolorum molestiae sint 
                                doloremque explicabo minus asperiores ex, consectetur adipisci totam incidunt dolorem maiores aut eius atque perspiciatis 
                                expedita tenetur tempora. Quasi, consectetur. Libero at autem ullam rem quam fugit rerum nisi voluptatum temporibus delectus. 
                                Facilis dolor mollitia ipsam neque pariatur repudiandae minus saepe, voluptatem culpa quo, cumque tempora hic beatae! 
                                Dolor, impedit.</p></li>
                            </ul>
                            </li>
                        <hr>                 
                    </ul>
        </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 96,  227 => 93,  225 => 92,  220 => 90,  212 => 84,  203 => 77,  200 => 76,  189 => 67,  178 => 59,  172 => 55,  161 => 46,  158 => 45,  145 => 39,  140 => 36,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  121 => 31,  116 => 30,  102 => 17,  99 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block panier %}

    <h1 id=\"titrepanier\">Votre panier</h1>

<div class=\"container-fluid g-0\" id=\"bodypanier\">
<div class=\"row\">
<div class=\"col-9\">



    {# Si le nombre de produit dans le panier > 0 alors on affiche le tableau #}
    {% if items | length > 0 %}
        <table class=\"table\">
            <thead>
                <tr>
                    <th class=\"col-4\">Produit</th>
                    <th></th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            {# Pour chaque produit dans le panier on affiche son nom, son prix, sa quantité, et son total #}
                {% for item in items %}
                    <tr>
                        <td id=\"bgpanier\"><img src=\"/upload/img/produit/{{ item.produit.photo }}\" class=\"w-25\"></td>
                        <td>{{ item.produit.LibelleCourt }}</td>
                        <td>{{ item.produit.prixHorsTaxe }} €</td>
                        <td>{{ item.quantity }}</td>
                        <td>{{ item.produit.prixHorsTaxe * item.quantity }} €</td>
                        <td>
                        {# Bouton pour supprimer un produit du panier #}
                            <a href=\"{{ path('cart_remove', {'id': item.produit.id }) }}\" class=\"btn btn-danger btn-sm\">
                                <i class=\"fas fa-trash\"></i>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
                    {% if items | length > 0 %}
                        <tr>
                            <td id=\"bgpanier\"><img src=\"/upload/img/frais-de-livraison-.jpg\" class=\"w-25\"></td>
                            <td>Frais de port</td>
                            <td>10.00 €</td>
                            <td>1</td>
                            <td>10.00 €</td>
                            <td></td>
                        </tr>
                    {% endif %}
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\" class=\"text-end\">Total :</td>
                    <td>{{ total }} €</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        </div>
        <div class=\"col-3\">
            <div class=\"cardpanier\">
                <p> Montant total : {{ total }} €</p>
                    <div class=\"divpayer\">
                        <button class=\"btnpayer\">Payer</button>
                    </div>            
                    </div>
        </div>
            

{# Si le nombre de produit dans le panier < 0 alors on affiche que le panier est vide #}
    {% else %}
    </div>
        <div class=\"paniervide\">
            <div class=\"cardpaniervide\">
                <p>Votre panier est vide !</p>
            </div>
        </div>
    {% endif %}
</div>
</div>

    <div class=\"panierfooter\">
        <div class=\"panierfooter1\">
            <hr>
                <a href=\"{{ path('rubrique') }}\"><i class=\"fa-solid fa-plus\"></i>Ajouter un article</a>
                            <hr>
            {% if items | length > 0 %}
                <a href=\"#\"><i class=\"fa-solid fa-print\"></i>Imprimer la facture</a>
                            <hr>
    {% endif %}
        </div>
    </div>

    <div class=\"panierfooterbot\">
        <div class=\"panierfooter2\">
            <h3> Informations sur l'achat</h3>
                <hr>
                    <ul>
                        <li id=\"info1\" tabindex=\"0\"><a href=\"#\"><i class=\"fa-solid fa-plus\"></i>Garantie</a>
                            <ul>
                                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Voluptas minus earum corrupti voluptate eos animi impedit sequi ducimus? Sapiente sint, 
                                tenetur dolorem nesciunt eius veritatis! Fugiat eaque itaque sequi quo dignissimos provident molestiae vero quasi, 
                                nobis commodi assumenda iusto molestias perferendis. Non maxime velit consequuntur ipsum in dolorum molestiae sint 
                                doloremque explicabo minus asperiores ex, consectetur adipisci totam incidunt dolorem maiores aut eius atque perspiciatis 
                                expedita tenetur tempora. Quasi, consectetur. Libero at autem ullam rem quam fugit rerum nisi voluptatum temporibus delectus. 
                                Facilis dolor mollitia ipsam neque pariatur repudiandae minus saepe, voluptatem culpa quo, cumque tempora hic beatae! 
                                Dolor, impedit.</p></li>
                            </ul>
                            </li>
                        <hr>
                        <li id=\"info1\" tabindex=\"0\"><a href=\"#\"><i class=\"fa-solid fa-plus\"></i>Sécurité de paiement maximale</a>
                            <ul>
                                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Voluptas minus earum corrupti voluptate eos animi impedit sequi ducimus? Sapiente sint, 
                                tenetur dolorem nesciunt eius veritatis! Fugiat eaque itaque sequi quo dignissimos provident molestiae vero quasi, 
                                nobis commodi assumenda iusto molestias perferendis. Non maxime velit consequuntur ipsum in dolorum molestiae sint 
                                doloremque explicabo minus asperiores ex, consectetur adipisci totam incidunt dolorem maiores aut eius atque perspiciatis 
                                expedita tenetur tempora. Quasi, consectetur. Libero at autem ullam rem quam fugit rerum nisi voluptatum temporibus delectus. 
                                Facilis dolor mollitia ipsam neque pariatur repudiandae minus saepe, voluptatem culpa quo, cumque tempora hic beatae! 
                                Dolor, impedit.</p></li>
                                </ul>
                            </li>
                        <hr> 
                        <li id=\"info1\" tabindex=\"0\"><a href=\"#\"><i class=\"fa-solid fa-plus\"></i>Que se passe-t-il ensuite ?</a>
                            <ul>
                                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Voluptas minus earum corrupti voluptate eos animi impedit sequi ducimus? Sapiente sint, 
                                tenetur dolorem nesciunt eius veritatis! Fugiat eaque itaque sequi quo dignissimos provident molestiae vero quasi, 
                                nobis commodi assumenda iusto molestias perferendis. Non maxime velit consequuntur ipsum in dolorum molestiae sint 
                                doloremque explicabo minus asperiores ex, consectetur adipisci totam incidunt dolorem maiores aut eius atque perspiciatis 
                                expedita tenetur tempora. Quasi, consectetur. Libero at autem ullam rem quam fugit rerum nisi voluptatum temporibus delectus. 
                                Facilis dolor mollitia ipsam neque pariatur repudiandae minus saepe, voluptatem culpa quo, cumque tempora hic beatae! 
                                Dolor, impedit.</p></li>
                                </ul>
                            </li>
                        <hr> 
                        <li id=\"info1\" tabindex=\"0\"><a href=\"#\"><i class=\"fa-solid fa-plus\"></i>Mode de paiement</a>
                            <ul>
                                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Voluptas minus earum corrupti voluptate eos animi impedit sequi ducimus? Sapiente sint, 
                                tenetur dolorem nesciunt eius veritatis! Fugiat eaque itaque sequi quo dignissimos provident molestiae vero quasi, 
                                nobis commodi assumenda iusto molestias perferendis. Non maxime velit consequuntur ipsum in dolorum molestiae sint 
                                doloremque explicabo minus asperiores ex, consectetur adipisci totam incidunt dolorem maiores aut eius atque perspiciatis 
                                expedita tenetur tempora. Quasi, consectetur. Libero at autem ullam rem quam fugit rerum nisi voluptatum temporibus delectus. 
                                Facilis dolor mollitia ipsam neque pariatur repudiandae minus saepe, voluptatem culpa quo, cumque tempora hic beatae! 
                                Dolor, impedit.</p></li>
                            </ul>
                            </li>
                        <hr>                 
                    </ul>
        </div>
    </div>


{% endblock %}
", "cart/index.html.twig", "/home/florianptf/Bureau/FilRougeAuthenCSS/templates/cart/index.html.twig");
    }
}
