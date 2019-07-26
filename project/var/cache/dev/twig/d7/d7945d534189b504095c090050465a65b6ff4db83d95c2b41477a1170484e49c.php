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

/* pet/remove-pet.html.twig */
class __TwigTemplate_324c4e209772505439a834b20a53ea4c4f7c61c50fec3ce829e0f6d0d0dbd5d6 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pet/remove-pet.html.twig"));

        // line 1
        if ((null === (isset($context["pet"]) || array_key_exists("pet", $context) ? $context["pet"] : (function () { throw new RuntimeError('Variable "pet" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <h1>Pet not found</h1>
";
        } else {
            // line 4
            echo "    <h1>Pet removed with success!</h1>
    <h4>Details</h4>
    <p>Name: ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pet"]) || array_key_exists("pet", $context) ? $context["pet"] : (function () { throw new RuntimeError('Variable "pet" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
    <p>Type: ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pet"]) || array_key_exists("pet", $context) ? $context["pet"] : (function () { throw new RuntimeError('Variable "pet" does not exist.', 7, $this->source); })()), "type", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
    <p>Breed: ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pet"]) || array_key_exists("pet", $context) ? $context["pet"] : (function () { throw new RuntimeError('Variable "pet" does not exist.', 8, $this->source); })()), "breed", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
    <p>Date Birth: ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pet"]) || array_key_exists("pet", $context) ? $context["pet"] : (function () { throw new RuntimeError('Variable "pet" does not exist.', 9, $this->source); })()), "dateBirth", [], "any", false, false, false, 9), "m/d/Y"), "html", null, true);
            echo "</p>
    <p>Owner: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pet"]) || array_key_exists("pet", $context) ? $context["pet"] : (function () { throw new RuntimeError('Variable "pet" does not exist.', 10, $this->source); })()), "owner", [], "any", false, false, false, 10), "userName", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
    <p><a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pet_index");
            echo "\"> Return index of Pets</a> | <a href=\"localhost:8000\">Home</a></p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pet/remove-pet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pet is null %}
    <h1>Pet not found</h1>
{% else %}
    <h1>Pet removed with success!</h1>
    <h4>Details</h4>
    <p>Name: {{pet.name}}</p>
    <p>Type: {{pet.type}}</p>
    <p>Breed: {{pet.breed}}</p>
    <p>Date Birth: {{pet.dateBirth|date(\"m/d/Y\")}}</p>
    <p>Owner: {{pet.owner.userName}}</p>
    <p><a href=\"{{ path('pet_index')}}\"> Return index of Pets</a> | <a href=\"localhost:8000\">Home</a></p>
{% endif %}", "pet/remove-pet.html.twig", "/home/micaelmf/Documentos/projetos/web/learning-api-rest/project/templates/pet/remove-pet.html.twig");
    }
}
