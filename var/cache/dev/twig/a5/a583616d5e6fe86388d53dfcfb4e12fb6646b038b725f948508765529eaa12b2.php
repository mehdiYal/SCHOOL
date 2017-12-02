<?php

/* :enseignantsViews:listClasses.html.twig */
class __TwigTemplate_6e68be6d5df45865765bb4ca753a5536a9f3b16a9ba4d224f0f4e426f7845e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enseignantsViews:listClasses.html.twig", 1);
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
        $__internal_b22df427db5039aa8257590284d87c193fd67fca641946dec2add6257549d5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22df427db5039aa8257590284d87c193fd67fca641946dec2add6257549d5a2->enter($__internal_b22df427db5039aa8257590284d87c193fd67fca641946dec2add6257549d5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $__internal_2f25ece8aff39139fdd514d813c8e0f1b0e4f72d6eaa35148e11fd0c4a86b1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f25ece8aff39139fdd514d813c8e0f1b0e4f72d6eaa35148e11fd0c4a86b1bd->enter($__internal_2f25ece8aff39139fdd514d813c8e0f1b0e4f72d6eaa35148e11fd0c4a86b1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22df427db5039aa8257590284d87c193fd67fca641946dec2add6257549d5a2->leave($__internal_b22df427db5039aa8257590284d87c193fd67fca641946dec2add6257549d5a2_prof);

        
        $__internal_2f25ece8aff39139fdd514d813c8e0f1b0e4f72d6eaa35148e11fd0c4a86b1bd->leave($__internal_2f25ece8aff39139fdd514d813c8e0f1b0e4f72d6eaa35148e11fd0c4a86b1bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_85be8470e69a11a06f61cc51841ecc095062664f500f625d5e142b5ef39ed32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85be8470e69a11a06f61cc51841ecc095062664f500f625d5e142b5ef39ed32b->enter($__internal_85be8470e69a11a06f61cc51841ecc095062664f500f625d5e142b5ef39ed32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c46a749e1653f8c981f767da9759806620da6c0c94b5574098cf19c4905d6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c46a749e1653f8c981f767da9759806620da6c0c94b5574098cf19c4905d6df->enter($__internal_7c46a749e1653f8c981f767da9759806620da6c0c94b5574098cf19c4905d6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 6
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEnseignant", array("id" => $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "enseignant", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
        echo "</a>
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.manage"), "html", null, true);
        echo "</a>
\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_add", array("id" => $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "enseignant", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.annual.program"), "html", null, true);
        echo "</a>
\t\t\t
\t<ol>

\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 13
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEleve", array("idClasse" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, (((((((($this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "ecole", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "niveau", array())) . " ") . $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "nom", array())), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showClasse", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_new", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.add"), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.send"), "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t</ol>
\t
";
        
        $__internal_7c46a749e1653f8c981f767da9759806620da6c0c94b5574098cf19c4905d6df->leave($__internal_7c46a749e1653f8c981f767da9759806620da6c0c94b5574098cf19c4905d6df_prof);

        
        $__internal_85be8470e69a11a06f61cc51841ecc095062664f500f625d5e142b5ef39ed32b->leave($__internal_85be8470e69a11a06f61cc51841ecc095062664f500f625d5e142b5ef39ed32b_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 20,  107 => 17,  101 => 16,  95 => 15,  91 => 14,  86 => 13,  82 => 12,  73 => 8,  67 => 7,  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
{% dump(data) %}
\t<a href=\"{{ path('showEnseignant', { 'id': data.enseignant.id}) }}\">{{'global.program'|trans}}</a>
\t<a href=\"{{ path('absence_index')}}\">{{'absence.manage'|trans}}</a>
\t<a href=\"{{path('program_add',{ 'id': data.enseignant.id})}}\">{{'global.annual.program'|trans}}</a>
\t\t\t
\t<ol>

\t\t{% for classe in data.classes %}
\t\t\t<li><a href=\"{{ path('showEleve', { 'idClasse': classe.classe.id, 'idMatiere': classe.matiere.id}) }}\">
\t\t\t\t{{classe.classe.ecole.nom~' '~classe.classe.nom~' '~classe.classe.annee.nom~' '~classe.classe.annee.niveau~' '~classe.matiere.nom}}</a>
\t\t\t\t<a href=\"{{path('showClasse',{ 'id': classe.classe.id})}}\">{{'global.program'|trans}}</a>
\t\t\t\t<a href=\"{{path('absence_new',{ 'id': classe.classe.id})}}\">{{'absence.add'|trans}}</a>
\t\t\t\t<a href=\"\">{{'message.send'|trans}}</a>
\t\t\t</li>
\t\t{% endfor %}

\t</ol>
\t
{% endblock %}", ":enseignantsViews:listClasses.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/listClasses.html.twig");
    }
}
