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
        $__internal_0caac9f11d483b9c928ff3bc2faa6e5ee8a816474177a59387df83620ea57b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0caac9f11d483b9c928ff3bc2faa6e5ee8a816474177a59387df83620ea57b37->enter($__internal_0caac9f11d483b9c928ff3bc2faa6e5ee8a816474177a59387df83620ea57b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_661b32cac51f7c497afe7f9537977d783ed856b250a009e7be5a1dc770226c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661b32cac51f7c497afe7f9537977d783ed856b250a009e7be5a1dc770226c2c->enter($__internal_661b32cac51f7c497afe7f9537977d783ed856b250a009e7be5a1dc770226c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0caac9f11d483b9c928ff3bc2faa6e5ee8a816474177a59387df83620ea57b37->leave($__internal_0caac9f11d483b9c928ff3bc2faa6e5ee8a816474177a59387df83620ea57b37_prof);

        
        $__internal_661b32cac51f7c497afe7f9537977d783ed856b250a009e7be5a1dc770226c2c->leave($__internal_661b32cac51f7c497afe7f9537977d783ed856b250a009e7be5a1dc770226c2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3421649ceca6437349a62c89d222d98fb4b827189e79e6af9e0d24f854881ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3421649ceca6437349a62c89d222d98fb4b827189e79e6af9e0d24f854881ad9->enter($__internal_3421649ceca6437349a62c89d222d98fb4b827189e79e6af9e0d24f854881ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fec61322022cb426b060b710ae7af14f89626df46be4829cfc364a4e4da3672e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec61322022cb426b060b710ae7af14f89626df46be4829cfc364a4e4da3672e->enter($__internal_fec61322022cb426b060b710ae7af14f89626df46be4829cfc364a4e4da3672e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_fec61322022cb426b060b710ae7af14f89626df46be4829cfc364a4e4da3672e->leave($__internal_fec61322022cb426b060b710ae7af14f89626df46be4829cfc364a4e4da3672e_prof);

        
        $__internal_3421649ceca6437349a62c89d222d98fb4b827189e79e6af9e0d24f854881ad9->leave($__internal_3421649ceca6437349a62c89d222d98fb4b827189e79e6af9e0d24f854881ad9_prof);

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
