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
        $__internal_8d10f5aee19a59b1f5a24b7564dace8c29786c03a1790fd062fdf527119b7935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d10f5aee19a59b1f5a24b7564dace8c29786c03a1790fd062fdf527119b7935->enter($__internal_8d10f5aee19a59b1f5a24b7564dace8c29786c03a1790fd062fdf527119b7935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_82001a13d348bb9d00ffad11ea053d37b8c5f43ef965ab5c36838070818d94b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82001a13d348bb9d00ffad11ea053d37b8c5f43ef965ab5c36838070818d94b6->enter($__internal_82001a13d348bb9d00ffad11ea053d37b8c5f43ef965ab5c36838070818d94b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d10f5aee19a59b1f5a24b7564dace8c29786c03a1790fd062fdf527119b7935->leave($__internal_8d10f5aee19a59b1f5a24b7564dace8c29786c03a1790fd062fdf527119b7935_prof);

        
        $__internal_82001a13d348bb9d00ffad11ea053d37b8c5f43ef965ab5c36838070818d94b6->leave($__internal_82001a13d348bb9d00ffad11ea053d37b8c5f43ef965ab5c36838070818d94b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e21f38421ddffa26320124820b7a5b7b22e172acc32d65a336f3914c8389bcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21f38421ddffa26320124820b7a5b7b22e172acc32d65a336f3914c8389bcfc->enter($__internal_e21f38421ddffa26320124820b7a5b7b22e172acc32d65a336f3914c8389bcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2aa1fa0112614b5d3e0ddef0d8c71a126bb196bd7de6005450e96ac0b6bb940e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa1fa0112614b5d3e0ddef0d8c71a126bb196bd7de6005450e96ac0b6bb940e->enter($__internal_2aa1fa0112614b5d3e0ddef0d8c71a126bb196bd7de6005450e96ac0b6bb940e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2aa1fa0112614b5d3e0ddef0d8c71a126bb196bd7de6005450e96ac0b6bb940e->leave($__internal_2aa1fa0112614b5d3e0ddef0d8c71a126bb196bd7de6005450e96ac0b6bb940e_prof);

        
        $__internal_e21f38421ddffa26320124820b7a5b7b22e172acc32d65a336f3914c8389bcfc->leave($__internal_e21f38421ddffa26320124820b7a5b7b22e172acc32d65a336f3914c8389bcfc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c606fcf59fa088acae6775bb84447ae1915d490c52c424c9438826087da11ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c606fcf59fa088acae6775bb84447ae1915d490c52c424c9438826087da11ce->enter($__internal_5c606fcf59fa088acae6775bb84447ae1915d490c52c424c9438826087da11ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e5223d59ab6d154bdb6bfc64c801b70f69bea752337439150ef72a461ed82320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5223d59ab6d154bdb6bfc64c801b70f69bea752337439150ef72a461ed82320->enter($__internal_e5223d59ab6d154bdb6bfc64c801b70f69bea752337439150ef72a461ed82320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5223d59ab6d154bdb6bfc64c801b70f69bea752337439150ef72a461ed82320->leave($__internal_e5223d59ab6d154bdb6bfc64c801b70f69bea752337439150ef72a461ed82320_prof);

        
        $__internal_5c606fcf59fa088acae6775bb84447ae1915d490c52c424c9438826087da11ce->leave($__internal_5c606fcf59fa088acae6775bb84447ae1915d490c52c424c9438826087da11ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f6c09b34269ddc9f2540fdfbe17a494f98d17009a532b4fb55925c379d0eb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6c09b34269ddc9f2540fdfbe17a494f98d17009a532b4fb55925c379d0eb03->enter($__internal_4f6c09b34269ddc9f2540fdfbe17a494f98d17009a532b4fb55925c379d0eb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa5782183f746b3320b352179c7a38d9361d8bf4e7a4722777f5a21e8a700afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5782183f746b3320b352179c7a38d9361d8bf4e7a4722777f5a21e8a700afc->enter($__internal_fa5782183f746b3320b352179c7a38d9361d8bf4e7a4722777f5a21e8a700afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa5782183f746b3320b352179c7a38d9361d8bf4e7a4722777f5a21e8a700afc->leave($__internal_fa5782183f746b3320b352179c7a38d9361d8bf4e7a4722777f5a21e8a700afc_prof);

        
        $__internal_4f6c09b34269ddc9f2540fdfbe17a494f98d17009a532b4fb55925c379d0eb03->leave($__internal_4f6c09b34269ddc9f2540fdfbe17a494f98d17009a532b4fb55925c379d0eb03_prof);

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
