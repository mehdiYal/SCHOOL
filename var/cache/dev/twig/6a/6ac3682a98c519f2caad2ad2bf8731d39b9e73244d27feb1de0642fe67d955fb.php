<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_436066f8cc628908220d0f5649d860bf0459d0d2e579f1a0fec15437133a1b96 extends Twig_Template
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
        $__internal_a54ab8135e5707826f11554e576a9843d4972efe20669f7599d4479f965f2d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54ab8135e5707826f11554e576a9843d4972efe20669f7599d4479f965f2d96->enter($__internal_a54ab8135e5707826f11554e576a9843d4972efe20669f7599d4479f965f2d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_594efd010815275c5382207c24ba1b847133e08ddea960fe449b7cdd30ad1620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594efd010815275c5382207c24ba1b847133e08ddea960fe449b7cdd30ad1620->enter($__internal_594efd010815275c5382207c24ba1b847133e08ddea960fe449b7cdd30ad1620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54ab8135e5707826f11554e576a9843d4972efe20669f7599d4479f965f2d96->leave($__internal_a54ab8135e5707826f11554e576a9843d4972efe20669f7599d4479f965f2d96_prof);

        
        $__internal_594efd010815275c5382207c24ba1b847133e08ddea960fe449b7cdd30ad1620->leave($__internal_594efd010815275c5382207c24ba1b847133e08ddea960fe449b7cdd30ad1620_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cd92101998d7736ae40b88cb6ae76725152e0ea40bedec7ca44567d13616775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd92101998d7736ae40b88cb6ae76725152e0ea40bedec7ca44567d13616775->enter($__internal_8cd92101998d7736ae40b88cb6ae76725152e0ea40bedec7ca44567d13616775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_77e86fb83dc370bb7e0a89a959b1d45598ab3a0aa3989a28c6e860ace6851017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e86fb83dc370bb7e0a89a959b1d45598ab3a0aa3989a28c6e860ace6851017->enter($__internal_77e86fb83dc370bb7e0a89a959b1d45598ab3a0aa3989a28c6e860ace6851017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_77e86fb83dc370bb7e0a89a959b1d45598ab3a0aa3989a28c6e860ace6851017->leave($__internal_77e86fb83dc370bb7e0a89a959b1d45598ab3a0aa3989a28c6e860ace6851017_prof);

        
        $__internal_8cd92101998d7736ae40b88cb6ae76725152e0ea40bedec7ca44567d13616775->leave($__internal_8cd92101998d7736ae40b88cb6ae76725152e0ea40bedec7ca44567d13616775_prof);

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
