<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c0e2a032e52d248e2b11e3d5c634d3a36115c78bff8d6ebfb823447bd7cd3263 extends Twig_Template
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
        $__internal_ec7e1c325d7595276053934f26b6a17eda9c9871ee9553e835ddd2de5cabb447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7e1c325d7595276053934f26b6a17eda9c9871ee9553e835ddd2de5cabb447->enter($__internal_ec7e1c325d7595276053934f26b6a17eda9c9871ee9553e835ddd2de5cabb447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1bc16258fa7042eb49bfa921489356308bfacd433306106b31f024fae1102bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc16258fa7042eb49bfa921489356308bfacd433306106b31f024fae1102bf3->enter($__internal_1bc16258fa7042eb49bfa921489356308bfacd433306106b31f024fae1102bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec7e1c325d7595276053934f26b6a17eda9c9871ee9553e835ddd2de5cabb447->leave($__internal_ec7e1c325d7595276053934f26b6a17eda9c9871ee9553e835ddd2de5cabb447_prof);

        
        $__internal_1bc16258fa7042eb49bfa921489356308bfacd433306106b31f024fae1102bf3->leave($__internal_1bc16258fa7042eb49bfa921489356308bfacd433306106b31f024fae1102bf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ba7becb22ed1f6ddad2a5240342cd888adbb54ce012bfd8c41c1db26d95db3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba7becb22ed1f6ddad2a5240342cd888adbb54ce012bfd8c41c1db26d95db3a->enter($__internal_7ba7becb22ed1f6ddad2a5240342cd888adbb54ce012bfd8c41c1db26d95db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_adb8d4aefdb1d78e60867c487c32b1e20f4fb45f90263c36c95b6fc178bdb883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb8d4aefdb1d78e60867c487c32b1e20f4fb45f90263c36c95b6fc178bdb883->enter($__internal_adb8d4aefdb1d78e60867c487c32b1e20f4fb45f90263c36c95b6fc178bdb883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_adb8d4aefdb1d78e60867c487c32b1e20f4fb45f90263c36c95b6fc178bdb883->leave($__internal_adb8d4aefdb1d78e60867c487c32b1e20f4fb45f90263c36c95b6fc178bdb883_prof);

        
        $__internal_7ba7becb22ed1f6ddad2a5240342cd888adbb54ce012bfd8c41c1db26d95db3a->leave($__internal_7ba7becb22ed1f6ddad2a5240342cd888adbb54ce012bfd8c41c1db26d95db3a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd29700d03836c80aac974550ff95fc6c55cf3b28400120c034a5dd2779152e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd29700d03836c80aac974550ff95fc6c55cf3b28400120c034a5dd2779152e6->enter($__internal_fd29700d03836c80aac974550ff95fc6c55cf3b28400120c034a5dd2779152e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_27936922bb3f76aa82b28c2a7bd433dbe4f368bdd1eed3ab1508051f56b6565c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27936922bb3f76aa82b28c2a7bd433dbe4f368bdd1eed3ab1508051f56b6565c->enter($__internal_27936922bb3f76aa82b28c2a7bd433dbe4f368bdd1eed3ab1508051f56b6565c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_27936922bb3f76aa82b28c2a7bd433dbe4f368bdd1eed3ab1508051f56b6565c->leave($__internal_27936922bb3f76aa82b28c2a7bd433dbe4f368bdd1eed3ab1508051f56b6565c_prof);

        
        $__internal_fd29700d03836c80aac974550ff95fc6c55cf3b28400120c034a5dd2779152e6->leave($__internal_fd29700d03836c80aac974550ff95fc6c55cf3b28400120c034a5dd2779152e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5001aed6bbded2af51ea2358ec65bf2f38ad5c9ea2b543af6181ab6b0be3ce70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5001aed6bbded2af51ea2358ec65bf2f38ad5c9ea2b543af6181ab6b0be3ce70->enter($__internal_5001aed6bbded2af51ea2358ec65bf2f38ad5c9ea2b543af6181ab6b0be3ce70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1564f69ac4c227acca835540107a0eded2af0fffea264200ea76feddf61ecc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1564f69ac4c227acca835540107a0eded2af0fffea264200ea76feddf61ecc94->enter($__internal_1564f69ac4c227acca835540107a0eded2af0fffea264200ea76feddf61ecc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1564f69ac4c227acca835540107a0eded2af0fffea264200ea76feddf61ecc94->leave($__internal_1564f69ac4c227acca835540107a0eded2af0fffea264200ea76feddf61ecc94_prof);

        
        $__internal_5001aed6bbded2af51ea2358ec65bf2f38ad5c9ea2b543af6181ab6b0be3ce70->leave($__internal_5001aed6bbded2af51ea2358ec65bf2f38ad5c9ea2b543af6181ab6b0be3ce70_prof);

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
