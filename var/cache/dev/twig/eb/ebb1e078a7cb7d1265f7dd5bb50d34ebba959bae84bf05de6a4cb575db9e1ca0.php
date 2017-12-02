<?php

/* :schoolsViews:addSchool.html.twig */
class __TwigTemplate_870b063430a8dc7b4a2d0f862896a5d977cbe4c3ccc5e8f5250f202694a33439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":schoolsViews:addSchool.html.twig", 1);
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
        $__internal_34b81c726b868ff0281f53cd947ffa1c0c00787d41b4ce99c262e9c0d800e930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b81c726b868ff0281f53cd947ffa1c0c00787d41b4ce99c262e9c0d800e930->enter($__internal_34b81c726b868ff0281f53cd947ffa1c0c00787d41b4ce99c262e9c0d800e930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:addSchool.html.twig"));

        $__internal_23a7da92fc2cdef295d6f8dd762f7daca4c760754f48433dbf1a6fbdcea1a8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a7da92fc2cdef295d6f8dd762f7daca4c760754f48433dbf1a6fbdcea1a8a0->enter($__internal_23a7da92fc2cdef295d6f8dd762f7daca4c760754f48433dbf1a6fbdcea1a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:addSchool.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b81c726b868ff0281f53cd947ffa1c0c00787d41b4ce99c262e9c0d800e930->leave($__internal_34b81c726b868ff0281f53cd947ffa1c0c00787d41b4ce99c262e9c0d800e930_prof);

        
        $__internal_23a7da92fc2cdef295d6f8dd762f7daca4c760754f48433dbf1a6fbdcea1a8a0->leave($__internal_23a7da92fc2cdef295d6f8dd762f7daca4c760754f48433dbf1a6fbdcea1a8a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48330931eb9aae2d3803ede4912b73512482bc2580f2d8166adf341d0316fb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48330931eb9aae2d3803ede4912b73512482bc2580f2d8166adf341d0316fb23->enter($__internal_48330931eb9aae2d3803ede4912b73512482bc2580f2d8166adf341d0316fb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03f8778dfbe77fd5b2d813d5e09ef5325e886c8c29cc517971ed45ac79d24b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f8778dfbe77fd5b2d813d5e09ef5325e886c8c29cc517971ed45ac79d24b53->enter($__internal_03f8778dfbe77fd5b2d813d5e09ef5325e886c8c29cc517971ed45ac79d24b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("school"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
\t\t    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label');
        echo "
\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'label');
        echo "
\t\t    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label');
        echo "
\t\t    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'label');
        echo "
\t\t    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "informations", array()), 'label');
        echo "
\t\t    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "informations", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "informations", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_03f8778dfbe77fd5b2d813d5e09ef5325e886c8c29cc517971ed45ac79d24b53->leave($__internal_03f8778dfbe77fd5b2d813d5e09ef5325e886c8c29cc517971ed45ac79d24b53_prof);

        
        $__internal_48330931eb9aae2d3803ede4912b73512482bc2580f2d8166adf341d0316fb23->leave($__internal_48330931eb9aae2d3803ede4912b73512482bc2580f2d8166adf341d0316fb23_prof);

    }

    public function getTemplateName()
    {
        return ":schoolsViews:addSchool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 59,  202 => 56,  198 => 55,  194 => 54,  188 => 51,  184 => 50,  180 => 49,  174 => 46,  170 => 45,  166 => 44,  160 => 41,  156 => 40,  152 => 39,  146 => 36,  142 => 35,  138 => 34,  132 => 31,  128 => 30,  124 => 29,  118 => 26,  114 => 25,  110 => 24,  104 => 21,  100 => 20,  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'school'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.logo) }}
\t\t    {{ form_widget(form.logo ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.logo) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.code) }}
\t\t    {{ form_widget(form.code ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.code) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.adresse) }}
\t\t    {{ form_widget(form.adresse ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.adresse) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.ville) }}
\t\t    {{ form_widget(form.ville ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.ville) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.pays) }}
\t\t    {{ form_widget(form.pays ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.pays) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.telephone) }}
\t\t    {{ form_widget(form.telephone ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.telephone) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.email) }}
\t\t    {{ form_widget(form.email ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.email) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.dateCreation) }}
\t\t    {{ form_widget(form.dateCreation ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.dateCreation) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.informations) }}
\t\t    {{ form_widget(form.informations ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.informations) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", ":schoolsViews:addSchool.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/schoolsViews/addSchool.html.twig");
    }
}
