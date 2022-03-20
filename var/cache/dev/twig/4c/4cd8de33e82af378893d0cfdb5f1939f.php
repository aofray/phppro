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

/* auth.html.twig */
class __TwigTemplate_8baeebcb84b48a9bb94ff98c08ca5382 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'auth' => [$this, 'block_auth'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('auth', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_auth($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "auth"));

        // line 5
        echo "<div id=\"auth_wrapper\" class=\"block\">
    <div class=\"header\">Авторизация</div>
    <div class=\"block_content\">
    <form action=\"auth.php\">
        <label for=\"name\">
            <div class=\"input_name\">e-mail</div>
            <input type=\"text\" value=\"\" id=\"email\" name=\"email\" placeholder=\"e-mail\">
        </label>
        <label for=\"password\">
            <div class=\"input_name\">Пароль</div>
            <input type=\"text\" value=\"\" id=\"password\" name=\"password\">
        </label>
        <button type=\"submit\">Войти</button>
    </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "auth.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 5,  47 => 4,  44 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{#{% extends 'index.html.twig' %}#}

{% block auth %}
<div id=\"auth_wrapper\" class=\"block\">
    <div class=\"header\">Авторизация</div>
    <div class=\"block_content\">
    <form action=\"auth.php\">
        <label for=\"name\">
            <div class=\"input_name\">e-mail</div>
            <input type=\"text\" value=\"\" id=\"email\" name=\"email\" placeholder=\"e-mail\">
        </label>
        <label for=\"password\">
            <div class=\"input_name\">Пароль</div>
            <input type=\"text\" value=\"\" id=\"password\" name=\"password\">
        </label>
        <button type=\"submit\">Войти</button>
    </form>
    </div>
</div>
{% endblock %}", "auth.html.twig", "C:\\phppro\\my_project\\templates\\auth.html.twig");
    }
}
