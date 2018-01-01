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
        $__internal_30139832bb15a47ccff475187c8316f0f48cc07912aa61b51d963dec3dea50a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30139832bb15a47ccff475187c8316f0f48cc07912aa61b51d963dec3dea50a4->enter($__internal_30139832bb15a47ccff475187c8316f0f48cc07912aa61b51d963dec3dea50a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_c6367d84cd6d2e7fcc73ff9453119bda242de2e66c13c9467e326cf05a0a57ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6367d84cd6d2e7fcc73ff9453119bda242de2e66c13c9467e326cf05a0a57ab->enter($__internal_c6367d84cd6d2e7fcc73ff9453119bda242de2e66c13c9467e326cf05a0a57ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30139832bb15a47ccff475187c8316f0f48cc07912aa61b51d963dec3dea50a4->leave($__internal_30139832bb15a47ccff475187c8316f0f48cc07912aa61b51d963dec3dea50a4_prof);

        
        $__internal_c6367d84cd6d2e7fcc73ff9453119bda242de2e66c13c9467e326cf05a0a57ab->leave($__internal_c6367d84cd6d2e7fcc73ff9453119bda242de2e66c13c9467e326cf05a0a57ab_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d08dc8176d726c24341979cc73b27aba1c0513e1412bfac7692e3609502708c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d08dc8176d726c24341979cc73b27aba1c0513e1412bfac7692e3609502708c->enter($__internal_9d08dc8176d726c24341979cc73b27aba1c0513e1412bfac7692e3609502708c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a5faa4e4ae58f0c2fac01fc8e8e6e182fc87328cdfdbc49f38f1025be3eb4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5faa4e4ae58f0c2fac01fc8e8e6e182fc87328cdfdbc49f38f1025be3eb4a1->enter($__internal_9a5faa4e4ae58f0c2fac01fc8e8e6e182fc87328cdfdbc49f38f1025be3eb4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9a5faa4e4ae58f0c2fac01fc8e8e6e182fc87328cdfdbc49f38f1025be3eb4a1->leave($__internal_9a5faa4e4ae58f0c2fac01fc8e8e6e182fc87328cdfdbc49f38f1025be3eb4a1_prof);

        
        $__internal_9d08dc8176d726c24341979cc73b27aba1c0513e1412bfac7692e3609502708c->leave($__internal_9d08dc8176d726c24341979cc73b27aba1c0513e1412bfac7692e3609502708c_prof);

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
