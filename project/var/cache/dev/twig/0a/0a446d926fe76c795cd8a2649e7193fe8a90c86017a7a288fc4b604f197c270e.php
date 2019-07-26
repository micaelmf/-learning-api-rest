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

/* veterinary/remove-veterinary.html.twig */
class __TwigTemplate_87109dfb6bff65db92e7ac65075528683e644c74771b282b95f4f0b3f9c77ae3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/remove-veterinary.html.twig"));

        // line 1
        if ((null === (isset($context["vet"]) || array_key_exists("vet", $context) ? $context["vet"] : (function () { throw new RuntimeError('Variable "vet" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <h1>Veterinary not found</h1>
";
        } else {
            // line 4
            echo "    <h1>Vet removed with success!</h1>
    <h4>Details</h4>
    <p>Name: ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vet"]) || array_key_exists("vet", $context) ? $context["vet"] : (function () { throw new RuntimeError('Variable "vet" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
    <p>Type: ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vet"]) || array_key_exists("vet", $context) ? $context["vet"] : (function () { throw new RuntimeError('Variable "vet" does not exist.', 7, $this->source); })()), "crmv", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
    <p><a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_index");
            echo "\"> Return index of Veterinaries</a> | <a href=\"localhost:8000\">Home</a></p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "veterinary/remove-veterinary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 7,  50 => 6,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if vet is null %}
    <h1>Veterinary not found</h1>
{% else %}
    <h1>Vet removed with success!</h1>
    <h4>Details</h4>
    <p>Name: {{vet.name}}</p>
    <p>Type: {{vet.crmv}}</p>
    <p><a href=\"{{ path('vet_index')}}\"> Return index of Veterinaries</a> | <a href=\"localhost:8000\">Home</a></p>
{% endif %}", "veterinary/remove-veterinary.html.twig", "/home/micaelmf/Documentos/projetos/web/learning-api-rest/project/templates/veterinary/remove-veterinary.html.twig");
    }
}
