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
        $__internal_757ca0d78193899faef82a6165c947d0e0a51ec82c4a5d9d21449be95e52564b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757ca0d78193899faef82a6165c947d0e0a51ec82c4a5d9d21449be95e52564b->enter($__internal_757ca0d78193899faef82a6165c947d0e0a51ec82c4a5d9d21449be95e52564b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_76837a3706727d13c002a45d8818af2b7cf18c594038b7e261e9ef35e1b326fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76837a3706727d13c002a45d8818af2b7cf18c594038b7e261e9ef35e1b326fe->enter($__internal_76837a3706727d13c002a45d8818af2b7cf18c594038b7e261e9ef35e1b326fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_757ca0d78193899faef82a6165c947d0e0a51ec82c4a5d9d21449be95e52564b->leave($__internal_757ca0d78193899faef82a6165c947d0e0a51ec82c4a5d9d21449be95e52564b_prof);

        
        $__internal_76837a3706727d13c002a45d8818af2b7cf18c594038b7e261e9ef35e1b326fe->leave($__internal_76837a3706727d13c002a45d8818af2b7cf18c594038b7e261e9ef35e1b326fe_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
