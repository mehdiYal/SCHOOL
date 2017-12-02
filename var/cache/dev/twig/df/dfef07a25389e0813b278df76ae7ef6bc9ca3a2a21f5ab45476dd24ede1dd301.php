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
        $__internal_3e8ce0bc81bf2c209d30673898d41468316fba2eb5d2e8327f8127fd82ebaffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8ce0bc81bf2c209d30673898d41468316fba2eb5d2e8327f8127fd82ebaffe->enter($__internal_3e8ce0bc81bf2c209d30673898d41468316fba2eb5d2e8327f8127fd82ebaffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_695edf936a43b137c6bdb2c6e5a89047eb3e6b555caa345f8823910be939709c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695edf936a43b137c6bdb2c6e5a89047eb3e6b555caa345f8823910be939709c->enter($__internal_695edf936a43b137c6bdb2c6e5a89047eb3e6b555caa345f8823910be939709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3e8ce0bc81bf2c209d30673898d41468316fba2eb5d2e8327f8127fd82ebaffe->leave($__internal_3e8ce0bc81bf2c209d30673898d41468316fba2eb5d2e8327f8127fd82ebaffe_prof);

        
        $__internal_695edf936a43b137c6bdb2c6e5a89047eb3e6b555caa345f8823910be939709c->leave($__internal_695edf936a43b137c6bdb2c6e5a89047eb3e6b555caa345f8823910be939709c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_007e938d3df1ac35e5ba8f347fd4f9e805e83eef903a35d73c0ffe55cf0ec43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007e938d3df1ac35e5ba8f347fd4f9e805e83eef903a35d73c0ffe55cf0ec43e->enter($__internal_007e938d3df1ac35e5ba8f347fd4f9e805e83eef903a35d73c0ffe55cf0ec43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2ec3a00db053a98766595eedc416e7fd54c7e0f6b2d05edaa721c38453447808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec3a00db053a98766595eedc416e7fd54c7e0f6b2d05edaa721c38453447808->enter($__internal_2ec3a00db053a98766595eedc416e7fd54c7e0f6b2d05edaa721c38453447808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2ec3a00db053a98766595eedc416e7fd54c7e0f6b2d05edaa721c38453447808->leave($__internal_2ec3a00db053a98766595eedc416e7fd54c7e0f6b2d05edaa721c38453447808_prof);

        
        $__internal_007e938d3df1ac35e5ba8f347fd4f9e805e83eef903a35d73c0ffe55cf0ec43e->leave($__internal_007e938d3df1ac35e5ba8f347fd4f9e805e83eef903a35d73c0ffe55cf0ec43e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c5d32b544bd76db397f63977353b0d02fc889cdc2ed87e93c3a851d18d5ed662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d32b544bd76db397f63977353b0d02fc889cdc2ed87e93c3a851d18d5ed662->enter($__internal_c5d32b544bd76db397f63977353b0d02fc889cdc2ed87e93c3a851d18d5ed662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_167411c4f1cc7e973f4cb7f8672b8a41cdf9d0ed14bb2a1090198796197d5d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167411c4f1cc7e973f4cb7f8672b8a41cdf9d0ed14bb2a1090198796197d5d4e->enter($__internal_167411c4f1cc7e973f4cb7f8672b8a41cdf9d0ed14bb2a1090198796197d5d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_167411c4f1cc7e973f4cb7f8672b8a41cdf9d0ed14bb2a1090198796197d5d4e->leave($__internal_167411c4f1cc7e973f4cb7f8672b8a41cdf9d0ed14bb2a1090198796197d5d4e_prof);

        
        $__internal_c5d32b544bd76db397f63977353b0d02fc889cdc2ed87e93c3a851d18d5ed662->leave($__internal_c5d32b544bd76db397f63977353b0d02fc889cdc2ed87e93c3a851d18d5ed662_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6f82425d7bba4e77a50e2ff1c1cd69ecc5e33e6680704376203e3e6056e0a495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f82425d7bba4e77a50e2ff1c1cd69ecc5e33e6680704376203e3e6056e0a495->enter($__internal_6f82425d7bba4e77a50e2ff1c1cd69ecc5e33e6680704376203e3e6056e0a495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_498de6dd37b62e05cff2b4d274f0d3c7c18721ce2718c6d37af3ee23e26f5be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498de6dd37b62e05cff2b4d274f0d3c7c18721ce2718c6d37af3ee23e26f5be0->enter($__internal_498de6dd37b62e05cff2b4d274f0d3c7c18721ce2718c6d37af3ee23e26f5be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_498de6dd37b62e05cff2b4d274f0d3c7c18721ce2718c6d37af3ee23e26f5be0->leave($__internal_498de6dd37b62e05cff2b4d274f0d3c7c18721ce2718c6d37af3ee23e26f5be0_prof);

        
        $__internal_6f82425d7bba4e77a50e2ff1c1cd69ecc5e33e6680704376203e3e6056e0a495->leave($__internal_6f82425d7bba4e77a50e2ff1c1cd69ecc5e33e6680704376203e3e6056e0a495_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
