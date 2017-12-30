<?php

/* :matieresViews:addMatiere.html.twig */
class __TwigTemplate_2b45e9572a712a25325c25d55a833836ffa830b3780a7fbaac1f08a37c8f17d7 extends Twig_Template
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
        $__internal_56032bcb3cc2cac34275c2acfe074384591674859e3389dc667f7166123694ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56032bcb3cc2cac34275c2acfe074384591674859e3389dc667f7166123694ce->enter($__internal_56032bcb3cc2cac34275c2acfe074384591674859e3389dc667f7166123694ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $__internal_0e20e6da319e9989e357fcd7b33958e5cc69c186d2bbf82846f32cf216443731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e20e6da319e9989e357fcd7b33958e5cc69c186d2bbf82846f32cf216443731->enter($__internal_0e20e6da319e9989e357fcd7b33958e5cc69c186d2bbf82846f32cf216443731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56032bcb3cc2cac34275c2acfe074384591674859e3389dc667f7166123694ce->leave($__internal_56032bcb3cc2cac34275c2acfe074384591674859e3389dc667f7166123694ce_prof);

        
        $__internal_0e20e6da319e9989e357fcd7b33958e5cc69c186d2bbf82846f32cf216443731->leave($__internal_0e20e6da319e9989e357fcd7b33958e5cc69c186d2bbf82846f32cf216443731_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d43d5dba31cb519f81d049be1fa6830ad8a9def47c6f55f861bb1c4de9d31b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43d5dba31cb519f81d049be1fa6830ad8a9def47c6f55f861bb1c4de9d31b61->enter($__internal_d43d5dba31cb519f81d049be1fa6830ad8a9def47c6f55f861bb1c4de9d31b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_525dc42faa6fea4ea4ddbd83f8acff3b1aec4326807845994a6f40916f3c078e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525dc42faa6fea4ea4ddbd83f8acff3b1aec4326807845994a6f40916f3c078e->enter($__internal_525dc42faa6fea4ea4ddbd83f8acff3b1aec4326807845994a6f40916f3c078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_525dc42faa6fea4ea4ddbd83f8acff3b1aec4326807845994a6f40916f3c078e->leave($__internal_525dc42faa6fea4ea4ddbd83f8acff3b1aec4326807845994a6f40916f3c078e_prof);

        
        $__internal_d43d5dba31cb519f81d049be1fa6830ad8a9def47c6f55f861bb1c4de9d31b61->leave($__internal_d43d5dba31cb519f81d049be1fa6830ad8a9def47c6f55f861bb1c4de9d31b61_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e61d8cc40387944d7181c61adea7ece75d1538aff8ff27367fe42f52ce06eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e61d8cc40387944d7181c61adea7ece75d1538aff8ff27367fe42f52ce06eb3->enter($__internal_9e61d8cc40387944d7181c61adea7ece75d1538aff8ff27367fe42f52ce06eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f833032c362857c8043269dbbb0e6b308a1502bdeed602378d33fd7994fff044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f833032c362857c8043269dbbb0e6b308a1502bdeed602378d33fd7994fff044->enter($__internal_f833032c362857c8043269dbbb0e6b308a1502bdeed602378d33fd7994fff044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f833032c362857c8043269dbbb0e6b308a1502bdeed602378d33fd7994fff044->leave($__internal_f833032c362857c8043269dbbb0e6b308a1502bdeed602378d33fd7994fff044_prof);

        
        $__internal_9e61d8cc40387944d7181c61adea7ece75d1538aff8ff27367fe42f52ce06eb3->leave($__internal_9e61d8cc40387944d7181c61adea7ece75d1538aff8ff27367fe42f52ce06eb3_prof);

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
", ":matieresViews:addMatiere.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/matieresViews/addMatiere.html.twig");
    }
}
