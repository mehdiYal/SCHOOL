<?php

/* elevesViews/listEleves.html.twig */
class __TwigTemplate_efdce8600ad3899a76a81df38a48d9d17bb9a453cb7fb3b0467aeebab474dbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "elevesViews/listEleves.html.twig", 1);
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
        $__internal_a48873af032bfa8b44ee5c547dc44cb685b8a1da25ebea52c9392b35431467ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48873af032bfa8b44ee5c547dc44cb685b8a1da25ebea52c9392b35431467ea->enter($__internal_a48873af032bfa8b44ee5c547dc44cb685b8a1da25ebea52c9392b35431467ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $__internal_285d1c6c2c426e4c974c48e6417920fd6057183e6616cf29be554fa45296d837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285d1c6c2c426e4c974c48e6417920fd6057183e6616cf29be554fa45296d837->enter($__internal_285d1c6c2c426e4c974c48e6417920fd6057183e6616cf29be554fa45296d837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48873af032bfa8b44ee5c547dc44cb685b8a1da25ebea52c9392b35431467ea->leave($__internal_a48873af032bfa8b44ee5c547dc44cb685b8a1da25ebea52c9392b35431467ea_prof);

        
        $__internal_285d1c6c2c426e4c974c48e6417920fd6057183e6616cf29be554fa45296d837->leave($__internal_285d1c6c2c426e4c974c48e6417920fd6057183e6616cf29be554fa45296d837_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b041059411cba23cccde4a158c52bf87e242bf9cb9fa2ab06ed4c3d92350db11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b041059411cba23cccde4a158c52bf87e242bf9cb9fa2ab06ed4c3d92350db11->enter($__internal_b041059411cba23cccde4a158c52bf87e242bf9cb9fa2ab06ed4c3d92350db11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_338aa407c9c0391cbdad5cf41a71fcfd59480e7777751d2cbb6c8697b281f658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338aa407c9c0391cbdad5cf41a71fcfd59480e7777751d2cbb6c8697b281f658->enter($__internal_338aa407c9c0391cbdad5cf41a71fcfd59480e7777751d2cbb6c8697b281f658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_338aa407c9c0391cbdad5cf41a71fcfd59480e7777751d2cbb6c8697b281f658->leave($__internal_338aa407c9c0391cbdad5cf41a71fcfd59480e7777751d2cbb6c8697b281f658_prof);

        
        $__internal_b041059411cba23cccde4a158c52bf87e242bf9cb9fa2ab06ed4c3d92350db11->leave($__internal_b041059411cba23cccde4a158c52bf87e242bf9cb9fa2ab06ed4c3d92350db11_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_516ee31b4a8d09a2e51934eaad6fba46c2cf68302577f4d423f1a747255d8939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516ee31b4a8d09a2e51934eaad6fba46c2cf68302577f4d423f1a747255d8939->enter($__internal_516ee31b4a8d09a2e51934eaad6fba46c2cf68302577f4d423f1a747255d8939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_ce21b9463a16234deee42d1d23abeaec886d22bab78a59864cd0da7160ed1203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce21b9463a16234deee42d1d23abeaec886d22bab78a59864cd0da7160ed1203->enter($__internal_ce21b9463a16234deee42d1d23abeaec886d22bab78a59864cd0da7160ed1203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parent"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 24
            echo "\t\t\t\t\t<tr class=\"";
            if (($this->getAttribute($context["eleve"], "parent", array()) == null)) {
                echo " danger ";
            }
            echo "\">
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["eleve"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["eleve"], "dateDeNaissance", array()), "Y")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parentEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_ce21b9463a16234deee42d1d23abeaec886d22bab78a59864cd0da7160ed1203->leave($__internal_ce21b9463a16234deee42d1d23abeaec886d22bab78a59864cd0da7160ed1203_prof);

        
        $__internal_516ee31b4a8d09a2e51934eaad6fba46c2cf68302577f4d423f1a747255d8939->leave($__internal_516ee31b4a8d09a2e51934eaad6fba46c2cf68302577f4d423f1a747255d8939_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/listEleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 50,  155 => 44,  147 => 39,  139 => 34,  131 => 29,  124 => 27,  120 => 26,  114 => 25,  107 => 24,  103 => 23,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'students'|trans}}
{% endblock %}

{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                    <th>{{'parent'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for eleve in app.user.ecole.eleves %}
\t\t\t\t\t<tr class=\"{% if (eleve.parent == null)%} danger {% endif %}\">
\t\t\t\t\t\t<td>{{ eleve.nom|upper}} {{ eleve.prenom}}</td>
\t\t\t\t\t\t<td>{{ (\"now\"|date(\"Y\"))-( eleve.dateDeNaissance|date(\"Y\"))}}</td>
\t\t\t\t\t\t<td>{{ eleve.annee.nom}} {{ eleve.annee.niveau}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('parentEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}               ", "elevesViews/listEleves.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/listEleves.html.twig");
    }
}
