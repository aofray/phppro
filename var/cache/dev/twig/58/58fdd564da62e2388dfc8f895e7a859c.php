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

/* admin/ticket.html.twig */
class __TwigTemplate_2b0447a654cd87b1be10936662e5973a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ticket' => [$this, 'block_ticket'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ticket.html.twig"));

        // line 1
        $this->displayBlock('ticket', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_ticket($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ticket"));

        // line 2
        echo "<div class=\"ticket_wrapper block\" id=\"ticket_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\">

    <div class=\"header\">
        <div class=\"id\">
            #";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </div>
        <div class=\"author\">
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "
        </div>
        <div class=\"status\">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 12, $this->source); })()), "status", [], "any", false, false, false, 12), "html", null, true);
        echo "
        </div>
        <div class=\"created_at\">
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 15, $this->source); })()), "created_at", [], "any", false, false, false, 15), "Y-m-d H:i:s"), "html", null, true);
        echo "
        </div>
        <div class=\"updated_to\">
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 18, $this->source); })()), "updated_to", [], "any", false, false, false, 18) != "")) {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 19, $this->source); })()), "updated_to", [], "any", false, false, false, 19), "Y-m-d H:i:s"), "html", null, true);
            echo "
            ";
        }
        // line 21
        echo "        </div>
    </div>
    <div class=\"ticket_message\">
        ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 24, $this->source); })()), "message", [], "any", false, false, false, 24), "html", null, true);
        echo "
    </div>
    <div class=\"ticket_comment\">
        <form action=\"requests/";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"SendForm(event)\">
            <label for=\"message_text\" class=\"flex-col\">
                <div class=\"input_name\">
                    Комментарий
                </div>
                <textarea  required name=\"comment\" id=\"comment_text\" cols=\"10\" rows=\"5\"></textarea>
            </label>
            <button type=\"submit\">Отправить</button>
        </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/ticket.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 27,  99 => 24,  94 => 21,  88 => 19,  86 => 18,  80 => 15,  74 => 12,  68 => 9,  62 => 6,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block ticket %}
<div class=\"ticket_wrapper block\" id=\"ticket_{{ ticket.id }}\">

    <div class=\"header\">
        <div class=\"id\">
            #{{ ticket.id }}
        </div>
        <div class=\"author\">
            {{ ticket.name }}
        </div>
        <div class=\"status\">
            {{ ticket.status }}
        </div>
        <div class=\"created_at\">
            {{ ticket.created_at|date('Y-m-d H:i:s') }}
        </div>
        <div class=\"updated_to\">
            {% if  ticket.updated_to != \"\" %}
            {{  ticket.updated_to|date('Y-m-d H:i:s') }}
            {% endif %}
        </div>
    </div>
    <div class=\"ticket_message\">
        {{  ticket.message }}
    </div>
    <div class=\"ticket_comment\">
        <form action=\"requests/{{ ticket.id }}\" method=\"post\" onsubmit=\"SendForm(event)\">
            <label for=\"message_text\" class=\"flex-col\">
                <div class=\"input_name\">
                    Комментарий
                </div>
                <textarea  required name=\"comment\" id=\"comment_text\" cols=\"10\" rows=\"5\"></textarea>
            </label>
            <button type=\"submit\">Отправить</button>
        </form>
    </div>
</div>
{% endblock %}
", "admin/ticket.html.twig", "C:\\phppro\\my_project\\templates\\admin\\ticket.html.twig");
    }
}
