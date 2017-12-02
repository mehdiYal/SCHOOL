<?php

/* classesViews/affecterProf.html.twig */
class __TwigTemplate_a8bf059887bf565ac5ba188fd44b9bd6077c00e422c2f48da72ac283cd4e8b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classesViews/affecterProf.html.twig", 1);
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
        $__internal_b2cd60f8890385d5b7a9d5e33aeaf20e3afbc139f64e8c87f8ca1c738bb448e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2cd60f8890385d5b7a9d5e33aeaf20e3afbc139f64e8c87f8ca1c738bb448e0->enter($__internal_b2cd60f8890385d5b7a9d5e33aeaf20e3afbc139f64e8c87f8ca1c738bb448e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/affecterProf.html.twig"));

        $__internal_7980b825490e92c89cf2d89749fe04b3c6c3e01a6130362ad1dac4277589e0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7980b825490e92c89cf2d89749fe04b3c6c3e01a6130362ad1dac4277589e0b6->enter($__internal_7980b825490e92c89cf2d89749fe04b3c6c3e01a6130362ad1dac4277589e0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/affecterProf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2cd60f8890385d5b7a9d5e33aeaf20e3afbc139f64e8c87f8ca1c738bb448e0->leave($__internal_b2cd60f8890385d5b7a9d5e33aeaf20e3afbc139f64e8c87f8ca1c738bb448e0_prof);

        
        $__internal_7980b825490e92c89cf2d89749fe04b3c6c3e01a6130362ad1dac4277589e0b6->leave($__internal_7980b825490e92c89cf2d89749fe04b3c6c3e01a6130362ad1dac4277589e0b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f82815d893b95689fb249cbe51eaa884ddcbb5424b3380f5e784bf1662258a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f82815d893b95689fb249cbe51eaa884ddcbb5424b3380f5e784bf1662258a2->enter($__internal_4f82815d893b95689fb249cbe51eaa884ddcbb5424b3380f5e784bf1662258a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8a097a1f4aa6e0a6f874e4406e926c3b5fe90729d2f698481c0bfe982ba0d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a097a1f4aa6e0a6f874e4406e926c3b5fe90729d2f698481c0bfe982ba0d1f->enter($__internal_a8a097a1f4aa6e0a6f874e4406e926c3b5fe90729d2f698481c0bfe982ba0d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "annee", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "annee", array()), "niveau", array()), "html", null, true);
        echo " </h1>
\t<ol>
\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'label');
        echo "
\t\t\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enseignant", array()), 'label');
        echo "
\t\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enseignant", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\">Valider</button>
\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</ol>
\t
";
        
        $__internal_a8a097a1f4aa6e0a6f874e4406e926c3b5fe90729d2f698481c0bfe982ba0d1f->leave($__internal_a8a097a1f4aa6e0a6f874e4406e926c3b5fe90729d2f698481c0bfe982ba0d1f_prof);

        
        $__internal_4f82815d893b95689fb249cbe51eaa884ddcbb5424b3380f5e784bf1662258a2->leave($__internal_4f82815d893b95689fb249cbe51eaa884ddcbb5424b3380f5e784bf1662258a2_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/affecterProf.html.twig";
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
{% endblock %}", "classesViews/affecterProf.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/affecterProf.html.twig");
    }
}
