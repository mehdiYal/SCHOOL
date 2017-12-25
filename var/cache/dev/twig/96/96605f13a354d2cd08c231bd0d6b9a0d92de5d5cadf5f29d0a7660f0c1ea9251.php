<?php

/* :classesViews:listClasses.html.twig */
class __TwigTemplate_4874af51db16f800e270367de0e6eca819139e568a6183239dbf62caca1df0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":classesViews:listClasses.html.twig", 1);
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
        $__internal_a3a2079c3d441da24fd32455cb779f4559c5136858d4bf999a63d5ff0a6e4c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a2079c3d441da24fd32455cb779f4559c5136858d4bf999a63d5ff0a6e4c21->enter($__internal_a3a2079c3d441da24fd32455cb779f4559c5136858d4bf999a63d5ff0a6e4c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $__internal_ebef915f09576efb2c94b1084b3b6799bd940585e126ebb96db12635e245dc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebef915f09576efb2c94b1084b3b6799bd940585e126ebb96db12635e245dc89->enter($__internal_ebef915f09576efb2c94b1084b3b6799bd940585e126ebb96db12635e245dc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3a2079c3d441da24fd32455cb779f4559c5136858d4bf999a63d5ff0a6e4c21->leave($__internal_a3a2079c3d441da24fd32455cb779f4559c5136858d4bf999a63d5ff0a6e4c21_prof);

        
        $__internal_ebef915f09576efb2c94b1084b3b6799bd940585e126ebb96db12635e245dc89->leave($__internal_ebef915f09576efb2c94b1084b3b6799bd940585e126ebb96db12635e245dc89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_687f3f402d86303bb222314ee6b6e0f8e1267bdedb70139fcd62408f7d2006c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687f3f402d86303bb222314ee6b6e0f8e1267bdedb70139fcd62408f7d2006c9->enter($__internal_687f3f402d86303bb222314ee6b6e0f8e1267bdedb70139fcd62408f7d2006c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6da673ab9cf1a9f5ed513d43168452a2d48f03ed7a30c6c9ae6d8fbd52c1f257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da673ab9cf1a9f5ed513d43168452a2d48f03ed7a30c6c9ae6d8fbd52c1f257->enter($__internal_6da673ab9cf1a9f5ed513d43168452a2d48f03ed7a30c6c9ae6d8fbd52c1f257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_6da673ab9cf1a9f5ed513d43168452a2d48f03ed7a30c6c9ae6d8fbd52c1f257->leave($__internal_6da673ab9cf1a9f5ed513d43168452a2d48f03ed7a30c6c9ae6d8fbd52c1f257_prof);

        
        $__internal_687f3f402d86303bb222314ee6b6e0f8e1267bdedb70139fcd62408f7d2006c9->leave($__internal_687f3f402d86303bb222314ee6b6e0f8e1267bdedb70139fcd62408f7d2006c9_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_f02d588e4e8b0d48a15adc5f95cdca40759781ea95c80ca8c70720e5986f9d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02d588e4e8b0d48a15adc5f95cdca40759781ea95c80ca8c70720e5986f9d21->enter($__internal_f02d588e4e8b0d48a15adc5f95cdca40759781ea95c80ca8c70720e5986f9d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_9b3fb01f753b87f677e341df2b6e4a3c40ce70bd51d83611a16f4ca77cf3a765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3fb01f753b87f677e341df2b6e4a3c40ce70bd51d83611a16f4ca77cf3a765->enter($__internal_9b3fb01f753b87f677e341df2b6e4a3c40ce70bd51d83611a16f4ca77cf3a765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Eleves</th>
                    <th>Responsable</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>Aff Ens.</th>
                    <th>Aff Eleves</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["classe"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "responsable", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectProf", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectEleves", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-users\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_9b3fb01f753b87f677e341df2b6e4a3c40ce70bd51d83611a16f4ca77cf3a765->leave($__internal_9b3fb01f753b87f677e341df2b6e4a3c40ce70bd51d83611a16f4ca77cf3a765_prof);

        
        $__internal_f02d588e4e8b0d48a15adc5f95cdca40759781ea95c80ca8c70720e5986f9d21->leave($__internal_f02d588e4e8b0d48a15adc5f95cdca40759781ea95c80ca8c70720e5986f9d21_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 55,  153 => 49,  145 => 44,  137 => 39,  129 => 34,  124 => 32,  120 => 31,  114 => 30,  110 => 29,  106 => 28,  103 => 27,  99 => 26,  90 => 20,  86 => 19,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'classe'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Eleves</th>
                    <th>Responsable</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>Aff Ens.</th>
                    <th>Aff Eleves</th>
                </tr>
            </thead>
            <tbody>
                {% for classe in app.user.ecole.classes%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ classe.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ classe.description}}</td>
\t\t\t\t\t\t<td>{{ classe.annee.nom}} {{ classe.annee.niveau}}</td>
\t\t\t\t\t\t<td>{{ classe.eleves|length}}</td>
\t\t\t\t\t\t<td>{{ classe.responsable.nom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('affectProf',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('affectEleves',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-users\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}  ", ":classesViews:listClasses.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
