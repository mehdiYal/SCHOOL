<?php

/* :travailrealise:add.html.twig */
class __TwigTemplate_ba5d4de3e1ced989f5f534c0b2afd5d41548262378329a2ed06b06e85bb19abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":travailrealise:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_470b941f10be206af06b4ab5df665edc16a0b2fbe95b7bd896fc1e1b8344a21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470b941f10be206af06b4ab5df665edc16a0b2fbe95b7bd896fc1e1b8344a21b->enter($__internal_470b941f10be206af06b4ab5df665edc16a0b2fbe95b7bd896fc1e1b8344a21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $__internal_d82cfa4c12a6e0dba4dd0c859ba93b222fc4c744e993f2e88c4391d641712497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82cfa4c12a6e0dba4dd0c859ba93b222fc4c744e993f2e88c4391d641712497->enter($__internal_d82cfa4c12a6e0dba4dd0c859ba93b222fc4c744e993f2e88c4391d641712497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_470b941f10be206af06b4ab5df665edc16a0b2fbe95b7bd896fc1e1b8344a21b->leave($__internal_470b941f10be206af06b4ab5df665edc16a0b2fbe95b7bd896fc1e1b8344a21b_prof);

        
        $__internal_d82cfa4c12a6e0dba4dd0c859ba93b222fc4c744e993f2e88c4391d641712497->leave($__internal_d82cfa4c12a6e0dba4dd0c859ba93b222fc4c744e993f2e88c4391d641712497_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6618886a174edefd7a8ad6bb50722e2346c77813c8a0efcdf5b95e83e25e98e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6618886a174edefd7a8ad6bb50722e2346c77813c8a0efcdf5b95e83e25e98e3->enter($__internal_6618886a174edefd7a8ad6bb50722e2346c77813c8a0efcdf5b95e83e25e98e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_842d6c5828727579199cfc8c0102b5c73f73f8a2053de1545bb9fafe5d2dee91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842d6c5828727579199cfc8c0102b5c73f73f8a2053de1545bb9fafe5d2dee91->enter($__internal_842d6c5828727579199cfc8c0102b5c73f73f8a2053de1545bb9fafe5d2dee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"page-content-wrap\">
    <div class=\"row\">
        <div class=\"col-md-12\"> 
\t\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'widget', array("id" => "selectMatiere", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget', array("id" => "selectMatiere", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
\t\t\t\t\t   \t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "travail", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t                       \t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "travail", array()), 'widget', array("attr" => array("class" => "fileinput btn-primary")));
        echo "
\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "travail", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t\t";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_842d6c5828727579199cfc8c0102b5c73f73f8a2053de1545bb9fafe5d2dee91->leave($__internal_842d6c5828727579199cfc8c0102b5c73f73f8a2053de1545bb9fafe5d2dee91_prof);

        
        $__internal_6618886a174edefd7a8ad6bb50722e2346c77813c8a0efcdf5b95e83e25e98e3->leave($__internal_6618886a174edefd7a8ad6bb50722e2346c77813c8a0efcdf5b95e83e25e98e3_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92affab3b55486d62d2a11d009441938bf18bd910a4a941aa74348f3e5428168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92affab3b55486d62d2a11d009441938bf18bd910a4a941aa74348f3e5428168->enter($__internal_92affab3b55486d62d2a11d009441938bf18bd910a4a941aa74348f3e5428168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_743b02a8d366b500a9753d8aed6df2edef4a322d076f3adb40d17064ffe296f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743b02a8d366b500a9753d8aed6df2edef4a322d076f3adb40d17064ffe296f1->enter($__internal_743b02a8d366b500a9753d8aed6df2edef4a322d076f3adb40d17064ffe296f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                /*\$('#selectMatiere').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});*/
\t\t\t\t
            });
</script>
";
        
        $__internal_743b02a8d366b500a9753d8aed6df2edef4a322d076f3adb40d17064ffe296f1->leave($__internal_743b02a8d366b500a9753d8aed6df2edef4a322d076f3adb40d17064ffe296f1_prof);

        
        $__internal_92affab3b55486d62d2a11d009441938bf18bd910a4a941aa74348f3e5428168->leave($__internal_92affab3b55486d62d2a11d009441938bf18bd910a4a941aa74348f3e5428168_prof);

    }

    public function getTemplateName()
    {
        return ":travailrealise:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 64,  161 => 63,  144 => 55,  139 => 53,  132 => 49,  128 => 48,  123 => 46,  116 => 42,  111 => 40,  104 => 36,  97 => 32,  92 => 30,  86 => 27,  78 => 22,  73 => 20,  67 => 17,  55 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
\t\t\t{{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.matiere,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_widget(form.matiere,{ 'id':'selectMatiere', 'label_attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.matiere) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.classe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t{{ form_widget(form.classe,{ 'id':'selectMatiere', 'label_attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.classe) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.date,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
\t\t\t\t\t   \t\t\t{{ form_widget(form.date) }}
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.date) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.travail,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t                       \t{{ form_widget(form.travail,{ 'attr': {'class': 'fileinput btn-primary'} } ) }}
\t\t\t\t\t\t\t{{ form_errors(form.travail) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% endblock %}

{% block javascripts %}
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-file-input.js') }}\"></script>
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                /*\$('#selectMatiere').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});*/
\t\t\t\t
            });
</script>
{% endblock %}", ":travailrealise:add.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/travailrealise/add.html.twig");
    }
}
