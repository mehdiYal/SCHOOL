<?php

/* :travailrealise:add.html.twig */
class __TwigTemplate_80d14a022d87f9cc83260a428683d1e0f4f7692570b3734d25a8dc6376fe6789 extends Twig_Template
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
        $__internal_4b0232058c85b1319e2e6fbcdeda3c543ed5dd11111db2603b2cba5f7f8b4bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0232058c85b1319e2e6fbcdeda3c543ed5dd11111db2603b2cba5f7f8b4bfc->enter($__internal_4b0232058c85b1319e2e6fbcdeda3c543ed5dd11111db2603b2cba5f7f8b4bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $__internal_d901020ca0b654551472bbda5faac4dc10771f328fa20dab55bdcc6425d172f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d901020ca0b654551472bbda5faac4dc10771f328fa20dab55bdcc6425d172f3->enter($__internal_d901020ca0b654551472bbda5faac4dc10771f328fa20dab55bdcc6425d172f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b0232058c85b1319e2e6fbcdeda3c543ed5dd11111db2603b2cba5f7f8b4bfc->leave($__internal_4b0232058c85b1319e2e6fbcdeda3c543ed5dd11111db2603b2cba5f7f8b4bfc_prof);

        
        $__internal_d901020ca0b654551472bbda5faac4dc10771f328fa20dab55bdcc6425d172f3->leave($__internal_d901020ca0b654551472bbda5faac4dc10771f328fa20dab55bdcc6425d172f3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1dcdc22df9c769b32775d2a08aaf553af60b266beb668165a1741b26a5339f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1dcdc22df9c769b32775d2a08aaf553af60b266beb668165a1741b26a5339f0->enter($__internal_a1dcdc22df9c769b32775d2a08aaf553af60b266beb668165a1741b26a5339f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_640a10966c82910c3ea91e1ef53e9c14f49d18585be123f7b81fdecfc28eff8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640a10966c82910c3ea91e1ef53e9c14f49d18585be123f7b81fdecfc28eff8e->enter($__internal_640a10966c82910c3ea91e1ef53e9c14f49d18585be123f7b81fdecfc28eff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_640a10966c82910c3ea91e1ef53e9c14f49d18585be123f7b81fdecfc28eff8e->leave($__internal_640a10966c82910c3ea91e1ef53e9c14f49d18585be123f7b81fdecfc28eff8e_prof);

        
        $__internal_a1dcdc22df9c769b32775d2a08aaf553af60b266beb668165a1741b26a5339f0->leave($__internal_a1dcdc22df9c769b32775d2a08aaf553af60b266beb668165a1741b26a5339f0_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b2f0208040944ab0fe828ea4a5beac08c24ef6a25a0794e166539f40debbed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2f0208040944ab0fe828ea4a5beac08c24ef6a25a0794e166539f40debbed5->enter($__internal_7b2f0208040944ab0fe828ea4a5beac08c24ef6a25a0794e166539f40debbed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e820f3541f07ddd3bcad78dd762f201a94872a04a1605f9934e77cde21cc9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e820f3541f07ddd3bcad78dd762f201a94872a04a1605f9934e77cde21cc9be->enter($__internal_4e820f3541f07ddd3bcad78dd762f201a94872a04a1605f9934e77cde21cc9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4e820f3541f07ddd3bcad78dd762f201a94872a04a1605f9934e77cde21cc9be->leave($__internal_4e820f3541f07ddd3bcad78dd762f201a94872a04a1605f9934e77cde21cc9be_prof);

        
        $__internal_7b2f0208040944ab0fe828ea4a5beac08c24ef6a25a0794e166539f40debbed5->leave($__internal_7b2f0208040944ab0fe828ea4a5beac08c24ef6a25a0794e166539f40debbed5_prof);

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
{% endblock %}", ":travailrealise:add.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/travailrealise/add.html.twig");
    }
}
