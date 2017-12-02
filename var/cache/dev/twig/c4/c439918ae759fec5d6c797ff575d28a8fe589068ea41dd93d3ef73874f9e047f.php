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
        $__internal_1b3d13616d4fccf66cf3c23dc13b50c3250d358aaa89dc02b9ee982c8c5f36db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3d13616d4fccf66cf3c23dc13b50c3250d358aaa89dc02b9ee982c8c5f36db->enter($__internal_1b3d13616d4fccf66cf3c23dc13b50c3250d358aaa89dc02b9ee982c8c5f36db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_85fecfb570d37e03dae2e19ccde5a3b2646e7ce66001c28b959beaa48b15fed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fecfb570d37e03dae2e19ccde5a3b2646e7ce66001c28b959beaa48b15fed4->enter($__internal_85fecfb570d37e03dae2e19ccde5a3b2646e7ce66001c28b959beaa48b15fed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_1b3d13616d4fccf66cf3c23dc13b50c3250d358aaa89dc02b9ee982c8c5f36db->leave($__internal_1b3d13616d4fccf66cf3c23dc13b50c3250d358aaa89dc02b9ee982c8c5f36db_prof);

        
        $__internal_85fecfb570d37e03dae2e19ccde5a3b2646e7ce66001c28b959beaa48b15fed4->leave($__internal_85fecfb570d37e03dae2e19ccde5a3b2646e7ce66001c28b959beaa48b15fed4_prof);

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
