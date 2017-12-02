<?php

/* anneesViews/listAnnees.html.twig */
class __TwigTemplate_1a9ace61e2fda941e69d781f324ea164483bf5b4728d607198f68c5eba4cd638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", "anneesViews/listAnnees.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseListSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9fa5112a7a1824fe89742584c85a68f2ca9bd929a55c3ea9f929da243a1358f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fa5112a7a1824fe89742584c85a68f2ca9bd929a55c3ea9f929da243a1358f->enter($__internal_e9fa5112a7a1824fe89742584c85a68f2ca9bd929a55c3ea9f929da243a1358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $__internal_f5d0f469062a84a86e99c260ca55bfef0d130ee6fe83fb463e08a6e1ba92d70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d0f469062a84a86e99c260ca55bfef0d130ee6fe83fb463e08a6e1ba92d70e->enter($__internal_f5d0f469062a84a86e99c260ca55bfef0d130ee6fe83fb463e08a6e1ba92d70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9fa5112a7a1824fe89742584c85a68f2ca9bd929a55c3ea9f929da243a1358f->leave($__internal_e9fa5112a7a1824fe89742584c85a68f2ca9bd929a55c3ea9f929da243a1358f_prof);

        
        $__internal_f5d0f469062a84a86e99c260ca55bfef0d130ee6fe83fb463e08a6e1ba92d70e->leave($__internal_f5d0f469062a84a86e99c260ca55bfef0d130ee6fe83fb463e08a6e1ba92d70e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0599a50bc0e8249761eaa847252fae21217fb8d1bd44dacd8840edb45f295f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0599a50bc0e8249761eaa847252fae21217fb8d1bd44dacd8840edb45f295f41->enter($__internal_0599a50bc0e8249761eaa847252fae21217fb8d1bd44dacd8840edb45f295f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a114f21ae76ee12367ab4acde7fbab5d066bd01d1b5c06c5138a5421177566d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a114f21ae76ee12367ab4acde7fbab5d066bd01d1b5c06c5138a5421177566d1->enter($__internal_a114f21ae76ee12367ab4acde7fbab5d066bd01d1b5c06c5138a5421177566d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annees"), "html", null, true);
        echo "
";
        
        $__internal_a114f21ae76ee12367ab4acde7fbab5d066bd01d1b5c06c5138a5421177566d1->leave($__internal_a114f21ae76ee12367ab4acde7fbab5d066bd01d1b5c06c5138a5421177566d1_prof);

        
        $__internal_0599a50bc0e8249761eaa847252fae21217fb8d1bd44dacd8840edb45f295f41->leave($__internal_0599a50bc0e8249761eaa847252fae21217fb8d1bd44dacd8840edb45f295f41_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c1a2c07535cf19fc10cbbdaa4638bb40b4a152e19bcb4ffca2a1246bf425ddcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a2c07535cf19fc10cbbdaa4638bb40b4a152e19bcb4ffca2a1246bf425ddcd->enter($__internal_c1a2c07535cf19fc10cbbdaa4638bb40b4a152e19bcb4ffca2a1246bf425ddcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_f09afd5a74c52460e5f15cce06894bb1fc272ae0a960d7cf6922008b444ce8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09afd5a74c52460e5f15cce06894bb1fc272ae0a960d7cf6922008b444ce8cb->enter($__internal_f09afd5a74c52460e5f15cce06894bb1fc272ae0a960d7cf6922008b444ce8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Niveau</th>
                    <th>Specialité</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annees"] ?? $this->getContext($context, "annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["annee"]) {
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "nom", array()), "html", null, true);
            echo " </td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "niveau", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "specialite", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_f09afd5a74c52460e5f15cce06894bb1fc272ae0a960d7cf6922008b444ce8cb->leave($__internal_f09afd5a74c52460e5f15cce06894bb1fc272ae0a960d7cf6922008b444ce8cb_prof);

        
        $__internal_c1a2c07535cf19fc10cbbdaa4638bb40b4a152e19bcb4ffca2a1246bf425ddcd->leave($__internal_c1a2c07535cf19fc10cbbdaa4638bb40b4a152e19bcb4ffca2a1246bf425ddcd_prof);

    }

    public function getTemplateName()
    {
        return "anneesViews/listAnnees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  122 => 31,  114 => 26,  109 => 24,  105 => 23,  101 => 22,  98 => 21,  94 => 20,  87 => 16,  83 => 15,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseListSuper.html.twig' %}

{% block title %}
    {{'list'|trans}} {{'annees'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Niveau</th>
                    <th>Specialité</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for annee in annees %}
                    <tr>
                        <td>{{ annee.nom}} </td>
                        <td>{{ annee.niveau}}</td>
                        <td>{{ annee.specialite}}</td>
                        <td>
                            <a href=\"{{ path('editAnnee',{'id':annee.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeAnnee',{'id':annee.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}
", "anneesViews/listAnnees.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/anneesViews/listAnnees.html.twig");
    }
}
