<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fe5e29606ca5d2934d5bd9b7de199c2c2c1450531335392d71b4f641cb54cfaf extends Twig_Template
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
        $__internal_96e4fcb22cf01eb27164c57fa2407e0fefd84084c55f9956a8888d4ecbcb9d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e4fcb22cf01eb27164c57fa2407e0fefd84084c55f9956a8888d4ecbcb9d50->enter($__internal_96e4fcb22cf01eb27164c57fa2407e0fefd84084c55f9956a8888d4ecbcb9d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3b7698f72ae111ccf82a84d7258b1b396c5e909a10a088826a13bccf5cd3de72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7698f72ae111ccf82a84d7258b1b396c5e909a10a088826a13bccf5cd3de72->enter($__internal_3b7698f72ae111ccf82a84d7258b1b396c5e909a10a088826a13bccf5cd3de72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e4fcb22cf01eb27164c57fa2407e0fefd84084c55f9956a8888d4ecbcb9d50->leave($__internal_96e4fcb22cf01eb27164c57fa2407e0fefd84084c55f9956a8888d4ecbcb9d50_prof);

        
        $__internal_3b7698f72ae111ccf82a84d7258b1b396c5e909a10a088826a13bccf5cd3de72->leave($__internal_3b7698f72ae111ccf82a84d7258b1b396c5e909a10a088826a13bccf5cd3de72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50adfa57af4ea71d92345bb8384d6ed1bff3d3f130e066f6432930eea802f6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50adfa57af4ea71d92345bb8384d6ed1bff3d3f130e066f6432930eea802f6f2->enter($__internal_50adfa57af4ea71d92345bb8384d6ed1bff3d3f130e066f6432930eea802f6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1cd64ab564f2329d89492263af794c9ca30549411fe2bffd10f9ef16b33db69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1cd64ab564f2329d89492263af794c9ca30549411fe2bffd10f9ef16b33db69->enter($__internal_b1cd64ab564f2329d89492263af794c9ca30549411fe2bffd10f9ef16b33db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1cd64ab564f2329d89492263af794c9ca30549411fe2bffd10f9ef16b33db69->leave($__internal_b1cd64ab564f2329d89492263af794c9ca30549411fe2bffd10f9ef16b33db69_prof);

        
        $__internal_50adfa57af4ea71d92345bb8384d6ed1bff3d3f130e066f6432930eea802f6f2->leave($__internal_50adfa57af4ea71d92345bb8384d6ed1bff3d3f130e066f6432930eea802f6f2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a903b3e67090c22682ae1eee36aff1c6498a06b6e19f3e08ee430f5d391f6c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a903b3e67090c22682ae1eee36aff1c6498a06b6e19f3e08ee430f5d391f6c60->enter($__internal_a903b3e67090c22682ae1eee36aff1c6498a06b6e19f3e08ee430f5d391f6c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_028f49f391e7c84b5c8ba9f7f7f4318e613bfef500378cf9041cbe0cd864ebad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028f49f391e7c84b5c8ba9f7f7f4318e613bfef500378cf9041cbe0cd864ebad->enter($__internal_028f49f391e7c84b5c8ba9f7f7f4318e613bfef500378cf9041cbe0cd864ebad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_028f49f391e7c84b5c8ba9f7f7f4318e613bfef500378cf9041cbe0cd864ebad->leave($__internal_028f49f391e7c84b5c8ba9f7f7f4318e613bfef500378cf9041cbe0cd864ebad_prof);

        
        $__internal_a903b3e67090c22682ae1eee36aff1c6498a06b6e19f3e08ee430f5d391f6c60->leave($__internal_a903b3e67090c22682ae1eee36aff1c6498a06b6e19f3e08ee430f5d391f6c60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e60b316e31e0c5ded695ed6cc0f2da47b6081e0f2fec1dd27fec68a1cc83f5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60b316e31e0c5ded695ed6cc0f2da47b6081e0f2fec1dd27fec68a1cc83f5e2->enter($__internal_e60b316e31e0c5ded695ed6cc0f2da47b6081e0f2fec1dd27fec68a1cc83f5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_073c9e5b987504cd6586e460bd4d13e7edbf4117b9bb44daba84f4c64c4d37dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073c9e5b987504cd6586e460bd4d13e7edbf4117b9bb44daba84f4c64c4d37dc->enter($__internal_073c9e5b987504cd6586e460bd4d13e7edbf4117b9bb44daba84f4c64c4d37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_073c9e5b987504cd6586e460bd4d13e7edbf4117b9bb44daba84f4c64c4d37dc->leave($__internal_073c9e5b987504cd6586e460bd4d13e7edbf4117b9bb44daba84f4c64c4d37dc_prof);

        
        $__internal_e60b316e31e0c5ded695ed6cc0f2da47b6081e0f2fec1dd27fec68a1cc83f5e2->leave($__internal_e60b316e31e0c5ded695ed6cc0f2da47b6081e0f2fec1dd27fec68a1cc83f5e2_prof);

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
