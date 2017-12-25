<?php

/* :cours:edit.html.twig */
class __TwigTemplate_a0f8b7fe0beac1a621e981ceffbda876f485d20f1c79dd4243885d94f8638b04 extends Twig_Template
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
        $__internal_4f9240183846cdf49be05e09f43471492d0b76e90df968b5198a48980b1340b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9240183846cdf49be05e09f43471492d0b76e90df968b5198a48980b1340b4->enter($__internal_4f9240183846cdf49be05e09f43471492d0b76e90df968b5198a48980b1340b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cours:edit.html.twig"));

        $__internal_6c23bf4dc1dffeb2734d7b8a83402e256850394d9286b342189ea45fe0f6314e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c23bf4dc1dffeb2734d7b8a83402e256850394d9286b342189ea45fe0f6314e->enter($__internal_6c23bf4dc1dffeb2734d7b8a83402e256850394d9286b342189ea45fe0f6314e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cours:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f9240183846cdf49be05e09f43471492d0b76e90df968b5198a48980b1340b4->leave($__internal_4f9240183846cdf49be05e09f43471492d0b76e90df968b5198a48980b1340b4_prof);

        
        $__internal_6c23bf4dc1dffeb2734d7b8a83402e256850394d9286b342189ea45fe0f6314e->leave($__internal_6c23bf4dc1dffeb2734d7b8a83402e256850394d9286b342189ea45fe0f6314e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c3509a7303ff26eee17e490f30ade244ab9205e69c3c4fb7206ee7a039abbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3509a7303ff26eee17e490f30ade244ab9205e69c3c4fb7206ee7a039abbef->enter($__internal_9c3509a7303ff26eee17e490f30ade244ab9205e69c3c4fb7206ee7a039abbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d1beea24d77c7825ba8ba2733444d46d437a6748435754e44fd955ff7aaec59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1beea24d77c7825ba8ba2733444d46d437a6748435754e44fd955ff7aaec59->enter($__internal_6d1beea24d77c7825ba8ba2733444d46d437a6748435754e44fd955ff7aaec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d1beea24d77c7825ba8ba2733444d46d437a6748435754e44fd955ff7aaec59->leave($__internal_6d1beea24d77c7825ba8ba2733444d46d437a6748435754e44fd955ff7aaec59_prof);

        
        $__internal_9c3509a7303ff26eee17e490f30ade244ab9205e69c3c4fb7206ee7a039abbef->leave($__internal_9c3509a7303ff26eee17e490f30ade244ab9205e69c3c4fb7206ee7a039abbef_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1d08ef085dd8690a7560c1fa202bbd7a1f5bb1731f796d1356445470b492fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d08ef085dd8690a7560c1fa202bbd7a1f5bb1731f796d1356445470b492fee->enter($__internal_a1d08ef085dd8690a7560c1fa202bbd7a1f5bb1731f796d1356445470b492fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_783335bec33d32e0f3b2c3670d07ab82d33195908a46db68caa32d5a0b48012b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783335bec33d32e0f3b2c3670d07ab82d33195908a46db68caa32d5a0b48012b->enter($__internal_783335bec33d32e0f3b2c3670d07ab82d33195908a46db68caa32d5a0b48012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_783335bec33d32e0f3b2c3670d07ab82d33195908a46db68caa32d5a0b48012b->leave($__internal_783335bec33d32e0f3b2c3670d07ab82d33195908a46db68caa32d5a0b48012b_prof);

        
        $__internal_a1d08ef085dd8690a7560c1fa202bbd7a1f5bb1731f796d1356445470b492fee->leave($__internal_a1d08ef085dd8690a7560c1fa202bbd7a1f5bb1731f796d1356445470b492fee_prof);

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

{% endblock %}", ":cours:edit.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/cours/edit.html.twig");
    }
}
