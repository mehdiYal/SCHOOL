<?php

/* :default:dashSuperAdmin.html.twig */
class __TwigTemplate_e7998784a24c38a82aa08eac7562feb1870b28f8d3be8af3fb33e0e1dba35670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", ":default:dashSuperAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4a80a5a4152cb1fbff26cf36d4cf7ce7441ee3834c33c77316d570b69d4bdfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a80a5a4152cb1fbff26cf36d4cf7ce7441ee3834c33c77316d570b69d4bdfa->enter($__internal_b4a80a5a4152cb1fbff26cf36d4cf7ce7441ee3834c33c77316d570b69d4bdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $__internal_dfd8499d106a423e1bf4ff8e944fac48a8d1608b467ed9555bd025cc968de618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd8499d106a423e1bf4ff8e944fac48a8d1608b467ed9555bd025cc968de618->enter($__internal_dfd8499d106a423e1bf4ff8e944fac48a8d1608b467ed9555bd025cc968de618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a80a5a4152cb1fbff26cf36d4cf7ce7441ee3834c33c77316d570b69d4bdfa->leave($__internal_b4a80a5a4152cb1fbff26cf36d4cf7ce7441ee3834c33c77316d570b69d4bdfa_prof);

        
        $__internal_dfd8499d106a423e1bf4ff8e944fac48a8d1608b467ed9555bd025cc968de618->leave($__internal_dfd8499d106a423e1bf4ff8e944fac48a8d1608b467ed9555bd025cc968de618_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a15b0e9ba523286b02ad13da926620e1217e46f87a40296b2e090b42bd525fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a15b0e9ba523286b02ad13da926620e1217e46f87a40296b2e090b42bd525fd->enter($__internal_6a15b0e9ba523286b02ad13da926620e1217e46f87a40296b2e090b42bd525fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be02a4644e1848a9bfea33b22c7f85f0527e7db45d70099959b7b4d2cc551e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be02a4644e1848a9bfea33b22c7f85f0527e7db45d70099959b7b4d2cc551e93->enter($__internal_be02a4644e1848a9bfea33b22c7f85f0527e7db45d70099959b7b4d2cc551e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_be02a4644e1848a9bfea33b22c7f85f0527e7db45d70099959b7b4d2cc551e93->leave($__internal_be02a4644e1848a9bfea33b22c7f85f0527e7db45d70099959b7b4d2cc551e93_prof);

        
        $__internal_6a15b0e9ba523286b02ad13da926620e1217e46f87a40296b2e090b42bd525fd->leave($__internal_6a15b0e9ba523286b02ad13da926620e1217e46f87a40296b2e090b42bd525fd_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashSuperAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseSuper.html.twig' %}

{% block body %}
    
{% endblock %}", ":default:dashSuperAdmin.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/dashSuperAdmin.html.twig");
    }
}
