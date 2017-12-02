<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_304ce1dacd745c05cd184a8dd7508af6e435c85202dae61f4f3f23c4903d6f6b extends Twig_Template
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
        $__internal_e0714af52a75f122fb0dfd9c38da74494d953fccaf6f8a7881be0d69c1ffe010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0714af52a75f122fb0dfd9c38da74494d953fccaf6f8a7881be0d69c1ffe010->enter($__internal_e0714af52a75f122fb0dfd9c38da74494d953fccaf6f8a7881be0d69c1ffe010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5adedc3a93581f9fa4235d5fb7fc9841664bfe5a18088dd49733750f7f4d9631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adedc3a93581f9fa4235d5fb7fc9841664bfe5a18088dd49733750f7f4d9631->enter($__internal_5adedc3a93581f9fa4235d5fb7fc9841664bfe5a18088dd49733750f7f4d9631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0714af52a75f122fb0dfd9c38da74494d953fccaf6f8a7881be0d69c1ffe010->leave($__internal_e0714af52a75f122fb0dfd9c38da74494d953fccaf6f8a7881be0d69c1ffe010_prof);

        
        $__internal_5adedc3a93581f9fa4235d5fb7fc9841664bfe5a18088dd49733750f7f4d9631->leave($__internal_5adedc3a93581f9fa4235d5fb7fc9841664bfe5a18088dd49733750f7f4d9631_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ebc33ad82e1c77a4b3f3cff0d53ece3234200dee92ef7a1a017565c69b92e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ebc33ad82e1c77a4b3f3cff0d53ece3234200dee92ef7a1a017565c69b92e27->enter($__internal_1ebc33ad82e1c77a4b3f3cff0d53ece3234200dee92ef7a1a017565c69b92e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_432e7985d12dc41f7c29b6ffab286ae3f8e37749d3eadc29732c562252415f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432e7985d12dc41f7c29b6ffab286ae3f8e37749d3eadc29732c562252415f78->enter($__internal_432e7985d12dc41f7c29b6ffab286ae3f8e37749d3eadc29732c562252415f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_432e7985d12dc41f7c29b6ffab286ae3f8e37749d3eadc29732c562252415f78->leave($__internal_432e7985d12dc41f7c29b6ffab286ae3f8e37749d3eadc29732c562252415f78_prof);

        
        $__internal_1ebc33ad82e1c77a4b3f3cff0d53ece3234200dee92ef7a1a017565c69b92e27->leave($__internal_1ebc33ad82e1c77a4b3f3cff0d53ece3234200dee92ef7a1a017565c69b92e27_prof);

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
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
