<?php

/* :schoolsViews:listSchools.html.twig */
class __TwigTemplate_f3a1cba502a1a8f486dd31403d1d9cfc30c8915676f5739b116fd6cadc7a3665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":schoolsViews:listSchools.html.twig", 1);
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
        $__internal_a068183c1df671ad58f9206be4eeb496d9b89ff24b8d0237b71891f1c93ea54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a068183c1df671ad58f9206be4eeb496d9b89ff24b8d0237b71891f1c93ea54a->enter($__internal_a068183c1df671ad58f9206be4eeb496d9b89ff24b8d0237b71891f1c93ea54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_3826bb1f91343ed7ca041f17eae3b75038f61a80e002c6faeb171b0df654a69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3826bb1f91343ed7ca041f17eae3b75038f61a80e002c6faeb171b0df654a69f->enter($__internal_3826bb1f91343ed7ca041f17eae3b75038f61a80e002c6faeb171b0df654a69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a068183c1df671ad58f9206be4eeb496d9b89ff24b8d0237b71891f1c93ea54a->leave($__internal_a068183c1df671ad58f9206be4eeb496d9b89ff24b8d0237b71891f1c93ea54a_prof);

        
        $__internal_3826bb1f91343ed7ca041f17eae3b75038f61a80e002c6faeb171b0df654a69f->leave($__internal_3826bb1f91343ed7ca041f17eae3b75038f61a80e002c6faeb171b0df654a69f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5e097d769d27567dca8ec7822dacbcc7029fc0f9119fd40545598de705700c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e097d769d27567dca8ec7822dacbcc7029fc0f9119fd40545598de705700c6->enter($__internal_c5e097d769d27567dca8ec7822dacbcc7029fc0f9119fd40545598de705700c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e6857e999d0b56081d6f4461d7c2912b20a1d8d2b586ad3ebd097bd4b52d275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6857e999d0b56081d6f4461d7c2912b20a1d8d2b586ad3ebd097bd4b52d275->enter($__internal_7e6857e999d0b56081d6f4461d7c2912b20a1d8d2b586ad3ebd097bd4b52d275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Profile</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_7e6857e999d0b56081d6f4461d7c2912b20a1d8d2b586ad3ebd097bd4b52d275->leave($__internal_7e6857e999d0b56081d6f4461d7c2912b20a1d8d2b586ad3ebd097bd4b52d275_prof);

        
        $__internal_c5e097d769d27567dca8ec7822dacbcc7029fc0f9119fd40545598de705700c6->leave($__internal_c5e097d769d27567dca8ec7822dacbcc7029fc0f9119fd40545598de705700c6_prof);

    }

    public function getTemplateName()
    {
        return ":schoolsViews:listSchools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'schools'|trans}}</h1>
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t<li>{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">Modifier</a> <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">Supprimer</a> <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">Profile</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":schoolsViews:listSchools.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/schoolsViews/listSchools.html.twig");
    }
}
