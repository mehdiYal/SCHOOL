<?php

/* :matieresViews:addMatiere.html.twig */
class __TwigTemplate_957e84392daa68c4b78e9c9877fa183e02ba04637576e6f1b7af2b5b1a48ebd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matieresViews:addMatiere.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93256a22aa620fa890459e08b4c9946718ee6c2699adb4ca9563f3185000ebbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93256a22aa620fa890459e08b4c9946718ee6c2699adb4ca9563f3185000ebbc->enter($__internal_93256a22aa620fa890459e08b4c9946718ee6c2699adb4ca9563f3185000ebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $__internal_47c15ba04bdac3cf4d8634a9f6fb47ffbbc62f933d29b95925568669e9227b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c15ba04bdac3cf4d8634a9f6fb47ffbbc62f933d29b95925568669e9227b2a->enter($__internal_47c15ba04bdac3cf4d8634a9f6fb47ffbbc62f933d29b95925568669e9227b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93256a22aa620fa890459e08b4c9946718ee6c2699adb4ca9563f3185000ebbc->leave($__internal_93256a22aa620fa890459e08b4c9946718ee6c2699adb4ca9563f3185000ebbc_prof);

        
        $__internal_47c15ba04bdac3cf4d8634a9f6fb47ffbbc62f933d29b95925568669e9227b2a->leave($__internal_47c15ba04bdac3cf4d8634a9f6fb47ffbbc62f933d29b95925568669e9227b2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33fd0b8cb66f23014c12ebfc2bee2c1cfd04ef078e94bbe8a06ee7cc8873487e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fd0b8cb66f23014c12ebfc2bee2c1cfd04ef078e94bbe8a06ee7cc8873487e->enter($__internal_33fd0b8cb66f23014c12ebfc2bee2c1cfd04ef078e94bbe8a06ee7cc8873487e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c09fcb8db1559062af5e4233a7ec7d37cb730c149f81ef4a13f99503b1f17a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c09fcb8db1559062af5e4233a7ec7d37cb730c149f81ef4a13f99503b1f17a4->enter($__internal_2c09fcb8db1559062af5e4233a7ec7d37cb730c149f81ef4a13f99503b1f17a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<h1>";
        // line 5
        if ((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_2c09fcb8db1559062af5e4233a7ec7d37cb730c149f81ef4a13f99503b1f17a4->leave($__internal_2c09fcb8db1559062af5e4233a7ec7d37cb730c149f81ef4a13f99503b1f17a4_prof);

        
        $__internal_33fd0b8cb66f23014c12ebfc2bee2c1cfd04ef078e94bbe8a06ee7cc8873487e->leave($__internal_33fd0b8cb66f23014c12ebfc2bee2c1cfd04ef078e94bbe8a06ee7cc8873487e_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:addMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'matiere'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.description) }}
\t\t    {{ form_widget(form.description ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.description) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", ":matieresViews:addMatiere.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/matieresViews/addMatiere.html.twig");
    }
}
