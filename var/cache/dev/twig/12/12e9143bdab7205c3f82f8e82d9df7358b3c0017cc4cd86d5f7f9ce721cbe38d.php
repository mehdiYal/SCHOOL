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
        $__internal_a1492a4d8039dde86219c671311d5828ea2ef6538753826b33e97b5d4f5200f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1492a4d8039dde86219c671311d5828ea2ef6538753826b33e97b5d4f5200f8->enter($__internal_a1492a4d8039dde86219c671311d5828ea2ef6538753826b33e97b5d4f5200f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_95a5e458f70409a2c59f816b7b5e2bbfc5e268ab92ec9358bfa279e48a15f48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a5e458f70409a2c59f816b7b5e2bbfc5e268ab92ec9358bfa279e48a15f48b->enter($__internal_95a5e458f70409a2c59f816b7b5e2bbfc5e268ab92ec9358bfa279e48a15f48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1492a4d8039dde86219c671311d5828ea2ef6538753826b33e97b5d4f5200f8->leave($__internal_a1492a4d8039dde86219c671311d5828ea2ef6538753826b33e97b5d4f5200f8_prof);

        
        $__internal_95a5e458f70409a2c59f816b7b5e2bbfc5e268ab92ec9358bfa279e48a15f48b->leave($__internal_95a5e458f70409a2c59f816b7b5e2bbfc5e268ab92ec9358bfa279e48a15f48b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7dd347d2e632d97dd22abd031d82f8b7ed4c9a99485c8b6a8ab69602c7fd7874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd347d2e632d97dd22abd031d82f8b7ed4c9a99485c8b6a8ab69602c7fd7874->enter($__internal_7dd347d2e632d97dd22abd031d82f8b7ed4c9a99485c8b6a8ab69602c7fd7874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_befea8cdfca80dac72224b6540eb6044887ed1d5ad33983021fa69b62c23bf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befea8cdfca80dac72224b6540eb6044887ed1d5ad33983021fa69b62c23bf3c->enter($__internal_befea8cdfca80dac72224b6540eb6044887ed1d5ad33983021fa69b62c23bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_befea8cdfca80dac72224b6540eb6044887ed1d5ad33983021fa69b62c23bf3c->leave($__internal_befea8cdfca80dac72224b6540eb6044887ed1d5ad33983021fa69b62c23bf3c_prof);

        
        $__internal_7dd347d2e632d97dd22abd031d82f8b7ed4c9a99485c8b6a8ab69602c7fd7874->leave($__internal_7dd347d2e632d97dd22abd031d82f8b7ed4c9a99485c8b6a8ab69602c7fd7874_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
