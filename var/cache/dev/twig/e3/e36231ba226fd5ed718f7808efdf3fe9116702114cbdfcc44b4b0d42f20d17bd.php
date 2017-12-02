<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e8a4d2f5ffc0824be4849e2a7308600ec1b8244575199887552a4b43278d9727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a12648de438b8f9f05b1f45dbfc8b42899c63d807c96789d8c9e0728dcd56cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12648de438b8f9f05b1f45dbfc8b42899c63d807c96789d8c9e0728dcd56cd3->enter($__internal_a12648de438b8f9f05b1f45dbfc8b42899c63d807c96789d8c9e0728dcd56cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_8fcd0bb32b4c12a9f7535de7a7311a03043634b8d7175c93e728be1dcae7b8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcd0bb32b4c12a9f7535de7a7311a03043634b8d7175c93e728be1dcae7b8cb->enter($__internal_8fcd0bb32b4c12a9f7535de7a7311a03043634b8d7175c93e728be1dcae7b8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a12648de438b8f9f05b1f45dbfc8b42899c63d807c96789d8c9e0728dcd56cd3->leave($__internal_a12648de438b8f9f05b1f45dbfc8b42899c63d807c96789d8c9e0728dcd56cd3_prof);

        
        $__internal_8fcd0bb32b4c12a9f7535de7a7311a03043634b8d7175c93e728be1dcae7b8cb->leave($__internal_8fcd0bb32b4c12a9f7535de7a7311a03043634b8d7175c93e728be1dcae7b8cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ac2dda289c96b99e39432f7d29cd351b44336040500f9d62d31e0293d8a73c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac2dda289c96b99e39432f7d29cd351b44336040500f9d62d31e0293d8a73c7->enter($__internal_2ac2dda289c96b99e39432f7d29cd351b44336040500f9d62d31e0293d8a73c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24b7930e5ff11cab0fe9d69dd4a708d13b035a2f6ff570ac4c4b0badba34915b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b7930e5ff11cab0fe9d69dd4a708d13b035a2f6ff570ac4c4b0badba34915b->enter($__internal_24b7930e5ff11cab0fe9d69dd4a708d13b035a2f6ff570ac4c4b0badba34915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_24b7930e5ff11cab0fe9d69dd4a708d13b035a2f6ff570ac4c4b0badba34915b->leave($__internal_24b7930e5ff11cab0fe9d69dd4a708d13b035a2f6ff570ac4c4b0badba34915b_prof);

        
        $__internal_2ac2dda289c96b99e39432f7d29cd351b44336040500f9d62d31e0293d8a73c7->leave($__internal_2ac2dda289c96b99e39432f7d29cd351b44336040500f9d62d31e0293d8a73c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
