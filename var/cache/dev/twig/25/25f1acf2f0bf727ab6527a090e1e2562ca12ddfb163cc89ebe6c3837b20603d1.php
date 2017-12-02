<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_70e59212a33bbc3ba078a9c00406a1a9c76af612cf2fc2ce7394d717b59219da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_6070bbff8922fed80355fb0ca938f8b386bcd8854912a8c7aa8ce00a07a14a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6070bbff8922fed80355fb0ca938f8b386bcd8854912a8c7aa8ce00a07a14a86->enter($__internal_6070bbff8922fed80355fb0ca938f8b386bcd8854912a8c7aa8ce00a07a14a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_ea93a65391f6fc2d6e81e68385b8d4b2e84ce5f9165c0ec1d07ccd990a7b311a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea93a65391f6fc2d6e81e68385b8d4b2e84ce5f9165c0ec1d07ccd990a7b311a->enter($__internal_ea93a65391f6fc2d6e81e68385b8d4b2e84ce5f9165c0ec1d07ccd990a7b311a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6070bbff8922fed80355fb0ca938f8b386bcd8854912a8c7aa8ce00a07a14a86->leave($__internal_6070bbff8922fed80355fb0ca938f8b386bcd8854912a8c7aa8ce00a07a14a86_prof);

        
        $__internal_ea93a65391f6fc2d6e81e68385b8d4b2e84ce5f9165c0ec1d07ccd990a7b311a->leave($__internal_ea93a65391f6fc2d6e81e68385b8d4b2e84ce5f9165c0ec1d07ccd990a7b311a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1d8399f32342f31edd83fb49dd373c08eaa55340cb5826496496bb4ca3167d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d8399f32342f31edd83fb49dd373c08eaa55340cb5826496496bb4ca3167d0->enter($__internal_e1d8399f32342f31edd83fb49dd373c08eaa55340cb5826496496bb4ca3167d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4295b5c7dc2411cbecf7cee38e42c13760f97e71e413b90f54212f61a22ee2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4295b5c7dc2411cbecf7cee38e42c13760f97e71e413b90f54212f61a22ee2e8->enter($__internal_4295b5c7dc2411cbecf7cee38e42c13760f97e71e413b90f54212f61a22ee2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4295b5c7dc2411cbecf7cee38e42c13760f97e71e413b90f54212f61a22ee2e8->leave($__internal_4295b5c7dc2411cbecf7cee38e42c13760f97e71e413b90f54212f61a22ee2e8_prof);

        
        $__internal_e1d8399f32342f31edd83fb49dd373c08eaa55340cb5826496496bb4ca3167d0->leave($__internal_e1d8399f32342f31edd83fb49dd373c08eaa55340cb5826496496bb4ca3167d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
