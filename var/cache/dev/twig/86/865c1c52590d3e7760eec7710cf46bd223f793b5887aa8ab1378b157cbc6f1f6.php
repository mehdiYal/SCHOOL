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
        $__internal_7470855b2137b8e30022cdc8758dd530f7ab6f4871a955520662c3515280af3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7470855b2137b8e30022cdc8758dd530f7ab6f4871a955520662c3515280af3c->enter($__internal_7470855b2137b8e30022cdc8758dd530f7ab6f4871a955520662c3515280af3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_feb0d473a32f0e68277b61c72068e06d41f525a4ea8d9816a7c967aa68eff4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb0d473a32f0e68277b61c72068e06d41f525a4ea8d9816a7c967aa68eff4ff->enter($__internal_feb0d473a32f0e68277b61c72068e06d41f525a4ea8d9816a7c967aa68eff4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7470855b2137b8e30022cdc8758dd530f7ab6f4871a955520662c3515280af3c->leave($__internal_7470855b2137b8e30022cdc8758dd530f7ab6f4871a955520662c3515280af3c_prof);

        
        $__internal_feb0d473a32f0e68277b61c72068e06d41f525a4ea8d9816a7c967aa68eff4ff->leave($__internal_feb0d473a32f0e68277b61c72068e06d41f525a4ea8d9816a7c967aa68eff4ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_665ad0319bf21565e5464f3bc23a88f90bb58bcae5f528158f202b7ff4fd3a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665ad0319bf21565e5464f3bc23a88f90bb58bcae5f528158f202b7ff4fd3a3b->enter($__internal_665ad0319bf21565e5464f3bc23a88f90bb58bcae5f528158f202b7ff4fd3a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7a30496427a31509e44ad679c7c92c0f6075c7ca289babccdc1657da5a8c507d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a30496427a31509e44ad679c7c92c0f6075c7ca289babccdc1657da5a8c507d->enter($__internal_7a30496427a31509e44ad679c7c92c0f6075c7ca289babccdc1657da5a8c507d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a30496427a31509e44ad679c7c92c0f6075c7ca289babccdc1657da5a8c507d->leave($__internal_7a30496427a31509e44ad679c7c92c0f6075c7ca289babccdc1657da5a8c507d_prof);

        
        $__internal_665ad0319bf21565e5464f3bc23a88f90bb58bcae5f528158f202b7ff4fd3a3b->leave($__internal_665ad0319bf21565e5464f3bc23a88f90bb58bcae5f528158f202b7ff4fd3a3b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bca3eac3961ce3463e22acadeccb42a51b27403a01240329222fd17e4739aeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca3eac3961ce3463e22acadeccb42a51b27403a01240329222fd17e4739aeec->enter($__internal_bca3eac3961ce3463e22acadeccb42a51b27403a01240329222fd17e4739aeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_281fec60428bcc65b663d0c46f9f931c9c01c9f884487491de585a29f1abc32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281fec60428bcc65b663d0c46f9f931c9c01c9f884487491de585a29f1abc32b->enter($__internal_281fec60428bcc65b663d0c46f9f931c9c01c9f884487491de585a29f1abc32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_281fec60428bcc65b663d0c46f9f931c9c01c9f884487491de585a29f1abc32b->leave($__internal_281fec60428bcc65b663d0c46f9f931c9c01c9f884487491de585a29f1abc32b_prof);

        
        $__internal_bca3eac3961ce3463e22acadeccb42a51b27403a01240329222fd17e4739aeec->leave($__internal_bca3eac3961ce3463e22acadeccb42a51b27403a01240329222fd17e4739aeec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dff33422f40a9ef9279920b662897041ba0f9c1cb9e51d7b3c0c2330d78ae161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff33422f40a9ef9279920b662897041ba0f9c1cb9e51d7b3c0c2330d78ae161->enter($__internal_dff33422f40a9ef9279920b662897041ba0f9c1cb9e51d7b3c0c2330d78ae161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6775f557ccbbb4d8bd042b0bc1902126baf98915cf0a67ca22d2dc51dc9bc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6775f557ccbbb4d8bd042b0bc1902126baf98915cf0a67ca22d2dc51dc9bc58->enter($__internal_a6775f557ccbbb4d8bd042b0bc1902126baf98915cf0a67ca22d2dc51dc9bc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6775f557ccbbb4d8bd042b0bc1902126baf98915cf0a67ca22d2dc51dc9bc58->leave($__internal_a6775f557ccbbb4d8bd042b0bc1902126baf98915cf0a67ca22d2dc51dc9bc58_prof);

        
        $__internal_dff33422f40a9ef9279920b662897041ba0f9c1cb9e51d7b3c0c2330d78ae161->leave($__internal_dff33422f40a9ef9279920b662897041ba0f9c1cb9e51d7b3c0c2330d78ae161_prof);

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
