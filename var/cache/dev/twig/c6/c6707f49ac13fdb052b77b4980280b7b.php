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

/* user/dashboard.html.twig */
class __TwigTemplate_41a1cef6ca68bf3637500dd5293c8c29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        // line 1
        if ((isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 1, $this->source); })())) {
        }
        // line 2
        $this->parent = $this->loadTemplate("index.html.twig", "user/dashboard.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"greating\">
        Добро пожаловать ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
        <button onclick=\"logout()\">Выход</button>
    </div>
<div class=\"dashboard\">

    <div class=\"new_ticket\">
        <form action=\"requests\" method=\"post\" onsubmit=\"SendForm(event)\">
            <label for=\"message_text\">
                <div class=\"input_name\">
                    Задайте свой вопрос
                </div>

                <textarea name=\"message\" id=\"message_text\" cols=\"30\" rows=\"10\"></textarea>
            </label>
            <button type=\"submit\">Отправить</button>
        </form>
    </div>
    <div class=\"tickets_list\" id=\"tickets_list\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 26, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 27
            echo "            ";
            echo twig_include($this->env, $context, "tickets/ticket.html.twig");
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  104 => 27,  87 => 26,  66 => 8,  63 => 7,  56 => 6,  48 => 2,  45 => 1,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% if ajax %}
    {% extends 'index.html.twig' %}
{% endif  %}


{% block content %}
    <div class=\"greating\">
        Добро пожаловать {{ user.name }}
        <button onclick=\"logout()\">Выход</button>
    </div>
<div class=\"dashboard\">

    <div class=\"new_ticket\">
        <form action=\"requests\" method=\"post\" onsubmit=\"SendForm(event)\">
            <label for=\"message_text\">
                <div class=\"input_name\">
                    Задайте свой вопрос
                </div>

                <textarea name=\"message\" id=\"message_text\" cols=\"30\" rows=\"10\"></textarea>
            </label>
            <button type=\"submit\">Отправить</button>
        </form>
    </div>
    <div class=\"tickets_list\" id=\"tickets_list\">
        {% for ticket in tickets %}
            {{ include('tickets/ticket.html.twig') }}
        {% endfor %}
    </div>
</div>

{% endblock %}", "user/dashboard.html.twig", "C:\\phppro\\my_project\\templates\\user\\dashboard.html.twig");
    }
}
