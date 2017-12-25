<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_a0825276d6881a422fc5aaa4b7ecfe4fb42e2e18963c952b4c34a0ddcf935e7c extends Twig_Template
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
        $__internal_435f01c163cc6f37232e78cb249d43270bcd70fad40e7d4020a8ab6ed0e5fa3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435f01c163cc6f37232e78cb249d43270bcd70fad40e7d4020a8ab6ed0e5fa3e->enter($__internal_435f01c163cc6f37232e78cb249d43270bcd70fad40e7d4020a8ab6ed0e5fa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_ef8c470ef17c864b1a3cd4a31cf809ecb1e10df21a19ff0da789616ad6689276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8c470ef17c864b1a3cd4a31cf809ecb1e10df21a19ff0da789616ad6689276->enter($__internal_ef8c470ef17c864b1a3cd4a31cf809ecb1e10df21a19ff0da789616ad6689276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_435f01c163cc6f37232e78cb249d43270bcd70fad40e7d4020a8ab6ed0e5fa3e->leave($__internal_435f01c163cc6f37232e78cb249d43270bcd70fad40e7d4020a8ab6ed0e5fa3e_prof);

        
        $__internal_ef8c470ef17c864b1a3cd4a31cf809ecb1e10df21a19ff0da789616ad6689276->leave($__internal_ef8c470ef17c864b1a3cd4a31cf809ecb1e10df21a19ff0da789616ad6689276_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
