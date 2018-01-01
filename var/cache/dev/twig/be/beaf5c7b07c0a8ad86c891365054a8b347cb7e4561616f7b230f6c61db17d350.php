<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_563e383e180ce10c245a6f0ebfc15a0d5c638edff340d4361123447bca7ca103 extends Twig_Template
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
        $__internal_0c1f3a22a30600ee092bbec15f4461348fc677e79064f5958f112d757a657609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1f3a22a30600ee092bbec15f4461348fc677e79064f5958f112d757a657609->enter($__internal_0c1f3a22a30600ee092bbec15f4461348fc677e79064f5958f112d757a657609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_914a118fe6ef10b3e1d36cd18ac10bb5bd28464c28ee8705aba1ec642efa33ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914a118fe6ef10b3e1d36cd18ac10bb5bd28464c28ee8705aba1ec642efa33ca->enter($__internal_914a118fe6ef10b3e1d36cd18ac10bb5bd28464c28ee8705aba1ec642efa33ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0c1f3a22a30600ee092bbec15f4461348fc677e79064f5958f112d757a657609->leave($__internal_0c1f3a22a30600ee092bbec15f4461348fc677e79064f5958f112d757a657609_prof);

        
        $__internal_914a118fe6ef10b3e1d36cd18ac10bb5bd28464c28ee8705aba1ec642efa33ca->leave($__internal_914a118fe6ef10b3e1d36cd18ac10bb5bd28464c28ee8705aba1ec642efa33ca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_715306f3f8e225b2610dbadb8e96a802aedb66df109533759f8097e5346746ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715306f3f8e225b2610dbadb8e96a802aedb66df109533759f8097e5346746ca->enter($__internal_715306f3f8e225b2610dbadb8e96a802aedb66df109533759f8097e5346746ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d429b2204e7e0d861f7c6b540d82240db40cdda695ec07b07f2cdec9f79ac8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d429b2204e7e0d861f7c6b540d82240db40cdda695ec07b07f2cdec9f79ac8dc->enter($__internal_d429b2204e7e0d861f7c6b540d82240db40cdda695ec07b07f2cdec9f79ac8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d429b2204e7e0d861f7c6b540d82240db40cdda695ec07b07f2cdec9f79ac8dc->leave($__internal_d429b2204e7e0d861f7c6b540d82240db40cdda695ec07b07f2cdec9f79ac8dc_prof);

        
        $__internal_715306f3f8e225b2610dbadb8e96a802aedb66df109533759f8097e5346746ca->leave($__internal_715306f3f8e225b2610dbadb8e96a802aedb66df109533759f8097e5346746ca_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3bccabcd3cbacd773d9d1dac66f7be54dd1eb269c9b70c0750ff6db47a0a84c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bccabcd3cbacd773d9d1dac66f7be54dd1eb269c9b70c0750ff6db47a0a84c3->enter($__internal_3bccabcd3cbacd773d9d1dac66f7be54dd1eb269c9b70c0750ff6db47a0a84c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cba3ad94a5aab3e879aa956ba4fcce8a55761d18c4665dfb959b1c92312fe161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba3ad94a5aab3e879aa956ba4fcce8a55761d18c4665dfb959b1c92312fe161->enter($__internal_cba3ad94a5aab3e879aa956ba4fcce8a55761d18c4665dfb959b1c92312fe161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cba3ad94a5aab3e879aa956ba4fcce8a55761d18c4665dfb959b1c92312fe161->leave($__internal_cba3ad94a5aab3e879aa956ba4fcce8a55761d18c4665dfb959b1c92312fe161_prof);

        
        $__internal_3bccabcd3cbacd773d9d1dac66f7be54dd1eb269c9b70c0750ff6db47a0a84c3->leave($__internal_3bccabcd3cbacd773d9d1dac66f7be54dd1eb269c9b70c0750ff6db47a0a84c3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9b62dd3a47b35d8788f1b9844ff1f82de6937af62b5824d8478a83b569935605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b62dd3a47b35d8788f1b9844ff1f82de6937af62b5824d8478a83b569935605->enter($__internal_9b62dd3a47b35d8788f1b9844ff1f82de6937af62b5824d8478a83b569935605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_212c8866232b2943019b479ad6defc789d3de416bccd0bdfde67b16c8acb6f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212c8866232b2943019b479ad6defc789d3de416bccd0bdfde67b16c8acb6f12->enter($__internal_212c8866232b2943019b479ad6defc789d3de416bccd0bdfde67b16c8acb6f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_212c8866232b2943019b479ad6defc789d3de416bccd0bdfde67b16c8acb6f12->leave($__internal_212c8866232b2943019b479ad6defc789d3de416bccd0bdfde67b16c8acb6f12_prof);

        
        $__internal_9b62dd3a47b35d8788f1b9844ff1f82de6937af62b5824d8478a83b569935605->leave($__internal_9b62dd3a47b35d8788f1b9844ff1f82de6937af62b5824d8478a83b569935605_prof);

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
