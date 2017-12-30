<?php

/* elevesViews/listEleves.html.twig */
class __TwigTemplate_26d3aa9d3013593b75e282c02800df8365721bfe9ffd5373fa93daff0803724e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "elevesViews/listEleves.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ba304225d436e302d4155701da8bdff199d1abc965bf9811f1d60c20492303c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba304225d436e302d4155701da8bdff199d1abc965bf9811f1d60c20492303c->enter($__internal_9ba304225d436e302d4155701da8bdff199d1abc965bf9811f1d60c20492303c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $__internal_2940a9eb22608ee5338bcb7d4a65e042db8a2e9f31c668e2b0992dfa209b3eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2940a9eb22608ee5338bcb7d4a65e042db8a2e9f31c668e2b0992dfa209b3eab->enter($__internal_2940a9eb22608ee5338bcb7d4a65e042db8a2e9f31c668e2b0992dfa209b3eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba304225d436e302d4155701da8bdff199d1abc965bf9811f1d60c20492303c->leave($__internal_9ba304225d436e302d4155701da8bdff199d1abc965bf9811f1d60c20492303c_prof);

        
        $__internal_2940a9eb22608ee5338bcb7d4a65e042db8a2e9f31c668e2b0992dfa209b3eab->leave($__internal_2940a9eb22608ee5338bcb7d4a65e042db8a2e9f31c668e2b0992dfa209b3eab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f31b18b6d90828af1227d5e42e6fb3b37dc415749f8b1910c7d66b4609bd391a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31b18b6d90828af1227d5e42e6fb3b37dc415749f8b1910c7d66b4609bd391a->enter($__internal_f31b18b6d90828af1227d5e42e6fb3b37dc415749f8b1910c7d66b4609bd391a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3935e4b7ac4bb34c54b0db561a80abf7e5c26f4e45e9cd785ee9efc1a80ca17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3935e4b7ac4bb34c54b0db561a80abf7e5c26f4e45e9cd785ee9efc1a80ca17->enter($__internal_f3935e4b7ac4bb34c54b0db561a80abf7e5c26f4e45e9cd785ee9efc1a80ca17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_f3935e4b7ac4bb34c54b0db561a80abf7e5c26f4e45e9cd785ee9efc1a80ca17->leave($__internal_f3935e4b7ac4bb34c54b0db561a80abf7e5c26f4e45e9cd785ee9efc1a80ca17_prof);

        
        $__internal_f31b18b6d90828af1227d5e42e6fb3b37dc415749f8b1910c7d66b4609bd391a->leave($__internal_f31b18b6d90828af1227d5e42e6fb3b37dc415749f8b1910c7d66b4609bd391a_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c68b7f996122619836c26d17d1b4b980d0d8c5603c760819e78123079f2948f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68b7f996122619836c26d17d1b4b980d0d8c5603c760819e78123079f2948f8->enter($__internal_c68b7f996122619836c26d17d1b4b980d0d8c5603c760819e78123079f2948f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4656112999a5853fe8c42305a4dc7d708a8695809fb0956e9e5a1695542fa699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4656112999a5853fe8c42305a4dc7d708a8695809fb0956e9e5a1695542fa699->enter($__internal_4656112999a5853fe8c42305a4dc7d708a8695809fb0956e9e5a1695542fa699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
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
        // line 53
        $this->displayBlock('active', $context, $blocks);
        
        $__internal_4656112999a5853fe8c42305a4dc7d708a8695809fb0956e9e5a1695542fa699->leave($__internal_4656112999a5853fe8c42305a4dc7d708a8695809fb0956e9e5a1695542fa699_prof);

        
        $__internal_c68b7f996122619836c26d17d1b4b980d0d8c5603c760819e78123079f2948f8->leave($__internal_c68b7f996122619836c26d17d1b4b980d0d8c5603c760819e78123079f2948f8_prof);

    }

    public function block_active($context, array $blocks = array())
    {
        $__internal_da8d8a85e3953eac7f4d1f9b18f0666a4a047069ad3e4aace794dd570e776557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8d8a85e3953eac7f4d1f9b18f0666a4a047069ad3e4aace794dd570e776557->enter($__internal_da8d8a85e3953eac7f4d1f9b18f0666a4a047069ad3e4aace794dd570e776557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_a753f6d7cfdcdb1feb96c821166dbfaea108b4047f9be55987402c816862979f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a753f6d7cfdcdb1feb96c821166dbfaea108b4047f9be55987402c816862979f->enter($__internal_a753f6d7cfdcdb1feb96c821166dbfaea108b4047f9be55987402c816862979f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 54
        echo "    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    ";
        
        $__internal_a753f6d7cfdcdb1feb96c821166dbfaea108b4047f9be55987402c816862979f->leave($__internal_a753f6d7cfdcdb1feb96c821166dbfaea108b4047f9be55987402c816862979f_prof);

        
        $__internal_da8d8a85e3953eac7f4d1f9b18f0666a4a047069ad3e4aace794dd570e776557->leave($__internal_da8d8a85e3953eac7f4d1f9b18f0666a4a047069ad3e4aace794dd570e776557_prof);

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
        return array (  191 => 54,  173 => 53,  168 => 50,  156 => 44,  148 => 39,  140 => 34,  132 => 29,  125 => 27,  121 => 26,  115 => 25,  108 => 24,  104 => 23,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    {% block active %}
    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    {% endblock%}
{% endblock %}               
", "elevesViews/listEleves.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\elevesViews\\listEleves.html.twig");
    }
}
