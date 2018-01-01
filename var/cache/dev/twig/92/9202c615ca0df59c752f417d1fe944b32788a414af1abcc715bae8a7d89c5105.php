<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_9405a7d9c3a04375ed6d92157b3582d0164d6c7a94044cdd239f981834b4ad10 extends Twig_Template
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
        $__internal_37e972cf09b96138e0e54a4afe71bf8bb3f63a0654e9c961fa0a589f37f47aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e972cf09b96138e0e54a4afe71bf8bb3f63a0654e9c961fa0a589f37f47aad->enter($__internal_37e972cf09b96138e0e54a4afe71bf8bb3f63a0654e9c961fa0a589f37f47aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_6f0c4dca31498d92de0a4356b07fd8af64d6a56482f469727009e34044ba5dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0c4dca31498d92de0a4356b07fd8af64d6a56482f469727009e34044ba5dae->enter($__internal_6f0c4dca31498d92de0a4356b07fd8af64d6a56482f469727009e34044ba5dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_37e972cf09b96138e0e54a4afe71bf8bb3f63a0654e9c961fa0a589f37f47aad->leave($__internal_37e972cf09b96138e0e54a4afe71bf8bb3f63a0654e9c961fa0a589f37f47aad_prof);

        
        $__internal_6f0c4dca31498d92de0a4356b07fd8af64d6a56482f469727009e34044ba5dae->leave($__internal_6f0c4dca31498d92de0a4356b07fd8af64d6a56482f469727009e34044ba5dae_prof);

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
