<?php

/* :parentsViews:myProfileParent.html.twig */
class __TwigTemplate_c956af9defe4986a05c40482968dc271922c4dc82ed62d448dc3ec898c962e59 extends Twig_Template
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
        $__internal_10a880230e40d4297facbbc3d6112184899aa242b64e3c6d012b9d966cf365bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a880230e40d4297facbbc3d6112184899aa242b64e3c6d012b9d966cf365bf->enter($__internal_10a880230e40d4297facbbc3d6112184899aa242b64e3c6d012b9d966cf365bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:myProfileParent.html.twig"));

        $__internal_2e8500e1821094d4c466c80675ae37454bfe038659452ae9a634d21b2cf5a973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8500e1821094d4c466c80675ae37454bfe038659452ae9a634d21b2cf5a973->enter($__internal_2e8500e1821094d4c466c80675ae37454bfe038659452ae9a634d21b2cf5a973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:myProfileParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a880230e40d4297facbbc3d6112184899aa242b64e3c6d012b9d966cf365bf->leave($__internal_10a880230e40d4297facbbc3d6112184899aa242b64e3c6d012b9d966cf365bf_prof);

        
        $__internal_2e8500e1821094d4c466c80675ae37454bfe038659452ae9a634d21b2cf5a973->leave($__internal_2e8500e1821094d4c466c80675ae37454bfe038659452ae9a634d21b2cf5a973_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5908f9754c9fe77eacd6133650f9ea3841454d41d3b6be5863a931fa018c9071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5908f9754c9fe77eacd6133650f9ea3841454d41d3b6be5863a931fa018c9071->enter($__internal_5908f9754c9fe77eacd6133650f9ea3841454d41d3b6be5863a931fa018c9071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_562f7ec3add616ae2f618b90cb25831e484fc2df389c5c34bbcf0573f1b5e3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562f7ec3add616ae2f618b90cb25831e484fc2df389c5c34bbcf0573f1b5e3c8->enter($__internal_562f7ec3add616ae2f618b90cb25831e484fc2df389c5c34bbcf0573f1b5e3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_562f7ec3add616ae2f618b90cb25831e484fc2df389c5c34bbcf0573f1b5e3c8->leave($__internal_562f7ec3add616ae2f618b90cb25831e484fc2df389c5c34bbcf0573f1b5e3c8_prof);

        
        $__internal_5908f9754c9fe77eacd6133650f9ea3841454d41d3b6be5863a931fa018c9071->leave($__internal_5908f9754c9fe77eacd6133650f9ea3841454d41d3b6be5863a931fa018c9071_prof);

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
{% endblock %}", ":parentsViews:myProfileParent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/parentsViews/myProfileParent.html.twig");
    }
}
