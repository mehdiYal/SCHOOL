<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_08d0fe4f00b9b0ffd0440bc2dde54b1fad2f0a6006bfd7d69fbf3a67136402ba extends Twig_Template
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
        $__internal_9d13c93c41da63f2fe4cc60a4ccef1b9803b0e71022d4bcbc45a229de031fd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d13c93c41da63f2fe4cc60a4ccef1b9803b0e71022d4bcbc45a229de031fd67->enter($__internal_9d13c93c41da63f2fe4cc60a4ccef1b9803b0e71022d4bcbc45a229de031fd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_ee4635a5768ada87ea5182d49206e25c5ef3b6ef0ecf211a816edfae1f080a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4635a5768ada87ea5182d49206e25c5ef3b6ef0ecf211a816edfae1f080a1e->enter($__internal_ee4635a5768ada87ea5182d49206e25c5ef3b6ef0ecf211a816edfae1f080a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d13c93c41da63f2fe4cc60a4ccef1b9803b0e71022d4bcbc45a229de031fd67->leave($__internal_9d13c93c41da63f2fe4cc60a4ccef1b9803b0e71022d4bcbc45a229de031fd67_prof);

        
        $__internal_ee4635a5768ada87ea5182d49206e25c5ef3b6ef0ecf211a816edfae1f080a1e->leave($__internal_ee4635a5768ada87ea5182d49206e25c5ef3b6ef0ecf211a816edfae1f080a1e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_335e7f44097c8edee3ec4b21833abac19041c367df5876dddbfc01cb1cc2e609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335e7f44097c8edee3ec4b21833abac19041c367df5876dddbfc01cb1cc2e609->enter($__internal_335e7f44097c8edee3ec4b21833abac19041c367df5876dddbfc01cb1cc2e609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0914b7ce995f24ae8e59f47607c1ee584cf362cebd57958e840fc0b45196c857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0914b7ce995f24ae8e59f47607c1ee584cf362cebd57958e840fc0b45196c857->enter($__internal_0914b7ce995f24ae8e59f47607c1ee584cf362cebd57958e840fc0b45196c857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_0914b7ce995f24ae8e59f47607c1ee584cf362cebd57958e840fc0b45196c857->leave($__internal_0914b7ce995f24ae8e59f47607c1ee584cf362cebd57958e840fc0b45196c857_prof);

        
        $__internal_335e7f44097c8edee3ec4b21833abac19041c367df5876dddbfc01cb1cc2e609->leave($__internal_335e7f44097c8edee3ec4b21833abac19041c367df5876dddbfc01cb1cc2e609_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
