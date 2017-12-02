<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_fb4d4c103de0a8614f0baaff9f5268117db37e3026da22f3327eee2099e8e3c1 extends Twig_Template
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
        $__internal_c604c8b7dd2d816dd104c84130961d4f7fc2ab44485dae59dba5a3974f82a215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c604c8b7dd2d816dd104c84130961d4f7fc2ab44485dae59dba5a3974f82a215->enter($__internal_c604c8b7dd2d816dd104c84130961d4f7fc2ab44485dae59dba5a3974f82a215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_33a47ff4db07894936e009cd7b8aee18a6bfbcceac991645b2fdcc39dc6fb047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a47ff4db07894936e009cd7b8aee18a6bfbcceac991645b2fdcc39dc6fb047->enter($__internal_33a47ff4db07894936e009cd7b8aee18a6bfbcceac991645b2fdcc39dc6fb047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c604c8b7dd2d816dd104c84130961d4f7fc2ab44485dae59dba5a3974f82a215->leave($__internal_c604c8b7dd2d816dd104c84130961d4f7fc2ab44485dae59dba5a3974f82a215_prof);

        
        $__internal_33a47ff4db07894936e009cd7b8aee18a6bfbcceac991645b2fdcc39dc6fb047->leave($__internal_33a47ff4db07894936e009cd7b8aee18a6bfbcceac991645b2fdcc39dc6fb047_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
