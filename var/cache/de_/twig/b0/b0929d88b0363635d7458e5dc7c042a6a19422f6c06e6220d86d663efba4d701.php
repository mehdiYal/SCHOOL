<?php

/* classesViews/eleves.html.twig */
class __TwigTemplate_67af07f2dc1e3a970ba8bcb097397d9e7be8c8f134dbc28859ec971a87ec3f2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classesViews/eleves.html.twig", 1);
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
        $__internal_6a7113c15f0cc3c8876c8047068ffd4552a7d3f4df05760692d565f8e73ebf58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7113c15f0cc3c8876c8047068ffd4552a7d3f4df05760692d565f8e73ebf58->enter($__internal_6a7113c15f0cc3c8876c8047068ffd4552a7d3f4df05760692d565f8e73ebf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/eleves.html.twig"));

        $__internal_2c717a741c8fc0f7f359e2f2c4527ec32e652d7da0e388a8c76055d357e8e182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c717a741c8fc0f7f359e2f2c4527ec32e652d7da0e388a8c76055d357e8e182->enter($__internal_2c717a741c8fc0f7f359e2f2c4527ec32e652d7da0e388a8c76055d357e8e182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a7113c15f0cc3c8876c8047068ffd4552a7d3f4df05760692d565f8e73ebf58->leave($__internal_6a7113c15f0cc3c8876c8047068ffd4552a7d3f4df05760692d565f8e73ebf58_prof);

        
        $__internal_2c717a741c8fc0f7f359e2f2c4527ec32e652d7da0e388a8c76055d357e8e182->leave($__internal_2c717a741c8fc0f7f359e2f2c4527ec32e652d7da0e388a8c76055d357e8e182_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b0ec2cb0ebf129deb24720852513d4ad38788f498b5739cc5f9737abbd41a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0ec2cb0ebf129deb24720852513d4ad38788f498b5739cc5f9737abbd41a02->enter($__internal_4b0ec2cb0ebf129deb24720852513d4ad38788f498b5739cc5f9737abbd41a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32e0f855294fc9495da662ae7021fc537f42fc28fc13ceea1024498821eefbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e0f855294fc9495da662ae7021fc537f42fc28fc13ceea1024498821eefbab->enter($__internal_32e0f855294fc9495da662ae7021fc537f42fc28fc13ceea1024498821eefbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_32e0f855294fc9495da662ae7021fc537f42fc28fc13ceea1024498821eefbab->leave($__internal_32e0f855294fc9495da662ae7021fc537f42fc28fc13ceea1024498821eefbab_prof);

        
        $__internal_4b0ec2cb0ebf129deb24720852513d4ad38788f498b5739cc5f9737abbd41a02->leave($__internal_4b0ec2cb0ebf129deb24720852513d4ad38788f498b5739cc5f9737abbd41a02_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/eleves.html.twig";
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
{% endblock %}", "classesViews/eleves.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\classesViews\\eleves.html.twig");
    }
}
