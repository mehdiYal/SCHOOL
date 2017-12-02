<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_79e00ce430e900607f54113a4c19a448bbf22c32b75b8588fa37456fe2e9a3dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2d871d236bcceaa13084d03bd6a4150d39a0011b0014c504016b694a3edcea4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d871d236bcceaa13084d03bd6a4150d39a0011b0014c504016b694a3edcea4e->enter($__internal_2d871d236bcceaa13084d03bd6a4150d39a0011b0014c504016b694a3edcea4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_fccdc90582787dde94341768ba7823d054bfebf8b6571328b1c8dfbb54c3db5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccdc90582787dde94341768ba7823d054bfebf8b6571328b1c8dfbb54c3db5b->enter($__internal_fccdc90582787dde94341768ba7823d054bfebf8b6571328b1c8dfbb54c3db5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d871d236bcceaa13084d03bd6a4150d39a0011b0014c504016b694a3edcea4e->leave($__internal_2d871d236bcceaa13084d03bd6a4150d39a0011b0014c504016b694a3edcea4e_prof);

        
        $__internal_fccdc90582787dde94341768ba7823d054bfebf8b6571328b1c8dfbb54c3db5b->leave($__internal_fccdc90582787dde94341768ba7823d054bfebf8b6571328b1c8dfbb54c3db5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97002a08689ed2ea9bbc9e6747ff7ae4638a836fb387f9dfb532ed474b3dca16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97002a08689ed2ea9bbc9e6747ff7ae4638a836fb387f9dfb532ed474b3dca16->enter($__internal_97002a08689ed2ea9bbc9e6747ff7ae4638a836fb387f9dfb532ed474b3dca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5da9b1005c839af03f0d10dc360f0001335bf6cbc442e1d9a03f7a674faa5bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da9b1005c839af03f0d10dc360f0001335bf6cbc442e1d9a03f7a674faa5bcb->enter($__internal_5da9b1005c839af03f0d10dc360f0001335bf6cbc442e1d9a03f7a674faa5bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5da9b1005c839af03f0d10dc360f0001335bf6cbc442e1d9a03f7a674faa5bcb->leave($__internal_5da9b1005c839af03f0d10dc360f0001335bf6cbc442e1d9a03f7a674faa5bcb_prof);

        
        $__internal_97002a08689ed2ea9bbc9e6747ff7ae4638a836fb387f9dfb532ed474b3dca16->leave($__internal_97002a08689ed2ea9bbc9e6747ff7ae4638a836fb387f9dfb532ed474b3dca16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
