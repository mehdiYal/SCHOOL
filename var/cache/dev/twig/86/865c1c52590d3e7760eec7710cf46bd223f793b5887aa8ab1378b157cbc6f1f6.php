<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7ac15372e52d57efc7627cb1929cc464ad64435309abed149058a968c81b6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ac15372e52d57efc7627cb1929cc464ad64435309abed149058a968c81b6e0->enter($__internal_f7ac15372e52d57efc7627cb1929cc464ad64435309abed149058a968c81b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_31f5dd789cb0243bb844a39d2d028396b93c5d20774d875e733a5ef8314fdca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f5dd789cb0243bb844a39d2d028396b93c5d20774d875e733a5ef8314fdca6->enter($__internal_31f5dd789cb0243bb844a39d2d028396b93c5d20774d875e733a5ef8314fdca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ac15372e52d57efc7627cb1929cc464ad64435309abed149058a968c81b6e0->leave($__internal_f7ac15372e52d57efc7627cb1929cc464ad64435309abed149058a968c81b6e0_prof);

        
        $__internal_31f5dd789cb0243bb844a39d2d028396b93c5d20774d875e733a5ef8314fdca6->leave($__internal_31f5dd789cb0243bb844a39d2d028396b93c5d20774d875e733a5ef8314fdca6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83e67c31b0d3586fbfda2b71cf381e161b166b24d573733d7f51f14573443b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e67c31b0d3586fbfda2b71cf381e161b166b24d573733d7f51f14573443b84->enter($__internal_83e67c31b0d3586fbfda2b71cf381e161b166b24d573733d7f51f14573443b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_57b812331c622a53e8e419238943aad2b01b4e6d3e6958fc74c977bfe1024172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b812331c622a53e8e419238943aad2b01b4e6d3e6958fc74c977bfe1024172->enter($__internal_57b812331c622a53e8e419238943aad2b01b4e6d3e6958fc74c977bfe1024172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57b812331c622a53e8e419238943aad2b01b4e6d3e6958fc74c977bfe1024172->leave($__internal_57b812331c622a53e8e419238943aad2b01b4e6d3e6958fc74c977bfe1024172_prof);

        
        $__internal_83e67c31b0d3586fbfda2b71cf381e161b166b24d573733d7f51f14573443b84->leave($__internal_83e67c31b0d3586fbfda2b71cf381e161b166b24d573733d7f51f14573443b84_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2eba591803e7b7796ace2af5d50caefbb8387b9f2988265445c390094e2628a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eba591803e7b7796ace2af5d50caefbb8387b9f2988265445c390094e2628a6->enter($__internal_2eba591803e7b7796ace2af5d50caefbb8387b9f2988265445c390094e2628a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13cca94904df57ee89d88451acea3855a6707111ad00fa6a4f186b91a0667de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cca94904df57ee89d88451acea3855a6707111ad00fa6a4f186b91a0667de8->enter($__internal_13cca94904df57ee89d88451acea3855a6707111ad00fa6a4f186b91a0667de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13cca94904df57ee89d88451acea3855a6707111ad00fa6a4f186b91a0667de8->leave($__internal_13cca94904df57ee89d88451acea3855a6707111ad00fa6a4f186b91a0667de8_prof);

        
        $__internal_2eba591803e7b7796ace2af5d50caefbb8387b9f2988265445c390094e2628a6->leave($__internal_2eba591803e7b7796ace2af5d50caefbb8387b9f2988265445c390094e2628a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_517f9b0fb27225ce4ca81239ddfda3716e6c520378d9c8e5d261cedd21fb113d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517f9b0fb27225ce4ca81239ddfda3716e6c520378d9c8e5d261cedd21fb113d->enter($__internal_517f9b0fb27225ce4ca81239ddfda3716e6c520378d9c8e5d261cedd21fb113d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_424839d524b573ba2f9fe3c06690150d975d913fa15e23bd866032f3032dd5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424839d524b573ba2f9fe3c06690150d975d913fa15e23bd866032f3032dd5fd->enter($__internal_424839d524b573ba2f9fe3c06690150d975d913fa15e23bd866032f3032dd5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_424839d524b573ba2f9fe3c06690150d975d913fa15e23bd866032f3032dd5fd->leave($__internal_424839d524b573ba2f9fe3c06690150d975d913fa15e23bd866032f3032dd5fd_prof);

        
        $__internal_517f9b0fb27225ce4ca81239ddfda3716e6c520378d9c8e5d261cedd21fb113d->leave($__internal_517f9b0fb27225ce4ca81239ddfda3716e6c520378d9c8e5d261cedd21fb113d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
