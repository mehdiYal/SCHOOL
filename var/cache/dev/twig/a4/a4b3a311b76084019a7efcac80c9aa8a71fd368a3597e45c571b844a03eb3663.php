<?php

/* parentsViews/profileParent.html.twig */
class __TwigTemplate_f112ce46aade528f67c19b62951b1df76982321a3b5a1528529a5324c1d1090e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "parentsViews/profileParent.html.twig", 2);
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
        $__internal_987f1662a5ce767b618bc3ff46c744a0c26f32cedcd714e158a4e6258d469b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987f1662a5ce767b618bc3ff46c744a0c26f32cedcd714e158a4e6258d469b62->enter($__internal_987f1662a5ce767b618bc3ff46c744a0c26f32cedcd714e158a4e6258d469b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/profileParent.html.twig"));

        $__internal_c208d1af10325a8a89725e9a49a31f4c30fc9d68d9c26e0c148938139ed86255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c208d1af10325a8a89725e9a49a31f4c30fc9d68d9c26e0c148938139ed86255->enter($__internal_c208d1af10325a8a89725e9a49a31f4c30fc9d68d9c26e0c148938139ed86255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/profileParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_987f1662a5ce767b618bc3ff46c744a0c26f32cedcd714e158a4e6258d469b62->leave($__internal_987f1662a5ce767b618bc3ff46c744a0c26f32cedcd714e158a4e6258d469b62_prof);

        
        $__internal_c208d1af10325a8a89725e9a49a31f4c30fc9d68d9c26e0c148938139ed86255->leave($__internal_c208d1af10325a8a89725e9a49a31f4c30fc9d68d9c26e0c148938139ed86255_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_384df12dc9f578c9bffe4785346071d5d8f4e96266636d9f603702a4fed587dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384df12dc9f578c9bffe4785346071d5d8f4e96266636d9f603702a4fed587dc->enter($__internal_384df12dc9f578c9bffe4785346071d5d8f4e96266636d9f603702a4fed587dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_214cb465da396cd27adf1e086f0811cd42eecaa1d846fcd2584b57b3ce0b2b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214cb465da396cd27adf1e086f0811cd42eecaa1d846fcd2584b57b3ce0b2b97->enter($__internal_214cb465da396cd27adf1e086f0811cd42eecaa1d846fcd2584b57b3ce0b2b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "prenomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>nom mere :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "nomMere", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom mere :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>Ecole :</b>";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "ecole", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "ecole", array()), "ville", array())), "html", null, true);
        echo "</li>
\t\t<li>
\t\t\t<b>Liste des enfants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "eleves", array()));
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
        
        $__internal_214cb465da396cd27adf1e086f0811cd42eecaa1d846fcd2584b57b3ce0b2b97->leave($__internal_214cb465da396cd27adf1e086f0811cd42eecaa1d846fcd2584b57b3ce0b2b97_prof);

        
        $__internal_384df12dc9f578c9bffe4785346071d5d8f4e96266636d9f603702a4fed587dc->leave($__internal_384df12dc9f578c9bffe4785346071d5d8f4e96266636d9f603702a4fed587dc_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/profileParent.html.twig";
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
{% endblock %}", "parentsViews/profileParent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/parentsViews/profileParent.html.twig");
    }
}
