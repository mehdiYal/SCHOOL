<?php

/* :cours:edit.html.twig */
class __TwigTemplate_d8f63a28acf8ccd447ce06f1eb11ca46652875af6dd61dc7ba8ac16f8464525a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":cours:edit.html.twig", 1);
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
        $__internal_b4aef5cfaa0daaa0d423fa90388d22c50be972b1e49263284eb462603c3c8d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4aef5cfaa0daaa0d423fa90388d22c50be972b1e49263284eb462603c3c8d3d->enter($__internal_b4aef5cfaa0daaa0d423fa90388d22c50be972b1e49263284eb462603c3c8d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cours:edit.html.twig"));

        $__internal_d9bcc69b0d349efe7bcd8538fac916331ad7755c4338af1e3d140fce971d83ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bcc69b0d349efe7bcd8538fac916331ad7755c4338af1e3d140fce971d83ca->enter($__internal_d9bcc69b0d349efe7bcd8538fac916331ad7755c4338af1e3d140fce971d83ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cours:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4aef5cfaa0daaa0d423fa90388d22c50be972b1e49263284eb462603c3c8d3d->leave($__internal_b4aef5cfaa0daaa0d423fa90388d22c50be972b1e49263284eb462603c3c8d3d_prof);

        
        $__internal_d9bcc69b0d349efe7bcd8538fac916331ad7755c4338af1e3d140fce971d83ca->leave($__internal_d9bcc69b0d349efe7bcd8538fac916331ad7755c4338af1e3d140fce971d83ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea5570a89fff2ba16bec33840d40b9ab9d91ec38a3ab6aff3118466e7c00a8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5570a89fff2ba16bec33840d40b9ab9d91ec38a3ab6aff3118466e7c00a8a0->enter($__internal_ea5570a89fff2ba16bec33840d40b9ab9d91ec38a3ab6aff3118466e7c00a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d53484e58bde648d96adac5a4ec49d65a592a3159df2408a2eeb70ba6b58287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d53484e58bde648d96adac5a4ec49d65a592a3159df2408a2eeb70ba6b58287->enter($__internal_5d53484e58bde648d96adac5a4ec49d65a592a3159df2408a2eeb70ba6b58287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                ";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")));
        }
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">  
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t  \t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t    \t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'errors');
        echo "
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "devoir", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                       \t<span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
                       \t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "devoir", array()), 'widget', array("label_attr" => array("class" => "fileinput")));
        echo "
\t\t\t\t  \t</a>
\t\t\t\t\t
\t\t    \t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "devoir", array()), 'errors');
        echo "
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "support", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                            <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "support", array()), 'widget', array("label_attr" => array("class" => "fileinput")));
        echo "
                        </a>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "support", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "annexe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t
\t\t\t\t\t  \t<a class=\"file-input-wrapper btn btn-default  fileinput\">
\t\t\t\t\t  \t\t<span>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
        echo "</span>
\t\t\t\t\t  \t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "annexe", array()), 'widget', array("label_attr" => array("class" => "fileinputForm")));
        echo "
\t\t\t\t\t  \t</a>                
\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "annexe", array()), 'errors');
        echo "
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t<input type=\"submit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.edit"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
\t\t\t</div>
\t";
        // line 62
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>

";
        
        $__internal_5d53484e58bde648d96adac5a4ec49d65a592a3159df2408a2eeb70ba6b58287->leave($__internal_5d53484e58bde648d96adac5a4ec49d65a592a3159df2408a2eeb70ba6b58287_prof);

        
        $__internal_ea5570a89fff2ba16bec33840d40b9ab9d91ec38a3ab6aff3118466e7c00a8a0->leave($__internal_ea5570a89fff2ba16bec33840d40b9ab9d91ec38a3ab6aff3118466e7c00a8a0_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc444c9737a5f0faae5db999b62a9781ba75c5ba8288ee94cfa18e1056449a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc444c9737a5f0faae5db999b62a9781ba75c5ba8288ee94cfa18e1056449a3d->enter($__internal_fc444c9737a5f0faae5db999b62a9781ba75c5ba8288ee94cfa18e1056449a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_618c234442be96a661d72f0e69f75246153a8417d7c51c197f6f93fa01a4a8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618c234442be96a661d72f0e69f75246153a8417d7c51c197f6f93fa01a4a8a2->enter($__internal_618c234442be96a661d72f0e69f75246153a8417d7c51c197f6f93fa01a4a8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "
<script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

  \$( document ).ready( function() {

//\$('#fileinputForm').fileinput();
            });
     
</script>

";
        
        $__internal_618c234442be96a661d72f0e69f75246153a8417d7c51c197f6f93fa01a4a8a2->leave($__internal_618c234442be96a661d72f0e69f75246153a8417d7c51c197f6f93fa01a4a8a2_prof);

        
        $__internal_fc444c9737a5f0faae5db999b62a9781ba75c5ba8288ee94cfa18e1056449a3d->leave($__internal_fc444c9737a5f0faae5db999b62a9781ba75c5ba8288ee94cfa18e1056449a3d_prof);

    }

    public function getTemplateName()
    {
        return ":cours:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 70,  192 => 69,  183 => 68,  169 => 62,  164 => 60,  156 => 55,  151 => 53,  147 => 52,  140 => 48,  133 => 44,  128 => 42,  124 => 41,  118 => 38,  111 => 34,  105 => 31,  101 => 30,  95 => 27,  88 => 23,  83 => 21,  76 => 17,  68 => 12,  61 => 8,  57 => 6,  54 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
                {% dump(edit_form) %}
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t{{ form_start(edit_form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t{{'evaluation.add'|trans}}
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(edit_form.titre,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t  \t\t\t{{ form_widget(edit_form.titre ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t</div>
\t\t    \t\t\t{{ form_errors(edit_form.titre) }}
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(edit_form.devoir,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                       \t<span>{{'global.parcourir'|trans}}</span>
                       \t{{ form_widget(edit_form.devoir,{ 'label_attr': {'class': 'fileinput'} } ) }}
\t\t\t\t  \t</a>
\t\t\t\t\t
\t\t    \t\t{{ form_errors(edit_form.devoir) }}
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(edit_form.support,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                            <span>{{'global.parcourir'|trans}}</span>
                            {{ form_widget(edit_form.support,{ 'label_attr': {'class': 'fileinput'} } ) }}
                        </a>
                        {{ form_errors(edit_form.support) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(edit_form.annexe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t
\t\t\t\t\t  \t<a class=\"file-input-wrapper btn btn-default  fileinput\">
\t\t\t\t\t  \t\t<span>{{'global.parcourir'|trans}}</span>
\t\t\t\t\t  \t\t{{ form_widget(edit_form.annexe,{ 'label_attr': {'class': 'fileinputForm'} } ) }}
\t\t\t\t\t  \t</a>                
\t\t\t\t\t\t{{ form_errors(edit_form.annexe) }}
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">                                    
\t\t\t\t<input type=\"submit\" value=\"{{'global.edit'|trans}}\" class=\"btn btn-primary pull-right\" />
\t\t\t</div>
\t{{ form_end(edit_form) }}
</div>

{% endblock %}


{% block javascripts %}

<script type=\"text/javascript\" src=\"{{asset('js/plugins/bootstrap/bootstrap-file-input.js')}}\"></script>
<script type=\"text/javascript\">

  \$( document ).ready( function() {

//\$('#fileinputForm').fileinput();
            });
     
</script>

{% endblock %}", ":cours:edit.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/cours/edit.html.twig");
    }
}
