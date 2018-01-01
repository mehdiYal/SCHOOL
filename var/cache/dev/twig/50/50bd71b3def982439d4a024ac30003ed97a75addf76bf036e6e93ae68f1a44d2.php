<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_35d4db2935275eee8d7f30cae7575d87fcfbda5df013f5b2972a01e898b883ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_0ef98e7b20cdf73edf448de5787b90910455cebd82f9814aaee407c977794168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef98e7b20cdf73edf448de5787b90910455cebd82f9814aaee407c977794168->enter($__internal_0ef98e7b20cdf73edf448de5787b90910455cebd82f9814aaee407c977794168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_dce29d490395287e9603a92d1295fcb74e4c396d6bc1bf0cbc61cccf048ade42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce29d490395287e9603a92d1295fcb74e4c396d6bc1bf0cbc61cccf048ade42->enter($__internal_dce29d490395287e9603a92d1295fcb74e4c396d6bc1bf0cbc61cccf048ade42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ef98e7b20cdf73edf448de5787b90910455cebd82f9814aaee407c977794168->leave($__internal_0ef98e7b20cdf73edf448de5787b90910455cebd82f9814aaee407c977794168_prof);

        
        $__internal_dce29d490395287e9603a92d1295fcb74e4c396d6bc1bf0cbc61cccf048ade42->leave($__internal_dce29d490395287e9603a92d1295fcb74e4c396d6bc1bf0cbc61cccf048ade42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bec57eb491cd42f459897292071fcd22e07d50629ff7719179e07cba603b6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bec57eb491cd42f459897292071fcd22e07d50629ff7719179e07cba603b6ac->enter($__internal_1bec57eb491cd42f459897292071fcd22e07d50629ff7719179e07cba603b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_43fe3a7802dc7d74e788ca492be8f571c3bf6871651d6a82d4aca27f924fd248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fe3a7802dc7d74e788ca492be8f571c3bf6871651d6a82d4aca27f924fd248->enter($__internal_43fe3a7802dc7d74e788ca492be8f571c3bf6871651d6a82d4aca27f924fd248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_43fe3a7802dc7d74e788ca492be8f571c3bf6871651d6a82d4aca27f924fd248->leave($__internal_43fe3a7802dc7d74e788ca492be8f571c3bf6871651d6a82d4aca27f924fd248_prof);

        
        $__internal_1bec57eb491cd42f459897292071fcd22e07d50629ff7719179e07cba603b6ac->leave($__internal_1bec57eb491cd42f459897292071fcd22e07d50629ff7719179e07cba603b6ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
