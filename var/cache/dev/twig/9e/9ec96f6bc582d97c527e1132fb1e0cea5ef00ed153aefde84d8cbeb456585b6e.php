<?php

/* :absence:add.html.twig */
class __TwigTemplate_ca85dbf1011aaa597d92897ccf61cb669db1d8de04cd13d3d01ec2e93173cbfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":absence:add.html.twig", 1);
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
        $__internal_c0c321f902077589b44e426e586c305d84a727dd8a8fa6dace99e972e2b66441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c321f902077589b44e426e586c305d84a727dd8a8fa6dace99e972e2b66441->enter($__internal_c0c321f902077589b44e426e586c305d84a727dd8a8fa6dace99e972e2b66441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:add.html.twig"));

        $__internal_769e08093ad5c4f227fe9ecbb7e16ae4fbcea142fd8daf514d7f39ffa29789a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769e08093ad5c4f227fe9ecbb7e16ae4fbcea142fd8daf514d7f39ffa29789a1->enter($__internal_769e08093ad5c4f227fe9ecbb7e16ae4fbcea142fd8daf514d7f39ffa29789a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c321f902077589b44e426e586c305d84a727dd8a8fa6dace99e972e2b66441->leave($__internal_c0c321f902077589b44e426e586c305d84a727dd8a8fa6dace99e972e2b66441_prof);

        
        $__internal_769e08093ad5c4f227fe9ecbb7e16ae4fbcea142fd8daf514d7f39ffa29789a1->leave($__internal_769e08093ad5c4f227fe9ecbb7e16ae4fbcea142fd8daf514d7f39ffa29789a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a09cd96de3dadfa24f2a33f0a3a7bc12a80d5c0409e2d46bf349ada2d448064f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09cd96de3dadfa24f2a33f0a3a7bc12a80d5c0409e2d46bf349ada2d448064f->enter($__internal_a09cd96de3dadfa24f2a33f0a3a7bc12a80d5c0409e2d46bf349ada2d448064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_181e42bc48c0e67608cab5424a8817c212118694a05c4ab4dfc395715f0550e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181e42bc48c0e67608cab5424a8817c212118694a05c4ab4dfc395715f0550e4->enter($__internal_181e42bc48c0e67608cab5424a8817c212118694a05c4ab4dfc395715f0550e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
\t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'label');
        echo "
\t\t    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'widget');
        echo "
\t\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label');
        echo "
\t\t    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label');
        echo "
\t\t    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
\t\t    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
\t\t</div>
\t\t
\t\t<button type=\"submit\">Chercher</button>
\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_181e42bc48c0e67608cab5424a8817c212118694a05c4ab4dfc395715f0550e4->leave($__internal_181e42bc48c0e67608cab5424a8817c212118694a05c4ab4dfc395715f0550e4_prof);

        
        $__internal_a09cd96de3dadfa24f2a33f0a3a7bc12a80d5c0409e2d46bf349ada2d448064f->leave($__internal_a09cd96de3dadfa24f2a33f0a3a7bc12a80d5c0409e2d46bf349ada2d448064f_prof);

    }

    public function getTemplateName()
    {
        return ":absence:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  93 => 19,  89 => 18,  85 => 17,  79 => 14,  75 => 13,  71 => 12,  65 => 9,  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.eleve) }}
\t\t    {{ form_widget(form.eleve) }}
\t\t    {{ form_errors(form.eleve) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.date) }}
\t\t    {{ form_widget(form.date) }}
\t\t    {{ form_errors(form.date) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.commentaire) }}
\t\t    {{ form_widget(form.commentaire) }}
\t\t    {{ form_errors(form.commentaire) }}
\t\t</div>
\t\t
\t\t<button type=\"submit\">Chercher</button>
\t{{ form_end(form) }}
</div>

{% endblock %}", ":absence:add.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/absence/add.html.twig");
    }
}
