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
        $__internal_f188b7b3cc1761e9df1608c72051649bab80402dbe4658ae6db64abc36bb2211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f188b7b3cc1761e9df1608c72051649bab80402dbe4658ae6db64abc36bb2211->enter($__internal_f188b7b3cc1761e9df1608c72051649bab80402dbe4658ae6db64abc36bb2211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_094d8ad039a83f9ea5d5a2d93d0b0cc44a7894543bcee4f0a5f1a4350aea102a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094d8ad039a83f9ea5d5a2d93d0b0cc44a7894543bcee4f0a5f1a4350aea102a->enter($__internal_094d8ad039a83f9ea5d5a2d93d0b0cc44a7894543bcee4f0a5f1a4350aea102a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f188b7b3cc1761e9df1608c72051649bab80402dbe4658ae6db64abc36bb2211->leave($__internal_f188b7b3cc1761e9df1608c72051649bab80402dbe4658ae6db64abc36bb2211_prof);

        
        $__internal_094d8ad039a83f9ea5d5a2d93d0b0cc44a7894543bcee4f0a5f1a4350aea102a->leave($__internal_094d8ad039a83f9ea5d5a2d93d0b0cc44a7894543bcee4f0a5f1a4350aea102a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d5a1ff9521c8d6280c9b4e6dab340081a758a53e272b1e1ea93229aa6375e658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a1ff9521c8d6280c9b4e6dab340081a758a53e272b1e1ea93229aa6375e658->enter($__internal_d5a1ff9521c8d6280c9b4e6dab340081a758a53e272b1e1ea93229aa6375e658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_93326a2cb0fcf596f784789a07e52c4b7d07e3f1e9b1956524f819751bd1f0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93326a2cb0fcf596f784789a07e52c4b7d07e3f1e9b1956524f819751bd1f0dd->enter($__internal_93326a2cb0fcf596f784789a07e52c4b7d07e3f1e9b1956524f819751bd1f0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_93326a2cb0fcf596f784789a07e52c4b7d07e3f1e9b1956524f819751bd1f0dd->leave($__internal_93326a2cb0fcf596f784789a07e52c4b7d07e3f1e9b1956524f819751bd1f0dd_prof);

        
        $__internal_d5a1ff9521c8d6280c9b4e6dab340081a758a53e272b1e1ea93229aa6375e658->leave($__internal_d5a1ff9521c8d6280c9b4e6dab340081a758a53e272b1e1ea93229aa6375e658_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e5bcfebe8816e184473e97ca9647005e70a7fcb969db28fe580a6d88dc8460c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5bcfebe8816e184473e97ca9647005e70a7fcb969db28fe580a6d88dc8460c->enter($__internal_7e5bcfebe8816e184473e97ca9647005e70a7fcb969db28fe580a6d88dc8460c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e8c7469201053c8632abb91411b6ad019fe3ab5b23f43d5df5422275ccb93f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c7469201053c8632abb91411b6ad019fe3ab5b23f43d5df5422275ccb93f0a->enter($__internal_e8c7469201053c8632abb91411b6ad019fe3ab5b23f43d5df5422275ccb93f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e8c7469201053c8632abb91411b6ad019fe3ab5b23f43d5df5422275ccb93f0a->leave($__internal_e8c7469201053c8632abb91411b6ad019fe3ab5b23f43d5df5422275ccb93f0a_prof);

        
        $__internal_7e5bcfebe8816e184473e97ca9647005e70a7fcb969db28fe580a6d88dc8460c->leave($__internal_7e5bcfebe8816e184473e97ca9647005e70a7fcb969db28fe580a6d88dc8460c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_12db94f8a7237e64a6964790c5a31786b6c95dcdd742eace96e1fdd8dcd96d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12db94f8a7237e64a6964790c5a31786b6c95dcdd742eace96e1fdd8dcd96d5d->enter($__internal_12db94f8a7237e64a6964790c5a31786b6c95dcdd742eace96e1fdd8dcd96d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_61dad356c357545a4f37a58d88af1d2a6e4b254d42723a2adf858124dfb3a7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dad356c357545a4f37a58d88af1d2a6e4b254d42723a2adf858124dfb3a7d5->enter($__internal_61dad356c357545a4f37a58d88af1d2a6e4b254d42723a2adf858124dfb3a7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_61dad356c357545a4f37a58d88af1d2a6e4b254d42723a2adf858124dfb3a7d5->leave($__internal_61dad356c357545a4f37a58d88af1d2a6e4b254d42723a2adf858124dfb3a7d5_prof);

        
        $__internal_12db94f8a7237e64a6964790c5a31786b6c95dcdd742eace96e1fdd8dcd96d5d->leave($__internal_12db94f8a7237e64a6964790c5a31786b6c95dcdd742eace96e1fdd8dcd96d5d_prof);

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
