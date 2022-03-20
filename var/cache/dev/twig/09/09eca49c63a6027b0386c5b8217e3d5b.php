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

/* reg.html.twig */
class __TwigTemplate_9b17c3fd081e110fe25a4c2c9ea2acf9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'reg' => [$this, 'block_reg'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reg.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('reg', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_reg($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reg"));

        // line 3
        echo "    <div id=\"reg_wrapper\" class=\"block\">
        <div class=\"header\">Регистрация</div>
        <div class=\"block_content\">
        <form action=\"reg\" method=\"post\" onsubmit=\"SendForm(event)\">
            <label for=\"name\">
                <div class=\"input_name\">Ваше имя</div>
                <input type=\"text\" value=\"\" id=\"name\" name=\"name\" placeholder=\"Как Вас зовут\">
            </label>
            <label for=\"email\">
                <div class=\"input_name\">e-mail</div>
                <input type=\"text\" value=\"\" id=\"email\" name=\"email\" placeholder=\"e-mail\">
            </label>
            <label for=\"password\">
                <div class=\"input_name\">Пароль</div>
                <input type=\"text\" value=\"\" id=\"password\" name=\"password\">
            </label>
            <label for=\"role\">
                <div class=\"input_name\">Роль</div>
                <select name=\"role\" id=\"role\">
                    <option value=\"user\">Пользователь</option>
                    <option value=\"admin\">Администратор</option>
                </select>
            </label>
            <button type=\"submit\">Зарегистрироваться</button>
        </form>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reg.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block reg %}
    <div id=\"reg_wrapper\" class=\"block\">
        <div class=\"header\">Регистрация</div>
        <div class=\"block_content\">
        <form action=\"reg\" method=\"post\" onsubmit=\"SendForm(event)\">
            <label for=\"name\">
                <div class=\"input_name\">Ваше имя</div>
                <input type=\"text\" value=\"\" id=\"name\" name=\"name\" placeholder=\"Как Вас зовут\">
            </label>
            <label for=\"email\">
                <div class=\"input_name\">e-mail</div>
                <input type=\"text\" value=\"\" id=\"email\" name=\"email\" placeholder=\"e-mail\">
            </label>
            <label for=\"password\">
                <div class=\"input_name\">Пароль</div>
                <input type=\"text\" value=\"\" id=\"password\" name=\"password\">
            </label>
            <label for=\"role\">
                <div class=\"input_name\">Роль</div>
                <select name=\"role\" id=\"role\">
                    <option value=\"user\">Пользователь</option>
                    <option value=\"admin\">Администратор</option>
                </select>
            </label>
            <button type=\"submit\">Зарегистрироваться</button>
        </form>
        </div>
    </div>
{% endblock %}", "reg.html.twig", "C:\\phppro\\my_project\\templates\\reg.html.twig");
    }
}
