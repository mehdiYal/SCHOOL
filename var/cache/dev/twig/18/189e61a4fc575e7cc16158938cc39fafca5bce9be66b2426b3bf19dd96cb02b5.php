<?php

/* :evaluation:add.html.twig */
class __TwigTemplate_216d4c0ef0ac800b9c49bd95a28208b64edc48b0d35982333af1df93b870903b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":evaluation:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6891f8d4f3d9e9a5bd8e35fc08584433e557b6ba334e343431fc5436f3242a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6891f8d4f3d9e9a5bd8e35fc08584433e557b6ba334e343431fc5436f3242a54->enter($__internal_6891f8d4f3d9e9a5bd8e35fc08584433e557b6ba334e343431fc5436f3242a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":evaluation:add.html.twig"));

        $__internal_a255d5e2be668fd9cafc62822ea42bb7144bad5043b30f3f27750e676ec49344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a255d5e2be668fd9cafc62822ea42bb7144bad5043b30f3f27750e676ec49344->enter($__internal_a255d5e2be668fd9cafc62822ea42bb7144bad5043b30f3f27750e676ec49344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":evaluation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6891f8d4f3d9e9a5bd8e35fc08584433e557b6ba334e343431fc5436f3242a54->leave($__internal_6891f8d4f3d9e9a5bd8e35fc08584433e557b6ba334e343431fc5436f3242a54_prof);

        
        $__internal_a255d5e2be668fd9cafc62822ea42bb7144bad5043b30f3f27750e676ec49344->leave($__internal_a255d5e2be668fd9cafc62822ea42bb7144bad5043b30f3f27750e676ec49344_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_112b059b00d3ae96e5c25f6faf85d569c3444bcbc6ebffac515a96830730a662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112b059b00d3ae96e5c25f6faf85d569c3444bcbc6ebffac515a96830730a662->enter($__internal_112b059b00d3ae96e5c25f6faf85d569c3444bcbc6ebffac515a96830730a662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ee90c80efa6edeaf93cded85e651183a303e82a28fda6f070f58d340115aa0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee90c80efa6edeaf93cded85e651183a303e82a28fda6f070f58d340115aa0f->enter($__internal_5ee90c80efa6edeaf93cded85e651183a303e82a28fda6f070f58d340115aa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">  


\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
        echo "
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t   \t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"panel-footer\">                                    
\t\t   \t<input type=\"submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t</div>
\t</div>
\t\t
\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t
";
        
        $__internal_5ee90c80efa6edeaf93cded85e651183a303e82a28fda6f070f58d340115aa0f->leave($__internal_5ee90c80efa6edeaf93cded85e651183a303e82a28fda6f070f58d340115aa0f_prof);

        
        $__internal_112b059b00d3ae96e5c25f6faf85d569c3444bcbc6ebffac515a96830730a662->leave($__internal_112b059b00d3ae96e5c25f6faf85d569c3444bcbc6ebffac515a96830730a662_prof);

    }

    public function getTemplateName()
    {
        return ":evaluation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  129 => 49,  122 => 45,  117 => 43,  112 => 41,  105 => 37,  99 => 34,  92 => 30,  84 => 25,  79 => 23,  72 => 19,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">  


\t{{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t{{'evaluation.add'|trans}}
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.matiere,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t\t{{ form_widget(form.matiere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t{{ form_errors(form.matiere) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.classe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t   \t\t\t{{ form_widget(form.classe ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t    {{ form_errors(form.classe) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.evaluation,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t   \t\t{{ form_widget(form.evaluation ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t    {{ form_errors(form.evaluation) }}
\t\t\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"panel-footer\">                                    
\t\t   \t<input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t</div>
\t</div>
\t\t
\t{{ form_end(form) }}
\t
{% endblock %}", ":evaluation:add.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/evaluation/add.html.twig");
    }
}
