<?php

/* :default:dashSuperAdmin.html.twig */
class __TwigTemplate_e7998784a24c38a82aa08eac7562feb1870b28f8d3be8af3fb33e0e1dba35670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", ":default:dashSuperAdmin.html.twig", 1);
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
        $__internal_3d569dda7d34ea64f76627b6a8a07e62a47383f6062410d65e4da4546aa6c324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d569dda7d34ea64f76627b6a8a07e62a47383f6062410d65e4da4546aa6c324->enter($__internal_3d569dda7d34ea64f76627b6a8a07e62a47383f6062410d65e4da4546aa6c324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $__internal_70bf7de2eebfa3327db8ce4df54c60a15c0dc222dd138903647efea81213a217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bf7de2eebfa3327db8ce4df54c60a15c0dc222dd138903647efea81213a217->enter($__internal_70bf7de2eebfa3327db8ce4df54c60a15c0dc222dd138903647efea81213a217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d569dda7d34ea64f76627b6a8a07e62a47383f6062410d65e4da4546aa6c324->leave($__internal_3d569dda7d34ea64f76627b6a8a07e62a47383f6062410d65e4da4546aa6c324_prof);

        
        $__internal_70bf7de2eebfa3327db8ce4df54c60a15c0dc222dd138903647efea81213a217->leave($__internal_70bf7de2eebfa3327db8ce4df54c60a15c0dc222dd138903647efea81213a217_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3291c0084ecbec6af6076fb60152aa84be5447083fdd939c08b7b63c63f463e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3291c0084ecbec6af6076fb60152aa84be5447083fdd939c08b7b63c63f463e0->enter($__internal_3291c0084ecbec6af6076fb60152aa84be5447083fdd939c08b7b63c63f463e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_534028816d714e6ce94cfd3aa3fad5ed9088e29a4e0af8e93347d60447fd1c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534028816d714e6ce94cfd3aa3fad5ed9088e29a4e0af8e93347d60447fd1c02->enter($__internal_534028816d714e6ce94cfd3aa3fad5ed9088e29a4e0af8e93347d60447fd1c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_534028816d714e6ce94cfd3aa3fad5ed9088e29a4e0af8e93347d60447fd1c02->leave($__internal_534028816d714e6ce94cfd3aa3fad5ed9088e29a4e0af8e93347d60447fd1c02_prof);

        
        $__internal_3291c0084ecbec6af6076fb60152aa84be5447083fdd939c08b7b63c63f463e0->leave($__internal_3291c0084ecbec6af6076fb60152aa84be5447083fdd939c08b7b63c63f463e0_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashSuperAdmin.html.twig";
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
    
{% endblock %}", ":default:dashSuperAdmin.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/dashSuperAdmin.html.twig");
    }
}
