<?php

/* :parentsViews:profileParent.html.twig */
class __TwigTemplate_7a98417108d8a1d41928dbee984fca8987bafed786f1e3d2c0dc8bf474b50357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":parentsViews:profileParent.html.twig", 2);
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
        $__internal_ab5a982509eae137c7ecd6fb0df599c5cd47f315f77afda9102abe30335883b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5a982509eae137c7ecd6fb0df599c5cd47f315f77afda9102abe30335883b5->enter($__internal_ab5a982509eae137c7ecd6fb0df599c5cd47f315f77afda9102abe30335883b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:profileParent.html.twig"));

        $__internal_46d4ab3a466d04b6ab5599e5be3dffa52d1fe8c7a7cc5b0d30d621fcb78769e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d4ab3a466d04b6ab5599e5be3dffa52d1fe8c7a7cc5b0d30d621fcb78769e5->enter($__internal_46d4ab3a466d04b6ab5599e5be3dffa52d1fe8c7a7cc5b0d30d621fcb78769e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:profileParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5a982509eae137c7ecd6fb0df599c5cd47f315f77afda9102abe30335883b5->leave($__internal_ab5a982509eae137c7ecd6fb0df599c5cd47f315f77afda9102abe30335883b5_prof);

        
        $__internal_46d4ab3a466d04b6ab5599e5be3dffa52d1fe8c7a7cc5b0d30d621fcb78769e5->leave($__internal_46d4ab3a466d04b6ab5599e5be3dffa52d1fe8c7a7cc5b0d30d621fcb78769e5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a75ae2534cf529cbc4013d4a3b2f2cbece80e1b67ebaa4dbbb0f23a5a8a97ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75ae2534cf529cbc4013d4a3b2f2cbece80e1b67ebaa4dbbb0f23a5a8a97ba9->enter($__internal_a75ae2534cf529cbc4013d4a3b2f2cbece80e1b67ebaa4dbbb0f23a5a8a97ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_517ce9d52d9399931d514aed9a1de227a4eeaf7e02197e52a197f79ec678c29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517ce9d52d9399931d514aed9a1de227a4eeaf7e02197e52a197f79ec678c29e->enter($__internal_517ce9d52d9399931d514aed9a1de227a4eeaf7e02197e52a197f79ec678c29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "prenomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>nom mere :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "nomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom mere :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>Ecole :</b>";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "ecole", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "ecole", array()), "ville", array())), "html", null, true);
        echo "</li>
\t\t<li>
\t\t\t<b>Liste des enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 23
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
        // line 25
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
\t

\t
";
        
        $__internal_517ce9d52d9399931d514aed9a1de227a4eeaf7e02197e52a197f79ec678c29e->leave($__internal_517ce9d52d9399931d514aed9a1de227a4eeaf7e02197e52a197f79ec678c29e_prof);

        
        $__internal_a75ae2534cf529cbc4013d4a3b2f2cbece80e1b67ebaa4dbbb0f23a5a8a97ba9->leave($__internal_a75ae2534cf529cbc4013d4a3b2f2cbece80e1b67ebaa4dbbb0f23a5a8a97ba9_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:profileParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  114 => 23,  110 => 22,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  49 => 5,  40 => 4,  11 => 2,);
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
<h1>Profile De {{parent.nom}} {{parent.prenom}}</h1>
\t<ul>
\t\t<li><b>nom :</b>{{parent.nom}}</li>
\t\t<li><b>prenom :</b>{{parent.prenomMere}}</li>
\t\t<li><b>nom mere :</b>{{parent.nomMere}}</li>
\t\t<li><b>prenom mere :</b>{{parent.prenom}}</li>
\t\t<li><b>adresse :</b>{{parent.adresse}}</li>
\t\t<li><b>code postal :</b>{{parent.codePostal}}</li>
\t\t<li><b>telephone :</b>{{parent.telephone}}</li>
\t\t<li><b>username :</b>{{parent.username}}</li>
\t\t<li><b>email :</b>{{parent.email}}</li>
\t\t<li><b>type :</b>{{parent.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{parent.lastLogin|date('Y-m-d')}}</li>
\t\t<li><b>Ecole :</b>{{parent.ecole.nom|upper}} {{parent.ecole.ville|upper}}</li>
\t\t<li>
\t\t\t<b>Liste des enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t{% for eleve in parent.eleves %}
\t\t\t\t\t<li>{{eleve.nom}} {{eleve.prenom}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t</ul>
\t

\t
{% endblock %}", ":parentsViews:profileParent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/parentsViews/profileParent.html.twig");
    }
}