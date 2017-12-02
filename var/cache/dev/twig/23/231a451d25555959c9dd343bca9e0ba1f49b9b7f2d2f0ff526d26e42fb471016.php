<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_576c773e18a6a5ac8c77fbb7b5934d7422f8d2ff5ad6c63673555c53aa5d38b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_598346305a617265f74194a44570ed9e308e75e57e81ae5d5e89096b035ab2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598346305a617265f74194a44570ed9e308e75e57e81ae5d5e89096b035ab2d0->enter($__internal_598346305a617265f74194a44570ed9e308e75e57e81ae5d5e89096b035ab2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_8d6a2b12fb6d5916e8bef9a68da6c98623579f21db81b6b3a74e7c167af39e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6a2b12fb6d5916e8bef9a68da6c98623579f21db81b6b3a74e7c167af39e56->enter($__internal_8d6a2b12fb6d5916e8bef9a68da6c98623579f21db81b6b3a74e7c167af39e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598346305a617265f74194a44570ed9e308e75e57e81ae5d5e89096b035ab2d0->leave($__internal_598346305a617265f74194a44570ed9e308e75e57e81ae5d5e89096b035ab2d0_prof);

        
        $__internal_8d6a2b12fb6d5916e8bef9a68da6c98623579f21db81b6b3a74e7c167af39e56->leave($__internal_8d6a2b12fb6d5916e8bef9a68da6c98623579f21db81b6b3a74e7c167af39e56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0004961fa81e7634581f894c020a4ffc2692cff92dc5dd054bbb890da24c319d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0004961fa81e7634581f894c020a4ffc2692cff92dc5dd054bbb890da24c319d->enter($__internal_0004961fa81e7634581f894c020a4ffc2692cff92dc5dd054bbb890da24c319d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9505d5c107f6f580c5027c7c2cc8ca3445e6bdb96f69f64de3d213c8d462783a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9505d5c107f6f580c5027c7c2cc8ca3445e6bdb96f69f64de3d213c8d462783a->enter($__internal_9505d5c107f6f580c5027c7c2cc8ca3445e6bdb96f69f64de3d213c8d462783a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9505d5c107f6f580c5027c7c2cc8ca3445e6bdb96f69f64de3d213c8d462783a->leave($__internal_9505d5c107f6f580c5027c7c2cc8ca3445e6bdb96f69f64de3d213c8d462783a_prof);

        
        $__internal_0004961fa81e7634581f894c020a4ffc2692cff92dc5dd054bbb890da24c319d->leave($__internal_0004961fa81e7634581f894c020a4ffc2692cff92dc5dd054bbb890da24c319d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
