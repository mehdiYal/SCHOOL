<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_490aeab143eb8e4d97add91b30f0c5891cc09487edff82b1380a8683b2ecae49 extends Twig_Template
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
        $__internal_b1b4c5f6dfcba446e401fc35aad0fd93d3c30a757ad63208d21a19667a813b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b4c5f6dfcba446e401fc35aad0fd93d3c30a757ad63208d21a19667a813b6a->enter($__internal_b1b4c5f6dfcba446e401fc35aad0fd93d3c30a757ad63208d21a19667a813b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_22d7c505014c6439e5b77a18b1fede22d2dc320c5577bb812bcdb782b5b01e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d7c505014c6439e5b77a18b1fede22d2dc320c5577bb812bcdb782b5b01e43->enter($__internal_22d7c505014c6439e5b77a18b1fede22d2dc320c5577bb812bcdb782b5b01e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b1b4c5f6dfcba446e401fc35aad0fd93d3c30a757ad63208d21a19667a813b6a->leave($__internal_b1b4c5f6dfcba446e401fc35aad0fd93d3c30a757ad63208d21a19667a813b6a_prof);

        
        $__internal_22d7c505014c6439e5b77a18b1fede22d2dc320c5577bb812bcdb782b5b01e43->leave($__internal_22d7c505014c6439e5b77a18b1fede22d2dc320c5577bb812bcdb782b5b01e43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
