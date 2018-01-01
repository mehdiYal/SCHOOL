<?php

/* :elevesViews:myProfileEleve.html.twig */
class __TwigTemplate_5b0bd7dded99d2a0e07bd4f649b4bc578447169558b5c3833c00d472752dd9e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":elevesViews:myProfileEleve.html.twig", 1);
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
        $__internal_88ad76d029229ef2e8f471cefad8dfd80ddb96cdf8956eec271edc549b65b05d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ad76d029229ef2e8f471cefad8dfd80ddb96cdf8956eec271edc549b65b05d->enter($__internal_88ad76d029229ef2e8f471cefad8dfd80ddb96cdf8956eec271edc549b65b05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:myProfileEleve.html.twig"));

        $__internal_c2145e7842f907d01fb436ec6ece89a1092d5e1bd2543bae6ec202d390e23da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2145e7842f907d01fb436ec6ece89a1092d5e1bd2543bae6ec202d390e23da7->enter($__internal_c2145e7842f907d01fb436ec6ece89a1092d5e1bd2543bae6ec202d390e23da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:myProfileEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ad76d029229ef2e8f471cefad8dfd80ddb96cdf8956eec271edc549b65b05d->leave($__internal_88ad76d029229ef2e8f471cefad8dfd80ddb96cdf8956eec271edc549b65b05d_prof);

        
        $__internal_c2145e7842f907d01fb436ec6ece89a1092d5e1bd2543bae6ec202d390e23da7->leave($__internal_c2145e7842f907d01fb436ec6ece89a1092d5e1bd2543bae6ec202d390e23da7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1b69786d467dac5a634f2b3cf2e8250c03b32d448d169d61599bd557042767b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b69786d467dac5a634f2b3cf2e8250c03b32d448d169d61599bd557042767b->enter($__internal_d1b69786d467dac5a634f2b3cf2e8250c03b32d448d169d61599bd557042767b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_551d5e1217e463a133fe227b95353c0d4d81ed22254fc6006690bf3a37f0e92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551d5e1217e463a133fe227b95353c0d4d81ed22254fc6006690bf3a37f0e92a->enter($__internal_551d5e1217e463a133fe227b95353c0d4d81ed22254fc6006690bf3a37f0e92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Mon Profile ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lieuDeNaissance", array()), "html", null, true);
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
\t\t<li><b>parent :</b>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "parent", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "parent", array()), "nom", array()), "html", null, true);
        echo "</li>
\t</ul>
\t
\t
";
        
        $__internal_551d5e1217e463a133fe227b95353c0d4d81ed22254fc6006690bf3a37f0e92a->leave($__internal_551d5e1217e463a133fe227b95353c0d4d81ed22254fc6006690bf3a37f0e92a_prof);

        
        $__internal_d1b69786d467dac5a634f2b3cf2e8250c03b32d448d169d61599bd557042767b->leave($__internal_d1b69786d467dac5a634f2b3cf2e8250c03b32d448d169d61599bd557042767b_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:myProfileEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>Mon Profile {{app.user.nom}} {{app.user.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if app.user.photo %}{{ asset('uploads/photos/' ~ app.user.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{app.user.nom}}</li>
\t\t<li><b>prenom :</b>{{app.user.prenom}}</li>
\t\t<li><b>genre :</b>{{app.user.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{app.user.dateDeNaissance|date('Y-m-d')}} à {{app.user.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{app.user.adresse}}</li>
\t\t<li><b>code postal :</b>{{app.user.codePostal}}</li>
\t\t<li><b>telephone :</b>{{app.user.telephone}}</li>
\t\t<li><b>username :</b>{{app.user.username}}</li>
\t\t<li><b>email :</b>{{app.user.email}}</li>
\t\t<li><b>type :</b>{{app.user.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{app.user.lastLogin|date('Y-m-d')}}</li>
\t\t<li><b>parent :</b>{{app.user.parent.nom}} {{app.user.parent.nom}}</li>
\t</ul>
\t
\t
{% endblock %}", ":elevesViews:myProfileEleve.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/elevesViews/myProfileEleve.html.twig");
    }
}
