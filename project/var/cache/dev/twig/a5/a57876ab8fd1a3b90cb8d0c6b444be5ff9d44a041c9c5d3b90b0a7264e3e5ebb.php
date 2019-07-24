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

/* clinic/list-clinic.html.twig */
class __TwigTemplate_c39e8cf8a2c54dda4fcab2d3ad1b8390f5a8d32bec3cfa8491746f0f5f2c97da extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clinic/list-clinic.html.twig"));

        // line 2
        echo "<h1>List of all <b>CLINICS</b></h1>
<table style=\"width:100%\">
    <tr>
        <th>Name</th>
        <th>Street</th> 
        <th>Number</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clinics"]) || array_key_exists("clinics", $context) ? $context["clinics"] : (function () { throw new RuntimeError('Variable "clinics" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["clinic"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clinic"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clinic"], "address", [], "any", false, false, false, 14), "street", [], "any", false, false, false, 14), "html", null, true);
            echo "</td> 
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clinic"], "address", [], "any", false, false, false, 15), "number", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clinic"], "address", [], "any", false, false, false, 16), "city", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>
                <a href=";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clinic_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["clinic"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo ">Remove</a>
                <a href=";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clinic_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["clinic"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo ">Edit</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <h4>Nada encontrado</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clinic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "clinic/list-clinic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  89 => 23,  80 => 19,  76 => 18,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  56 => 12,  51 => 11,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/clinic/list-clinic.html.twig #}
<h1>List of all <b>CLINICS</b></h1>
<table style=\"width:100%\">
    <tr>
        <th>Name</th>
        <th>Street</th> 
        <th>Number</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    {% for clinic in clinics %}
        <tr>
            <td>{{clinic.name}}</td>
            <td>{{clinic.address.street}}</td> 
            <td>{{clinic.address.number}}</td>
            <td>{{clinic.address.city}}</td>
            <td>
                <a href={{ path('clinic_remove', {'id':clinic.id}) }}>Remove</a>
                <a href={{ path('clinic_edit', {'id':clinic.id}) }}>Edit</a>
            </td>
        </tr>
    {% else %}
        <h4>Nada encontrado</h4>
    {% endfor %}
    </table>", "clinic/list-clinic.html.twig", "/home/micaelmf/Documentos/projetos/web/learning-api-rest/project/templates/clinic/list-clinic.html.twig");
    }
}
