<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_16a0b82e98a46138ce0cba12cd344176c66c2c06988592fd3b51723d1623bdfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_79fe033875abaef5b171160da3eb650987ba6ac1fee1c22334f24754a69e1a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79fe033875abaef5b171160da3eb650987ba6ac1fee1c22334f24754a69e1a7f->enter($__internal_79fe033875abaef5b171160da3eb650987ba6ac1fee1c22334f24754a69e1a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_a3af5d429a826d5fd38ba2ab458e7fc009f8308a4825c7a0606672929cdbfe53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3af5d429a826d5fd38ba2ab458e7fc009f8308a4825c7a0606672929cdbfe53->enter($__internal_a3af5d429a826d5fd38ba2ab458e7fc009f8308a4825c7a0606672929cdbfe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79fe033875abaef5b171160da3eb650987ba6ac1fee1c22334f24754a69e1a7f->leave($__internal_79fe033875abaef5b171160da3eb650987ba6ac1fee1c22334f24754a69e1a7f_prof);

        
        $__internal_a3af5d429a826d5fd38ba2ab458e7fc009f8308a4825c7a0606672929cdbfe53->leave($__internal_a3af5d429a826d5fd38ba2ab458e7fc009f8308a4825c7a0606672929cdbfe53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7533321d378a36c1897d701f589cbd152d3427faafc2046da53610ddae95ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7533321d378a36c1897d701f589cbd152d3427faafc2046da53610ddae95ff2->enter($__internal_e7533321d378a36c1897d701f589cbd152d3427faafc2046da53610ddae95ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d491601c27dd2b1f0dc425327727cc7e15a6a63c6f10522c1364332cbb8f82d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d491601c27dd2b1f0dc425327727cc7e15a6a63c6f10522c1364332cbb8f82d5->enter($__internal_d491601c27dd2b1f0dc425327727cc7e15a6a63c6f10522c1364332cbb8f82d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d491601c27dd2b1f0dc425327727cc7e15a6a63c6f10522c1364332cbb8f82d5->leave($__internal_d491601c27dd2b1f0dc425327727cc7e15a6a63c6f10522c1364332cbb8f82d5_prof);

        
        $__internal_e7533321d378a36c1897d701f589cbd152d3427faafc2046da53610ddae95ff2->leave($__internal_e7533321d378a36c1897d701f589cbd152d3427faafc2046da53610ddae95ff2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
