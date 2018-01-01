<?php

/* :adminsViews:myProfileAdmin.html.twig */
class __TwigTemplate_7278b999cde71307d243fbfe22e8192448967d483d0d3dc3019398b32bdd70f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":adminsViews:myProfileAdmin.html.twig", 2);
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
        $__internal_0942cd545a25023ebf687ffa64726f8a968249c0b4ffa030db4c034102421a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0942cd545a25023ebf687ffa64726f8a968249c0b4ffa030db4c034102421a6b->enter($__internal_0942cd545a25023ebf687ffa64726f8a968249c0b4ffa030db4c034102421a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:myProfileAdmin.html.twig"));

        $__internal_60dcc263efd77b0cffc95d50c972fb2321540cc76e111f74441db6695f7b3cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dcc263efd77b0cffc95d50c972fb2321540cc76e111f74441db6695f7b3cec->enter($__internal_60dcc263efd77b0cffc95d50c972fb2321540cc76e111f74441db6695f7b3cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:myProfileAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0942cd545a25023ebf687ffa64726f8a968249c0b4ffa030db4c034102421a6b->leave($__internal_0942cd545a25023ebf687ffa64726f8a968249c0b4ffa030db4c034102421a6b_prof);

        
        $__internal_60dcc263efd77b0cffc95d50c972fb2321540cc76e111f74441db6695f7b3cec->leave($__internal_60dcc263efd77b0cffc95d50c972fb2321540cc76e111f74441db6695f7b3cec_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b48ca9fecb2c7bc7b7a0520ca92edbe8e93ae234e06efcf9bf18248292e79def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48ca9fecb2c7bc7b7a0520ca92edbe8e93ae234e06efcf9bf18248292e79def->enter($__internal_b48ca9fecb2c7bc7b7a0520ca92edbe8e93ae234e06efcf9bf18248292e79def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be8c27e6e0fc2d6bfb8eb8dca9caeae0cc9936516cc3a685a1988d32b9b6c7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8c27e6e0fc2d6bfb8eb8dca9caeae0cc9936516cc3a685a1988d32b9b6c7c4->enter($__internal_be8c27e6e0fc2d6bfb8eb8dca9caeae0cc9936516cc3a685a1988d32b9b6c7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Mon Profile ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t</ul>
\t
\t
";
        
        $__internal_be8c27e6e0fc2d6bfb8eb8dca9caeae0cc9936516cc3a685a1988d32b9b6c7c4->leave($__internal_be8c27e6e0fc2d6bfb8eb8dca9caeae0cc9936516cc3a685a1988d32b9b6c7c4_prof);

        
        $__internal_b48ca9fecb2c7bc7b7a0520ca92edbe8e93ae234e06efcf9bf18248292e79def->leave($__internal_b48ca9fecb2c7bc7b7a0520ca92edbe8e93ae234e06efcf9bf18248292e79def_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:myProfileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  57 => 7,  49 => 5,  40 => 4,  11 => 2,);
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
\t</ul>
\t
\t
{% endblock %}", ":adminsViews:myProfileAdmin.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/adminsViews/myProfileAdmin.html.twig");
    }
}
