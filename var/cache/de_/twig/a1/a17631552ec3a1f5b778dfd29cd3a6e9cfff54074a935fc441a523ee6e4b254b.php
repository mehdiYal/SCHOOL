<?php

/* menusViews/addMenu.html.twig */
class __TwigTemplate_cd852769c3217f3f740ffa22671f7cc5d679be2c58dcb71d5881d2d54da6c666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "menusViews/addMenu.html.twig", 1);
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
        $__internal_d48d56734b9f64b0cf018920809841bef410240ef15602d7b823a092f5ddf04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48d56734b9f64b0cf018920809841bef410240ef15602d7b823a092f5ddf04b->enter($__internal_d48d56734b9f64b0cf018920809841bef410240ef15602d7b823a092f5ddf04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/addMenu.html.twig"));

        $__internal_6a9edf8e7ca18dc6a1abd0c7c7661cb1ec8c95ba3a2571e09263149096204574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9edf8e7ca18dc6a1abd0c7c7661cb1ec8c95ba3a2571e09263149096204574->enter($__internal_6a9edf8e7ca18dc6a1abd0c7c7661cb1ec8c95ba3a2571e09263149096204574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/addMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48d56734b9f64b0cf018920809841bef410240ef15602d7b823a092f5ddf04b->leave($__internal_d48d56734b9f64b0cf018920809841bef410240ef15602d7b823a092f5ddf04b_prof);

        
        $__internal_6a9edf8e7ca18dc6a1abd0c7c7661cb1ec8c95ba3a2571e09263149096204574->leave($__internal_6a9edf8e7ca18dc6a1abd0c7c7661cb1ec8c95ba3a2571e09263149096204574_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e46b3215e9c1d28fc222248374e31d47a79c6f7681d35cfab144c0adcfd6f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e46b3215e9c1d28fc222248374e31d47a79c6f7681d35cfab144c0adcfd6f23->enter($__internal_6e46b3215e9c1d28fc222248374e31d47a79c6f7681d35cfab144c0adcfd6f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c795f52d095fe4d58d3ae1b62ac4309c9873b0497d5e8e7f28ee4f5fc67944d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c795f52d095fe4d58d3ae1b62ac4309c9873b0497d5e8e7f28ee4f5fc67944d2->enter($__internal_c795f52d095fe4d58d3ae1b62ac4309c9873b0497d5e8e7f28ee4f5fc67944d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu"), "html", null, true);
        echo "</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'widget', array("attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t\t    \t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t        <div class=\"panel-footer\">                                    
\t\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t    </div>                     
\t</div>
";
        
        $__internal_c795f52d095fe4d58d3ae1b62ac4309c9873b0497d5e8e7f28ee4f5fc67944d2->leave($__internal_c795f52d095fe4d58d3ae1b62ac4309c9873b0497d5e8e7f28ee4f5fc67944d2_prof);

        
        $__internal_6e46b3215e9c1d28fc222248374e31d47a79c6f7681d35cfab144c0adcfd6f23->leave($__internal_6e46b3215e9c1d28fc222248374e31d47a79c6f7681d35cfab144c0adcfd6f23_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c415e9fe5268f82af3e04385f901a6bbf06d63b1be83be355f029918f3375d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c415e9fe5268f82af3e04385f901a6bbf06d63b1be83be355f029918f3375d73->enter($__internal_c415e9fe5268f82af3e04385f901a6bbf06d63b1be83be355f029918f3375d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc053898e81ca6602e5d0b5cd01ce3021e9361b8c7fd5685f8b49beae543da18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc053898e81ca6602e5d0b5cd01ce3021e9361b8c7fd5685f8b49beae543da18->enter($__internal_dc053898e81ca6602e5d0b5cd01ce3021e9361b8c7fd5685f8b49beae543da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.addMenu').addClass('active');
    </script>
";
        
        $__internal_dc053898e81ca6602e5d0b5cd01ce3021e9361b8c7fd5685f8b49beae543da18->leave($__internal_dc053898e81ca6602e5d0b5cd01ce3021e9361b8c7fd5685f8b49beae543da18_prof);

        
        $__internal_c415e9fe5268f82af3e04385f901a6bbf06d63b1be83be355f029918f3375d73->leave($__internal_c415e9fe5268f82af3e04385f901a6bbf06d63b1be83be355f029918f3375d73_prof);

    }

    public function getTemplateName()
    {
        return "menusViews/addMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  128 => 42,  113 => 35,  102 => 27,  98 => 26,  93 => 24,  85 => 19,  81 => 18,  76 => 16,  62 => 11,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t                <h3 class=\"panel-title\"><strong>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} </strong> {{'menu'|trans}}</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.jour , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.jour ,{ 'attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.jour) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.menu , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.menu ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.menu) }}
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
    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.addMenu').addClass('active');
    </script>
{% endblock %}
", "menusViews/addMenu.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\menusViews\\addMenu.html.twig");
    }
}
