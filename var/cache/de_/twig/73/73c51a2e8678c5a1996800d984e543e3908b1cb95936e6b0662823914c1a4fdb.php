<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_19c0dca3b92c3d1ddcfa527123c17dfc794a7e9470bc604b75c75bcda98f12ef extends Twig_Template
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
        $__internal_b4f044a2e7f351947f9982e59f6aaf0cae4497b4e6a5325fbe49ed2bb4438c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f044a2e7f351947f9982e59f6aaf0cae4497b4e6a5325fbe49ed2bb4438c6f->enter($__internal_b4f044a2e7f351947f9982e59f6aaf0cae4497b4e6a5325fbe49ed2bb4438c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_023f5130868d279b892811453251f0ff5e8ba38a45da213ae854d4ed90de8661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023f5130868d279b892811453251f0ff5e8ba38a45da213ae854d4ed90de8661->enter($__internal_023f5130868d279b892811453251f0ff5e8ba38a45da213ae854d4ed90de8661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b4f044a2e7f351947f9982e59f6aaf0cae4497b4e6a5325fbe49ed2bb4438c6f->leave($__internal_b4f044a2e7f351947f9982e59f6aaf0cae4497b4e6a5325fbe49ed2bb4438c6f_prof);

        
        $__internal_023f5130868d279b892811453251f0ff5e8ba38a45da213ae854d4ed90de8661->leave($__internal_023f5130868d279b892811453251f0ff5e8ba38a45da213ae854d4ed90de8661_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a5e2ef9002c41c0fa8b4caf2893e4206ac76763ff19ae9e98790457851a7c8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e2ef9002c41c0fa8b4caf2893e4206ac76763ff19ae9e98790457851a7c8cd->enter($__internal_a5e2ef9002c41c0fa8b4caf2893e4206ac76763ff19ae9e98790457851a7c8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_cdc97283ba124adbd3658977558eb37afa8fbbb166112d6949d1d2f226029dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc97283ba124adbd3658977558eb37afa8fbbb166112d6949d1d2f226029dbd->enter($__internal_cdc97283ba124adbd3658977558eb37afa8fbbb166112d6949d1d2f226029dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_cdc97283ba124adbd3658977558eb37afa8fbbb166112d6949d1d2f226029dbd->leave($__internal_cdc97283ba124adbd3658977558eb37afa8fbbb166112d6949d1d2f226029dbd_prof);

        
        $__internal_a5e2ef9002c41c0fa8b4caf2893e4206ac76763ff19ae9e98790457851a7c8cd->leave($__internal_a5e2ef9002c41c0fa8b4caf2893e4206ac76763ff19ae9e98790457851a7c8cd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_62bb745af141d20fd6d9a88ed084a361288f4f5f94bf97b825af53a1176875f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62bb745af141d20fd6d9a88ed084a361288f4f5f94bf97b825af53a1176875f6->enter($__internal_62bb745af141d20fd6d9a88ed084a361288f4f5f94bf97b825af53a1176875f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2b058fabb13519afb8db023dda8e5fbf282b04b4631ab7131d03ccf7f1041553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b058fabb13519afb8db023dda8e5fbf282b04b4631ab7131d03ccf7f1041553->enter($__internal_2b058fabb13519afb8db023dda8e5fbf282b04b4631ab7131d03ccf7f1041553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2b058fabb13519afb8db023dda8e5fbf282b04b4631ab7131d03ccf7f1041553->leave($__internal_2b058fabb13519afb8db023dda8e5fbf282b04b4631ab7131d03ccf7f1041553_prof);

        
        $__internal_62bb745af141d20fd6d9a88ed084a361288f4f5f94bf97b825af53a1176875f6->leave($__internal_62bb745af141d20fd6d9a88ed084a361288f4f5f94bf97b825af53a1176875f6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9f8b223ee59a0ae5b18cb9a5a9d8834cc9afd7d24ad08ca6ebcdf5a751c96fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8b223ee59a0ae5b18cb9a5a9d8834cc9afd7d24ad08ca6ebcdf5a751c96fa9->enter($__internal_9f8b223ee59a0ae5b18cb9a5a9d8834cc9afd7d24ad08ca6ebcdf5a751c96fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c6ab62c0c8853c01f1b1ea1d2fc36d08f2f7a313cc7a9bf3a193000ffd28c78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ab62c0c8853c01f1b1ea1d2fc36d08f2f7a313cc7a9bf3a193000ffd28c78a->enter($__internal_c6ab62c0c8853c01f1b1ea1d2fc36d08f2f7a313cc7a9bf3a193000ffd28c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c6ab62c0c8853c01f1b1ea1d2fc36d08f2f7a313cc7a9bf3a193000ffd28c78a->leave($__internal_c6ab62c0c8853c01f1b1ea1d2fc36d08f2f7a313cc7a9bf3a193000ffd28c78a_prof);

        
        $__internal_9f8b223ee59a0ae5b18cb9a5a9d8834cc9afd7d24ad08ca6ebcdf5a751c96fa9->leave($__internal_9f8b223ee59a0ae5b18cb9a5a9d8834cc9afd7d24ad08ca6ebcdf5a751c96fa9_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
