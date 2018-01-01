<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_917feb25a95bd694c1b1ddad8588c29d22392220df3254b591d77da269cc3cda extends Twig_Template
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
        $__internal_83a7248baa1d9ed5c6d2b15e6ed592573feaf737043909984dd1d11cdf228ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a7248baa1d9ed5c6d2b15e6ed592573feaf737043909984dd1d11cdf228ba3->enter($__internal_83a7248baa1d9ed5c6d2b15e6ed592573feaf737043909984dd1d11cdf228ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_e713d3a9af7d4c381caa41e339235368c47d2a8e012254c2bbcf9562213b944c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e713d3a9af7d4c381caa41e339235368c47d2a8e012254c2bbcf9562213b944c->enter($__internal_e713d3a9af7d4c381caa41e339235368c47d2a8e012254c2bbcf9562213b944c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83a7248baa1d9ed5c6d2b15e6ed592573feaf737043909984dd1d11cdf228ba3->leave($__internal_83a7248baa1d9ed5c6d2b15e6ed592573feaf737043909984dd1d11cdf228ba3_prof);

        
        $__internal_e713d3a9af7d4c381caa41e339235368c47d2a8e012254c2bbcf9562213b944c->leave($__internal_e713d3a9af7d4c381caa41e339235368c47d2a8e012254c2bbcf9562213b944c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_860c16d9950421f28801d9d86f8aa3046f9d25ce80e4675f652cfb2cb7a3409e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860c16d9950421f28801d9d86f8aa3046f9d25ce80e4675f652cfb2cb7a3409e->enter($__internal_860c16d9950421f28801d9d86f8aa3046f9d25ce80e4675f652cfb2cb7a3409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3aa8f2f2e286b1e068991b9de7f740cbeeaf7f41218cdeb4c6b62a0c385a273a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa8f2f2e286b1e068991b9de7f740cbeeaf7f41218cdeb4c6b62a0c385a273a->enter($__internal_3aa8f2f2e286b1e068991b9de7f740cbeeaf7f41218cdeb4c6b62a0c385a273a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3aa8f2f2e286b1e068991b9de7f740cbeeaf7f41218cdeb4c6b62a0c385a273a->leave($__internal_3aa8f2f2e286b1e068991b9de7f740cbeeaf7f41218cdeb4c6b62a0c385a273a_prof);

        
        $__internal_860c16d9950421f28801d9d86f8aa3046f9d25ce80e4675f652cfb2cb7a3409e->leave($__internal_860c16d9950421f28801d9d86f8aa3046f9d25ce80e4675f652cfb2cb7a3409e_prof);

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
