<?php

/* :absence:add.html.twig */
class __TwigTemplate_e86a0207eda5179d143a62ec51901638d90d2a4ad50adedcab34930ba3453dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":absence:add.html.twig", 1);
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
        $__internal_aafb45a1f131862d617f99e27bcb8a7a2da939cf121f4854d29cd6d64da3a0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafb45a1f131862d617f99e27bcb8a7a2da939cf121f4854d29cd6d64da3a0e2->enter($__internal_aafb45a1f131862d617f99e27bcb8a7a2da939cf121f4854d29cd6d64da3a0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:add.html.twig"));

        $__internal_13444306c8b7ed672839962baf4424be2e7a460ed8c8b81bbfe79a9c2a3dff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13444306c8b7ed672839962baf4424be2e7a460ed8c8b81bbfe79a9c2a3dff4c->enter($__internal_13444306c8b7ed672839962baf4424be2e7a460ed8c8b81bbfe79a9c2a3dff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aafb45a1f131862d617f99e27bcb8a7a2da939cf121f4854d29cd6d64da3a0e2->leave($__internal_aafb45a1f131862d617f99e27bcb8a7a2da939cf121f4854d29cd6d64da3a0e2_prof);

        
        $__internal_13444306c8b7ed672839962baf4424be2e7a460ed8c8b81bbfe79a9c2a3dff4c->leave($__internal_13444306c8b7ed672839962baf4424be2e7a460ed8c8b81bbfe79a9c2a3dff4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b739141cd6346cf41f8c40026b230585b3996b1a45891801b83dbf27eab05e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b739141cd6346cf41f8c40026b230585b3996b1a45891801b83dbf27eab05e23->enter($__internal_b739141cd6346cf41f8c40026b230585b3996b1a45891801b83dbf27eab05e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a33475dec495ce0f2688b73f06ca535ea50d38329877418f006f793271f7675a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33475dec495ce0f2688b73f06ca535ea50d38329877418f006f793271f7675a->enter($__internal_a33475dec495ce0f2688b73f06ca535ea50d38329877418f006f793271f7675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
    <div class=\"row\">
        <div class=\"col-md-12\">  
\t\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'widget', array("id" => "selectEleve", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eleve", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("id" => "selectType", "label_attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\">
                                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
                                    </span>
                                </div>
\t\t\t\t  \t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>

";
        
        $__internal_a33475dec495ce0f2688b73f06ca535ea50d38329877418f006f793271f7675a->leave($__internal_a33475dec495ce0f2688b73f06ca535ea50d38329877418f006f793271f7675a_prof);

        
        $__internal_b739141cd6346cf41f8c40026b230585b3996b1a45891801b83dbf27eab05e23->leave($__internal_b739141cd6346cf41f8c40026b230585b3996b1a45891801b83dbf27eab05e23_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a7e366e5714db3b213791eaaf476babf3471c041f4afb5fd3755329642301d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7e366e5714db3b213791eaaf476babf3471c041f4afb5fd3755329642301d4->enter($__internal_3a7e366e5714db3b213791eaaf476babf3471c041f4afb5fd3755329642301d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ffcf5e86eeb267659241d648d113707ba87ff72d2583e24e0d17f535e9a81fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcf5e86eeb267659241d648d113707ba87ff72d2583e24e0d17f535e9a81fe0->enter($__internal_ffcf5e86eeb267659241d648d113707ba87ff72d2583e24e0d17f535e9a81fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ffcf5e86eeb267659241d648d113707ba87ff72d2583e24e0d17f535e9a81fe0->leave($__internal_ffcf5e86eeb267659241d648d113707ba87ff72d2583e24e0d17f535e9a81fe0_prof);

        
        $__internal_3a7e366e5714db3b213791eaaf476babf3471c041f4afb5fd3755329642301d4->leave($__internal_3a7e366e5714db3b213791eaaf476babf3471c041f4afb5fd3755329642301d4_prof);

    }

    public function getTemplateName()
    {
        return ":absence:add.html.twig";
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
{% endblock %}", ":absence:add.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/absence/add.html.twig");
    }
}
