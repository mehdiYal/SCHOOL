<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_22b41fabfdd6f129c06c865b7432fe0611839a09dff7a1444f32120015ab7072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ba05adf79619574462aba00779352266fc06f461ad5ef105d2f2297cd46392c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba05adf79619574462aba00779352266fc06f461ad5ef105d2f2297cd46392c->enter($__internal_8ba05adf79619574462aba00779352266fc06f461ad5ef105d2f2297cd46392c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f115235374a5cd2c66ef0421dfe92a5b353b2d37192d01cc540462e2bb9da6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f115235374a5cd2c66ef0421dfe92a5b353b2d37192d01cc540462e2bb9da6ff->enter($__internal_f115235374a5cd2c66ef0421dfe92a5b353b2d37192d01cc540462e2bb9da6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba05adf79619574462aba00779352266fc06f461ad5ef105d2f2297cd46392c->leave($__internal_8ba05adf79619574462aba00779352266fc06f461ad5ef105d2f2297cd46392c_prof);

        
        $__internal_f115235374a5cd2c66ef0421dfe92a5b353b2d37192d01cc540462e2bb9da6ff->leave($__internal_f115235374a5cd2c66ef0421dfe92a5b353b2d37192d01cc540462e2bb9da6ff_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db43da92e4d32df36508b11c13a545e1f5621343ac278d0d6c0b0759aabe16e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db43da92e4d32df36508b11c13a545e1f5621343ac278d0d6c0b0759aabe16e2->enter($__internal_db43da92e4d32df36508b11c13a545e1f5621343ac278d0d6c0b0759aabe16e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b8c6d79e852f1dbc8537d2a2b8893a6a222bef009fdfc0bac60587e14a9ca9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8c6d79e852f1dbc8537d2a2b8893a6a222bef009fdfc0bac60587e14a9ca9d->enter($__internal_3b8c6d79e852f1dbc8537d2a2b8893a6a222bef009fdfc0bac60587e14a9ca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3b8c6d79e852f1dbc8537d2a2b8893a6a222bef009fdfc0bac60587e14a9ca9d->leave($__internal_3b8c6d79e852f1dbc8537d2a2b8893a6a222bef009fdfc0bac60587e14a9ca9d_prof);

        
        $__internal_db43da92e4d32df36508b11c13a545e1f5621343ac278d0d6c0b0759aabe16e2->leave($__internal_db43da92e4d32df36508b11c13a545e1f5621343ac278d0d6c0b0759aabe16e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
