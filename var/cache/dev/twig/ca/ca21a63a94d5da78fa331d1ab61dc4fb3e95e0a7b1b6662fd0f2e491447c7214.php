<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9a92024f757c65d9974a3ea6d9d57aa60ec8d50559862acc3058792d84f9ec81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e47782bae3aa6865b16c58e0f819d035358055b720fb22df57e2782cdac1c1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47782bae3aa6865b16c58e0f819d035358055b720fb22df57e2782cdac1c1d1->enter($__internal_e47782bae3aa6865b16c58e0f819d035358055b720fb22df57e2782cdac1c1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_2debf044a32ed164e2c091bdb93e48c1b027681ed88af01060a3503b0051d62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2debf044a32ed164e2c091bdb93e48c1b027681ed88af01060a3503b0051d62b->enter($__internal_2debf044a32ed164e2c091bdb93e48c1b027681ed88af01060a3503b0051d62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e47782bae3aa6865b16c58e0f819d035358055b720fb22df57e2782cdac1c1d1->leave($__internal_e47782bae3aa6865b16c58e0f819d035358055b720fb22df57e2782cdac1c1d1_prof);

        
        $__internal_2debf044a32ed164e2c091bdb93e48c1b027681ed88af01060a3503b0051d62b->leave($__internal_2debf044a32ed164e2c091bdb93e48c1b027681ed88af01060a3503b0051d62b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75e2c6a1a784cd216a543973d53a09432342524e818afd2328a998099b9e6db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e2c6a1a784cd216a543973d53a09432342524e818afd2328a998099b9e6db9->enter($__internal_75e2c6a1a784cd216a543973d53a09432342524e818afd2328a998099b9e6db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b8297088429a44c5bd5aecf7fcc70f7951185509b8f05f18d20d2ec52e24b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8297088429a44c5bd5aecf7fcc70f7951185509b8f05f18d20d2ec52e24b99->enter($__internal_4b8297088429a44c5bd5aecf7fcc70f7951185509b8f05f18d20d2ec52e24b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4b8297088429a44c5bd5aecf7fcc70f7951185509b8f05f18d20d2ec52e24b99->leave($__internal_4b8297088429a44c5bd5aecf7fcc70f7951185509b8f05f18d20d2ec52e24b99_prof);

        
        $__internal_75e2c6a1a784cd216a543973d53a09432342524e818afd2328a998099b9e6db9->leave($__internal_75e2c6a1a784cd216a543973d53a09432342524e818afd2328a998099b9e6db9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
