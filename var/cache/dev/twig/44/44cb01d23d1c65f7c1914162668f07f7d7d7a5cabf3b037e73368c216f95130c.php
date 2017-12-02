<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_79e00ce430e900607f54113a4c19a448bbf22c32b75b8588fa37456fe2e9a3dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ec3067c0b6e58ada34e1f803d5f1d7e76b46a89a98658f94016cbad5d83b6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec3067c0b6e58ada34e1f803d5f1d7e76b46a89a98658f94016cbad5d83b6eb->enter($__internal_8ec3067c0b6e58ada34e1f803d5f1d7e76b46a89a98658f94016cbad5d83b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_a8bd487e8def232375255af145d9f1acb34194688ba997490c58e0454ea7bd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bd487e8def232375255af145d9f1acb34194688ba997490c58e0454ea7bd0e->enter($__internal_a8bd487e8def232375255af145d9f1acb34194688ba997490c58e0454ea7bd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec3067c0b6e58ada34e1f803d5f1d7e76b46a89a98658f94016cbad5d83b6eb->leave($__internal_8ec3067c0b6e58ada34e1f803d5f1d7e76b46a89a98658f94016cbad5d83b6eb_prof);

        
        $__internal_a8bd487e8def232375255af145d9f1acb34194688ba997490c58e0454ea7bd0e->leave($__internal_a8bd487e8def232375255af145d9f1acb34194688ba997490c58e0454ea7bd0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6452ff0fc781a653c8f6e8183636413e159af102aa5412ff88c1fe09b8d87735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6452ff0fc781a653c8f6e8183636413e159af102aa5412ff88c1fe09b8d87735->enter($__internal_6452ff0fc781a653c8f6e8183636413e159af102aa5412ff88c1fe09b8d87735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60650c7dd4e12293f8b7921de44b07318c28ca5930c1d764815cd096c87ca6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60650c7dd4e12293f8b7921de44b07318c28ca5930c1d764815cd096c87ca6d2->enter($__internal_60650c7dd4e12293f8b7921de44b07318c28ca5930c1d764815cd096c87ca6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_60650c7dd4e12293f8b7921de44b07318c28ca5930c1d764815cd096c87ca6d2->leave($__internal_60650c7dd4e12293f8b7921de44b07318c28ca5930c1d764815cd096c87ca6d2_prof);

        
        $__internal_6452ff0fc781a653c8f6e8183636413e159af102aa5412ff88c1fe09b8d87735->leave($__internal_6452ff0fc781a653c8f6e8183636413e159af102aa5412ff88c1fe09b8d87735_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
