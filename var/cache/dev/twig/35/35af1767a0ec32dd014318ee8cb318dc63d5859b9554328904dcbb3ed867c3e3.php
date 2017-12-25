<?php

/* default/dashSuperAdmin.html.twig */
class __TwigTemplate_383d6e9f43a89a3fe71b1a5ab6a7edf368d24c5f8e2cb3dfe9b11d5a3a319b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", "default/dashSuperAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b259568fb4173d31a8e0cc268df6dd5f8cc64a43cde5e7cb688cd99b16036029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b259568fb4173d31a8e0cc268df6dd5f8cc64a43cde5e7cb688cd99b16036029->enter($__internal_b259568fb4173d31a8e0cc268df6dd5f8cc64a43cde5e7cb688cd99b16036029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashSuperAdmin.html.twig"));

        $__internal_aebbbd34d6fd9cb0ffbceea0e0c992f5be1c4ae7c9160be5709357b3908e1702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebbbd34d6fd9cb0ffbceea0e0c992f5be1c4ae7c9160be5709357b3908e1702->enter($__internal_aebbbd34d6fd9cb0ffbceea0e0c992f5be1c4ae7c9160be5709357b3908e1702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashSuperAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b259568fb4173d31a8e0cc268df6dd5f8cc64a43cde5e7cb688cd99b16036029->leave($__internal_b259568fb4173d31a8e0cc268df6dd5f8cc64a43cde5e7cb688cd99b16036029_prof);

        
        $__internal_aebbbd34d6fd9cb0ffbceea0e0c992f5be1c4ae7c9160be5709357b3908e1702->leave($__internal_aebbbd34d6fd9cb0ffbceea0e0c992f5be1c4ae7c9160be5709357b3908e1702_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bcd7ca0b728ebdf6f255feb97531bf03a85d2b39959b0c58f8cfb29f13bd04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bcd7ca0b728ebdf6f255feb97531bf03a85d2b39959b0c58f8cfb29f13bd04b->enter($__internal_5bcd7ca0b728ebdf6f255feb97531bf03a85d2b39959b0c58f8cfb29f13bd04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_831b6b539a7c64ffe8e84facf77e981ef7761f6e471b1826c47014c56c96dcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831b6b539a7c64ffe8e84facf77e981ef7761f6e471b1826c47014c56c96dcc6->enter($__internal_831b6b539a7c64ffe8e84facf77e981ef7761f6e471b1826c47014c56c96dcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_831b6b539a7c64ffe8e84facf77e981ef7761f6e471b1826c47014c56c96dcc6->leave($__internal_831b6b539a7c64ffe8e84facf77e981ef7761f6e471b1826c47014c56c96dcc6_prof);

        
        $__internal_5bcd7ca0b728ebdf6f255feb97531bf03a85d2b39959b0c58f8cfb29f13bd04b->leave($__internal_5bcd7ca0b728ebdf6f255feb97531bf03a85d2b39959b0c58f8cfb29f13bd04b_prof);

    }

    public function getTemplateName()
    {
        return "default/dashSuperAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseSuper.html.twig' %}

{% block body %}
    
{% endblock %}", "default/dashSuperAdmin.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/dashSuperAdmin.html.twig");
    }
}
