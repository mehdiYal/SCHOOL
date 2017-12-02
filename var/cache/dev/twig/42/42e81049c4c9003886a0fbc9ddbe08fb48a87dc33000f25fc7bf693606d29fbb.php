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
        $__internal_9ee64617efae5f0a06c5cb778735322ef0fac910d55a1ceec8465f018d9bae6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee64617efae5f0a06c5cb778735322ef0fac910d55a1ceec8465f018d9bae6e->enter($__internal_9ee64617efae5f0a06c5cb778735322ef0fac910d55a1ceec8465f018d9bae6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $__internal_5ea1ee41e0cdd003feb1eb242f2bab527cd2fef39d0b068234abcecf6e520615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea1ee41e0cdd003feb1eb242f2bab527cd2fef39d0b068234abcecf6e520615->enter($__internal_5ea1ee41e0cdd003feb1eb242f2bab527cd2fef39d0b068234abcecf6e520615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ee64617efae5f0a06c5cb778735322ef0fac910d55a1ceec8465f018d9bae6e->leave($__internal_9ee64617efae5f0a06c5cb778735322ef0fac910d55a1ceec8465f018d9bae6e_prof);

        
        $__internal_5ea1ee41e0cdd003feb1eb242f2bab527cd2fef39d0b068234abcecf6e520615->leave($__internal_5ea1ee41e0cdd003feb1eb242f2bab527cd2fef39d0b068234abcecf6e520615_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd66af95e3efeb445dfa6cbf64af87f4aa5fc2a488470ce46f59821d58add721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd66af95e3efeb445dfa6cbf64af87f4aa5fc2a488470ce46f59821d58add721->enter($__internal_dd66af95e3efeb445dfa6cbf64af87f4aa5fc2a488470ce46f59821d58add721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f5fb12c87000c7821e44e7a5641494e88baa97f4d37ca63d51914c0714410f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5fb12c87000c7821e44e7a5641494e88baa97f4d37ca63d51914c0714410f1->enter($__internal_6f5fb12c87000c7821e44e7a5641494e88baa97f4d37ca63d51914c0714410f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f5fb12c87000c7821e44e7a5641494e88baa97f4d37ca63d51914c0714410f1->leave($__internal_6f5fb12c87000c7821e44e7a5641494e88baa97f4d37ca63d51914c0714410f1_prof);

        
        $__internal_dd66af95e3efeb445dfa6cbf64af87f4aa5fc2a488470ce46f59821d58add721->leave($__internal_dd66af95e3efeb445dfa6cbf64af87f4aa5fc2a488470ce46f59821d58add721_prof);

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
