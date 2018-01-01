<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_436066f8cc628908220d0f5649d860bf0459d0d2e579f1a0fec15437133a1b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8a5aee9aaf78a68393b557d1262187b3ac56d8b926544f8ebc41ad83b7ac3a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5aee9aaf78a68393b557d1262187b3ac56d8b926544f8ebc41ad83b7ac3a58->enter($__internal_8a5aee9aaf78a68393b557d1262187b3ac56d8b926544f8ebc41ad83b7ac3a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_62074e5984502febfac8915af2f46a9fbcd95c90186318dd80a768b3ef169b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62074e5984502febfac8915af2f46a9fbcd95c90186318dd80a768b3ef169b29->enter($__internal_62074e5984502febfac8915af2f46a9fbcd95c90186318dd80a768b3ef169b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a5aee9aaf78a68393b557d1262187b3ac56d8b926544f8ebc41ad83b7ac3a58->leave($__internal_8a5aee9aaf78a68393b557d1262187b3ac56d8b926544f8ebc41ad83b7ac3a58_prof);

        
        $__internal_62074e5984502febfac8915af2f46a9fbcd95c90186318dd80a768b3ef169b29->leave($__internal_62074e5984502febfac8915af2f46a9fbcd95c90186318dd80a768b3ef169b29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e06c8c7f2d5d4bf251453e36daf8c63b4d430fdb2bafa899cc5c5f85419e366f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06c8c7f2d5d4bf251453e36daf8c63b4d430fdb2bafa899cc5c5f85419e366f->enter($__internal_e06c8c7f2d5d4bf251453e36daf8c63b4d430fdb2bafa899cc5c5f85419e366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_066613d66a98d2d7df081a1509c19ecf0cc756d3e48710b98d8f215c97f0d4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066613d66a98d2d7df081a1509c19ecf0cc756d3e48710b98d8f215c97f0d4bb->enter($__internal_066613d66a98d2d7df081a1509c19ecf0cc756d3e48710b98d8f215c97f0d4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_066613d66a98d2d7df081a1509c19ecf0cc756d3e48710b98d8f215c97f0d4bb->leave($__internal_066613d66a98d2d7df081a1509c19ecf0cc756d3e48710b98d8f215c97f0d4bb_prof);

        
        $__internal_e06c8c7f2d5d4bf251453e36daf8c63b4d430fdb2bafa899cc5c5f85419e366f->leave($__internal_e06c8c7f2d5d4bf251453e36daf8c63b4d430fdb2bafa899cc5c5f85419e366f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
