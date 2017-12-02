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
        $__internal_f1dfeaf776c00550d5174b11c9b0ce9ed08e70bac0494e2f66ff4ce00d56f613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1dfeaf776c00550d5174b11c9b0ce9ed08e70bac0494e2f66ff4ce00d56f613->enter($__internal_f1dfeaf776c00550d5174b11c9b0ce9ed08e70bac0494e2f66ff4ce00d56f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashSuperAdmin.html.twig"));

        $__internal_c19a424d43d6f8d5597aa6af17bba7d3bf085bb81759edd6d1e758ad91994936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19a424d43d6f8d5597aa6af17bba7d3bf085bb81759edd6d1e758ad91994936->enter($__internal_c19a424d43d6f8d5597aa6af17bba7d3bf085bb81759edd6d1e758ad91994936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashSuperAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1dfeaf776c00550d5174b11c9b0ce9ed08e70bac0494e2f66ff4ce00d56f613->leave($__internal_f1dfeaf776c00550d5174b11c9b0ce9ed08e70bac0494e2f66ff4ce00d56f613_prof);

        
        $__internal_c19a424d43d6f8d5597aa6af17bba7d3bf085bb81759edd6d1e758ad91994936->leave($__internal_c19a424d43d6f8d5597aa6af17bba7d3bf085bb81759edd6d1e758ad91994936_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ccfff3315b973ddde8c756595c87b35d011ab24c5e0529d9f19ab6d40659363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccfff3315b973ddde8c756595c87b35d011ab24c5e0529d9f19ab6d40659363->enter($__internal_8ccfff3315b973ddde8c756595c87b35d011ab24c5e0529d9f19ab6d40659363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e40f095221bd0edd923ba4902d20f83b0c1cefbff99412a7d34d6e53e22169ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40f095221bd0edd923ba4902d20f83b0c1cefbff99412a7d34d6e53e22169ac->enter($__internal_e40f095221bd0edd923ba4902d20f83b0c1cefbff99412a7d34d6e53e22169ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_e40f095221bd0edd923ba4902d20f83b0c1cefbff99412a7d34d6e53e22169ac->leave($__internal_e40f095221bd0edd923ba4902d20f83b0c1cefbff99412a7d34d6e53e22169ac_prof);

        
        $__internal_8ccfff3315b973ddde8c756595c87b35d011ab24c5e0529d9f19ab6d40659363->leave($__internal_8ccfff3315b973ddde8c756595c87b35d011ab24c5e0529d9f19ab6d40659363_prof);

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
    
{% endblock %}", "default/dashSuperAdmin.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/default/dashSuperAdmin.html.twig");
    }
}
