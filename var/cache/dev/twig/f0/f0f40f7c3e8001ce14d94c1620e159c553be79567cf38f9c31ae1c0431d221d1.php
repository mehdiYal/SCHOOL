<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a19818406d46269c5d79e23b997b58f1e3e6674efdd71ac35b595fb04ec5131d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_5c304d3a53639fd226a5a4579e4792105ec7e1026bece4a2bbe1ca0c0dc3542f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c304d3a53639fd226a5a4579e4792105ec7e1026bece4a2bbe1ca0c0dc3542f->enter($__internal_5c304d3a53639fd226a5a4579e4792105ec7e1026bece4a2bbe1ca0c0dc3542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_4d35365b556f7af2b9eef97ed5d7186309c3f55dcff96b94026b1a206a18c067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d35365b556f7af2b9eef97ed5d7186309c3f55dcff96b94026b1a206a18c067->enter($__internal_4d35365b556f7af2b9eef97ed5d7186309c3f55dcff96b94026b1a206a18c067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c304d3a53639fd226a5a4579e4792105ec7e1026bece4a2bbe1ca0c0dc3542f->leave($__internal_5c304d3a53639fd226a5a4579e4792105ec7e1026bece4a2bbe1ca0c0dc3542f_prof);

        
        $__internal_4d35365b556f7af2b9eef97ed5d7186309c3f55dcff96b94026b1a206a18c067->leave($__internal_4d35365b556f7af2b9eef97ed5d7186309c3f55dcff96b94026b1a206a18c067_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_319c86556ff81e6102b790426a79a68eb15eb2d264bc5e9730de2ffb1665bd68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319c86556ff81e6102b790426a79a68eb15eb2d264bc5e9730de2ffb1665bd68->enter($__internal_319c86556ff81e6102b790426a79a68eb15eb2d264bc5e9730de2ffb1665bd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e4c6339d6946fe0c06570fbd60cdbb99903c5a11deba9f5205164dc4993df78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4c6339d6946fe0c06570fbd60cdbb99903c5a11deba9f5205164dc4993df78->enter($__internal_6e4c6339d6946fe0c06570fbd60cdbb99903c5a11deba9f5205164dc4993df78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_6e4c6339d6946fe0c06570fbd60cdbb99903c5a11deba9f5205164dc4993df78->leave($__internal_6e4c6339d6946fe0c06570fbd60cdbb99903c5a11deba9f5205164dc4993df78_prof);

        
        $__internal_319c86556ff81e6102b790426a79a68eb15eb2d264bc5e9730de2ffb1665bd68->leave($__internal_319c86556ff81e6102b790426a79a68eb15eb2d264bc5e9730de2ffb1665bd68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
