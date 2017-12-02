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
        $__internal_3fa66fee7204f2856798aa3e619ba3505df9ab39299c1e3937ad9ab0bf20e954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa66fee7204f2856798aa3e619ba3505df9ab39299c1e3937ad9ab0bf20e954->enter($__internal_3fa66fee7204f2856798aa3e619ba3505df9ab39299c1e3937ad9ab0bf20e954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f9ba0db77ae5d9844c832a023a5d04c84230ff6085eae395f5692c6646c1bb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ba0db77ae5d9844c832a023a5d04c84230ff6085eae395f5692c6646c1bb10->enter($__internal_f9ba0db77ae5d9844c832a023a5d04c84230ff6085eae395f5692c6646c1bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa66fee7204f2856798aa3e619ba3505df9ab39299c1e3937ad9ab0bf20e954->leave($__internal_3fa66fee7204f2856798aa3e619ba3505df9ab39299c1e3937ad9ab0bf20e954_prof);

        
        $__internal_f9ba0db77ae5d9844c832a023a5d04c84230ff6085eae395f5692c6646c1bb10->leave($__internal_f9ba0db77ae5d9844c832a023a5d04c84230ff6085eae395f5692c6646c1bb10_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99f8bbf0b4d8facd86040165bd30128c7c9fd1e9d45f234bdd9a5de80e188cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f8bbf0b4d8facd86040165bd30128c7c9fd1e9d45f234bdd9a5de80e188cd7->enter($__internal_99f8bbf0b4d8facd86040165bd30128c7c9fd1e9d45f234bdd9a5de80e188cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e16f6b96e71c730072c9ba5e6e0a385d8c552eafb515beeb0b969c0b5d996f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e16f6b96e71c730072c9ba5e6e0a385d8c552eafb515beeb0b969c0b5d996f9->enter($__internal_4e16f6b96e71c730072c9ba5e6e0a385d8c552eafb515beeb0b969c0b5d996f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4e16f6b96e71c730072c9ba5e6e0a385d8c552eafb515beeb0b969c0b5d996f9->leave($__internal_4e16f6b96e71c730072c9ba5e6e0a385d8c552eafb515beeb0b969c0b5d996f9_prof);

        
        $__internal_99f8bbf0b4d8facd86040165bd30128c7c9fd1e9d45f234bdd9a5de80e188cd7->leave($__internal_99f8bbf0b4d8facd86040165bd30128c7c9fd1e9d45f234bdd9a5de80e188cd7_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
