<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_363efce88b1186c0b8e8c2d15c000cce837e04d640e63669f87178ae11a85f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1d852a773c05e9b85be0b0e78fb339b1f89cd008e721cba1da06ea8c60009cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d852a773c05e9b85be0b0e78fb339b1f89cd008e721cba1da06ea8c60009cad->enter($__internal_1d852a773c05e9b85be0b0e78fb339b1f89cd008e721cba1da06ea8c60009cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_38668c2d7312c6a47372ee56b879cf3e55dc7d06d15aa11cf390186453968e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38668c2d7312c6a47372ee56b879cf3e55dc7d06d15aa11cf390186453968e17->enter($__internal_38668c2d7312c6a47372ee56b879cf3e55dc7d06d15aa11cf390186453968e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d852a773c05e9b85be0b0e78fb339b1f89cd008e721cba1da06ea8c60009cad->leave($__internal_1d852a773c05e9b85be0b0e78fb339b1f89cd008e721cba1da06ea8c60009cad_prof);

        
        $__internal_38668c2d7312c6a47372ee56b879cf3e55dc7d06d15aa11cf390186453968e17->leave($__internal_38668c2d7312c6a47372ee56b879cf3e55dc7d06d15aa11cf390186453968e17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b5aa4a8c2cff9db853f3bd1b053da080df4b38891f26106fc95dc2f73aed6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5aa4a8c2cff9db853f3bd1b053da080df4b38891f26106fc95dc2f73aed6d6->enter($__internal_4b5aa4a8c2cff9db853f3bd1b053da080df4b38891f26106fc95dc2f73aed6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8318add9f2f789b9e11b04ada098247cbff83e1954d4b3598f3d83b4c5b3772c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8318add9f2f789b9e11b04ada098247cbff83e1954d4b3598f3d83b4c5b3772c->enter($__internal_8318add9f2f789b9e11b04ada098247cbff83e1954d4b3598f3d83b4c5b3772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8318add9f2f789b9e11b04ada098247cbff83e1954d4b3598f3d83b4c5b3772c->leave($__internal_8318add9f2f789b9e11b04ada098247cbff83e1954d4b3598f3d83b4c5b3772c_prof);

        
        $__internal_4b5aa4a8c2cff9db853f3bd1b053da080df4b38891f26106fc95dc2f73aed6d6->leave($__internal_4b5aa4a8c2cff9db853f3bd1b053da080df4b38891f26106fc95dc2f73aed6d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
