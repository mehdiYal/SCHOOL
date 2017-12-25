<?php

/* absence/add.html.twig */
class __TwigTemplate_2d87565ff9f7c1dac7862753c31a0a1e8062128709ae49861a472c5c4a1b189f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "absence/add.html.twig", 1);
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
        $__internal_9aa482e7eadbf73dfdbb596324e22e89ede05ff02c210b4137ff0f555044ed37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa482e7eadbf73dfdbb596324e22e89ede05ff02c210b4137ff0f555044ed37->enter($__internal_9aa482e7eadbf73dfdbb596324e22e89ede05ff02c210b4137ff0f555044ed37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/add.html.twig"));

        $__internal_d68143c1e58139dfc445bd9a968c7181674cbaaba6179357f7903fb5e8c416fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68143c1e58139dfc445bd9a968c7181674cbaaba6179357f7903fb5e8c416fb->enter($__internal_d68143c1e58139dfc445bd9a968c7181674cbaaba6179357f7903fb5e8c416fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa482e7eadbf73dfdbb596324e22e89ede05ff02c210b4137ff0f555044ed37->leave($__internal_9aa482e7eadbf73dfdbb596324e22e89ede05ff02c210b4137ff0f555044ed37_prof);

        
        $__internal_d68143c1e58139dfc445bd9a968c7181674cbaaba6179357f7903fb5e8c416fb->leave($__internal_d68143c1e58139dfc445bd9a968c7181674cbaaba6179357f7903fb5e8c416fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9103be3b5c5e28f1532e9b63c96ec0dcc46a475c54263c2d485b62fe507957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9103be3b5c5e28f1532e9b63c96ec0dcc46a475c54263c2d485b62fe507957c->enter($__internal_d9103be3b5c5e28f1532e9b63c96ec0dcc46a475c54263c2d485b62fe507957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40aa1b8ca32079b88d9e09591cfcc4498b8ad9fdccd4715589e055a35c7ed6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40aa1b8ca32079b88d9e09591cfcc4498b8ad9fdccd4715589e055a35c7ed6df->enter($__internal_40aa1b8ca32079b88d9e09591cfcc4498b8ad9fdccd4715589e055a35c7ed6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
        echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eleve", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eleve", array()), 'widget', array("id" => "selectEleve", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eleve", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("id" => "selectType", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\">
                                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
                                    </span>
                                </div>
\t\t\t\t  \t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>

";
        
        $__internal_40aa1b8ca32079b88d9e09591cfcc4498b8ad9fdccd4715589e055a35c7ed6df->leave($__internal_40aa1b8ca32079b88d9e09591cfcc4498b8ad9fdccd4715589e055a35c7ed6df_prof);

        
        $__internal_d9103be3b5c5e28f1532e9b63c96ec0dcc46a475c54263c2d485b62fe507957c->leave($__internal_d9103be3b5c5e28f1532e9b63c96ec0dcc46a475c54263c2d485b62fe507957c_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_390baaa96a789b8388fd17bb5bd954f2b17eab6a13911cfb6701ee61b6187134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390baaa96a789b8388fd17bb5bd954f2b17eab6a13911cfb6701ee61b6187134->enter($__internal_390baaa96a789b8388fd17bb5bd954f2b17eab6a13911cfb6701ee61b6187134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_325c78bf266d3e272cae8d9bd93b6c88aa9d8ead3ec776d8c8d50a274d18d928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325c78bf266d3e272cae8d9bd93b6c88aa9d8ead3ec776d8c8d50a274d18d928->enter($__internal_325c78bf266d3e272cae8d9bd93b6c88aa9d8ead3ec776d8c8d50a274d18d928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                \$('#selectEleve').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t \$('#selectType').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});

\t\t\t\t\$('.active').removeClass('active');
                \$('.abs').addClass('active');
            });
</script>
";
        
        $__internal_325c78bf266d3e272cae8d9bd93b6c88aa9d8ead3ec776d8c8d50a274d18d928->leave($__internal_325c78bf266d3e272cae8d9bd93b6c88aa9d8ead3ec776d8c8d50a274d18d928_prof);

        
        $__internal_390baaa96a789b8388fd17bb5bd954f2b17eab6a13911cfb6701ee61b6187134->leave($__internal_390baaa96a789b8388fd17bb5bd954f2b17eab6a13911cfb6701ee61b6187134_prof);

    }

    public function getTemplateName()
    {
        return "absence/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  166 => 65,  150 => 57,  145 => 55,  136 => 49,  132 => 48,  127 => 46,  120 => 42,  112 => 37,  106 => 34,  99 => 30,  94 => 28,  88 => 25,  81 => 21,  76 => 19,  70 => 16,  62 => 11,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t{{'evaluation.add'|trans}}
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.eleve, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t{{ form_widget(form.eleve,{ 'id':'selectEleve', 'label_attr': {'class': 'form-control select'} }) }}
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t    {{ form_errors(form.eleve) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.type, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t{{ form_widget(form.type,{ 'id':'selectType', 'label_attr': {'class': 'form-control select'} }) }}
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t    {{ form_errors(form.type) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.date, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t {{ form_widget(form.date) }}
                                    <span class=\"input-group-addon\">
                                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
                                    </span>
                                </div>
\t\t\t\t  \t\t\t\t{{ form_errors(form.date) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.commentaire, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} })}}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t{{ form_widget(form.commentaire)  }}
\t\t\t\t  \t\t\t\t{{ form_errors(form.commentaire) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t\t<input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
</div>

{% endblock %}


{% block javascripts %}
\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('.dp-3').datepicker({startView: 2,format: 'yyyy-mm-dd' });
                \$('#selectEleve').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t \$('#selectType').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});

\t\t\t\t\$('.active').removeClass('active');
                \$('.abs').addClass('active');
            });
</script>
{% endblock %}", "absence/add.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/absence/add.html.twig");
    }
}
