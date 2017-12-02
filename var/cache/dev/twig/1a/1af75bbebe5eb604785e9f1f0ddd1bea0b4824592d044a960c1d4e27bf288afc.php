<?php

/* :sallesViews:addSalle.html.twig */
class __TwigTemplate_fc3ba78cd65aa1f41957eaaf90423bf6143b03da533498f675b3bd7f7acb6225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":sallesViews:addSalle.html.twig", 1);
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
        $__internal_d1cbd8b3409ec8ce2943280c1f7b8506c6e744b5d2398bc9ed5630f574e739aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cbd8b3409ec8ce2943280c1f7b8506c6e744b5d2398bc9ed5630f574e739aa->enter($__internal_d1cbd8b3409ec8ce2943280c1f7b8506c6e744b5d2398bc9ed5630f574e739aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:addSalle.html.twig"));

        $__internal_f7adae884091c571c1a202c80e6e9f46eb674ee1150eeba165c08591d344cc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7adae884091c571c1a202c80e6e9f46eb674ee1150eeba165c08591d344cc4c->enter($__internal_f7adae884091c571c1a202c80e6e9f46eb674ee1150eeba165c08591d344cc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:addSalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1cbd8b3409ec8ce2943280c1f7b8506c6e744b5d2398bc9ed5630f574e739aa->leave($__internal_d1cbd8b3409ec8ce2943280c1f7b8506c6e744b5d2398bc9ed5630f574e739aa_prof);

        
        $__internal_f7adae884091c571c1a202c80e6e9f46eb674ee1150eeba165c08591d344cc4c->leave($__internal_f7adae884091c571c1a202c80e6e9f46eb674ee1150eeba165c08591d344cc4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eb495fe3a3021c2ba5e58adb2a8dd616d39090450e3a07bc8df76546237577b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb495fe3a3021c2ba5e58adb2a8dd616d39090450e3a07bc8df76546237577b->enter($__internal_2eb495fe3a3021c2ba5e58adb2a8dd616d39090450e3a07bc8df76546237577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53d758c938c61d65aa2bfbdbb826eeacce51589d9dbdcc7713387ec859881f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d758c938c61d65aa2bfbdbb826eeacce51589d9dbdcc7713387ec859881f0b->enter($__internal_53d758c938c61d65aa2bfbdbb826eeacce51589d9dbdcc7713387ec859881f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salle"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipement", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipement", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t        <div class=\"panel-footer\">                                    
\t\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t    </div>                     
\t</div>
";
        
        $__internal_53d758c938c61d65aa2bfbdbb826eeacce51589d9dbdcc7713387ec859881f0b->leave($__internal_53d758c938c61d65aa2bfbdbb826eeacce51589d9dbdcc7713387ec859881f0b_prof);

        
        $__internal_2eb495fe3a3021c2ba5e58adb2a8dd616d39090450e3a07bc8df76546237577b->leave($__internal_2eb495fe3a3021c2ba5e58adb2a8dd616d39090450e3a07bc8df76546237577b_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80d1567875c028614529c2e49b2a76d9484c8eaafc34c6165a81345564cb9944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d1567875c028614529c2e49b2a76d9484c8eaafc34c6165a81345564cb9944->enter($__internal_80d1567875c028614529c2e49b2a76d9484c8eaafc34c6165a81345564cb9944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_62b023077c190589ed145bbd1c83b09a4bd1ae6198a568346bdb7a80414a3c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b023077c190589ed145bbd1c83b09a4bd1ae6198a568346bdb7a80414a3c8c->enter($__internal_62b023077c190589ed145bbd1c83b09a4bd1ae6198a568346bdb7a80414a3c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_62b023077c190589ed145bbd1c83b09a4bd1ae6198a568346bdb7a80414a3c8c->leave($__internal_62b023077c190589ed145bbd1c83b09a4bd1ae6198a568346bdb7a80414a3c8c_prof);

        
        $__internal_80d1567875c028614529c2e49b2a76d9484c8eaafc34c6165a81345564cb9944->leave($__internal_80d1567875c028614529c2e49b2a76d9484c8eaafc34c6165a81345564cb9944_prof);

    }

    public function getTemplateName()
    {
        return ":sallesViews:addSalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 56,  150 => 55,  135 => 48,  124 => 40,  120 => 39,  115 => 37,  107 => 32,  102 => 30,  95 => 26,  87 => 21,  82 => 19,  75 => 15,  62 => 11,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\"><strong>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} </strong> {{'salle'|trans}}</h3>
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
\t\t\t\t\t\t\t{{ form_label(form.capacite , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t\t{{ form_widget(form.capacite ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t{{ form_errors(form.capacite) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.equipement , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.equipement ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.equipement) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t        <div class=\"panel-footer\">                                    
\t\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t    </div>                     
\t</div>
{% endblock %}


{% block javascripts %}
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
{% endblock %}
", ":sallesViews:addSalle.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/sallesViews/addSalle.html.twig");
    }
}
