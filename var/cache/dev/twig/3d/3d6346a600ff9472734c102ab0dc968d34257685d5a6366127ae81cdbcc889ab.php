<?php

/* :adminsViews:profileAdmin.html.twig */
class __TwigTemplate_4a52e16d07c4a2e58fea86ce3c91ae3b546f280d2439d43970cac7127361357a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adminsViews:profileAdmin.html.twig", 1);
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
        $__internal_6306682b19d2ff1db1248e9609229f5a16a63575f157da143b908f43eb7a7d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6306682b19d2ff1db1248e9609229f5a16a63575f157da143b908f43eb7a7d91->enter($__internal_6306682b19d2ff1db1248e9609229f5a16a63575f157da143b908f43eb7a7d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:profileAdmin.html.twig"));

        $__internal_b88b660a05069854929bf7bb7e6a5ba4942585af76fe4af1bfd33f00d6fbc5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88b660a05069854929bf7bb7e6a5ba4942585af76fe4af1bfd33f00d6fbc5bd->enter($__internal_b88b660a05069854929bf7bb7e6a5ba4942585af76fe4af1bfd33f00d6fbc5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:profileAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6306682b19d2ff1db1248e9609229f5a16a63575f157da143b908f43eb7a7d91->leave($__internal_6306682b19d2ff1db1248e9609229f5a16a63575f157da143b908f43eb7a7d91_prof);

        
        $__internal_b88b660a05069854929bf7bb7e6a5ba4942585af76fe4af1bfd33f00d6fbc5bd->leave($__internal_b88b660a05069854929bf7bb7e6a5ba4942585af76fe4af1bfd33f00d6fbc5bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e16f8edfe9aa6481808001cd721779bca1c64cba8c7251c9e89d5c5af8aca635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16f8edfe9aa6481808001cd721779bca1c64cba8c7251c9e89d5c5af8aca635->enter($__internal_e16f8edfe9aa6481808001cd721779bca1c64cba8c7251c9e89d5c5af8aca635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_741c1730e12fffffcd2753acb1990cd93a96ab44581ad62c23e8798ef7f4b5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741c1730e12fffffcd2753acb1990cd93a96ab44581ad62c23e8798ef7f4b5b2->enter($__internal_741c1730e12fffffcd2753acb1990cd93a96ab44581ad62c23e8798ef7f4b5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t</ul>

";
        
        $__internal_741c1730e12fffffcd2753acb1990cd93a96ab44581ad62c23e8798ef7f4b5b2->leave($__internal_741c1730e12fffffcd2753acb1990cd93a96ab44581ad62c23e8798ef7f4b5b2_prof);

        
        $__internal_e16f8edfe9aa6481808001cd721779bca1c64cba8c7251c9e89d5c5af8aca635->leave($__internal_e16f8edfe9aa6481808001cd721779bca1c64cba8c7251c9e89d5c5af8aca635_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:profileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Profile De {{admin.nom}} {{admin.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if admin.photo %}{{ asset('uploads/photos/' ~ admin.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{admin.nom}}</li>
\t\t<li><b>prenom :</b>{{admin.prenom}}</li>
\t\t<li><b>genre :</b>{{admin.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{admin.dateDeNaissance|date('Y-m-d')}} à {{admin.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{admin.adresse}}</li>
\t\t<li><b>code postal :</b>{{admin.codePostal}}</li>
\t\t<li><b>telephone :</b>{{admin.telephone}}</li>
\t\t<li><b>username :</b>{{admin.username}}</li>
\t\t<li><b>email :</b>{{admin.email}}</li>
\t\t<li><b>type :</b>{{admin.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{admin.lastLogin|date('Y-m-d')}}</li>
\t</ul>

{% endblock %}", ":adminsViews:profileAdmin.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/adminsViews/profileAdmin.html.twig");
    }
}
