<?php

/* :classesViews:eleves.html.twig */
class __TwigTemplate_604c7120324177ee0d696f33f8bea56583e7a0c345ab02ab143fe5e3ce431f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":classesViews:eleves.html.twig", 1);
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
        $__internal_3c2d803b6f1272a068ac995e3b63efbd82131ee8c2f9ae4b3ace5b90e829ef42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2d803b6f1272a068ac995e3b63efbd82131ee8c2f9ae4b3ace5b90e829ef42->enter($__internal_3c2d803b6f1272a068ac995e3b63efbd82131ee8c2f9ae4b3ace5b90e829ef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $__internal_5bb6bbce3c0c70e0ea3218e7fd915eac4f2d82d2e940bcde00f72bbe1599b118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb6bbce3c0c70e0ea3218e7fd915eac4f2d82d2e940bcde00f72bbe1599b118->enter($__internal_5bb6bbce3c0c70e0ea3218e7fd915eac4f2d82d2e940bcde00f72bbe1599b118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c2d803b6f1272a068ac995e3b63efbd82131ee8c2f9ae4b3ace5b90e829ef42->leave($__internal_3c2d803b6f1272a068ac995e3b63efbd82131ee8c2f9ae4b3ace5b90e829ef42_prof);

        
        $__internal_5bb6bbce3c0c70e0ea3218e7fd915eac4f2d82d2e940bcde00f72bbe1599b118->leave($__internal_5bb6bbce3c0c70e0ea3218e7fd915eac4f2d82d2e940bcde00f72bbe1599b118_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e8ac1b2326bc416f883f4d28792350d183ca30b91359b33a95b64b753d6111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e8ac1b2326bc416f883f4d28792350d183ca30b91359b33a95b64b753d6111->enter($__internal_50e8ac1b2326bc416f883f4d28792350d183ca30b91359b33a95b64b753d6111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4ad1c9d9f38ff178e150dc7dde0f40db93f9954214710557aebad996779ab4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ad1c9d9f38ff178e150dc7dde0f40db93f9954214710557aebad996779ab4b->enter($__internal_c4ad1c9d9f38ff178e150dc7dde0f40db93f9954214710557aebad996779ab4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        }
        // line 6
        echo "\t<ol>
\t\t
\t</ol>
\t
";
        
        $__internal_c4ad1c9d9f38ff178e150dc7dde0f40db93f9954214710557aebad996779ab4b->leave($__internal_c4ad1c9d9f38ff178e150dc7dde0f40db93f9954214710557aebad996779ab4b_prof);

        
        $__internal_50e8ac1b2326bc416f883f4d28792350d183ca30b91359b33a95b64b753d6111->leave($__internal_50e8ac1b2326bc416f883f4d28792350d183ca30b91359b33a95b64b753d6111_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:eleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% dump(eleves) %}
\t<ol>
\t\t
\t</ol>
\t
{% endblock %}", ":classesViews:eleves.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/eleves.html.twig");
    }
}
