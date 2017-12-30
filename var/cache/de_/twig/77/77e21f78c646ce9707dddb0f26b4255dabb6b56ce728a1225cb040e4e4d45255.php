<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_18d8b00e72d9d6a3c354a0cf1362396015bd9c4aec69cdd33cbd9e32347dfd75 extends Twig_Template
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
        $__internal_aa96ffd02e5e3dc81403b35c7d6d6e5fd913974e263221a50eb5d34c94bf7eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa96ffd02e5e3dc81403b35c7d6d6e5fd913974e263221a50eb5d34c94bf7eeb->enter($__internal_aa96ffd02e5e3dc81403b35c7d6d6e5fd913974e263221a50eb5d34c94bf7eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_e39ccc0d96960492b163d63f355870e754dd8b0a3a7cd0abf11db7e182be9abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39ccc0d96960492b163d63f355870e754dd8b0a3a7cd0abf11db7e182be9abe->enter($__internal_e39ccc0d96960492b163d63f355870e754dd8b0a3a7cd0abf11db7e182be9abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_aa96ffd02e5e3dc81403b35c7d6d6e5fd913974e263221a50eb5d34c94bf7eeb->leave($__internal_aa96ffd02e5e3dc81403b35c7d6d6e5fd913974e263221a50eb5d34c94bf7eeb_prof);

        
        $__internal_e39ccc0d96960492b163d63f355870e754dd8b0a3a7cd0abf11db7e182be9abe->leave($__internal_e39ccc0d96960492b163d63f355870e754dd8b0a3a7cd0abf11db7e182be9abe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
