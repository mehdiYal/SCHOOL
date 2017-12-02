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
        $__internal_476588754a3f08c9ad4cbffd1670c4d9b3303e404071a5fb4858b86687f0661a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476588754a3f08c9ad4cbffd1670c4d9b3303e404071a5fb4858b86687f0661a->enter($__internal_476588754a3f08c9ad4cbffd1670c4d9b3303e404071a5fb4858b86687f0661a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0359b2409b2817c5ef161cd5fba7c5902868d6ebd480c80f8611fab7d0e77258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0359b2409b2817c5ef161cd5fba7c5902868d6ebd480c80f8611fab7d0e77258->enter($__internal_0359b2409b2817c5ef161cd5fba7c5902868d6ebd480c80f8611fab7d0e77258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_476588754a3f08c9ad4cbffd1670c4d9b3303e404071a5fb4858b86687f0661a->leave($__internal_476588754a3f08c9ad4cbffd1670c4d9b3303e404071a5fb4858b86687f0661a_prof);

        
        $__internal_0359b2409b2817c5ef161cd5fba7c5902868d6ebd480c80f8611fab7d0e77258->leave($__internal_0359b2409b2817c5ef161cd5fba7c5902868d6ebd480c80f8611fab7d0e77258_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_829e833bd4ba7d0a7b3c6db937f13874be53a4c8321ab752137e7ded28c6acfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829e833bd4ba7d0a7b3c6db937f13874be53a4c8321ab752137e7ded28c6acfd->enter($__internal_829e833bd4ba7d0a7b3c6db937f13874be53a4c8321ab752137e7ded28c6acfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_36c10538e19f8cc0f0e1bc490de409ecc0549525123f9a161b11eaf2c1d339e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c10538e19f8cc0f0e1bc490de409ecc0549525123f9a161b11eaf2c1d339e2->enter($__internal_36c10538e19f8cc0f0e1bc490de409ecc0549525123f9a161b11eaf2c1d339e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_36c10538e19f8cc0f0e1bc490de409ecc0549525123f9a161b11eaf2c1d339e2->leave($__internal_36c10538e19f8cc0f0e1bc490de409ecc0549525123f9a161b11eaf2c1d339e2_prof);

        
        $__internal_829e833bd4ba7d0a7b3c6db937f13874be53a4c8321ab752137e7ded28c6acfd->leave($__internal_829e833bd4ba7d0a7b3c6db937f13874be53a4c8321ab752137e7ded28c6acfd_prof);

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
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
