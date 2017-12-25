<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9a92024f757c65d9974a3ea6d9d57aa60ec8d50559862acc3058792d84f9ec81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3e2d31c93c62f8072126db66c7b67165c5dd64361dd00dd00ef8471549a93a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2d31c93c62f8072126db66c7b67165c5dd64361dd00dd00ef8471549a93a67->enter($__internal_3e2d31c93c62f8072126db66c7b67165c5dd64361dd00dd00ef8471549a93a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_17421405b5ad5f54c353a9f21be41a59856efa6a4c1f892756c636874e949aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17421405b5ad5f54c353a9f21be41a59856efa6a4c1f892756c636874e949aac->enter($__internal_17421405b5ad5f54c353a9f21be41a59856efa6a4c1f892756c636874e949aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2d31c93c62f8072126db66c7b67165c5dd64361dd00dd00ef8471549a93a67->leave($__internal_3e2d31c93c62f8072126db66c7b67165c5dd64361dd00dd00ef8471549a93a67_prof);

        
        $__internal_17421405b5ad5f54c353a9f21be41a59856efa6a4c1f892756c636874e949aac->leave($__internal_17421405b5ad5f54c353a9f21be41a59856efa6a4c1f892756c636874e949aac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7981d2ebb7662dccc064aa5708f125118fcf60b744f76753e489d2b9759a22c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7981d2ebb7662dccc064aa5708f125118fcf60b744f76753e489d2b9759a22c9->enter($__internal_7981d2ebb7662dccc064aa5708f125118fcf60b744f76753e489d2b9759a22c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be7d0e2c3980e11ce611f7974748fa6150342949b995ba401f11dad4f4eaf161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7d0e2c3980e11ce611f7974748fa6150342949b995ba401f11dad4f4eaf161->enter($__internal_be7d0e2c3980e11ce611f7974748fa6150342949b995ba401f11dad4f4eaf161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_be7d0e2c3980e11ce611f7974748fa6150342949b995ba401f11dad4f4eaf161->leave($__internal_be7d0e2c3980e11ce611f7974748fa6150342949b995ba401f11dad4f4eaf161_prof);

        
        $__internal_7981d2ebb7662dccc064aa5708f125118fcf60b744f76753e489d2b9759a22c9->leave($__internal_7981d2ebb7662dccc064aa5708f125118fcf60b744f76753e489d2b9759a22c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
