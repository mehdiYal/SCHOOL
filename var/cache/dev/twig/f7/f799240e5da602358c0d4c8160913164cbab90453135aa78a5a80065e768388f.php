<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5187bd2f47a43d0d4dcf4cd93268fc6fe9f9d736381a53361a7996b360a7bbd1 extends Twig_Template
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
        $__internal_56e3c9c1510ed816f5794d4d43481439c439887885ba92b855680e53e3221ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e3c9c1510ed816f5794d4d43481439c439887885ba92b855680e53e3221ea7->enter($__internal_56e3c9c1510ed816f5794d4d43481439c439887885ba92b855680e53e3221ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9eac2747f4c7f43fc52b0ebd7eb9d3fd0bc3f21bd12e25367f588f83db42e9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eac2747f4c7f43fc52b0ebd7eb9d3fd0bc3f21bd12e25367f588f83db42e9b5->enter($__internal_9eac2747f4c7f43fc52b0ebd7eb9d3fd0bc3f21bd12e25367f588f83db42e9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56e3c9c1510ed816f5794d4d43481439c439887885ba92b855680e53e3221ea7->leave($__internal_56e3c9c1510ed816f5794d4d43481439c439887885ba92b855680e53e3221ea7_prof);

        
        $__internal_9eac2747f4c7f43fc52b0ebd7eb9d3fd0bc3f21bd12e25367f588f83db42e9b5->leave($__internal_9eac2747f4c7f43fc52b0ebd7eb9d3fd0bc3f21bd12e25367f588f83db42e9b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2d15d9cd513981d52b514d00aeaa929198e0df038f1c789b0f298fe1373d8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d15d9cd513981d52b514d00aeaa929198e0df038f1c789b0f298fe1373d8de->enter($__internal_c2d15d9cd513981d52b514d00aeaa929198e0df038f1c789b0f298fe1373d8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b40534d359bd7b78426eb3ed8c4c88efd94b2e409df9fb4edd5629c57f575d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40534d359bd7b78426eb3ed8c4c88efd94b2e409df9fb4edd5629c57f575d90->enter($__internal_b40534d359bd7b78426eb3ed8c4c88efd94b2e409df9fb4edd5629c57f575d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b40534d359bd7b78426eb3ed8c4c88efd94b2e409df9fb4edd5629c57f575d90->leave($__internal_b40534d359bd7b78426eb3ed8c4c88efd94b2e409df9fb4edd5629c57f575d90_prof);

        
        $__internal_c2d15d9cd513981d52b514d00aeaa929198e0df038f1c789b0f298fe1373d8de->leave($__internal_c2d15d9cd513981d52b514d00aeaa929198e0df038f1c789b0f298fe1373d8de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83f138504f25224d82ae1110038c5ebc1437225c215c0f55ee2528a8df42d343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f138504f25224d82ae1110038c5ebc1437225c215c0f55ee2528a8df42d343->enter($__internal_83f138504f25224d82ae1110038c5ebc1437225c215c0f55ee2528a8df42d343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_230b6fa4f7e3fe2b578f9697a48ddc2d0f677ef5e36530d27f6d632ad4c91dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230b6fa4f7e3fe2b578f9697a48ddc2d0f677ef5e36530d27f6d632ad4c91dc8->enter($__internal_230b6fa4f7e3fe2b578f9697a48ddc2d0f677ef5e36530d27f6d632ad4c91dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_230b6fa4f7e3fe2b578f9697a48ddc2d0f677ef5e36530d27f6d632ad4c91dc8->leave($__internal_230b6fa4f7e3fe2b578f9697a48ddc2d0f677ef5e36530d27f6d632ad4c91dc8_prof);

        
        $__internal_83f138504f25224d82ae1110038c5ebc1437225c215c0f55ee2528a8df42d343->leave($__internal_83f138504f25224d82ae1110038c5ebc1437225c215c0f55ee2528a8df42d343_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2228369cc729769fc269dcd65bff2715b225821737232c47c8c8575e04580564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2228369cc729769fc269dcd65bff2715b225821737232c47c8c8575e04580564->enter($__internal_2228369cc729769fc269dcd65bff2715b225821737232c47c8c8575e04580564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29fe3b94e01d1e115b82642a6cedb360561f6eff45c03ea6d67d13c2f7bffe5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fe3b94e01d1e115b82642a6cedb360561f6eff45c03ea6d67d13c2f7bffe5c->enter($__internal_29fe3b94e01d1e115b82642a6cedb360561f6eff45c03ea6d67d13c2f7bffe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_29fe3b94e01d1e115b82642a6cedb360561f6eff45c03ea6d67d13c2f7bffe5c->leave($__internal_29fe3b94e01d1e115b82642a6cedb360561f6eff45c03ea6d67d13c2f7bffe5c_prof);

        
        $__internal_2228369cc729769fc269dcd65bff2715b225821737232c47c8c8575e04580564->leave($__internal_2228369cc729769fc269dcd65bff2715b225821737232c47c8c8575e04580564_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
