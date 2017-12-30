<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bf99b3d9bebdd1326b5efffdaec5832da6829512d17438efe7894952cd158fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8fa35fb32d67f3d7e73aa2c73af6ac9cbe7406466b6f9cedc4bc7fc10ef39af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa35fb32d67f3d7e73aa2c73af6ac9cbe7406466b6f9cedc4bc7fc10ef39af1->enter($__internal_8fa35fb32d67f3d7e73aa2c73af6ac9cbe7406466b6f9cedc4bc7fc10ef39af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_cdcccc6aeefa4631030cdcc0b656610fbd80a0409641bb705cb2c7dc824d565c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcccc6aeefa4631030cdcc0b656610fbd80a0409641bb705cb2c7dc824d565c->enter($__internal_cdcccc6aeefa4631030cdcc0b656610fbd80a0409641bb705cb2c7dc824d565c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa35fb32d67f3d7e73aa2c73af6ac9cbe7406466b6f9cedc4bc7fc10ef39af1->leave($__internal_8fa35fb32d67f3d7e73aa2c73af6ac9cbe7406466b6f9cedc4bc7fc10ef39af1_prof);

        
        $__internal_cdcccc6aeefa4631030cdcc0b656610fbd80a0409641bb705cb2c7dc824d565c->leave($__internal_cdcccc6aeefa4631030cdcc0b656610fbd80a0409641bb705cb2c7dc824d565c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96812717ec99c0565d1af89d9df97b124c008842b3830a50b16067a6763769a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96812717ec99c0565d1af89d9df97b124c008842b3830a50b16067a6763769a3->enter($__internal_96812717ec99c0565d1af89d9df97b124c008842b3830a50b16067a6763769a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7fb46caca483bee36b97eb8b52f14d2296443a8386eda764e5912fa234a6204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fb46caca483bee36b97eb8b52f14d2296443a8386eda764e5912fa234a6204->enter($__internal_f7fb46caca483bee36b97eb8b52f14d2296443a8386eda764e5912fa234a6204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f7fb46caca483bee36b97eb8b52f14d2296443a8386eda764e5912fa234a6204->leave($__internal_f7fb46caca483bee36b97eb8b52f14d2296443a8386eda764e5912fa234a6204_prof);

        
        $__internal_96812717ec99c0565d1af89d9df97b124c008842b3830a50b16067a6763769a3->leave($__internal_96812717ec99c0565d1af89d9df97b124c008842b3830a50b16067a6763769a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
