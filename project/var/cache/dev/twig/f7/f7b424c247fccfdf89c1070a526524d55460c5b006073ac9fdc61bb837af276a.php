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

/* pet/list-pet.html.twig */
class __TwigTemplate_a5740e20cee63407f763a475c25ed8e08a1ed8b3dcdbc1d31dec02cf250e413b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pet/list-pet.html.twig"));

        // line 2
        echo "<h1>List of all <b>PETS</b></h1>
<table style=\"width:100%\">
    <tr>
        <th>Name</th>
        <th>Breed</th> 
        <th>Owner</th>
        <th>Action</th>
    </tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) || array_key_exists("pets", $context) ? $context["pets"] : (function () { throw new RuntimeError('Variable "pets" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 11
            echo "        <tr>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pet"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pet"], "breed", [], "any", false, false, false, 13), "html", null, true);
            echo "</td> 
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pet"], "owner", [], "any", false, false, false, 14), "userName", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>
                <a href=";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pet_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["pet"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo ">Delete</a>
                <a href=";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pet"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo ">Edit</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        <h4>Nada encontrado</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </table>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pet/list-pet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  84 => 21,  75 => 17,  71 => 16,  66 => 14,  62 => 13,  58 => 12,  55 => 11,  50 => 10,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/pet/list-pet.html.twig #}
<h1>List of all <b>PETS</b></h1>
<table style=\"width:100%\">
    <tr>
        <th>Name</th>
        <th>Breed</th> 
        <th>Owner</th>
        <th>Action</th>
    </tr>
    {% for pet in pets %}
        <tr>
            <td>{{pet.name}}</td>
            <td>{{pet.breed}}</td> 
            <td>{{pet.owner.userName}}</td>
            <td>
                <a href={{ path('pet_remove', {'id':pet.id}) }}>Delete</a>
                <a href={{ path('pet_edit', {'id':pet.id}) }}>Edit</a>
            </td>
        </tr>
    {% else %}
        <h4>Nada encontrado</h4>
    {% endfor %}
    </table>", "pet/list-pet.html.twig", "/home/micaelmf/Documentos/projetos/web/learning-api-rest/project/templates/pet/list-pet.html.twig");
    }
}
