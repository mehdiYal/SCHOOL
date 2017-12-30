<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_950544fbf30ebf37d20b3359fb5941bf9c087ad8e6192a4633ee75582eaba04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_8e95d497af3f0e0c1f45129e5e87a578f3a49472b25933c8f4e9c55bee819a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e95d497af3f0e0c1f45129e5e87a578f3a49472b25933c8f4e9c55bee819a2d->enter($__internal_8e95d497af3f0e0c1f45129e5e87a578f3a49472b25933c8f4e9c55bee819a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5d1280a2446952368fffef50de6193b63b6c0efb91e78f08270196e857d69e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1280a2446952368fffef50de6193b63b6c0efb91e78f08270196e857d69e88->enter($__internal_5d1280a2446952368fffef50de6193b63b6c0efb91e78f08270196e857d69e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e95d497af3f0e0c1f45129e5e87a578f3a49472b25933c8f4e9c55bee819a2d->leave($__internal_8e95d497af3f0e0c1f45129e5e87a578f3a49472b25933c8f4e9c55bee819a2d_prof);

        
        $__internal_5d1280a2446952368fffef50de6193b63b6c0efb91e78f08270196e857d69e88->leave($__internal_5d1280a2446952368fffef50de6193b63b6c0efb91e78f08270196e857d69e88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a550eaaac5fe1cdf2238c750f118ccb340a1f7df75c1fb86a6913aa826f8cd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a550eaaac5fe1cdf2238c750f118ccb340a1f7df75c1fb86a6913aa826f8cd32->enter($__internal_a550eaaac5fe1cdf2238c750f118ccb340a1f7df75c1fb86a6913aa826f8cd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0760c428ba4c50c2f4fd44c54b796c8cfada8337c33e10fb360789bcf91c4074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0760c428ba4c50c2f4fd44c54b796c8cfada8337c33e10fb360789bcf91c4074->enter($__internal_0760c428ba4c50c2f4fd44c54b796c8cfada8337c33e10fb360789bcf91c4074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0760c428ba4c50c2f4fd44c54b796c8cfada8337c33e10fb360789bcf91c4074->leave($__internal_0760c428ba4c50c2f4fd44c54b796c8cfada8337c33e10fb360789bcf91c4074_prof);

        
        $__internal_a550eaaac5fe1cdf2238c750f118ccb340a1f7df75c1fb86a6913aa826f8cd32->leave($__internal_a550eaaac5fe1cdf2238c750f118ccb340a1f7df75c1fb86a6913aa826f8cd32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
