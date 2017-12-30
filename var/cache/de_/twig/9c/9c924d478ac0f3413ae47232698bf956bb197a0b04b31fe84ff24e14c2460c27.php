<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5a510c5e23baa127e167ec49423a1f27ea534947a18857dba559bd707b3cbb2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f18c963f901103cbb279a0d96c3d90c6796678cdbb32442eede1650f5935fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f18c963f901103cbb279a0d96c3d90c6796678cdbb32442eede1650f5935fc6->enter($__internal_1f18c963f901103cbb279a0d96c3d90c6796678cdbb32442eede1650f5935fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_69c1d61aa6eae3a886c85375602858e174f0af483bc37191baaa526b29b255d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c1d61aa6eae3a886c85375602858e174f0af483bc37191baaa526b29b255d3->enter($__internal_69c1d61aa6eae3a886c85375602858e174f0af483bc37191baaa526b29b255d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f18c963f901103cbb279a0d96c3d90c6796678cdbb32442eede1650f5935fc6->leave($__internal_1f18c963f901103cbb279a0d96c3d90c6796678cdbb32442eede1650f5935fc6_prof);

        
        $__internal_69c1d61aa6eae3a886c85375602858e174f0af483bc37191baaa526b29b255d3->leave($__internal_69c1d61aa6eae3a886c85375602858e174f0af483bc37191baaa526b29b255d3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d16b9f008d0c2975e5cfb3df97c8c8dfe19958ab9d5d4ecef1ee4bd13d1cd93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d16b9f008d0c2975e5cfb3df97c8c8dfe19958ab9d5d4ecef1ee4bd13d1cd93->enter($__internal_1d16b9f008d0c2975e5cfb3df97c8c8dfe19958ab9d5d4ecef1ee4bd13d1cd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9367651af05158d82a3d5e7c7276d1c088ca6972445e5797b3a248e9a53ce707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9367651af05158d82a3d5e7c7276d1c088ca6972445e5797b3a248e9a53ce707->enter($__internal_9367651af05158d82a3d5e7c7276d1c088ca6972445e5797b3a248e9a53ce707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9367651af05158d82a3d5e7c7276d1c088ca6972445e5797b3a248e9a53ce707->leave($__internal_9367651af05158d82a3d5e7c7276d1c088ca6972445e5797b3a248e9a53ce707_prof);

        
        $__internal_1d16b9f008d0c2975e5cfb3df97c8c8dfe19958ab9d5d4ecef1ee4bd13d1cd93->leave($__internal_1d16b9f008d0c2975e5cfb3df97c8c8dfe19958ab9d5d4ecef1ee4bd13d1cd93_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
