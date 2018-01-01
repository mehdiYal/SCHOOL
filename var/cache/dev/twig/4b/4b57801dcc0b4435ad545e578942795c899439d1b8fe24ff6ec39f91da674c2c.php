<?php

/* :default:dashSuperAdmin.html.twig */
class __TwigTemplate_692f94cab0726cc5cea97bece387a432844e445a50a1f10edc4a99ce8857eebc extends Twig_Template
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
        $__internal_a45479c16f18ddc8f30aaf2df6977f58ba19fa7c0d1acd7a010ab025145f2d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45479c16f18ddc8f30aaf2df6977f58ba19fa7c0d1acd7a010ab025145f2d4a->enter($__internal_a45479c16f18ddc8f30aaf2df6977f58ba19fa7c0d1acd7a010ab025145f2d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $__internal_ed7d1da98b27630468e1430bdb3ac38d4e1ad09423e685bc79dd54267c1084eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7d1da98b27630468e1430bdb3ac38d4e1ad09423e685bc79dd54267c1084eb->enter($__internal_ed7d1da98b27630468e1430bdb3ac38d4e1ad09423e685bc79dd54267c1084eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a45479c16f18ddc8f30aaf2df6977f58ba19fa7c0d1acd7a010ab025145f2d4a->leave($__internal_a45479c16f18ddc8f30aaf2df6977f58ba19fa7c0d1acd7a010ab025145f2d4a_prof);

        
        $__internal_ed7d1da98b27630468e1430bdb3ac38d4e1ad09423e685bc79dd54267c1084eb->leave($__internal_ed7d1da98b27630468e1430bdb3ac38d4e1ad09423e685bc79dd54267c1084eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a61949e1256a415e39b8d5e7afe6d7e16acfbe486f4fe79587dcd6b6f9fd4911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61949e1256a415e39b8d5e7afe6d7e16acfbe486f4fe79587dcd6b6f9fd4911->enter($__internal_a61949e1256a415e39b8d5e7afe6d7e16acfbe486f4fe79587dcd6b6f9fd4911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_416014cab04f8d5c24c6f24b712594a1b3a8f1e579d87be066eeb2b04b593e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416014cab04f8d5c24c6f24b712594a1b3a8f1e579d87be066eeb2b04b593e4c->enter($__internal_416014cab04f8d5c24c6f24b712594a1b3a8f1e579d87be066eeb2b04b593e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_416014cab04f8d5c24c6f24b712594a1b3a8f1e579d87be066eeb2b04b593e4c->leave($__internal_416014cab04f8d5c24c6f24b712594a1b3a8f1e579d87be066eeb2b04b593e4c_prof);

        
        $__internal_a61949e1256a415e39b8d5e7afe6d7e16acfbe486f4fe79587dcd6b6f9fd4911->leave($__internal_a61949e1256a415e39b8d5e7afe6d7e16acfbe486f4fe79587dcd6b6f9fd4911_prof);

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
