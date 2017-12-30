<?php

/* :parentsViews:myProfileParent.html.twig */
class __TwigTemplate_5a8503eef66c3d9e4becd886b618c6f48d577f886b227c9b1a3a108aa8b6f252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":parentsViews:myProfileParent.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29af26301b02b94a977842e3759f1fed033d3b55685fcc0de5a720da273f4adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29af26301b02b94a977842e3759f1fed033d3b55685fcc0de5a720da273f4adc->enter($__internal_29af26301b02b94a977842e3759f1fed033d3b55685fcc0de5a720da273f4adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:myProfileParent.html.twig"));

        $__internal_ea50cc4bf82e81c0135b4a6b05b66eb6285fe77a265d4698da547b74f66533b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea50cc4bf82e81c0135b4a6b05b66eb6285fe77a265d4698da547b74f66533b4->enter($__internal_ea50cc4bf82e81c0135b4a6b05b66eb6285fe77a265d4698da547b74f66533b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:myProfileParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29af26301b02b94a977842e3759f1fed033d3b55685fcc0de5a720da273f4adc->leave($__internal_29af26301b02b94a977842e3759f1fed033d3b55685fcc0de5a720da273f4adc_prof);

        
        $__internal_ea50cc4bf82e81c0135b4a6b05b66eb6285fe77a265d4698da547b74f66533b4->leave($__internal_ea50cc4bf82e81c0135b4a6b05b66eb6285fe77a265d4698da547b74f66533b4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_de3292d0174fb47244b4112f061fcacc060ceedb48d4cf03586b7cadf39db264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3292d0174fb47244b4112f061fcacc060ceedb48d4cf03586b7cadf39db264->enter($__internal_de3292d0174fb47244b4112f061fcacc060ceedb48d4cf03586b7cadf39db264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ee0ea9b398a01d9ae9db7cc3659ecdd619ac51a24be7b66bf64e3d0648cbbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee0ea9b398a01d9ae9db7cc3659ecdd619ac51a24be7b66bf64e3d0648cbbd3->enter($__internal_8ee0ea9b398a01d9ae9db7cc3659ecdd619ac51a24be7b66bf64e3d0648cbbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Mon Profile ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>nom mere :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom mere :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li>
\t\t\t<b>Liste de mes enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 22
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
\t
\t
";
        
        $__internal_8ee0ea9b398a01d9ae9db7cc3659ecdd619ac51a24be7b66bf64e3d0648cbbd3->leave($__internal_8ee0ea9b398a01d9ae9db7cc3659ecdd619ac51a24be7b66bf64e3d0648cbbd3_prof);

        
        $__internal_de3292d0174fb47244b4112f061fcacc060ceedb48d4cf03586b7cadf39db264->leave($__internal_de3292d0174fb47244b4112f061fcacc060ceedb48d4cf03586b7cadf39db264_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:myProfileParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  108 => 22,  104 => 21,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
<h1>Mon Profile {{app.user.nom}} {{app.user.prenom}}</h1>
\t<ul>
\t\t<li><b>nom :</b>{{app.user.nom}}</li>
\t\t<li><b>prenom :</b>{{app.user.prenom}}</li>
\t\t<li><b>nom mere :</b>{{app.user.nomMere}}</li>
\t\t<li><b>prenom mere :</b>{{app.user.prenomMere}}</li>
\t\t<li><b>adresse :</b>{{app.user.adresse}}</li>
\t\t<li><b>code postal :</b>{{app.user.codePostal}}</li>
\t\t<li><b>telephone :</b>{{app.user.telephone}}</li>
\t\t<li><b>username :</b>{{app.user.username}}</li>
\t\t<li><b>email :</b>{{app.user.email}}</li>
\t\t<li><b>type :</b>{{app.user.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{app.user.lastLogin|date('Y-m-d')}}</li>
\t\t<li>
\t\t\t<b>Liste de mes enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t{% for eleve in app.user.eleves %}
\t\t\t\t\t<li>{{eleve.nom}} {{eleve.prenom}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t</ul>
\t
\t
{% endblock %}", ":parentsViews:myProfileParent.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/parentsViews/myProfileParent.html.twig");
    }
}
