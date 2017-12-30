<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f7197a4fa86856592f602042becba0c0b9858a8b9174d669490bfa75fcb633cd extends Twig_Template
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
        $__internal_6ece9021e70118abc1c7ee3177e8e9a1dd7940c4fd8132fe407167e9756112a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ece9021e70118abc1c7ee3177e8e9a1dd7940c4fd8132fe407167e9756112a0->enter($__internal_6ece9021e70118abc1c7ee3177e8e9a1dd7940c4fd8132fe407167e9756112a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ff451eae789853e55d52e68b5fa8028d950d8e2e3547e9699f6f32bcf3919349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff451eae789853e55d52e68b5fa8028d950d8e2e3547e9699f6f32bcf3919349->enter($__internal_ff451eae789853e55d52e68b5fa8028d950d8e2e3547e9699f6f32bcf3919349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ece9021e70118abc1c7ee3177e8e9a1dd7940c4fd8132fe407167e9756112a0->leave($__internal_6ece9021e70118abc1c7ee3177e8e9a1dd7940c4fd8132fe407167e9756112a0_prof);

        
        $__internal_ff451eae789853e55d52e68b5fa8028d950d8e2e3547e9699f6f32bcf3919349->leave($__internal_ff451eae789853e55d52e68b5fa8028d950d8e2e3547e9699f6f32bcf3919349_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4033d19b2cb2fef97c071502688171433c12b89bd749e806a90792916a58a37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4033d19b2cb2fef97c071502688171433c12b89bd749e806a90792916a58a37c->enter($__internal_4033d19b2cb2fef97c071502688171433c12b89bd749e806a90792916a58a37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9002da0d832bbb7cd8e8448a48c043526270b65c746114bb9c45fb913c381e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9002da0d832bbb7cd8e8448a48c043526270b65c746114bb9c45fb913c381e56->enter($__internal_9002da0d832bbb7cd8e8448a48c043526270b65c746114bb9c45fb913c381e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9002da0d832bbb7cd8e8448a48c043526270b65c746114bb9c45fb913c381e56->leave($__internal_9002da0d832bbb7cd8e8448a48c043526270b65c746114bb9c45fb913c381e56_prof);

        
        $__internal_4033d19b2cb2fef97c071502688171433c12b89bd749e806a90792916a58a37c->leave($__internal_4033d19b2cb2fef97c071502688171433c12b89bd749e806a90792916a58a37c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_90710cc0af6dc98362c6f7ec10ae9f3515860b1894d63a6f304f6c3cbd8020c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90710cc0af6dc98362c6f7ec10ae9f3515860b1894d63a6f304f6c3cbd8020c6->enter($__internal_90710cc0af6dc98362c6f7ec10ae9f3515860b1894d63a6f304f6c3cbd8020c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d751a298db9fb6cf817fc906ba26957b5365b2e5e5fe1d86568d74286634bbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d751a298db9fb6cf817fc906ba26957b5365b2e5e5fe1d86568d74286634bbc8->enter($__internal_d751a298db9fb6cf817fc906ba26957b5365b2e5e5fe1d86568d74286634bbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d751a298db9fb6cf817fc906ba26957b5365b2e5e5fe1d86568d74286634bbc8->leave($__internal_d751a298db9fb6cf817fc906ba26957b5365b2e5e5fe1d86568d74286634bbc8_prof);

        
        $__internal_90710cc0af6dc98362c6f7ec10ae9f3515860b1894d63a6f304f6c3cbd8020c6->leave($__internal_90710cc0af6dc98362c6f7ec10ae9f3515860b1894d63a6f304f6c3cbd8020c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56b33f81dc7aff41142f9a9f220cb2ef81511ca9ab4865561f01d9e0cd445a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b33f81dc7aff41142f9a9f220cb2ef81511ca9ab4865561f01d9e0cd445a39->enter($__internal_56b33f81dc7aff41142f9a9f220cb2ef81511ca9ab4865561f01d9e0cd445a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8a00702cde68051c2e426f7eadecd6b8fc14f61ca495804db916e953890c596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a00702cde68051c2e426f7eadecd6b8fc14f61ca495804db916e953890c596->enter($__internal_d8a00702cde68051c2e426f7eadecd6b8fc14f61ca495804db916e953890c596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8a00702cde68051c2e426f7eadecd6b8fc14f61ca495804db916e953890c596->leave($__internal_d8a00702cde68051c2e426f7eadecd6b8fc14f61ca495804db916e953890c596_prof);

        
        $__internal_56b33f81dc7aff41142f9a9f220cb2ef81511ca9ab4865561f01d9e0cd445a39->leave($__internal_56b33f81dc7aff41142f9a9f220cb2ef81511ca9ab4865561f01d9e0cd445a39_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
