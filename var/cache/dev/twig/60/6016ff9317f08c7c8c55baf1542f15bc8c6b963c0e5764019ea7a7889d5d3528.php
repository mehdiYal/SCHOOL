<?php

/* :sallesViews:addSalle.html.twig */
class __TwigTemplate_85f4c1abee5f1261b3b3fae163566387a4158adb4bf5859e307a2497afd5059d extends Twig_Template
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
        $__internal_737ddb57ca06a78d4b4ab6fa4b0eef1debd0012e262f6405a3ceb84cba920628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737ddb57ca06a78d4b4ab6fa4b0eef1debd0012e262f6405a3ceb84cba920628->enter($__internal_737ddb57ca06a78d4b4ab6fa4b0eef1debd0012e262f6405a3ceb84cba920628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:addSalle.html.twig"));

        $__internal_de1fc35fe9705fc8a7059040c3992349df75beae016024911c13505dbe242bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1fc35fe9705fc8a7059040c3992349df75beae016024911c13505dbe242bb3->enter($__internal_de1fc35fe9705fc8a7059040c3992349df75beae016024911c13505dbe242bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:addSalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737ddb57ca06a78d4b4ab6fa4b0eef1debd0012e262f6405a3ceb84cba920628->leave($__internal_737ddb57ca06a78d4b4ab6fa4b0eef1debd0012e262f6405a3ceb84cba920628_prof);

        
        $__internal_de1fc35fe9705fc8a7059040c3992349df75beae016024911c13505dbe242bb3->leave($__internal_de1fc35fe9705fc8a7059040c3992349df75beae016024911c13505dbe242bb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_459d3425291d45da4263d08b08b40c7f0a01dd191d28e04955ba69daf6648624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459d3425291d45da4263d08b08b40c7f0a01dd191d28e04955ba69daf6648624->enter($__internal_459d3425291d45da4263d08b08b40c7f0a01dd191d28e04955ba69daf6648624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92e121804037b4d33d92c226ed7502e957ac3ebe1d0e6da8e4ce1a7ee24d670a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e121804037b4d33d92c226ed7502e957ac3ebe1d0e6da8e4ce1a7ee24d670a->enter($__internal_92e121804037b4d33d92c226ed7502e957ac3ebe1d0e6da8e4ce1a7ee24d670a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92e121804037b4d33d92c226ed7502e957ac3ebe1d0e6da8e4ce1a7ee24d670a->leave($__internal_92e121804037b4d33d92c226ed7502e957ac3ebe1d0e6da8e4ce1a7ee24d670a_prof);

        
        $__internal_459d3425291d45da4263d08b08b40c7f0a01dd191d28e04955ba69daf6648624->leave($__internal_459d3425291d45da4263d08b08b40c7f0a01dd191d28e04955ba69daf6648624_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_356180f408f7a85bcea887dc2a1b8be1b0a049de92bdc1b96e9b77b3e9d9c80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356180f408f7a85bcea887dc2a1b8be1b0a049de92bdc1b96e9b77b3e9d9c80b->enter($__internal_356180f408f7a85bcea887dc2a1b8be1b0a049de92bdc1b96e9b77b3e9d9c80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1463708b455e1a2c9ece76c48a8333bf1f39f5dfae198614caccf7362d301de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1463708b455e1a2c9ece76c48a8333bf1f39f5dfae198614caccf7362d301de4->enter($__internal_1463708b455e1a2c9ece76c48a8333bf1f39f5dfae198614caccf7362d301de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('.active').removeClass('active');
        \$('.salle').addClass('active');
        \$('.addSalle').addClass('active');
    </script>
";
        
        $__internal_1463708b455e1a2c9ece76c48a8333bf1f39f5dfae198614caccf7362d301de4->leave($__internal_1463708b455e1a2c9ece76c48a8333bf1f39f5dfae198614caccf7362d301de4_prof);

        
        $__internal_356180f408f7a85bcea887dc2a1b8be1b0a049de92bdc1b96e9b77b3e9d9c80b->leave($__internal_356180f408f7a85bcea887dc2a1b8be1b0a049de92bdc1b96e9b77b3e9d9c80b_prof);

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
    <script>
        \$('.active').removeClass('active');
        \$('.salle').addClass('active');
        \$('.addSalle').addClass('active');
    </script>
{% endblock%}
", ":sallesViews:addSalle.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/sallesViews/addSalle.html.twig");
    }
}
