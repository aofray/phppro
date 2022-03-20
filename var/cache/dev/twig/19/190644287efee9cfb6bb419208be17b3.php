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

/* float_messag.html.twig */
class __TwigTemplate_11b3997561b9964610daf1a8e0491ba1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'float_masseg' => [$this, 'block_float_masseg'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "float_messag.html.twig"));

        // line 1
        $this->displayBlock('float_masseg', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_float_masseg($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "float_masseg"));

        // line 2
        echo "    <div class=\"note error\" id=\"note_";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
        echo "\"  >
        <button onclick=\"close(event, 'note_";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
        echo "')\">x</button>
        <div class=\"message\">
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "message", [], "any", false, false, false, 5), "html", null, true);
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "float_messag.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 5,  59 => 3,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block float_masseg %}
    <div class=\"note error\" id=\"note_{{ 'now'|date('U') }}\"  >
        <button onclick=\"close(event, 'note_{{ 'now'|date('U') }}')\">x</button>
        <div class=\"message\">
            {{ error.message }}
        </div>
    </div>
{% endblock %}", "float_messag.html.twig", "C:\\phppro\\my_project\\templates\\float_messag.html.twig");
    }
}
