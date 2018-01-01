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
        $__internal_6af3dc157558155fc5006fc35785900f493c936c1167e1ed2eecdfd74b841b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af3dc157558155fc5006fc35785900f493c936c1167e1ed2eecdfd74b841b3b->enter($__internal_6af3dc157558155fc5006fc35785900f493c936c1167e1ed2eecdfd74b841b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_fcbfd70b0686c14455ca300b0ea3319de06b1b1b6537feadbaea4debf9be9ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbfd70b0686c14455ca300b0ea3319de06b1b1b6537feadbaea4debf9be9ed4->enter($__internal_fcbfd70b0686c14455ca300b0ea3319de06b1b1b6537feadbaea4debf9be9ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6af3dc157558155fc5006fc35785900f493c936c1167e1ed2eecdfd74b841b3b->leave($__internal_6af3dc157558155fc5006fc35785900f493c936c1167e1ed2eecdfd74b841b3b_prof);

        
        $__internal_fcbfd70b0686c14455ca300b0ea3319de06b1b1b6537feadbaea4debf9be9ed4->leave($__internal_fcbfd70b0686c14455ca300b0ea3319de06b1b1b6537feadbaea4debf9be9ed4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4840f911870479831d1e262acb06c391ab289a805c659925f61df88b1a176276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4840f911870479831d1e262acb06c391ab289a805c659925f61df88b1a176276->enter($__internal_4840f911870479831d1e262acb06c391ab289a805c659925f61df88b1a176276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d5cad5e78faee318ad42d6aa37bbdbd5e9fdd7e5d24a4056640d0c2bb7ed60eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cad5e78faee318ad42d6aa37bbdbd5e9fdd7e5d24a4056640d0c2bb7ed60eb->enter($__internal_d5cad5e78faee318ad42d6aa37bbdbd5e9fdd7e5d24a4056640d0c2bb7ed60eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d5cad5e78faee318ad42d6aa37bbdbd5e9fdd7e5d24a4056640d0c2bb7ed60eb->leave($__internal_d5cad5e78faee318ad42d6aa37bbdbd5e9fdd7e5d24a4056640d0c2bb7ed60eb_prof);

        
        $__internal_4840f911870479831d1e262acb06c391ab289a805c659925f61df88b1a176276->leave($__internal_4840f911870479831d1e262acb06c391ab289a805c659925f61df88b1a176276_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bbe76c9f8dca0495accdaf3e5d2b70e829ad5d65ac5fe49285c3444d50350ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe76c9f8dca0495accdaf3e5d2b70e829ad5d65ac5fe49285c3444d50350ec4->enter($__internal_bbe76c9f8dca0495accdaf3e5d2b70e829ad5d65ac5fe49285c3444d50350ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_54b7bc2c5f48d16863afff3a69759beb4f6a8efaa4fc2d15bb49dde99dabb1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b7bc2c5f48d16863afff3a69759beb4f6a8efaa4fc2d15bb49dde99dabb1b8->enter($__internal_54b7bc2c5f48d16863afff3a69759beb4f6a8efaa4fc2d15bb49dde99dabb1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_54b7bc2c5f48d16863afff3a69759beb4f6a8efaa4fc2d15bb49dde99dabb1b8->leave($__internal_54b7bc2c5f48d16863afff3a69759beb4f6a8efaa4fc2d15bb49dde99dabb1b8_prof);

        
        $__internal_bbe76c9f8dca0495accdaf3e5d2b70e829ad5d65ac5fe49285c3444d50350ec4->leave($__internal_bbe76c9f8dca0495accdaf3e5d2b70e829ad5d65ac5fe49285c3444d50350ec4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fad5b3a04082d804ad48e6e8c1c149d08556735df943a8cba293d6311adfd860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad5b3a04082d804ad48e6e8c1c149d08556735df943a8cba293d6311adfd860->enter($__internal_fad5b3a04082d804ad48e6e8c1c149d08556735df943a8cba293d6311adfd860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dc3a07bb4bf2cf02cec7ea8afb362d0f4ed8dbba34636a3fbe905ba7fc17d0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3a07bb4bf2cf02cec7ea8afb362d0f4ed8dbba34636a3fbe905ba7fc17d0d3->enter($__internal_dc3a07bb4bf2cf02cec7ea8afb362d0f4ed8dbba34636a3fbe905ba7fc17d0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc3a07bb4bf2cf02cec7ea8afb362d0f4ed8dbba34636a3fbe905ba7fc17d0d3->leave($__internal_dc3a07bb4bf2cf02cec7ea8afb362d0f4ed8dbba34636a3fbe905ba7fc17d0d3_prof);

        
        $__internal_fad5b3a04082d804ad48e6e8c1c149d08556735df943a8cba293d6311adfd860->leave($__internal_fad5b3a04082d804ad48e6e8c1c149d08556735df943a8cba293d6311adfd860_prof);

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
