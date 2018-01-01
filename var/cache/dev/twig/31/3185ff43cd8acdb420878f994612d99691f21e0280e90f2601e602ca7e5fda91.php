<?php

/* :classesViews:eleves.html.twig */
class __TwigTemplate_ea70339a98417b5c2d53097b560056baf80ce908f79d3b3fcf581779894b788b extends Twig_Template
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
        $__internal_82ce2fb581902872591f55e85cf0ea9cf3b9f37c46fb65d373dc05d35126f4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ce2fb581902872591f55e85cf0ea9cf3b9f37c46fb65d373dc05d35126f4bf->enter($__internal_82ce2fb581902872591f55e85cf0ea9cf3b9f37c46fb65d373dc05d35126f4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $__internal_ab0777bf3e0f6b44f48197d3147502d344adeb44865dd5516c27c9837698f077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0777bf3e0f6b44f48197d3147502d344adeb44865dd5516c27c9837698f077->enter($__internal_ab0777bf3e0f6b44f48197d3147502d344adeb44865dd5516c27c9837698f077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ce2fb581902872591f55e85cf0ea9cf3b9f37c46fb65d373dc05d35126f4bf->leave($__internal_82ce2fb581902872591f55e85cf0ea9cf3b9f37c46fb65d373dc05d35126f4bf_prof);

        
        $__internal_ab0777bf3e0f6b44f48197d3147502d344adeb44865dd5516c27c9837698f077->leave($__internal_ab0777bf3e0f6b44f48197d3147502d344adeb44865dd5516c27c9837698f077_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e2726d0860e990e04aa8e1e619592bd5040dd2b9e10a3b7473f2d0015493bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2726d0860e990e04aa8e1e619592bd5040dd2b9e10a3b7473f2d0015493bcd->enter($__internal_9e2726d0860e990e04aa8e1e619592bd5040dd2b9e10a3b7473f2d0015493bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4cc48ab859502f9b95fada040c50ae5ccbe7d32b668cdf90634f579f92d5ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cc48ab859502f9b95fada040c50ae5ccbe7d32b668cdf90634f579f92d5ca7->enter($__internal_f4cc48ab859502f9b95fada040c50ae5ccbe7d32b668cdf90634f579f92d5ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f4cc48ab859502f9b95fada040c50ae5ccbe7d32b668cdf90634f579f92d5ca7->leave($__internal_f4cc48ab859502f9b95fada040c50ae5ccbe7d32b668cdf90634f579f92d5ca7_prof);

        
        $__internal_9e2726d0860e990e04aa8e1e619592bd5040dd2b9e10a3b7473f2d0015493bcd->leave($__internal_9e2726d0860e990e04aa8e1e619592bd5040dd2b9e10a3b7473f2d0015493bcd_prof);

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
