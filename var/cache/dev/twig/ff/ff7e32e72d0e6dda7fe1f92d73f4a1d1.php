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

/* admin/dashboard.html.twig */
class __TwigTemplate_03f8a0cd8503ac6ddb958730fb93d8af extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        // line 1
        if (((isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 1, $this->source); })()) != true)) {
        }
        // line 2
        $this->parent = $this->loadTemplate("index.html.twig", "admin/dashboard.html.twig", 2);
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
    <div class=\"flex_full \">
        <form action=\"sort\" class=\"flex-row block\" id=\"sorting\" method=\"get\" onsubmit=\"SendForm(event)\">
             <label for=\"sort_asc\">
                <div class=\"input_name\">По возрастанию</div>
                 <input  id=\"sort_asc\"   name=\"sort\" type=\"radio\" value=\"ASC\" onchange=\"this.form.dispatchEvent(new Event
            ('submit', {cancelable: true}))\">
            </label>

            <label for=\"sort_desc\">
                <div class=\"input_name\">По убыванию</div>
                <input   id=\"sort_desc\" name=\"sort\" type=\"radio\" value=\"DESC\" onchange=\"this.form.dispatchEvent(new Event
            ('submit', {cancelable: true}))\">
            </label>
            <label for=\"date_from\">
                <div class=\"input_name\">C</div>
                <input id=\"date_from\" name=\"date_from\" type=\"date\" value=\"\" onchange=\"this.form.dispatchEvent  (new
                Event  ('submit', {cancelable: true}))\">
            </label>
            <label for=\"date_to\">
                <div class=\"input_name\">по </div>
                <input id=\"date_to\" name=\"date_to\" type=\"date\" value=\"\" onchange=\"this.form.dispatchEvent  (new
                Event  ('submit', {cancelable: true}))\">
            </label>
            <button type=\"submit\">OK</button>
        </form>

    </div>
    <div class=\"tickets_list scroll\" id=\"\">
        <div id=\"tickets_list\">
            ";
        // line 41
        echo twig_include($this->env, $context, "admin/ticket_list.html.twig");
        echo "
        </div>
    <div class=\"flex-full\">
        <input id=\"paginator\" form=\"sorting\" type=\"text\" readonly class=\"paginator inviz\" name=\"offset\" value=\"10\">
    </div>
    </div>

    <div id=\"resolved_ticket\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ResolveTickets"]) || array_key_exists("ResolveTickets", $context) ? $context["ResolveTickets"] : (function () { throw new RuntimeError('Variable "ResolveTickets" does not exist.', 49, $this->source); })()));
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
            // line 50
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
        // line 52
        echo "    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  130 => 50,  113 => 49,  102 => 41,  66 => 8,  63 => 7,  56 => 6,  48 => 2,  45 => 1,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% if ajax != true %}
    {% extends 'index.html.twig' %}
{% endif  %}


{% block content %}
    <div class=\"greating\">
        Добро пожаловать {{ user.name }}
        <button onclick=\"logout()\">Выход</button>
    </div>
<div class=\"dashboard\">
    <div class=\"flex_full \">
        <form action=\"sort\" class=\"flex-row block\" id=\"sorting\" method=\"get\" onsubmit=\"SendForm(event)\">
             <label for=\"sort_asc\">
                <div class=\"input_name\">По возрастанию</div>
                 <input  id=\"sort_asc\"   name=\"sort\" type=\"radio\" value=\"ASC\" onchange=\"this.form.dispatchEvent(new Event
            ('submit', {cancelable: true}))\">
            </label>

            <label for=\"sort_desc\">
                <div class=\"input_name\">По убыванию</div>
                <input   id=\"sort_desc\" name=\"sort\" type=\"radio\" value=\"DESC\" onchange=\"this.form.dispatchEvent(new Event
            ('submit', {cancelable: true}))\">
            </label>
            <label for=\"date_from\">
                <div class=\"input_name\">C</div>
                <input id=\"date_from\" name=\"date_from\" type=\"date\" value=\"\" onchange=\"this.form.dispatchEvent  (new
                Event  ('submit', {cancelable: true}))\">
            </label>
            <label for=\"date_to\">
                <div class=\"input_name\">по </div>
                <input id=\"date_to\" name=\"date_to\" type=\"date\" value=\"\" onchange=\"this.form.dispatchEvent  (new
                Event  ('submit', {cancelable: true}))\">
            </label>
            <button type=\"submit\">OK</button>
        </form>

    </div>
    <div class=\"tickets_list scroll\" id=\"\">
        <div id=\"tickets_list\">
            {{ include('admin/ticket_list.html.twig') }}
        </div>
    <div class=\"flex-full\">
        <input id=\"paginator\" form=\"sorting\" type=\"text\" readonly class=\"paginator inviz\" name=\"offset\" value=\"10\">
    </div>
    </div>

    <div id=\"resolved_ticket\">
        {% for ticket in ResolveTickets %}
            {{ include('tickets/ticket.html.twig') }}
        {% endfor %}
    </div>
</div>

{% endblock %}", "admin/dashboard.html.twig", "C:\\phppro\\my_project\\templates\\admin\\dashboard.html.twig");
    }
}
