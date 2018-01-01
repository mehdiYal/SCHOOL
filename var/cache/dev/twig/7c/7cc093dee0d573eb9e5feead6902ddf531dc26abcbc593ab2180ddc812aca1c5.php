<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_adf8b0c5bb4ee6ec2edaaf0ed26f5bb0650fa36222b1517988991857936c67d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_2a3b48da112da0f51c782367b45302a1e7f6dee5170babab265afc531f128bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3b48da112da0f51c782367b45302a1e7f6dee5170babab265afc531f128bc4->enter($__internal_2a3b48da112da0f51c782367b45302a1e7f6dee5170babab265afc531f128bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_441471a4cbc1f09eb5e3f7be7a839ebc685091625d2aa898a8b8cf371aa8c0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441471a4cbc1f09eb5e3f7be7a839ebc685091625d2aa898a8b8cf371aa8c0d2->enter($__internal_441471a4cbc1f09eb5e3f7be7a839ebc685091625d2aa898a8b8cf371aa8c0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3b48da112da0f51c782367b45302a1e7f6dee5170babab265afc531f128bc4->leave($__internal_2a3b48da112da0f51c782367b45302a1e7f6dee5170babab265afc531f128bc4_prof);

        
        $__internal_441471a4cbc1f09eb5e3f7be7a839ebc685091625d2aa898a8b8cf371aa8c0d2->leave($__internal_441471a4cbc1f09eb5e3f7be7a839ebc685091625d2aa898a8b8cf371aa8c0d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2a14223405f166775d35e9482df5eb66ef07f65c9179212b8692fab94356a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a14223405f166775d35e9482df5eb66ef07f65c9179212b8692fab94356a76->enter($__internal_e2a14223405f166775d35e9482df5eb66ef07f65c9179212b8692fab94356a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae6bf0cce0a3f020ff35cf249407371d3095efea6d8e2dbb2edf87ce4616724c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6bf0cce0a3f020ff35cf249407371d3095efea6d8e2dbb2edf87ce4616724c->enter($__internal_ae6bf0cce0a3f020ff35cf249407371d3095efea6d8e2dbb2edf87ce4616724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ae6bf0cce0a3f020ff35cf249407371d3095efea6d8e2dbb2edf87ce4616724c->leave($__internal_ae6bf0cce0a3f020ff35cf249407371d3095efea6d8e2dbb2edf87ce4616724c_prof);

        
        $__internal_e2a14223405f166775d35e9482df5eb66ef07f65c9179212b8692fab94356a76->leave($__internal_e2a14223405f166775d35e9482df5eb66ef07f65c9179212b8692fab94356a76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
