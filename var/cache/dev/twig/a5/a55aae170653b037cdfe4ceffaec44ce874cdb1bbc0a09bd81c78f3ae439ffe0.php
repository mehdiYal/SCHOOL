<?php

/* :cours:add.html.twig */
class __TwigTemplate_b866bdee9e10510816c6aec7400c1cd09bb895cd0d293fd4ecf7b9c49be4b34a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":cours:add.html.twig", 1);
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
        $__internal_1dd508dfde755a3f3f292f5375f6fd282caca4b99f6995c2acb3dda13a23c104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd508dfde755a3f3f292f5375f6fd282caca4b99f6995c2acb3dda13a23c104->enter($__internal_1dd508dfde755a3f3f292f5375f6fd282caca4b99f6995c2acb3dda13a23c104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cours:add.html.twig"));

        $__internal_fd4388a657b919be2fbb8fc6e2712b0af19d612e38ad5ff4d7b0d2187175c0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4388a657b919be2fbb8fc6e2712b0af19d612e38ad5ff4d7b0d2187175c0f2->enter($__internal_fd4388a657b919be2fbb8fc6e2712b0af19d612e38ad5ff4d7b0d2187175c0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd508dfde755a3f3f292f5375f6fd282caca4b99f6995c2acb3dda13a23c104->leave($__internal_1dd508dfde755a3f3f292f5375f6fd282caca4b99f6995c2acb3dda13a23c104_prof);

        
        $__internal_fd4388a657b919be2fbb8fc6e2712b0af19d612e38ad5ff4d7b0d2187175c0f2->leave($__internal_fd4388a657b919be2fbb8fc6e2712b0af19d612e38ad5ff4d7b0d2187175c0f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6f480bf0ee4f57215d5889ded0c00afa6a04bd7be1f18efbb4a7fc3d5700ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f480bf0ee4f57215d5889ded0c00afa6a04bd7be1f18efbb4a7fc3d5700ff2->enter($__internal_e6f480bf0ee4f57215d5889ded0c00afa6a04bd7be1f18efbb4a7fc3d5700ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_479c219ab94beafaa29013fede40700b233bbc6cdc472cab9ffe258f964457c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479c219ab94beafaa29013fede40700b233bbc6cdc472cab9ffe258f964457c6->enter($__internal_479c219ab94beafaa29013fede40700b233bbc6cdc472cab9ffe258f964457c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">  
        
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t  \t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t    \t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
\t\t    \t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "devoir", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t                       \t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "devoir", array()), 'widget', array("attr" => array("class" => "fileinput btn-primary")));
        echo "
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "devoir", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "support", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t                       \t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "support", array()), 'widget', array("attr" => array("class" => "fileinput btn-primary")));
        echo "
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "support", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annexe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t                       \t";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annexe", array()), 'widget', array("attr" => array("class" => "fileinput btn-primary")));
        echo "
\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annexe", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["idClasse"]) ? $context["idClasse"] : $this->getContext($context, "idClasse")), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"idMatiere\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["idMatiere"]) ? $context["idMatiere"] : $this->getContext($context, "idMatiere")), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t<input type=\"submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t</div>
\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>

";
        
        $__internal_479c219ab94beafaa29013fede40700b233bbc6cdc472cab9ffe258f964457c6->leave($__internal_479c219ab94beafaa29013fede40700b233bbc6cdc472cab9ffe258f964457c6_prof);

        
        $__internal_e6f480bf0ee4f57215d5889ded0c00afa6a04bd7be1f18efbb4a7fc3d5700ff2->leave($__internal_e6f480bf0ee4f57215d5889ded0c00afa6a04bd7be1f18efbb4a7fc3d5700ff2_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0d1733abec8b241dbce675c88ff13201fe9be188633d251d8ed85bf722d8989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d1733abec8b241dbce675c88ff13201fe9be188633d251d8ed85bf722d8989->enter($__internal_f0d1733abec8b241dbce675c88ff13201fe9be188633d251d8ed85bf722d8989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f19421220faba297745047923a1cb2ff6280868c1150d274944e0cf39fa871aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19421220faba297745047923a1cb2ff6280868c1150d274944e0cf39fa871aa->enter($__internal_f19421220faba297745047923a1cb2ff6280868c1150d274944e0cf39fa871aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "
<script type='text/javascript' src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

  \$( document ).ready( function() {

//\$('#fileinputForm').fileinput();
            });
     
</script>

";
        
        $__internal_f19421220faba297745047923a1cb2ff6280868c1150d274944e0cf39fa871aa->leave($__internal_f19421220faba297745047923a1cb2ff6280868c1150d274944e0cf39fa871aa_prof);

        
        $__internal_f0d1733abec8b241dbce675c88ff13201fe9be188633d251d8ed85bf722d8989->leave($__internal_f0d1733abec8b241dbce675c88ff13201fe9be188633d251d8ed85bf722d8989_prof);

    }

    public function getTemplateName()
    {
        return ":cours:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 68,  183 => 66,  180 => 65,  171 => 64,  156 => 57,  151 => 55,  145 => 52,  141 => 51,  135 => 48,  131 => 47,  126 => 45,  118 => 40,  114 => 39,  109 => 37,  101 => 32,  97 => 31,  92 => 29,  84 => 24,  79 => 22,  72 => 18,  64 => 13,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t{{'evaluation.add'|trans}}
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.titre,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t  \t\t\t{{ form_widget(form.titre ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t</div>
\t\t    \t\t\t{{ form_errors(form.titre) }}
\t\t    \t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.devoir,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t                       \t{{ form_widget(form.devoir,{ 'attr': {'class': 'fileinput btn-primary'} } ) }}
\t\t\t\t\t\t{{ form_errors(form.devoir) }}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.support,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t                       \t{{ form_widget(form.support,{ 'attr': {'class': 'fileinput btn-primary'} } ) }}
\t\t\t\t\t\t{{ form_errors(form.support) }}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.annexe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t                       \t{{ form_widget(form.annexe,{ 'attr': {'class': 'fileinput btn-primary'} } ) }}
\t\t\t\t\t\t{{ form_errors(form.annexe) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"{{idClasse}}\">
\t\t\t\t<input type=\"hidden\" name=\"idMatiere\" value=\"{{idMatiere}}\">
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t<input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t\t</div>
\t{{ form_end(form) }}

</div>

{% endblock %}


{% block javascripts %}

<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-file-input.js') }}\"></script>

<script type=\"text/javascript\" src=\"{{asset('js/plugins/bootstrap/bootstrap-file-input.js')}}\"></script>
<script type=\"text/javascript\">

  \$( document ).ready( function() {

//\$('#fileinputForm').fileinput();
            });
     
</script>

{% endblock %}", ":cours:add.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/cours/add.html.twig");
    }
}
