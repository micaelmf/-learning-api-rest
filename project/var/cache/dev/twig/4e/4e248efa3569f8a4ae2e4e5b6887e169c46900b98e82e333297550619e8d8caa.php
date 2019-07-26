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

/* veterinary/list-veterinary.html.twig */
class __TwigTemplate_c6a84009c02f480a1330449ccf68bdb337cf7ce556d698c0789529de515b55e8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/list-veterinary.html.twig"));

        // line 2
        echo "<h1>List of all <b>Veterinaries</b></h1>
<table style=\"width:100%\">
    <tr>
        <th>Name</th>
        <th>CRMV</th> 
        <th>Action</th>
    </tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vets"]) || array_key_exists("vets", $context) ? $context["vets"] : (function () { throw new RuntimeError('Variable "vets" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vet"]) {
            // line 10
            echo "        <tr>
            <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vet"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</td>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vet"], "crmv", [], "any", false, false, false, 12), "html", null, true);
            echo "</td> 
            <td>
                <a href=";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["vet"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo ">Delete</a>
                <a href=";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["vet"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo ">Edit</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "        <h4>Nada encontrado</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </table>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "veterinary/list-veterinary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  79 => 19,  70 => 15,  66 => 14,  61 => 12,  57 => 11,  54 => 10,  49 => 9,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/vet/list-vet.html.twig #}
<h1>List of all <b>Veterinaries</b></h1>
<table style=\"width:100%\">
    <tr>
        <th>Name</th>
        <th>CRMV</th> 
        <th>Action</th>
    </tr>
    {% for vet in vets %}
        <tr>
            <td>{{vet.name}}</td>
            <td>{{vet.crmv}}</td> 
            <td>
                <a href={{ path('vet_remove', {'id':vet.id}) }}>Delete</a>
                <a href={{ path('vet_edit', {'id':vet.id}) }}>Edit</a>
            </td>
        </tr>
    {% else %}
        <h4>Nada encontrado</h4>
    {% endfor %}
    </table>", "veterinary/list-veterinary.html.twig", "/home/micaelmf/Documentos/projetos/web/learning-api-rest/project/templates/veterinary/list-veterinary.html.twig");
    }
}
