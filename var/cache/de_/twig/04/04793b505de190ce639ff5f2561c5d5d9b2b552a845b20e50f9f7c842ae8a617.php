<?php

/* :cours:add.html.twig */
class __TwigTemplate_1623ba009fb9828928472290b8e105b54b3692071891bb11f1ba57fc13ff23e3 extends Twig_Template
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
        $__internal_137d018d8a429114e7a0c1aaede942caa383a915bffe650155e8920f8cd83b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137d018d8a429114e7a0c1aaede942caa383a915bffe650155e8920f8cd83b6d->enter($__internal_137d018d8a429114e7a0c1aaede942caa383a915bffe650155e8920f8cd83b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cours:add.html.twig"));

        $__internal_573d665f1ff9cce112201ec0dd41cf3958bae4d6267572a66b0dedebb593718a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573d665f1ff9cce112201ec0dd41cf3958bae4d6267572a66b0dedebb593718a->enter($__internal_573d665f1ff9cce112201ec0dd41cf3958bae4d6267572a66b0dedebb593718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137d018d8a429114e7a0c1aaede942caa383a915bffe650155e8920f8cd83b6d->leave($__internal_137d018d8a429114e7a0c1aaede942caa383a915bffe650155e8920f8cd83b6d_prof);

        
        $__internal_573d665f1ff9cce112201ec0dd41cf3958bae4d6267572a66b0dedebb593718a->leave($__internal_573d665f1ff9cce112201ec0dd41cf3958bae4d6267572a66b0dedebb593718a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32b821ced31bfb4d17a6ab41ed1c2cdb70340882f9d926e2b685463853cc9dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b821ced31bfb4d17a6ab41ed1c2cdb70340882f9d926e2b685463853cc9dac->enter($__internal_32b821ced31bfb4d17a6ab41ed1c2cdb70340882f9d926e2b685463853cc9dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_482f5c52fcebb69542d5603c193863ac9b78b492482205c1cd468b9f638f5b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482f5c52fcebb69542d5603c193863ac9b78b492482205c1cd468b9f638f5b79->enter($__internal_482f5c52fcebb69542d5603c193863ac9b78b492482205c1cd468b9f638f5b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_482f5c52fcebb69542d5603c193863ac9b78b492482205c1cd468b9f638f5b79->leave($__internal_482f5c52fcebb69542d5603c193863ac9b78b492482205c1cd468b9f638f5b79_prof);

        
        $__internal_32b821ced31bfb4d17a6ab41ed1c2cdb70340882f9d926e2b685463853cc9dac->leave($__internal_32b821ced31bfb4d17a6ab41ed1c2cdb70340882f9d926e2b685463853cc9dac_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbdfe0700f969da947a2e98a4e3b03b96b264db1d30adee5c94c1b105494bb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdfe0700f969da947a2e98a4e3b03b96b264db1d30adee5c94c1b105494bb92->enter($__internal_dbdfe0700f969da947a2e98a4e3b03b96b264db1d30adee5c94c1b105494bb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_34cea9d690b5d7be79303ea4451e177251ed1b5bff4ad2772ad3003087b4afc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34cea9d690b5d7be79303ea4451e177251ed1b5bff4ad2772ad3003087b4afc4->enter($__internal_34cea9d690b5d7be79303ea4451e177251ed1b5bff4ad2772ad3003087b4afc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_34cea9d690b5d7be79303ea4451e177251ed1b5bff4ad2772ad3003087b4afc4->leave($__internal_34cea9d690b5d7be79303ea4451e177251ed1b5bff4ad2772ad3003087b4afc4_prof);

        
        $__internal_dbdfe0700f969da947a2e98a4e3b03b96b264db1d30adee5c94c1b105494bb92->leave($__internal_dbdfe0700f969da947a2e98a4e3b03b96b264db1d30adee5c94c1b105494bb92_prof);

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

{% endblock %}", ":cours:add.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/cours/add.html.twig");
    }
}
