<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e0731b4961b425cdfa99869a8cfceb0558ad8c0d0bc31a33178cbc6fc451cd50 extends Twig_Template
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
        $__internal_5ffe38f7c1606393733a2af7de38fa8d2e0954d78feb1aea12611c004796eb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffe38f7c1606393733a2af7de38fa8d2e0954d78feb1aea12611c004796eb93->enter($__internal_5ffe38f7c1606393733a2af7de38fa8d2e0954d78feb1aea12611c004796eb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_b65e8909d1345c3b2affaff7c4ba9a49cb34f610c737206fb0f3f0d2ec711fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65e8909d1345c3b2affaff7c4ba9a49cb34f610c737206fb0f3f0d2ec711fe8->enter($__internal_b65e8909d1345c3b2affaff7c4ba9a49cb34f610c737206fb0f3f0d2ec711fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ffe38f7c1606393733a2af7de38fa8d2e0954d78feb1aea12611c004796eb93->leave($__internal_5ffe38f7c1606393733a2af7de38fa8d2e0954d78feb1aea12611c004796eb93_prof);

        
        $__internal_b65e8909d1345c3b2affaff7c4ba9a49cb34f610c737206fb0f3f0d2ec711fe8->leave($__internal_b65e8909d1345c3b2affaff7c4ba9a49cb34f610c737206fb0f3f0d2ec711fe8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_970eb26c2e27fc409b1f64f0bf0f5e4f0516450892afb33d32a6f005f1baf5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970eb26c2e27fc409b1f64f0bf0f5e4f0516450892afb33d32a6f005f1baf5e4->enter($__internal_970eb26c2e27fc409b1f64f0bf0f5e4f0516450892afb33d32a6f005f1baf5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_95fd8ff5f13db14b1de010331f246f9d80e66d26bc1e5e6a6fdcb957c11d1c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fd8ff5f13db14b1de010331f246f9d80e66d26bc1e5e6a6fdcb957c11d1c07->enter($__internal_95fd8ff5f13db14b1de010331f246f9d80e66d26bc1e5e6a6fdcb957c11d1c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_95fd8ff5f13db14b1de010331f246f9d80e66d26bc1e5e6a6fdcb957c11d1c07->leave($__internal_95fd8ff5f13db14b1de010331f246f9d80e66d26bc1e5e6a6fdcb957c11d1c07_prof);

        
        $__internal_970eb26c2e27fc409b1f64f0bf0f5e4f0516450892afb33d32a6f005f1baf5e4->leave($__internal_970eb26c2e27fc409b1f64f0bf0f5e4f0516450892afb33d32a6f005f1baf5e4_prof);

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
