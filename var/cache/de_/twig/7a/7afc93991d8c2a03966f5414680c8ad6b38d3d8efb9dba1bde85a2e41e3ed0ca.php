<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_f67bc748d97e80a3cb90b60f1c4536fd53ffbca56e0f24ad3a1f21f8b143c370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", ":anneesViews:listAnnees.html.twig", 1);
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
        $__internal_09166fdf760ed4efdcc6778a7f69fc7f08fe74f1ad15fbf25efb3b340b1c5046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09166fdf760ed4efdcc6778a7f69fc7f08fe74f1ad15fbf25efb3b340b1c5046->enter($__internal_09166fdf760ed4efdcc6778a7f69fc7f08fe74f1ad15fbf25efb3b340b1c5046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_04e8fb6fb2bed3f5add068abd141ecde88f2ef5b6f65163e524939ce55affc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e8fb6fb2bed3f5add068abd141ecde88f2ef5b6f65163e524939ce55affc78->enter($__internal_04e8fb6fb2bed3f5add068abd141ecde88f2ef5b6f65163e524939ce55affc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09166fdf760ed4efdcc6778a7f69fc7f08fe74f1ad15fbf25efb3b340b1c5046->leave($__internal_09166fdf760ed4efdcc6778a7f69fc7f08fe74f1ad15fbf25efb3b340b1c5046_prof);

        
        $__internal_04e8fb6fb2bed3f5add068abd141ecde88f2ef5b6f65163e524939ce55affc78->leave($__internal_04e8fb6fb2bed3f5add068abd141ecde88f2ef5b6f65163e524939ce55affc78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b4526a2cb47eea0e65b246cd769171bcb8c77d87864a6fa105beafa09f03295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4526a2cb47eea0e65b246cd769171bcb8c77d87864a6fa105beafa09f03295->enter($__internal_3b4526a2cb47eea0e65b246cd769171bcb8c77d87864a6fa105beafa09f03295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddf9b0797cde07b052d6fd12066ee05b593c060519826b358be344deb99f05e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf9b0797cde07b052d6fd12066ee05b593c060519826b358be344deb99f05e9->enter($__internal_ddf9b0797cde07b052d6fd12066ee05b593c060519826b358be344deb99f05e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annees"), "html", null, true);
        echo "
";
        
        $__internal_ddf9b0797cde07b052d6fd12066ee05b593c060519826b358be344deb99f05e9->leave($__internal_ddf9b0797cde07b052d6fd12066ee05b593c060519826b358be344deb99f05e9_prof);

        
        $__internal_3b4526a2cb47eea0e65b246cd769171bcb8c77d87864a6fa105beafa09f03295->leave($__internal_3b4526a2cb47eea0e65b246cd769171bcb8c77d87864a6fa105beafa09f03295_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_27db02ccba94124177f4f52aee93547bcbe96c2c07b6dd83c37fe23028e2e487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27db02ccba94124177f4f52aee93547bcbe96c2c07b6dd83c37fe23028e2e487->enter($__internal_27db02ccba94124177f4f52aee93547bcbe96c2c07b6dd83c37fe23028e2e487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_eacbb6fcb87eef792ee060095ea447436b629e3f21ad63a24f9863bad1aee83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacbb6fcb87eef792ee060095ea447436b629e3f21ad63a24f9863bad1aee83c->enter($__internal_eacbb6fcb87eef792ee060095ea447436b629e3f21ad63a24f9863bad1aee83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : $this->getContext($context, "annees")));
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
        
        $__internal_eacbb6fcb87eef792ee060095ea447436b629e3f21ad63a24f9863bad1aee83c->leave($__internal_eacbb6fcb87eef792ee060095ea447436b629e3f21ad63a24f9863bad1aee83c_prof);

        
        $__internal_27db02ccba94124177f4f52aee93547bcbe96c2c07b6dd83c37fe23028e2e487->leave($__internal_27db02ccba94124177f4f52aee93547bcbe96c2c07b6dd83c37fe23028e2e487_prof);

    }

    public function getTemplateName()
    {
        return ":anneesViews:listAnnees.html.twig";
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
", ":anneesViews:listAnnees.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/anneesViews/listAnnees.html.twig");
    }
}
