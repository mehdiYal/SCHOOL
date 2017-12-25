<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ad70f29241a284d520f0e5bbb34960fdaa6a9a50373849a457b5cb36d38425ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_82273314410f7cc5b78a9e90e123c58a3f7390fb7c44b0d144e28bb0ab6d00ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82273314410f7cc5b78a9e90e123c58a3f7390fb7c44b0d144e28bb0ab6d00ff->enter($__internal_82273314410f7cc5b78a9e90e123c58a3f7390fb7c44b0d144e28bb0ab6d00ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_81c0186bdfa97c67a2298b0fd0961d4304a3dc69c345cfa76fac3368ff794616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c0186bdfa97c67a2298b0fd0961d4304a3dc69c345cfa76fac3368ff794616->enter($__internal_81c0186bdfa97c67a2298b0fd0961d4304a3dc69c345cfa76fac3368ff794616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82273314410f7cc5b78a9e90e123c58a3f7390fb7c44b0d144e28bb0ab6d00ff->leave($__internal_82273314410f7cc5b78a9e90e123c58a3f7390fb7c44b0d144e28bb0ab6d00ff_prof);

        
        $__internal_81c0186bdfa97c67a2298b0fd0961d4304a3dc69c345cfa76fac3368ff794616->leave($__internal_81c0186bdfa97c67a2298b0fd0961d4304a3dc69c345cfa76fac3368ff794616_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef407e50484c694527a04dc0e5f13868ce7394708662d9eb38d61ecddf8dc338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef407e50484c694527a04dc0e5f13868ce7394708662d9eb38d61ecddf8dc338->enter($__internal_ef407e50484c694527a04dc0e5f13868ce7394708662d9eb38d61ecddf8dc338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a273451cb4ae4a49737338101918e82769063dfe6e894767505a40b759838965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a273451cb4ae4a49737338101918e82769063dfe6e894767505a40b759838965->enter($__internal_a273451cb4ae4a49737338101918e82769063dfe6e894767505a40b759838965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a273451cb4ae4a49737338101918e82769063dfe6e894767505a40b759838965->leave($__internal_a273451cb4ae4a49737338101918e82769063dfe6e894767505a40b759838965_prof);

        
        $__internal_ef407e50484c694527a04dc0e5f13868ce7394708662d9eb38d61ecddf8dc338->leave($__internal_ef407e50484c694527a04dc0e5f13868ce7394708662d9eb38d61ecddf8dc338_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
