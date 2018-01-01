<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9e1cfcc1be44cad9258b2ba1ffd4676edaa92475d4be9f8d3ec43d504cedd8f5 extends Twig_Template
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
        $__internal_9365d1fedafd0f8afdb209dd9c84737b98c2cdedd3c91c381eaf895cf3a831dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9365d1fedafd0f8afdb209dd9c84737b98c2cdedd3c91c381eaf895cf3a831dc->enter($__internal_9365d1fedafd0f8afdb209dd9c84737b98c2cdedd3c91c381eaf895cf3a831dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_83e6a100c3a9f3ee565a0db9ab11d475f589004952d08750801300b9eb750d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e6a100c3a9f3ee565a0db9ab11d475f589004952d08750801300b9eb750d0f->enter($__internal_83e6a100c3a9f3ee565a0db9ab11d475f589004952d08750801300b9eb750d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9365d1fedafd0f8afdb209dd9c84737b98c2cdedd3c91c381eaf895cf3a831dc->leave($__internal_9365d1fedafd0f8afdb209dd9c84737b98c2cdedd3c91c381eaf895cf3a831dc_prof);

        
        $__internal_83e6a100c3a9f3ee565a0db9ab11d475f589004952d08750801300b9eb750d0f->leave($__internal_83e6a100c3a9f3ee565a0db9ab11d475f589004952d08750801300b9eb750d0f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2d96a778791aad592f8bf4380d095116bcaea58a862a8bf23b5bec29f9181f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d96a778791aad592f8bf4380d095116bcaea58a862a8bf23b5bec29f9181f6->enter($__internal_c2d96a778791aad592f8bf4380d095116bcaea58a862a8bf23b5bec29f9181f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5ec68e7b67c8076e93e97422114e695acab625ab2e3d917eebdefc65581bc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ec68e7b67c8076e93e97422114e695acab625ab2e3d917eebdefc65581bc87->enter($__internal_f5ec68e7b67c8076e93e97422114e695acab625ab2e3d917eebdefc65581bc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f5ec68e7b67c8076e93e97422114e695acab625ab2e3d917eebdefc65581bc87->leave($__internal_f5ec68e7b67c8076e93e97422114e695acab625ab2e3d917eebdefc65581bc87_prof);

        
        $__internal_c2d96a778791aad592f8bf4380d095116bcaea58a862a8bf23b5bec29f9181f6->leave($__internal_c2d96a778791aad592f8bf4380d095116bcaea58a862a8bf23b5bec29f9181f6_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
