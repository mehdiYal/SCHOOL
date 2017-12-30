<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9772a0850d98d28069b045de0e06c8506e1a523a3bd2bfe1313f3074e9624ee2 extends Twig_Template
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
        $__internal_3d3c537db31aab12b4e37e8e276c7a6533ceb9f4953273d1c76d01f06be74796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3c537db31aab12b4e37e8e276c7a6533ceb9f4953273d1c76d01f06be74796->enter($__internal_3d3c537db31aab12b4e37e8e276c7a6533ceb9f4953273d1c76d01f06be74796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_58fc531a21c2f45a9a1a3268ff85bebed0e76ead1268504442c1207fc7235eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fc531a21c2f45a9a1a3268ff85bebed0e76ead1268504442c1207fc7235eb7->enter($__internal_58fc531a21c2f45a9a1a3268ff85bebed0e76ead1268504442c1207fc7235eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3c537db31aab12b4e37e8e276c7a6533ceb9f4953273d1c76d01f06be74796->leave($__internal_3d3c537db31aab12b4e37e8e276c7a6533ceb9f4953273d1c76d01f06be74796_prof);

        
        $__internal_58fc531a21c2f45a9a1a3268ff85bebed0e76ead1268504442c1207fc7235eb7->leave($__internal_58fc531a21c2f45a9a1a3268ff85bebed0e76ead1268504442c1207fc7235eb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73042c8f21579ed85a38b1ab9e284488f5042c64ab24d56c322870e267cff4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73042c8f21579ed85a38b1ab9e284488f5042c64ab24d56c322870e267cff4d0->enter($__internal_73042c8f21579ed85a38b1ab9e284488f5042c64ab24d56c322870e267cff4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ec5a0da480eac49dd64e25e6c26313dea3a8aef6a73ac11ca5b4a93ea9532f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec5a0da480eac49dd64e25e6c26313dea3a8aef6a73ac11ca5b4a93ea9532f6->enter($__internal_7ec5a0da480eac49dd64e25e6c26313dea3a8aef6a73ac11ca5b4a93ea9532f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7ec5a0da480eac49dd64e25e6c26313dea3a8aef6a73ac11ca5b4a93ea9532f6->leave($__internal_7ec5a0da480eac49dd64e25e6c26313dea3a8aef6a73ac11ca5b4a93ea9532f6_prof);

        
        $__internal_73042c8f21579ed85a38b1ab9e284488f5042c64ab24d56c322870e267cff4d0->leave($__internal_73042c8f21579ed85a38b1ab9e284488f5042c64ab24d56c322870e267cff4d0_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
