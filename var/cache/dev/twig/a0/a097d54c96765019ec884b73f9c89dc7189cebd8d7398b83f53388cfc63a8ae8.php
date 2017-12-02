<?php

/* :transportsViews:listTransports.html.twig */
class __TwigTemplate_436a553038e960936e86674809adae9ee52a659b220d98e6999ed7c8bd0c5f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":transportsViews:listTransports.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ade603422f70a68b945ce735d2a5072beaa270938d6b1425e6762723d65a3c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade603422f70a68b945ce735d2a5072beaa270938d6b1425e6762723d65a3c08->enter($__internal_ade603422f70a68b945ce735d2a5072beaa270938d6b1425e6762723d65a3c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $__internal_a4168f67a3b8b328d447fa3ed13f9dea1eecf3a13d3c8e4db3bb9e45c3811b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4168f67a3b8b328d447fa3ed13f9dea1eecf3a13d3c8e4db3bb9e45c3811b95->enter($__internal_a4168f67a3b8b328d447fa3ed13f9dea1eecf3a13d3c8e4db3bb9e45c3811b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade603422f70a68b945ce735d2a5072beaa270938d6b1425e6762723d65a3c08->leave($__internal_ade603422f70a68b945ce735d2a5072beaa270938d6b1425e6762723d65a3c08_prof);

        
        $__internal_a4168f67a3b8b328d447fa3ed13f9dea1eecf3a13d3c8e4db3bb9e45c3811b95->leave($__internal_a4168f67a3b8b328d447fa3ed13f9dea1eecf3a13d3c8e4db3bb9e45c3811b95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e0c8db91658dc6f7963e0860d6ce032a7028191b5aa811aa605c7bfd2609217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0c8db91658dc6f7963e0860d6ce032a7028191b5aa811aa605c7bfd2609217->enter($__internal_8e0c8db91658dc6f7963e0860d6ce032a7028191b5aa811aa605c7bfd2609217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c85bbfdfd8c18c38bdcab35f319baf458b7d2ed13ac95d914870f2f7bd26728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c85bbfdfd8c18c38bdcab35f319baf458b7d2ed13ac95d914870f2f7bd26728->enter($__internal_8c85bbfdfd8c18c38bdcab35f319baf458b7d2ed13ac95d914870f2f7bd26728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "
";
        
        $__internal_8c85bbfdfd8c18c38bdcab35f319baf458b7d2ed13ac95d914870f2f7bd26728->leave($__internal_8c85bbfdfd8c18c38bdcab35f319baf458b7d2ed13ac95d914870f2f7bd26728_prof);

        
        $__internal_8e0c8db91658dc6f7963e0860d6ce032a7028191b5aa811aa605c7bfd2609217->leave($__internal_8e0c8db91658dc6f7963e0860d6ce032a7028191b5aa811aa605c7bfd2609217_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_3f570ecb188a70d1812aed8bbbd17637c4ab2982c96280c749f31bb4259598cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f570ecb188a70d1812aed8bbbd17637c4ab2982c96280c749f31bb4259598cf->enter($__internal_3f570ecb188a70d1812aed8bbbd17637c4ab2982c96280c749f31bb4259598cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_a15d9e063330e7e067e9c3733871727d003a796496044feaf4e6a49929e4afe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15d9e063330e7e067e9c3733871727d003a796496044feaf4e6a49929e4afe0->enter($__internal_a15d9e063330e7e067e9c3733871727d003a796496044feaf4e6a49929e4afe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Départ</th>
                    <th>Trajet</th>
                    <th>Heure Départ</th>
                    <th>Capacité</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "transports", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["trans"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "depart", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "trajet", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trans"], "heureDepart", array()), "h:m"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "capacite", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_a15d9e063330e7e067e9c3733871727d003a796496044feaf4e6a49929e4afe0->leave($__internal_a15d9e063330e7e067e9c3733871727d003a796496044feaf4e6a49929e4afe0_prof);

        
        $__internal_3f570ecb188a70d1812aed8bbbd17637c4ab2982c96280c749f31bb4259598cf->leave($__internal_3f570ecb188a70d1812aed8bbbd17637c4ab2982c96280c749f31bb4259598cf_prof);

    }

    public function getTemplateName()
    {
        return ":transportsViews:listTransports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  133 => 37,  125 => 32,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  101 => 25,  97 => 24,  90 => 20,  86 => 19,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t{{'list'|trans}} {{'lignes'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Départ</th>
                    <th>Trajet</th>
                    <th>Heure Départ</th>
                    <th>Capacité</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for trans in app.user.ecole.transports %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ trans.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ trans.depart}}</td>
\t\t\t\t\t\t<td>{{ trans.trajet}}</td>
\t\t\t\t\t\t<td>{{ trans.heureDepart|date('h:m')}}</td>
\t\t\t\t\t\t<td>{{ trans.capacite}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editTransport',{'id':trans.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeTransport',{'id':trans.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", ":transportsViews:listTransports.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/transportsViews/listTransports.html.twig");
    }
}
