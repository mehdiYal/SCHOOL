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
        $__internal_976eac1a70ef245909b74a46fbe6ac8e19fecfd9ecf291437e5cc36e1d5574f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976eac1a70ef245909b74a46fbe6ac8e19fecfd9ecf291437e5cc36e1d5574f2->enter($__internal_976eac1a70ef245909b74a46fbe6ac8e19fecfd9ecf291437e5cc36e1d5574f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_0425b8416a9e3f17b24605df3f3e24a7a1bdd4405d4e303235d89a9de60c4550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0425b8416a9e3f17b24605df3f3e24a7a1bdd4405d4e303235d89a9de60c4550->enter($__internal_0425b8416a9e3f17b24605df3f3e24a7a1bdd4405d4e303235d89a9de60c4550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_976eac1a70ef245909b74a46fbe6ac8e19fecfd9ecf291437e5cc36e1d5574f2->leave($__internal_976eac1a70ef245909b74a46fbe6ac8e19fecfd9ecf291437e5cc36e1d5574f2_prof);

        
        $__internal_0425b8416a9e3f17b24605df3f3e24a7a1bdd4405d4e303235d89a9de60c4550->leave($__internal_0425b8416a9e3f17b24605df3f3e24a7a1bdd4405d4e303235d89a9de60c4550_prof);

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
