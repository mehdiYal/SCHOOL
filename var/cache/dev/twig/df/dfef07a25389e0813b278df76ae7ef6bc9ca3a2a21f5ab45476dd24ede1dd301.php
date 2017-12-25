<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bc5a673ed30d6440147e1ff563bb0edbfa349cee6b137d7dd48ed40dc4a66464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea05169c45f745b469e35dbc77df141110efc889cff583e19192533282be609d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea05169c45f745b469e35dbc77df141110efc889cff583e19192533282be609d->enter($__internal_ea05169c45f745b469e35dbc77df141110efc889cff583e19192533282be609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_789d593d2c1f22e6be0a56dbdf26ec6355a84f64628d74a9fcade149c40f62be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789d593d2c1f22e6be0a56dbdf26ec6355a84f64628d74a9fcade149c40f62be->enter($__internal_789d593d2c1f22e6be0a56dbdf26ec6355a84f64628d74a9fcade149c40f62be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ea05169c45f745b469e35dbc77df141110efc889cff583e19192533282be609d->leave($__internal_ea05169c45f745b469e35dbc77df141110efc889cff583e19192533282be609d_prof);

        
        $__internal_789d593d2c1f22e6be0a56dbdf26ec6355a84f64628d74a9fcade149c40f62be->leave($__internal_789d593d2c1f22e6be0a56dbdf26ec6355a84f64628d74a9fcade149c40f62be_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8509189f28b49559a67dc008511314e3448b9b4518ffa9cf05bd4094d5dc2fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8509189f28b49559a67dc008511314e3448b9b4518ffa9cf05bd4094d5dc2fae->enter($__internal_8509189f28b49559a67dc008511314e3448b9b4518ffa9cf05bd4094d5dc2fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3296a811dce993bd2c99cc215fec5b06b500607468713fe31abefc15625bdb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3296a811dce993bd2c99cc215fec5b06b500607468713fe31abefc15625bdb8c->enter($__internal_3296a811dce993bd2c99cc215fec5b06b500607468713fe31abefc15625bdb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_3296a811dce993bd2c99cc215fec5b06b500607468713fe31abefc15625bdb8c->leave($__internal_3296a811dce993bd2c99cc215fec5b06b500607468713fe31abefc15625bdb8c_prof);

        
        $__internal_8509189f28b49559a67dc008511314e3448b9b4518ffa9cf05bd4094d5dc2fae->leave($__internal_8509189f28b49559a67dc008511314e3448b9b4518ffa9cf05bd4094d5dc2fae_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_46fe87c26021d32292c887c927154005ec5b46e2103306cc85875c6e3c457dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fe87c26021d32292c887c927154005ec5b46e2103306cc85875c6e3c457dc5->enter($__internal_46fe87c26021d32292c887c927154005ec5b46e2103306cc85875c6e3c457dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6238e1fb7f218853ca52577b15e439d0f00d26081555eb94632ee00a20954bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6238e1fb7f218853ca52577b15e439d0f00d26081555eb94632ee00a20954bd8->enter($__internal_6238e1fb7f218853ca52577b15e439d0f00d26081555eb94632ee00a20954bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6238e1fb7f218853ca52577b15e439d0f00d26081555eb94632ee00a20954bd8->leave($__internal_6238e1fb7f218853ca52577b15e439d0f00d26081555eb94632ee00a20954bd8_prof);

        
        $__internal_46fe87c26021d32292c887c927154005ec5b46e2103306cc85875c6e3c457dc5->leave($__internal_46fe87c26021d32292c887c927154005ec5b46e2103306cc85875c6e3c457dc5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_42cdc5eeecbefc26a5c7554ef7e2cf149d7e8dee569146b32206617a8f210b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42cdc5eeecbefc26a5c7554ef7e2cf149d7e8dee569146b32206617a8f210b42->enter($__internal_42cdc5eeecbefc26a5c7554ef7e2cf149d7e8dee569146b32206617a8f210b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2b314ea961bdb6cd2600f24b1dad9d28406bfcf0e993b21f5139c95616076886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b314ea961bdb6cd2600f24b1dad9d28406bfcf0e993b21f5139c95616076886->enter($__internal_2b314ea961bdb6cd2600f24b1dad9d28406bfcf0e993b21f5139c95616076886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2b314ea961bdb6cd2600f24b1dad9d28406bfcf0e993b21f5139c95616076886->leave($__internal_2b314ea961bdb6cd2600f24b1dad9d28406bfcf0e993b21f5139c95616076886_prof);

        
        $__internal_42cdc5eeecbefc26a5c7554ef7e2cf149d7e8dee569146b32206617a8f210b42->leave($__internal_42cdc5eeecbefc26a5c7554ef7e2cf149d7e8dee569146b32206617a8f210b42_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
