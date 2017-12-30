<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f1b2694db11a511e0c8fa71f01f40c52783d55f7509a0614c1da4402b1379dab extends Twig_Template
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
        $__internal_e2a723ded178aaf24561db4a976fc6b2f64781b2970bf42c4b27018e3b3ef4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a723ded178aaf24561db4a976fc6b2f64781b2970bf42c4b27018e3b3ef4c0->enter($__internal_e2a723ded178aaf24561db4a976fc6b2f64781b2970bf42c4b27018e3b3ef4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_a991b0c071c760116235521afa5178dea95acab12744805858629381fb7b4c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a991b0c071c760116235521afa5178dea95acab12744805858629381fb7b4c9c->enter($__internal_a991b0c071c760116235521afa5178dea95acab12744805858629381fb7b4c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e2a723ded178aaf24561db4a976fc6b2f64781b2970bf42c4b27018e3b3ef4c0->leave($__internal_e2a723ded178aaf24561db4a976fc6b2f64781b2970bf42c4b27018e3b3ef4c0_prof);

        
        $__internal_a991b0c071c760116235521afa5178dea95acab12744805858629381fb7b4c9c->leave($__internal_a991b0c071c760116235521afa5178dea95acab12744805858629381fb7b4c9c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_907e2960b07f2c764653666b30987c9dcc0841c3cc8c876d73eda8816666be50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907e2960b07f2c764653666b30987c9dcc0841c3cc8c876d73eda8816666be50->enter($__internal_907e2960b07f2c764653666b30987c9dcc0841c3cc8c876d73eda8816666be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_cecc56340ae34fa3e27d544d2f6e1d2c00f917cf230451476e09a32ab2d39046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecc56340ae34fa3e27d544d2f6e1d2c00f917cf230451476e09a32ab2d39046->enter($__internal_cecc56340ae34fa3e27d544d2f6e1d2c00f917cf230451476e09a32ab2d39046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_cecc56340ae34fa3e27d544d2f6e1d2c00f917cf230451476e09a32ab2d39046->leave($__internal_cecc56340ae34fa3e27d544d2f6e1d2c00f917cf230451476e09a32ab2d39046_prof);

        
        $__internal_907e2960b07f2c764653666b30987c9dcc0841c3cc8c876d73eda8816666be50->leave($__internal_907e2960b07f2c764653666b30987c9dcc0841c3cc8c876d73eda8816666be50_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ca2b59a74be180a6cac3429358ab27a1504a0da0249a7a07a70b51324082e0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2b59a74be180a6cac3429358ab27a1504a0da0249a7a07a70b51324082e0fc->enter($__internal_ca2b59a74be180a6cac3429358ab27a1504a0da0249a7a07a70b51324082e0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_14979741fb90aded6b11af531bd913a06f95cc7d45d648e66386d26a6724dd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14979741fb90aded6b11af531bd913a06f95cc7d45d648e66386d26a6724dd7a->enter($__internal_14979741fb90aded6b11af531bd913a06f95cc7d45d648e66386d26a6724dd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_14979741fb90aded6b11af531bd913a06f95cc7d45d648e66386d26a6724dd7a->leave($__internal_14979741fb90aded6b11af531bd913a06f95cc7d45d648e66386d26a6724dd7a_prof);

        
        $__internal_ca2b59a74be180a6cac3429358ab27a1504a0da0249a7a07a70b51324082e0fc->leave($__internal_ca2b59a74be180a6cac3429358ab27a1504a0da0249a7a07a70b51324082e0fc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_78f7c11e17e3b379e31cea9b270989ab9797db762587d8a0e8b97beab832d5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f7c11e17e3b379e31cea9b270989ab9797db762587d8a0e8b97beab832d5e2->enter($__internal_78f7c11e17e3b379e31cea9b270989ab9797db762587d8a0e8b97beab832d5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bdd96e6bc1932ca5ec8f6e6661c83f14a0a037272436d2e901e10c7bfb8c0b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd96e6bc1932ca5ec8f6e6661c83f14a0a037272436d2e901e10c7bfb8c0b38->enter($__internal_bdd96e6bc1932ca5ec8f6e6661c83f14a0a037272436d2e901e10c7bfb8c0b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bdd96e6bc1932ca5ec8f6e6661c83f14a0a037272436d2e901e10c7bfb8c0b38->leave($__internal_bdd96e6bc1932ca5ec8f6e6661c83f14a0a037272436d2e901e10c7bfb8c0b38_prof);

        
        $__internal_78f7c11e17e3b379e31cea9b270989ab9797db762587d8a0e8b97beab832d5e2->leave($__internal_78f7c11e17e3b379e31cea9b270989ab9797db762587d8a0e8b97beab832d5e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
