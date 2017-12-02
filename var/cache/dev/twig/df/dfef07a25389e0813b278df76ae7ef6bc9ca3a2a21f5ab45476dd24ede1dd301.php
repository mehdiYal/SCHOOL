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
        $__internal_0a690664f90d83e58d1dfdbdcf4cff005b13f0d9fbff3c14fc6c8139ddb5c61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a690664f90d83e58d1dfdbdcf4cff005b13f0d9fbff3c14fc6c8139ddb5c61d->enter($__internal_0a690664f90d83e58d1dfdbdcf4cff005b13f0d9fbff3c14fc6c8139ddb5c61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e30388f9c2d11aec1fa855ec3426edc1646f885f7ec7240e0e2f438ecfe87ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30388f9c2d11aec1fa855ec3426edc1646f885f7ec7240e0e2f438ecfe87ff2->enter($__internal_e30388f9c2d11aec1fa855ec3426edc1646f885f7ec7240e0e2f438ecfe87ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0a690664f90d83e58d1dfdbdcf4cff005b13f0d9fbff3c14fc6c8139ddb5c61d->leave($__internal_0a690664f90d83e58d1dfdbdcf4cff005b13f0d9fbff3c14fc6c8139ddb5c61d_prof);

        
        $__internal_e30388f9c2d11aec1fa855ec3426edc1646f885f7ec7240e0e2f438ecfe87ff2->leave($__internal_e30388f9c2d11aec1fa855ec3426edc1646f885f7ec7240e0e2f438ecfe87ff2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c39f846c5caa1a5b53c5bdd607b3bd527226ab7c93a2f3d019a1a7b2e1e45990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39f846c5caa1a5b53c5bdd607b3bd527226ab7c93a2f3d019a1a7b2e1e45990->enter($__internal_c39f846c5caa1a5b53c5bdd607b3bd527226ab7c93a2f3d019a1a7b2e1e45990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_638c1619b1a155b85afc2b4d2fb78a1f78e98586d1afdcd93ebd952daa6bdb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638c1619b1a155b85afc2b4d2fb78a1f78e98586d1afdcd93ebd952daa6bdb47->enter($__internal_638c1619b1a155b85afc2b4d2fb78a1f78e98586d1afdcd93ebd952daa6bdb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_638c1619b1a155b85afc2b4d2fb78a1f78e98586d1afdcd93ebd952daa6bdb47->leave($__internal_638c1619b1a155b85afc2b4d2fb78a1f78e98586d1afdcd93ebd952daa6bdb47_prof);

        
        $__internal_c39f846c5caa1a5b53c5bdd607b3bd527226ab7c93a2f3d019a1a7b2e1e45990->leave($__internal_c39f846c5caa1a5b53c5bdd607b3bd527226ab7c93a2f3d019a1a7b2e1e45990_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d4208c27091cfb7de37abc15d2a025791349555066c3f73fe8388a2698626ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4208c27091cfb7de37abc15d2a025791349555066c3f73fe8388a2698626ee5->enter($__internal_d4208c27091cfb7de37abc15d2a025791349555066c3f73fe8388a2698626ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ccfcd1d6bd1e70a21ae2e74b135cc64db2649197bd8eac986a30702a94eaa888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfcd1d6bd1e70a21ae2e74b135cc64db2649197bd8eac986a30702a94eaa888->enter($__internal_ccfcd1d6bd1e70a21ae2e74b135cc64db2649197bd8eac986a30702a94eaa888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ccfcd1d6bd1e70a21ae2e74b135cc64db2649197bd8eac986a30702a94eaa888->leave($__internal_ccfcd1d6bd1e70a21ae2e74b135cc64db2649197bd8eac986a30702a94eaa888_prof);

        
        $__internal_d4208c27091cfb7de37abc15d2a025791349555066c3f73fe8388a2698626ee5->leave($__internal_d4208c27091cfb7de37abc15d2a025791349555066c3f73fe8388a2698626ee5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1644321b5a93b0d3362648e825660cb25b959bcaeb2c3368a8d6909cf82ae10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1644321b5a93b0d3362648e825660cb25b959bcaeb2c3368a8d6909cf82ae10a->enter($__internal_1644321b5a93b0d3362648e825660cb25b959bcaeb2c3368a8d6909cf82ae10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bb6e78594a28f4394e2a2b5fa8237bafffc3d405bdf53a807e285cee00750d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6e78594a28f4394e2a2b5fa8237bafffc3d405bdf53a807e285cee00750d7d->enter($__internal_bb6e78594a28f4394e2a2b5fa8237bafffc3d405bdf53a807e285cee00750d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bb6e78594a28f4394e2a2b5fa8237bafffc3d405bdf53a807e285cee00750d7d->leave($__internal_bb6e78594a28f4394e2a2b5fa8237bafffc3d405bdf53a807e285cee00750d7d_prof);

        
        $__internal_1644321b5a93b0d3362648e825660cb25b959bcaeb2c3368a8d6909cf82ae10a->leave($__internal_1644321b5a93b0d3362648e825660cb25b959bcaeb2c3368a8d6909cf82ae10a_prof);

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
