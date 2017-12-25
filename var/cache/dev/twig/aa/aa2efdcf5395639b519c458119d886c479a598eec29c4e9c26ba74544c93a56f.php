<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d8e67cd7a8baa436751b8b9cd5abfda77c6e4a99db4ffd9cdec90a8aad6078fe extends Twig_Template
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
        $__internal_d37e3cf0a5848158f84c97c007f6ea4288b4c47168477c6deb71609205ddde18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37e3cf0a5848158f84c97c007f6ea4288b4c47168477c6deb71609205ddde18->enter($__internal_d37e3cf0a5848158f84c97c007f6ea4288b4c47168477c6deb71609205ddde18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_d58fb3ceb09b52fce51f8993cff7250e4c29a44f3c3b847c0a4f68a74dfc901c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58fb3ceb09b52fce51f8993cff7250e4c29a44f3c3b847c0a4f68a74dfc901c->enter($__internal_d58fb3ceb09b52fce51f8993cff7250e4c29a44f3c3b847c0a4f68a74dfc901c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d37e3cf0a5848158f84c97c007f6ea4288b4c47168477c6deb71609205ddde18->leave($__internal_d37e3cf0a5848158f84c97c007f6ea4288b4c47168477c6deb71609205ddde18_prof);

        
        $__internal_d58fb3ceb09b52fce51f8993cff7250e4c29a44f3c3b847c0a4f68a74dfc901c->leave($__internal_d58fb3ceb09b52fce51f8993cff7250e4c29a44f3c3b847c0a4f68a74dfc901c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8ea6a4493679450fe50dd63c420b169cce72246e2e1605338fa69b186dee3f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea6a4493679450fe50dd63c420b169cce72246e2e1605338fa69b186dee3f1d->enter($__internal_8ea6a4493679450fe50dd63c420b169cce72246e2e1605338fa69b186dee3f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7e985af7d86f94b3d593463aea232a10f1e3dfae50df080b573a5ea92836a5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e985af7d86f94b3d593463aea232a10f1e3dfae50df080b573a5ea92836a5ed->enter($__internal_7e985af7d86f94b3d593463aea232a10f1e3dfae50df080b573a5ea92836a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_7e985af7d86f94b3d593463aea232a10f1e3dfae50df080b573a5ea92836a5ed->leave($__internal_7e985af7d86f94b3d593463aea232a10f1e3dfae50df080b573a5ea92836a5ed_prof);

        
        $__internal_8ea6a4493679450fe50dd63c420b169cce72246e2e1605338fa69b186dee3f1d->leave($__internal_8ea6a4493679450fe50dd63c420b169cce72246e2e1605338fa69b186dee3f1d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_31445a6e746a88fc02e2da48a786d0d8400b03566608058b7dfddaf9df4375d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31445a6e746a88fc02e2da48a786d0d8400b03566608058b7dfddaf9df4375d0->enter($__internal_31445a6e746a88fc02e2da48a786d0d8400b03566608058b7dfddaf9df4375d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_38de49f1aea1f206bc867ffa853b831f8823f43c3837bbab2cb06d265d74476e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38de49f1aea1f206bc867ffa853b831f8823f43c3837bbab2cb06d265d74476e->enter($__internal_38de49f1aea1f206bc867ffa853b831f8823f43c3837bbab2cb06d265d74476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_38de49f1aea1f206bc867ffa853b831f8823f43c3837bbab2cb06d265d74476e->leave($__internal_38de49f1aea1f206bc867ffa853b831f8823f43c3837bbab2cb06d265d74476e_prof);

        
        $__internal_31445a6e746a88fc02e2da48a786d0d8400b03566608058b7dfddaf9df4375d0->leave($__internal_31445a6e746a88fc02e2da48a786d0d8400b03566608058b7dfddaf9df4375d0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7998d99100ffe915e4ca6630603a66216dc412ec07856305d721761cc69504e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7998d99100ffe915e4ca6630603a66216dc412ec07856305d721761cc69504e8->enter($__internal_7998d99100ffe915e4ca6630603a66216dc412ec07856305d721761cc69504e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f5475d731d571d70cc767e720d18ec9d9c9c35e41f9aeafa2ab1a6a962de19d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5475d731d571d70cc767e720d18ec9d9c9c35e41f9aeafa2ab1a6a962de19d2->enter($__internal_f5475d731d571d70cc767e720d18ec9d9c9c35e41f9aeafa2ab1a6a962de19d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f5475d731d571d70cc767e720d18ec9d9c9c35e41f9aeafa2ab1a6a962de19d2->leave($__internal_f5475d731d571d70cc767e720d18ec9d9c9c35e41f9aeafa2ab1a6a962de19d2_prof);

        
        $__internal_7998d99100ffe915e4ca6630603a66216dc412ec07856305d721761cc69504e8->leave($__internal_7998d99100ffe915e4ca6630603a66216dc412ec07856305d721761cc69504e8_prof);

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
