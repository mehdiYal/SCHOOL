<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3e30950144f9b0824c67bf29236d74be8c4685a2c559bb0b5c530896e7e07986 extends Twig_Template
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
        $__internal_b5681e6ce071f2e859612940887ffce13759f544258e46baa07e27aa7425522d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5681e6ce071f2e859612940887ffce13759f544258e46baa07e27aa7425522d->enter($__internal_b5681e6ce071f2e859612940887ffce13759f544258e46baa07e27aa7425522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_e08e647df37d5cd94fb762124b380a47125bb8c99526e0ca43c7265757dea102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08e647df37d5cd94fb762124b380a47125bb8c99526e0ca43c7265757dea102->enter($__internal_e08e647df37d5cd94fb762124b380a47125bb8c99526e0ca43c7265757dea102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b5681e6ce071f2e859612940887ffce13759f544258e46baa07e27aa7425522d->leave($__internal_b5681e6ce071f2e859612940887ffce13759f544258e46baa07e27aa7425522d_prof);

        
        $__internal_e08e647df37d5cd94fb762124b380a47125bb8c99526e0ca43c7265757dea102->leave($__internal_e08e647df37d5cd94fb762124b380a47125bb8c99526e0ca43c7265757dea102_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_77e3365506250ad85180a15c1eb7fdc596547e76cbf733ff92905cbef7a04644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e3365506250ad85180a15c1eb7fdc596547e76cbf733ff92905cbef7a04644->enter($__internal_77e3365506250ad85180a15c1eb7fdc596547e76cbf733ff92905cbef7a04644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_de33274fb0cf0fe35ad6274b7a4cd01e60cf2cfed5765b826ba7b08c39ab58a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de33274fb0cf0fe35ad6274b7a4cd01e60cf2cfed5765b826ba7b08c39ab58a9->enter($__internal_de33274fb0cf0fe35ad6274b7a4cd01e60cf2cfed5765b826ba7b08c39ab58a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_de33274fb0cf0fe35ad6274b7a4cd01e60cf2cfed5765b826ba7b08c39ab58a9->leave($__internal_de33274fb0cf0fe35ad6274b7a4cd01e60cf2cfed5765b826ba7b08c39ab58a9_prof);

        
        $__internal_77e3365506250ad85180a15c1eb7fdc596547e76cbf733ff92905cbef7a04644->leave($__internal_77e3365506250ad85180a15c1eb7fdc596547e76cbf733ff92905cbef7a04644_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_19e35c4a44f2b3c6ca20e49b25df62c30e75b7feb7a277544c0bce825768550b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e35c4a44f2b3c6ca20e49b25df62c30e75b7feb7a277544c0bce825768550b->enter($__internal_19e35c4a44f2b3c6ca20e49b25df62c30e75b7feb7a277544c0bce825768550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0b57efb1fe8a4ede124e1d666dd4a9a0a100304a5933ec2ef08c25f12d216c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b57efb1fe8a4ede124e1d666dd4a9a0a100304a5933ec2ef08c25f12d216c00->enter($__internal_0b57efb1fe8a4ede124e1d666dd4a9a0a100304a5933ec2ef08c25f12d216c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0b57efb1fe8a4ede124e1d666dd4a9a0a100304a5933ec2ef08c25f12d216c00->leave($__internal_0b57efb1fe8a4ede124e1d666dd4a9a0a100304a5933ec2ef08c25f12d216c00_prof);

        
        $__internal_19e35c4a44f2b3c6ca20e49b25df62c30e75b7feb7a277544c0bce825768550b->leave($__internal_19e35c4a44f2b3c6ca20e49b25df62c30e75b7feb7a277544c0bce825768550b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8c319ab9e4c923ef09d9dd496545cf278f6fd577c019e3a812cbf91986b9c445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c319ab9e4c923ef09d9dd496545cf278f6fd577c019e3a812cbf91986b9c445->enter($__internal_8c319ab9e4c923ef09d9dd496545cf278f6fd577c019e3a812cbf91986b9c445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9a8fa49efe2a56888c22513893d4134e9795df70a64b47f4bd63ae4912599378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8fa49efe2a56888c22513893d4134e9795df70a64b47f4bd63ae4912599378->enter($__internal_9a8fa49efe2a56888c22513893d4134e9795df70a64b47f4bd63ae4912599378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9a8fa49efe2a56888c22513893d4134e9795df70a64b47f4bd63ae4912599378->leave($__internal_9a8fa49efe2a56888c22513893d4134e9795df70a64b47f4bd63ae4912599378_prof);

        
        $__internal_8c319ab9e4c923ef09d9dd496545cf278f6fd577c019e3a812cbf91986b9c445->leave($__internal_8c319ab9e4c923ef09d9dd496545cf278f6fd577c019e3a812cbf91986b9c445_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
