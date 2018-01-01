<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9db9c33e4970d8877a3bcd2e5182ba9b11b52b46b7d6611f3324932b660438ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_960d098d61f3911dce2df6513cbb9b2861d370d4e0d902479bd3bceab9709fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960d098d61f3911dce2df6513cbb9b2861d370d4e0d902479bd3bceab9709fec->enter($__internal_960d098d61f3911dce2df6513cbb9b2861d370d4e0d902479bd3bceab9709fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a93229e3473f2312f64e65e31d4088cf52058e12fd921b15098780ffb9a6fd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93229e3473f2312f64e65e31d4088cf52058e12fd921b15098780ffb9a6fd2d->enter($__internal_a93229e3473f2312f64e65e31d4088cf52058e12fd921b15098780ffb9a6fd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960d098d61f3911dce2df6513cbb9b2861d370d4e0d902479bd3bceab9709fec->leave($__internal_960d098d61f3911dce2df6513cbb9b2861d370d4e0d902479bd3bceab9709fec_prof);

        
        $__internal_a93229e3473f2312f64e65e31d4088cf52058e12fd921b15098780ffb9a6fd2d->leave($__internal_a93229e3473f2312f64e65e31d4088cf52058e12fd921b15098780ffb9a6fd2d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_094bf88d8542e80a76fde546c2d78d71d180a9eb16a5b5c40a07c891e808671a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094bf88d8542e80a76fde546c2d78d71d180a9eb16a5b5c40a07c891e808671a->enter($__internal_094bf88d8542e80a76fde546c2d78d71d180a9eb16a5b5c40a07c891e808671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9367050c0d34af614d9f828f3c1e27b7f09e694f9c8ec6fbb35b25d89348896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9367050c0d34af614d9f828f3c1e27b7f09e694f9c8ec6fbb35b25d89348896->enter($__internal_e9367050c0d34af614d9f828f3c1e27b7f09e694f9c8ec6fbb35b25d89348896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e9367050c0d34af614d9f828f3c1e27b7f09e694f9c8ec6fbb35b25d89348896->leave($__internal_e9367050c0d34af614d9f828f3c1e27b7f09e694f9c8ec6fbb35b25d89348896_prof);

        
        $__internal_094bf88d8542e80a76fde546c2d78d71d180a9eb16a5b5c40a07c891e808671a->leave($__internal_094bf88d8542e80a76fde546c2d78d71d180a9eb16a5b5c40a07c891e808671a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
