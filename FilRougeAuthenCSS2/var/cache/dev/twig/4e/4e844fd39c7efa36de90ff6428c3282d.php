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

/* security/admin.html.twig */
class __TwigTemplate_b3fa02a2a1176fa331979a0ff539a9e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'admin' => [$this, 'block_admin'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/admin.html.twig", 1);
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

        echo "Page admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        // line 6
        echo "        <h1>Ma page admin</h1>
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
        echo " tu es un admin</h2>

        <p>
                You’ve probably heard of Lorem Ipsum before – it’s the most-used dummy text excerpt out there.
                People use it because it has a fairly normal distribution of letters and words (making it look like normal English),
                but it’s also Latin, which means your average reader won’t get distracted by trying to read it.
                It’s perfect for showcasing design work as it should look when fleshed out with text, because it allows viewers to focus on the design work itself, instead of the text.
                It’s also a great way to showcase the functionality of programs like word processors, font types, and more.
                We’ve taken Lorem Ipsum to the next level with our HTML-Ipsum tool.
                As you can see, this Lorem Ipsum is tailor-made for websites and other online projects that are based in HTML. Most web design projects use Lorem Ipsum excerpts to begin with,
                but you always have to spend an annoying extra minute or two formatting it properly for the web.
                Maybe you have a custom-styled ordered list you want to show off, or maybe you just want a long chunk of Lorem Ipsum that’s already wrapped in paragraph tags.
                No matter the need, we’ve put together a number of Lorem Ipsum samples ready to go with HTML tags and formatting in place.
                All you have to do is click the heading of any section on this page, and that HTML-Ipsum block is copied to your clipboard
                nd ready to be loaded into a website redesign template, brand new design mockup, or any other digital project you might need dummy text for.
                No matter the project, please remember to replace your fancy HTML-Ipsum with real content before you go live - t
                his is especially important if you're planning to implement a content-based marketing strategy for your new creation!
                Lorem Ipsum text is all well and good to demonstrate a design or project, but if you set a website loose on the Internet
                without replacing dummy text with relevant, high quality content, you’ll run into all sorts of potential Search Engine Optimization issues
                like thin content, duplicate content, and more.
                HTML-Ipsum is maintained by WebFX.
                For more information about us, please visit WebFX Reviews.
                To learn more about the industries we drive Internet marketing performormance for and our revenue driving services:
                SEO, PPC, social media, web design, local SEO and online advertising services.
        </p>
        <a class=\"btn btn-primary mt-3\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">Modifier mon compte</a>
        <a class=\"btn btn-info mt-3\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Voir la liste des utilisateurs inscrit</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  119 => 32,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page admin{% endblock %}

{% block admin %}
        <h1>Ma page admin</h1>
        <h2>{{ app.user.username }} tu es un admin</h2>

        <p>
                You’ve probably heard of Lorem Ipsum before – it’s the most-used dummy text excerpt out there.
                People use it because it has a fairly normal distribution of letters and words (making it look like normal English),
                but it’s also Latin, which means your average reader won’t get distracted by trying to read it.
                It’s perfect for showcasing design work as it should look when fleshed out with text, because it allows viewers to focus on the design work itself, instead of the text.
                It’s also a great way to showcase the functionality of programs like word processors, font types, and more.
                We’ve taken Lorem Ipsum to the next level with our HTML-Ipsum tool.
                As you can see, this Lorem Ipsum is tailor-made for websites and other online projects that are based in HTML. Most web design projects use Lorem Ipsum excerpts to begin with,
                but you always have to spend an annoying extra minute or two formatting it properly for the web.
                Maybe you have a custom-styled ordered list you want to show off, or maybe you just want a long chunk of Lorem Ipsum that’s already wrapped in paragraph tags.
                No matter the need, we’ve put together a number of Lorem Ipsum samples ready to go with HTML tags and formatting in place.
                All you have to do is click the heading of any section on this page, and that HTML-Ipsum block is copied to your clipboard
                nd ready to be loaded into a website redesign template, brand new design mockup, or any other digital project you might need dummy text for.
                No matter the project, please remember to replace your fancy HTML-Ipsum with real content before you go live - t
                his is especially important if you're planning to implement a content-based marketing strategy for your new creation!
                Lorem Ipsum text is all well and good to demonstrate a design or project, but if you set a website loose on the Internet
                without replacing dummy text with relevant, high quality content, you’ll run into all sorts of potential Search Engine Optimization issues
                like thin content, duplicate content, and more.
                HTML-Ipsum is maintained by WebFX.
                For more information about us, please visit WebFX Reviews.
                To learn more about the industries we drive Internet marketing performormance for and our revenue driving services:
                SEO, PPC, social media, web design, local SEO and online advertising services.
        </p>
        <a class=\"btn btn-primary mt-3\" href=\"{{ path('app_user_edit', {'id': app.user.id}) }}\">Modifier mon compte</a>
        <a class=\"btn btn-info mt-3\" href=\"{{ path('app_user_index') }}\">Voir la liste des utilisateurs inscrit</a>
{% endblock %}", "security/admin.html.twig", "/home/florianptf/Bureau/FilRougeAuthenCSS/templates/security/admin.html.twig");
    }
}
