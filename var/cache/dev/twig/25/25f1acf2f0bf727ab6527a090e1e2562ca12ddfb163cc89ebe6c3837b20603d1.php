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
        $__internal_7b32f925c68460d531473521da46343d795272ef64314bdf2a26ce9eb54fffaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b32f925c68460d531473521da46343d795272ef64314bdf2a26ce9eb54fffaa->enter($__internal_7b32f925c68460d531473521da46343d795272ef64314bdf2a26ce9eb54fffaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_b62f5113f92a90220fcf14832a6e9e1018c600a506c216965f11322a6a165e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62f5113f92a90220fcf14832a6e9e1018c600a506c216965f11322a6a165e2a->enter($__internal_b62f5113f92a90220fcf14832a6e9e1018c600a506c216965f11322a6a165e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b32f925c68460d531473521da46343d795272ef64314bdf2a26ce9eb54fffaa->leave($__internal_7b32f925c68460d531473521da46343d795272ef64314bdf2a26ce9eb54fffaa_prof);

        
        $__internal_b62f5113f92a90220fcf14832a6e9e1018c600a506c216965f11322a6a165e2a->leave($__internal_b62f5113f92a90220fcf14832a6e9e1018c600a506c216965f11322a6a165e2a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f54288a339bf5e197e300922a1d06ca585e64a34ba1c8fa1bf79976beba79a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54288a339bf5e197e300922a1d06ca585e64a34ba1c8fa1bf79976beba79a89->enter($__internal_f54288a339bf5e197e300922a1d06ca585e64a34ba1c8fa1bf79976beba79a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb4ce10a326290ca54a89b6b841fec6b34a3a2d8aae3e12eba035d7e70246cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4ce10a326290ca54a89b6b841fec6b34a3a2d8aae3e12eba035d7e70246cc8->enter($__internal_bb4ce10a326290ca54a89b6b841fec6b34a3a2d8aae3e12eba035d7e70246cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_bb4ce10a326290ca54a89b6b841fec6b34a3a2d8aae3e12eba035d7e70246cc8->leave($__internal_bb4ce10a326290ca54a89b6b841fec6b34a3a2d8aae3e12eba035d7e70246cc8_prof);

        
        $__internal_f54288a339bf5e197e300922a1d06ca585e64a34ba1c8fa1bf79976beba79a89->leave($__internal_f54288a339bf5e197e300922a1d06ca585e64a34ba1c8fa1bf79976beba79a89_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
