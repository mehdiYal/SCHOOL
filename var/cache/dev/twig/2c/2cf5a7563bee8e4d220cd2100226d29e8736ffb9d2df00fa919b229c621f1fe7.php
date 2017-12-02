<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_31df43f0df743c63ee238d4b05856eaab653bed6b358457074c64a1877c9715d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b2e8446068d5d1f73925f6df53bfe78c73327e9f02e9cf7c80e08c047166038d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e8446068d5d1f73925f6df53bfe78c73327e9f02e9cf7c80e08c047166038d->enter($__internal_b2e8446068d5d1f73925f6df53bfe78c73327e9f02e9cf7c80e08c047166038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_c973f1d727173a881306cffb1afead8e53d5b22ff581226d8f118aed8192896c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c973f1d727173a881306cffb1afead8e53d5b22ff581226d8f118aed8192896c->enter($__internal_c973f1d727173a881306cffb1afead8e53d5b22ff581226d8f118aed8192896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e8446068d5d1f73925f6df53bfe78c73327e9f02e9cf7c80e08c047166038d->leave($__internal_b2e8446068d5d1f73925f6df53bfe78c73327e9f02e9cf7c80e08c047166038d_prof);

        
        $__internal_c973f1d727173a881306cffb1afead8e53d5b22ff581226d8f118aed8192896c->leave($__internal_c973f1d727173a881306cffb1afead8e53d5b22ff581226d8f118aed8192896c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa5ca9d45730459a97a6d65c2b20a5e8ba5008d748601b0a044938598fbd3a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5ca9d45730459a97a6d65c2b20a5e8ba5008d748601b0a044938598fbd3a0a->enter($__internal_fa5ca9d45730459a97a6d65c2b20a5e8ba5008d748601b0a044938598fbd3a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4903e0b29c737c26ab229b245617ef90c1de1e50195ffca4dc9026652d0a3271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4903e0b29c737c26ab229b245617ef90c1de1e50195ffca4dc9026652d0a3271->enter($__internal_4903e0b29c737c26ab229b245617ef90c1de1e50195ffca4dc9026652d0a3271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4903e0b29c737c26ab229b245617ef90c1de1e50195ffca4dc9026652d0a3271->leave($__internal_4903e0b29c737c26ab229b245617ef90c1de1e50195ffca4dc9026652d0a3271_prof);

        
        $__internal_fa5ca9d45730459a97a6d65c2b20a5e8ba5008d748601b0a044938598fbd3a0a->leave($__internal_fa5ca9d45730459a97a6d65c2b20a5e8ba5008d748601b0a044938598fbd3a0a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
