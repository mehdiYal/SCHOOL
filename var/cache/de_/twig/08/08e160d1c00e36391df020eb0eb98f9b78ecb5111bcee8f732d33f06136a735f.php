<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_24bb7f0c2f47b3948a3c7a73f1d6e007b27779a36e7df4995fe04ba61f53427c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_590ac64e73c8919d7f1cdc5987323f805d902f6d2dad236aa49fcff0dc1f04d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590ac64e73c8919d7f1cdc5987323f805d902f6d2dad236aa49fcff0dc1f04d2->enter($__internal_590ac64e73c8919d7f1cdc5987323f805d902f6d2dad236aa49fcff0dc1f04d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_bcf1cd0117229aa734f499677003415e54a3685407caa4efbf45a16543623f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf1cd0117229aa734f499677003415e54a3685407caa4efbf45a16543623f7c->enter($__internal_bcf1cd0117229aa734f499677003415e54a3685407caa4efbf45a16543623f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_590ac64e73c8919d7f1cdc5987323f805d902f6d2dad236aa49fcff0dc1f04d2->leave($__internal_590ac64e73c8919d7f1cdc5987323f805d902f6d2dad236aa49fcff0dc1f04d2_prof);

        
        $__internal_bcf1cd0117229aa734f499677003415e54a3685407caa4efbf45a16543623f7c->leave($__internal_bcf1cd0117229aa734f499677003415e54a3685407caa4efbf45a16543623f7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e3e3ba972c8050553157e3029c3d2e02e08955148d4960f112f3cada8733d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3e3ba972c8050553157e3029c3d2e02e08955148d4960f112f3cada8733d6a->enter($__internal_7e3e3ba972c8050553157e3029c3d2e02e08955148d4960f112f3cada8733d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20d478a7a125c3a0f4281ed54ce9cc36c3ac59f87f96aed4eff8e1431a08cc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d478a7a125c3a0f4281ed54ce9cc36c3ac59f87f96aed4eff8e1431a08cc6c->enter($__internal_20d478a7a125c3a0f4281ed54ce9cc36c3ac59f87f96aed4eff8e1431a08cc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_20d478a7a125c3a0f4281ed54ce9cc36c3ac59f87f96aed4eff8e1431a08cc6c->leave($__internal_20d478a7a125c3a0f4281ed54ce9cc36c3ac59f87f96aed4eff8e1431a08cc6c_prof);

        
        $__internal_7e3e3ba972c8050553157e3029c3d2e02e08955148d4960f112f3cada8733d6a->leave($__internal_7e3e3ba972c8050553157e3029c3d2e02e08955148d4960f112f3cada8733d6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
