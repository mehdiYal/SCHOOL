<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f7d64ecab2b2b4106b109bbfde6baf0981ac8492dd26ee4d75090886ef322652 extends Twig_Template
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
        $__internal_f9506c79999ad0fd0285ce11758aea29c182b90e01a34a0d3002fed0d8ea3264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9506c79999ad0fd0285ce11758aea29c182b90e01a34a0d3002fed0d8ea3264->enter($__internal_f9506c79999ad0fd0285ce11758aea29c182b90e01a34a0d3002fed0d8ea3264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_44d61d59bd843de0c2756c1a68c031812eac679072e661fbfd2a196089100d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d61d59bd843de0c2756c1a68c031812eac679072e661fbfd2a196089100d51->enter($__internal_44d61d59bd843de0c2756c1a68c031812eac679072e661fbfd2a196089100d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_f9506c79999ad0fd0285ce11758aea29c182b90e01a34a0d3002fed0d8ea3264->leave($__internal_f9506c79999ad0fd0285ce11758aea29c182b90e01a34a0d3002fed0d8ea3264_prof);

        
        $__internal_44d61d59bd843de0c2756c1a68c031812eac679072e661fbfd2a196089100d51->leave($__internal_44d61d59bd843de0c2756c1a68c031812eac679072e661fbfd2a196089100d51_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
