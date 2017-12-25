<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4a1898d70c31567b111acf4c8a96ad27394c0a650e21dbf2c6d3ba94f79b14f2 extends Twig_Template
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
        $__internal_8a38a9e84cdfbbd7cc1cc466b8997c26c21730daddc7aea8d0bd355c63fcac66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a38a9e84cdfbbd7cc1cc466b8997c26c21730daddc7aea8d0bd355c63fcac66->enter($__internal_8a38a9e84cdfbbd7cc1cc466b8997c26c21730daddc7aea8d0bd355c63fcac66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_27f5022fe590e6c74ce24941da7c6289a757a7d8905ee9851038f65463f31d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f5022fe590e6c74ce24941da7c6289a757a7d8905ee9851038f65463f31d7d->enter($__internal_27f5022fe590e6c74ce24941da7c6289a757a7d8905ee9851038f65463f31d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a38a9e84cdfbbd7cc1cc466b8997c26c21730daddc7aea8d0bd355c63fcac66->leave($__internal_8a38a9e84cdfbbd7cc1cc466b8997c26c21730daddc7aea8d0bd355c63fcac66_prof);

        
        $__internal_27f5022fe590e6c74ce24941da7c6289a757a7d8905ee9851038f65463f31d7d->leave($__internal_27f5022fe590e6c74ce24941da7c6289a757a7d8905ee9851038f65463f31d7d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8d597dea03968082eb2298f3b6554ac3177d7ccfa456f231d56102869892115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d597dea03968082eb2298f3b6554ac3177d7ccfa456f231d56102869892115->enter($__internal_b8d597dea03968082eb2298f3b6554ac3177d7ccfa456f231d56102869892115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_602b449835841b84af91b74a9fdf6ae7b0fd299a558686df26868f32e56ca4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602b449835841b84af91b74a9fdf6ae7b0fd299a558686df26868f32e56ca4e1->enter($__internal_602b449835841b84af91b74a9fdf6ae7b0fd299a558686df26868f32e56ca4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_602b449835841b84af91b74a9fdf6ae7b0fd299a558686df26868f32e56ca4e1->leave($__internal_602b449835841b84af91b74a9fdf6ae7b0fd299a558686df26868f32e56ca4e1_prof);

        
        $__internal_b8d597dea03968082eb2298f3b6554ac3177d7ccfa456f231d56102869892115->leave($__internal_b8d597dea03968082eb2298f3b6554ac3177d7ccfa456f231d56102869892115_prof);

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
