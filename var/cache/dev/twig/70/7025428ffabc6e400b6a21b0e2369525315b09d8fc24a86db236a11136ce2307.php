<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_44febddcc2ca89ac5efd298e693d933bd44c86680ef48af17b96bb7e8d218ac7 extends Twig_Template
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
        $__internal_78337ab47ad39720fc7e4f11173b899e3b06c2bf59935d72a6828f15c5a2bccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78337ab47ad39720fc7e4f11173b899e3b06c2bf59935d72a6828f15c5a2bccc->enter($__internal_78337ab47ad39720fc7e4f11173b899e3b06c2bf59935d72a6828f15c5a2bccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_c8988fe335f635b17d683175a68af72fd8e382c1b1d082cc0649c4275d2f10be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8988fe335f635b17d683175a68af72fd8e382c1b1d082cc0649c4275d2f10be->enter($__internal_c8988fe335f635b17d683175a68af72fd8e382c1b1d082cc0649c4275d2f10be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

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
        
        $__internal_78337ab47ad39720fc7e4f11173b899e3b06c2bf59935d72a6828f15c5a2bccc->leave($__internal_78337ab47ad39720fc7e4f11173b899e3b06c2bf59935d72a6828f15c5a2bccc_prof);

        
        $__internal_c8988fe335f635b17d683175a68af72fd8e382c1b1d082cc0649c4275d2f10be->leave($__internal_c8988fe335f635b17d683175a68af72fd8e382c1b1d082cc0649c4275d2f10be_prof);

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
", "FOSUserBundle:Profile:edit_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
