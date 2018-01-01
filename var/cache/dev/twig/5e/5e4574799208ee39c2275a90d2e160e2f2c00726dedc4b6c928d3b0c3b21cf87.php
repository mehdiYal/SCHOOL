<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_1e2fbe8fe189b49e929482ef85839333a6172a5ed4cb6dd10f9a81ece57b6d4d extends Twig_Template
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
        $__internal_2553fd7404c8c757ccd8824b058e3f7589d16f268e9b54346a896d82f45dafab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2553fd7404c8c757ccd8824b058e3f7589d16f268e9b54346a896d82f45dafab->enter($__internal_2553fd7404c8c757ccd8824b058e3f7589d16f268e9b54346a896d82f45dafab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_878bf4fe70928b07a9de7e6dee26d95b995c01e576d7c28da45f7b926ccd6219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878bf4fe70928b07a9de7e6dee26d95b995c01e576d7c28da45f7b926ccd6219->enter($__internal_878bf4fe70928b07a9de7e6dee26d95b995c01e576d7c28da45f7b926ccd6219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2553fd7404c8c757ccd8824b058e3f7589d16f268e9b54346a896d82f45dafab->leave($__internal_2553fd7404c8c757ccd8824b058e3f7589d16f268e9b54346a896d82f45dafab_prof);

        
        $__internal_878bf4fe70928b07a9de7e6dee26d95b995c01e576d7c28da45f7b926ccd6219->leave($__internal_878bf4fe70928b07a9de7e6dee26d95b995c01e576d7c28da45f7b926ccd6219_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c82d42fbe6c0e5abef986fc76e7f19e37c0c9485af7fe3291350df64a218812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c82d42fbe6c0e5abef986fc76e7f19e37c0c9485af7fe3291350df64a218812->enter($__internal_2c82d42fbe6c0e5abef986fc76e7f19e37c0c9485af7fe3291350df64a218812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df64f6b0bede4c20764bcec6e22840e76a358e967d1cc938051199fa32f7412f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df64f6b0bede4c20764bcec6e22840e76a358e967d1cc938051199fa32f7412f->enter($__internal_df64f6b0bede4c20764bcec6e22840e76a358e967d1cc938051199fa32f7412f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annees"), "html", null, true);
        echo "
";
        
        $__internal_df64f6b0bede4c20764bcec6e22840e76a358e967d1cc938051199fa32f7412f->leave($__internal_df64f6b0bede4c20764bcec6e22840e76a358e967d1cc938051199fa32f7412f_prof);

        
        $__internal_2c82d42fbe6c0e5abef986fc76e7f19e37c0c9485af7fe3291350df64a218812->leave($__internal_2c82d42fbe6c0e5abef986fc76e7f19e37c0c9485af7fe3291350df64a218812_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_dd6e21c1396349367dd56adf23605c837631e1f27555a31aee95b3bad81e664e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6e21c1396349367dd56adf23605c837631e1f27555a31aee95b3bad81e664e->enter($__internal_dd6e21c1396349367dd56adf23605c837631e1f27555a31aee95b3bad81e664e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_eb11c757deb2f6e51616da8119d6b5d909e6b963b7a09eefd0ed0584e4fcd665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb11c757deb2f6e51616da8119d6b5d909e6b963b7a09eefd0ed0584e4fcd665->enter($__internal_eb11c757deb2f6e51616da8119d6b5d909e6b963b7a09eefd0ed0584e4fcd665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_eb11c757deb2f6e51616da8119d6b5d909e6b963b7a09eefd0ed0584e4fcd665->leave($__internal_eb11c757deb2f6e51616da8119d6b5d909e6b963b7a09eefd0ed0584e4fcd665_prof);

        
        $__internal_dd6e21c1396349367dd56adf23605c837631e1f27555a31aee95b3bad81e664e->leave($__internal_dd6e21c1396349367dd56adf23605c837631e1f27555a31aee95b3bad81e664e_prof);

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
", ":anneesViews:listAnnees.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/anneesViews/listAnnees.html.twig");
    }
}
