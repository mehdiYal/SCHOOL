<?php

/* :classesViews:affecterProf.html.twig */
class __TwigTemplate_717891281f30f163f34e58f7fafec21716412fd6ced28d2141c125812db9b512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":classesViews:affecterProf.html.twig", 1);
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
        $__internal_250f1197b1dc80b42812ed39b3365cd54c1e16653eb684418919566f02fd5a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250f1197b1dc80b42812ed39b3365cd54c1e16653eb684418919566f02fd5a52->enter($__internal_250f1197b1dc80b42812ed39b3365cd54c1e16653eb684418919566f02fd5a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $__internal_0627aee584797fa56089aa56916c918c12f3d25e6096c18d824fad1497d5f1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0627aee584797fa56089aa56916c918c12f3d25e6096c18d824fad1497d5f1e5->enter($__internal_0627aee584797fa56089aa56916c918c12f3d25e6096c18d824fad1497d5f1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250f1197b1dc80b42812ed39b3365cd54c1e16653eb684418919566f02fd5a52->leave($__internal_250f1197b1dc80b42812ed39b3365cd54c1e16653eb684418919566f02fd5a52_prof);

        
        $__internal_0627aee584797fa56089aa56916c918c12f3d25e6096c18d824fad1497d5f1e5->leave($__internal_0627aee584797fa56089aa56916c918c12f3d25e6096c18d824fad1497d5f1e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfdda8a9b7ac7e088499507414ad0f78c3644bd45277bc8ca1c457d0f6ba0b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdda8a9b7ac7e088499507414ad0f78c3644bd45277bc8ca1c457d0f6ba0b77->enter($__internal_dfdda8a9b7ac7e088499507414ad0f78c3644bd45277bc8ca1c457d0f6ba0b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4f084da5909e2d545608e8bc1d8a6ed1c8803e3fac72e879a3bce5b4b4111e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f084da5909e2d545608e8bc1d8a6ed1c8803e3fac72e879a3bce5b4b4111e7->enter($__internal_d4f084da5909e2d545608e8bc1d8a6ed1c8803e3fac72e879a3bce5b4b4111e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "annee", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "annee", array()), "niveau", array()), "html", null, true);
        echo " </h1>
\t<ol>
\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'label');
        echo "
\t\t\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'label');
        echo "
\t\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\">Valider</button>
\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</ol>
\t
";
        
        $__internal_d4f084da5909e2d545608e8bc1d8a6ed1c8803e3fac72e879a3bce5b4b4111e7->leave($__internal_d4f084da5909e2d545608e8bc1d8a6ed1c8803e3fac72e879a3bce5b4b4111e7_prof);

        
        $__internal_dfdda8a9b7ac7e088499507414ad0f78c3644bd45277bc8ca1c457d0f6ba0b77->leave($__internal_dfdda8a9b7ac7e088499507414ad0f78c3644bd45277bc8ca1c457d0f6ba0b77_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:affecterProf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  86 => 15,  82 => 14,  78 => 13,  72 => 10,  68 => 9,  64 => 8,  59 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{classe.nom|trans}} {{classe.annee.nom}} {{classe.annee.niveau}} </h1>
\t<ol>
\t\t{{ form_start(form) }}
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.matiere) }}
\t\t\t    {{ form_widget(form.matiere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t    {{ form_errors(form.matiere) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.enseignant) }}
\t\t\t    {{ form_widget(form.enseignant ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t    {{ form_errors(form.enseignant) }}
\t\t\t</div>
\t\t\t<button type=\"submit\">Valider</button>
\t\t{{ form_end(form) }}
\t</ol>
\t
{% endblock %}", ":classesViews:affecterProf.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/affecterProf.html.twig");
    }
}
