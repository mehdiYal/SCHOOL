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
        $__internal_c2cddb77c452891897bf73c0f9db7f8ed9363b72903a4e82f35d00208c0aa3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cddb77c452891897bf73c0f9db7f8ed9363b72903a4e82f35d00208c0aa3d5->enter($__internal_c2cddb77c452891897bf73c0f9db7f8ed9363b72903a4e82f35d00208c0aa3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $__internal_d206db3b71ed18d42edabb4579256c10b822b406b352d2a62d2606997f750c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d206db3b71ed18d42edabb4579256c10b822b406b352d2a62d2606997f750c10->enter($__internal_d206db3b71ed18d42edabb4579256c10b822b406b352d2a62d2606997f750c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2cddb77c452891897bf73c0f9db7f8ed9363b72903a4e82f35d00208c0aa3d5->leave($__internal_c2cddb77c452891897bf73c0f9db7f8ed9363b72903a4e82f35d00208c0aa3d5_prof);

        
        $__internal_d206db3b71ed18d42edabb4579256c10b822b406b352d2a62d2606997f750c10->leave($__internal_d206db3b71ed18d42edabb4579256c10b822b406b352d2a62d2606997f750c10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcccde7b4b08e0457317ee8287feb4c668dfc2bd8e7edb59c6b7b0d02ec47a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcccde7b4b08e0457317ee8287feb4c668dfc2bd8e7edb59c6b7b0d02ec47a4e->enter($__internal_dcccde7b4b08e0457317ee8287feb4c668dfc2bd8e7edb59c6b7b0d02ec47a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_485758200257afa6e2378debe8ce156f98f48fef7fa9e595f61cdf61be87d76d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485758200257afa6e2378debe8ce156f98f48fef7fa9e595f61cdf61be87d76d->enter($__internal_485758200257afa6e2378debe8ce156f98f48fef7fa9e595f61cdf61be87d76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_485758200257afa6e2378debe8ce156f98f48fef7fa9e595f61cdf61be87d76d->leave($__internal_485758200257afa6e2378debe8ce156f98f48fef7fa9e595f61cdf61be87d76d_prof);

        
        $__internal_dcccde7b4b08e0457317ee8287feb4c668dfc2bd8e7edb59c6b7b0d02ec47a4e->leave($__internal_dcccde7b4b08e0457317ee8287feb4c668dfc2bd8e7edb59c6b7b0d02ec47a4e_prof);

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
