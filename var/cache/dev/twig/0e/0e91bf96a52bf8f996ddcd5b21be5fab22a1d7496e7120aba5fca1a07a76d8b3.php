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
        $__internal_d18a63cffb0e1d95f3794fcae7fc577adb42b43709147a3be6043575b639c728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18a63cffb0e1d95f3794fcae7fc577adb42b43709147a3be6043575b639c728->enter($__internal_d18a63cffb0e1d95f3794fcae7fc577adb42b43709147a3be6043575b639c728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_4d1547f20723244d00d1c24d2c622cc7493e6ae766540b178c39b06ef9b179c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1547f20723244d00d1c24d2c622cc7493e6ae766540b178c39b06ef9b179c0->enter($__internal_4d1547f20723244d00d1c24d2c622cc7493e6ae766540b178c39b06ef9b179c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d18a63cffb0e1d95f3794fcae7fc577adb42b43709147a3be6043575b639c728->leave($__internal_d18a63cffb0e1d95f3794fcae7fc577adb42b43709147a3be6043575b639c728_prof);

        
        $__internal_4d1547f20723244d00d1c24d2c622cc7493e6ae766540b178c39b06ef9b179c0->leave($__internal_4d1547f20723244d00d1c24d2c622cc7493e6ae766540b178c39b06ef9b179c0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9d0279c932ce9940e3dd9ec582db8d5c3c7d72fa3f82543b7c50178365d83e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d0279c932ce9940e3dd9ec582db8d5c3c7d72fa3f82543b7c50178365d83e9->enter($__internal_d9d0279c932ce9940e3dd9ec582db8d5c3c7d72fa3f82543b7c50178365d83e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e5e74b252640fec3312cb83ef21ccee6744e2111df4bd20400b3da9006f34ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5e74b252640fec3312cb83ef21ccee6744e2111df4bd20400b3da9006f34ca->enter($__internal_4e5e74b252640fec3312cb83ef21ccee6744e2111df4bd20400b3da9006f34ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4e5e74b252640fec3312cb83ef21ccee6744e2111df4bd20400b3da9006f34ca->leave($__internal_4e5e74b252640fec3312cb83ef21ccee6744e2111df4bd20400b3da9006f34ca_prof);

        
        $__internal_d9d0279c932ce9940e3dd9ec582db8d5c3c7d72fa3f82543b7c50178365d83e9->leave($__internal_d9d0279c932ce9940e3dd9ec582db8d5c3c7d72fa3f82543b7c50178365d83e9_prof);

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
