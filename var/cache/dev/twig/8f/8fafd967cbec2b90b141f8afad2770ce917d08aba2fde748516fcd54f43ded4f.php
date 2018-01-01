<?php

/* :matieresViews:addMatiere.html.twig */
class __TwigTemplate_7187d9c1cb7629b90b6358c8b7181eebd85da4c71fd9f2be77dd7b60a3cdbc95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", ":matieresViews:addMatiere.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f46694654c5dd701050c600874fca71d292715edabe6fb7af3c1e420a961d383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46694654c5dd701050c600874fca71d292715edabe6fb7af3c1e420a961d383->enter($__internal_f46694654c5dd701050c600874fca71d292715edabe6fb7af3c1e420a961d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $__internal_3ac36d3cf3d364b8e634885e43bc6841ffe064b57ab50b63559a98e5b61bdcc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac36d3cf3d364b8e634885e43bc6841ffe064b57ab50b63559a98e5b61bdcc8->enter($__internal_3ac36d3cf3d364b8e634885e43bc6841ffe064b57ab50b63559a98e5b61bdcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46694654c5dd701050c600874fca71d292715edabe6fb7af3c1e420a961d383->leave($__internal_f46694654c5dd701050c600874fca71d292715edabe6fb7af3c1e420a961d383_prof);

        
        $__internal_3ac36d3cf3d364b8e634885e43bc6841ffe064b57ab50b63559a98e5b61bdcc8->leave($__internal_3ac36d3cf3d364b8e634885e43bc6841ffe064b57ab50b63559a98e5b61bdcc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb1354447a674be5b63816c170a911f51d392df7b4cb4bb95e8f1f41fdd51c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1354447a674be5b63816c170a911f51d392df7b4cb4bb95e8f1f41fdd51c34->enter($__internal_bb1354447a674be5b63816c170a911f51d392df7b4cb4bb95e8f1f41fdd51c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9623e5942bf9341086e9dd8a41efc7f9318ff960ff4af67c605033a99aefb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9623e5942bf9341086e9dd8a41efc7f9318ff960ff4af67c605033a99aefb3b->enter($__internal_e9623e5942bf9341086e9dd8a41efc7f9318ff960ff4af67c605033a99aefb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">               
\t\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "  
\t\t\t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\"><strong>";
        // line 11
        if ((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " </strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t        <div class=\"panel-footer\">                                    
\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t        </div>
\t\t    </div>
\t\t\t";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
    </div>                     
</div>
";
        
        $__internal_e9623e5942bf9341086e9dd8a41efc7f9318ff960ff4af67c605033a99aefb3b->leave($__internal_e9623e5942bf9341086e9dd8a41efc7f9318ff960ff4af67c605033a99aefb3b_prof);

        
        $__internal_bb1354447a674be5b63816c170a911f51d392df7b4cb4bb95e8f1f41fdd51c34->leave($__internal_bb1354447a674be5b63816c170a911f51d392df7b4cb4bb95e8f1f41fdd51c34_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8af78db54e398df54ea86b6c90f82b8b949ac1e1fc06b2e175cd99fc5500277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8af78db54e398df54ea86b6c90f82b8b949ac1e1fc06b2e175cd99fc5500277->enter($__internal_e8af78db54e398df54ea86b6c90f82b8b949ac1e1fc06b2e175cd99fc5500277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d094adc2a7c2c258920a921c6b2db7ab2a0de1ac4deb1483f222d9f3ed44b4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d094adc2a7c2c258920a921c6b2db7ab2a0de1ac4deb1483f222d9f3ed44b4d9->enter($__internal_d094adc2a7c2c258920a921c6b2db7ab2a0de1ac4deb1483f222d9f3ed44b4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d094adc2a7c2c258920a921c6b2db7ab2a0de1ac4deb1483f222d9f3ed44b4d9->leave($__internal_d094adc2a7c2c258920a921c6b2db7ab2a0de1ac4deb1483f222d9f3ed44b4d9_prof);

        
        $__internal_e8af78db54e398df54ea86b6c90f82b8b949ac1e1fc06b2e175cd99fc5500277->leave($__internal_e8af78db54e398df54ea86b6c90f82b8b949ac1e1fc06b2e175cd99fc5500277_prof);

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
        return array (  144 => 46,  139 => 45,  130 => 44,  115 => 37,  104 => 29,  100 => 28,  95 => 26,  87 => 21,  82 => 19,  75 => 15,  62 => 11,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseSuper.html.twig' %}

{% block body %}
<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">               
\t\t\t{{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}  
\t\t\t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\"><strong>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} </strong> {{'matiere'|trans}}</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.nom , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t\t{{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t{{ form_errors(form.nom) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.description , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.description ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.description) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t        <div class=\"panel-footer\">                                    
\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t        </div>
\t\t    </div>
\t\t\t{{ form_end(form) }}
\t\t</div>
    </div>                     
</div>
{% endblock %}


{% block javascripts %}
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-file-input.js') }}\"></script>
{% endblock %}
", ":matieresViews:addMatiere.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/matieresViews/addMatiere.html.twig");
    }
}
