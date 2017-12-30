<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_fc10cda072ff20be8a5b426c11e35f79d60a45546dbdca31c64a88f099f3b44c extends Twig_Template
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
        $__internal_ddb47eeacfb1b4bfef07fc70c2378e7add144ce0742a5a864669be445cf8ca3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb47eeacfb1b4bfef07fc70c2378e7add144ce0742a5a864669be445cf8ca3b->enter($__internal_ddb47eeacfb1b4bfef07fc70c2378e7add144ce0742a5a864669be445cf8ca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_67abb431fb9fa279e2cb141f218f56c07a92330d314c263d5eb350786e8f212f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67abb431fb9fa279e2cb141f218f56c07a92330d314c263d5eb350786e8f212f->enter($__internal_67abb431fb9fa279e2cb141f218f56c07a92330d314c263d5eb350786e8f212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_ddb47eeacfb1b4bfef07fc70c2378e7add144ce0742a5a864669be445cf8ca3b->leave($__internal_ddb47eeacfb1b4bfef07fc70c2378e7add144ce0742a5a864669be445cf8ca3b_prof);

        
        $__internal_67abb431fb9fa279e2cb141f218f56c07a92330d314c263d5eb350786e8f212f->leave($__internal_67abb431fb9fa279e2cb141f218f56c07a92330d314c263d5eb350786e8f212f_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
