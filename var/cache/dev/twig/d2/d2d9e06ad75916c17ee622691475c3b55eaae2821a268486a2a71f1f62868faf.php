<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_afe498388483e73620bb72b53c166a3add85bcab63927632004d2dd723a869ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe498388483e73620bb72b53c166a3add85bcab63927632004d2dd723a869ad->enter($__internal_afe498388483e73620bb72b53c166a3add85bcab63927632004d2dd723a869ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_98e183e710c803b27d68695fca02ca82e8b0de2fc70133215cb804fa37b9f779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e183e710c803b27d68695fca02ca82e8b0de2fc70133215cb804fa37b9f779->enter($__internal_98e183e710c803b27d68695fca02ca82e8b0de2fc70133215cb804fa37b9f779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afe498388483e73620bb72b53c166a3add85bcab63927632004d2dd723a869ad->leave($__internal_afe498388483e73620bb72b53c166a3add85bcab63927632004d2dd723a869ad_prof);

        
        $__internal_98e183e710c803b27d68695fca02ca82e8b0de2fc70133215cb804fa37b9f779->leave($__internal_98e183e710c803b27d68695fca02ca82e8b0de2fc70133215cb804fa37b9f779_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_584985271cd135e238646db08550f5b35d532a304820dc074db4d675aee588a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584985271cd135e238646db08550f5b35d532a304820dc074db4d675aee588a6->enter($__internal_584985271cd135e238646db08550f5b35d532a304820dc074db4d675aee588a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ffd35018a0f69293f9f661148f9fe963b34c00b7ba0e0efa1c52a978a70029f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffd35018a0f69293f9f661148f9fe963b34c00b7ba0e0efa1c52a978a70029f->enter($__internal_5ffd35018a0f69293f9f661148f9fe963b34c00b7ba0e0efa1c52a978a70029f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ffd35018a0f69293f9f661148f9fe963b34c00b7ba0e0efa1c52a978a70029f->leave($__internal_5ffd35018a0f69293f9f661148f9fe963b34c00b7ba0e0efa1c52a978a70029f_prof);

        
        $__internal_584985271cd135e238646db08550f5b35d532a304820dc074db4d675aee588a6->leave($__internal_584985271cd135e238646db08550f5b35d532a304820dc074db4d675aee588a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49214f69e68fecf33c875625905abec16a8b8d5ba5bc9c16eb3ffc496f2d4014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49214f69e68fecf33c875625905abec16a8b8d5ba5bc9c16eb3ffc496f2d4014->enter($__internal_49214f69e68fecf33c875625905abec16a8b8d5ba5bc9c16eb3ffc496f2d4014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b38c6a1c8bb1db4a71177bf04466cc5c2cfc33ce621a355612ce4ff87ce396d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b38c6a1c8bb1db4a71177bf04466cc5c2cfc33ce621a355612ce4ff87ce396d->enter($__internal_2b38c6a1c8bb1db4a71177bf04466cc5c2cfc33ce621a355612ce4ff87ce396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b38c6a1c8bb1db4a71177bf04466cc5c2cfc33ce621a355612ce4ff87ce396d->leave($__internal_2b38c6a1c8bb1db4a71177bf04466cc5c2cfc33ce621a355612ce4ff87ce396d_prof);

        
        $__internal_49214f69e68fecf33c875625905abec16a8b8d5ba5bc9c16eb3ffc496f2d4014->leave($__internal_49214f69e68fecf33c875625905abec16a8b8d5ba5bc9c16eb3ffc496f2d4014_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc82f200305649b891a5814cd1a64f46e5231b537855a6d77ad412a99aede471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc82f200305649b891a5814cd1a64f46e5231b537855a6d77ad412a99aede471->enter($__internal_cc82f200305649b891a5814cd1a64f46e5231b537855a6d77ad412a99aede471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0a02fe49481b3c61789843663242cbbc13dc3ce40b6d9b87c3c04cf161bc1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a02fe49481b3c61789843663242cbbc13dc3ce40b6d9b87c3c04cf161bc1a6->enter($__internal_a0a02fe49481b3c61789843663242cbbc13dc3ce40b6d9b87c3c04cf161bc1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0a02fe49481b3c61789843663242cbbc13dc3ce40b6d9b87c3c04cf161bc1a6->leave($__internal_a0a02fe49481b3c61789843663242cbbc13dc3ce40b6d9b87c3c04cf161bc1a6_prof);

        
        $__internal_cc82f200305649b891a5814cd1a64f46e5231b537855a6d77ad412a99aede471->leave($__internal_cc82f200305649b891a5814cd1a64f46e5231b537855a6d77ad412a99aede471_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
