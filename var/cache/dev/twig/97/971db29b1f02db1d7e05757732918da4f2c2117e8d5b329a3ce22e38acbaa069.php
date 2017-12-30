<?php

/* travailrealise/add.html.twig */
class __TwigTemplate_97748ef278e706e71d0974991c1d62c4f3bf45cce9d0768afd7ec16936cc2c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "travailrealise/add.html.twig", 1);
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
        $__internal_c768f36bfc9b1496f57115bae36ec84dc934b7dacbc73864abaa7f565f8702fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c768f36bfc9b1496f57115bae36ec84dc934b7dacbc73864abaa7f565f8702fb->enter($__internal_c768f36bfc9b1496f57115bae36ec84dc934b7dacbc73864abaa7f565f8702fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/add.html.twig"));

        $__internal_76c31eb47d5e9cec1fed5f62a180a3064cd1501fd68eaa8a6e2880b99e51e44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c31eb47d5e9cec1fed5f62a180a3064cd1501fd68eaa8a6e2880b99e51e44f->enter($__internal_76c31eb47d5e9cec1fed5f62a180a3064cd1501fd68eaa8a6e2880b99e51e44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c768f36bfc9b1496f57115bae36ec84dc934b7dacbc73864abaa7f565f8702fb->leave($__internal_c768f36bfc9b1496f57115bae36ec84dc934b7dacbc73864abaa7f565f8702fb_prof);

        
        $__internal_76c31eb47d5e9cec1fed5f62a180a3064cd1501fd68eaa8a6e2880b99e51e44f->leave($__internal_76c31eb47d5e9cec1fed5f62a180a3064cd1501fd68eaa8a6e2880b99e51e44f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4f513c695600748daa0eab1bd525efe705fb3cc8f1f146642b5c3d73fa2d2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f513c695600748daa0eab1bd525efe705fb3cc8f1f146642b5c3d73fa2d2fe->enter($__internal_d4f513c695600748daa0eab1bd525efe705fb3cc8f1f146642b5c3d73fa2d2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f82e8e92f07db7982b6fa62a73082d421aede55113095dd15aa79ab47028da89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82e8e92f07db7982b6fa62a73082d421aede55113095dd15aa79ab47028da89->enter($__internal_f82e8e92f07db7982b6fa62a73082d421aede55113095dd15aa79ab47028da89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"page-content-wrap\">
    <div class=\"row\">
        <div class=\"col-md-12\"> 
\t\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'widget', array("id" => "selectMatiere", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'widget', array("id" => "selectClasse", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
\t\t\t\t\t   \t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-time\"></span></span>
\t\t\t\t\t   \t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
        echo "
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "travail", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t                       \t";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "travail", array()), 'widget', array("attr" => array("class" => "fileinput btn-primary")));
        echo "
\t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "travail", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t                       \t";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t\t";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_f82e8e92f07db7982b6fa62a73082d421aede55113095dd15aa79ab47028da89->leave($__internal_f82e8e92f07db7982b6fa62a73082d421aede55113095dd15aa79ab47028da89_prof);

        
        $__internal_d4f513c695600748daa0eab1bd525efe705fb3cc8f1f146642b5c3d73fa2d2fe->leave($__internal_d4f513c695600748daa0eab1bd525efe705fb3cc8f1f146642b5c3d73fa2d2fe_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19cdb589dac6237f2588cc0264d50d6c18e968f3f5ca01d88724f10099582ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19cdb589dac6237f2588cc0264d50d6c18e968f3f5ca01d88724f10099582ba2->enter($__internal_19cdb589dac6237f2588cc0264d50d6c18e968f3f5ca01d88724f10099582ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a945c575526233f137276160afe303f5e15a5bc03f6ed34fd00ee8f4f73acdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a945c575526233f137276160afe303f5e15a5bc03f6ed34fd00ee8f4f73acdc7->enter($__internal_a945c575526233f137276160afe303f5e15a5bc03f6ed34fd00ee8f4f73acdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                \$('#selectMatiere').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});

\t\t\t\t\$('.timeForm').timepicker({
\t\t\t\t    showMeridian: false,
\t                defaultTime: '08:00'
\t            });

\t\t\t\t\$('#selectClasse').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t
            });
</script>
";
        
        $__internal_a945c575526233f137276160afe303f5e15a5bc03f6ed34fd00ee8f4f73acdc7->leave($__internal_a945c575526233f137276160afe303f5e15a5bc03f6ed34fd00ee8f4f73acdc7_prof);

        
        $__internal_19cdb589dac6237f2588cc0264d50d6c18e968f3f5ca01d88724f10099582ba2->leave($__internal_19cdb589dac6237f2588cc0264d50d6c18e968f3f5ca01d88724f10099582ba2_prof);

    }

    public function getTemplateName()
    {
        return "travailrealise/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 82,  205 => 81,  196 => 80,  179 => 72,  174 => 70,  167 => 66,  163 => 65,  158 => 63,  151 => 59,  147 => 58,  142 => 56,  135 => 52,  130 => 50,  123 => 46,  116 => 42,  111 => 40,  104 => 36,  97 => 32,  92 => 30,  86 => 27,  78 => 22,  73 => 20,  67 => 17,  55 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
\t\t\t\t\t\t\t\t{{ form_widget(form.classe,{ 'id':'selectClasse', 'label_attr': {'class': 'form-control select'} }) }}
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
\t\t\t\t\t\t{{ form_label(form.time,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-time\"></span></span>
\t\t\t\t\t   \t\t\t{{ form_widget(form.time) }}
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.time) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.travail,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t                       \t{{ form_widget(form.travail,{ 'attr': {'class': 'fileinput btn-primary'} } ) }}
\t\t\t\t\t\t\t{{ form_errors(form.travail) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.commentaire,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t                       \t{{ form_widget(form.commentaire)}}
\t\t\t\t\t\t\t{{ form_errors(form.commentaire) }}
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
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins.js') }}\"></script>
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                \$('#selectMatiere').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});

\t\t\t\t\$('.timeForm').timepicker({
\t\t\t\t    showMeridian: false,
\t                defaultTime: '08:00'
\t            });

\t\t\t\t\$('#selectClasse').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t
            });
</script>
{% endblock %}", "travailrealise/add.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\travailrealise\\add.html.twig");
    }
}
