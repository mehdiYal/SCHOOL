<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5e29680f40af2916249637edcee2d9d658bbf694c372bc14bb448e52503973bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a43220b8edd5e10b24452ebcd2f5b4d194ab4e48c3083a38ebaf526cb07a058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a43220b8edd5e10b24452ebcd2f5b4d194ab4e48c3083a38ebaf526cb07a058->enter($__internal_3a43220b8edd5e10b24452ebcd2f5b4d194ab4e48c3083a38ebaf526cb07a058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_75d5ce69452c5303b0425dffb800a8154024c4949b5d049d2671ce62dedcbcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d5ce69452c5303b0425dffb800a8154024c4949b5d049d2671ce62dedcbcb7->enter($__internal_75d5ce69452c5303b0425dffb800a8154024c4949b5d049d2671ce62dedcbcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3a43220b8edd5e10b24452ebcd2f5b4d194ab4e48c3083a38ebaf526cb07a058->leave($__internal_3a43220b8edd5e10b24452ebcd2f5b4d194ab4e48c3083a38ebaf526cb07a058_prof);

        
        $__internal_75d5ce69452c5303b0425dffb800a8154024c4949b5d049d2671ce62dedcbcb7->leave($__internal_75d5ce69452c5303b0425dffb800a8154024c4949b5d049d2671ce62dedcbcb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
