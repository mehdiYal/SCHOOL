<?php

/* :classesViews:addClasse.html.twig */
class __TwigTemplate_467d40015ecfd597b87ab43cd03230b849d1edde89d2d1ebca5d2d77a6f6d728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":classesViews:addClasse.html.twig", 1);
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
        $__internal_8b19ca7b7e1e6294c41b939bdb221cb45e6befb5fe25375a27c757940e155525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b19ca7b7e1e6294c41b939bdb221cb45e6befb5fe25375a27c757940e155525->enter($__internal_8b19ca7b7e1e6294c41b939bdb221cb45e6befb5fe25375a27c757940e155525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:addClasse.html.twig"));

        $__internal_530fb5679d4f7d26839fac131edc08bf64649525fc15bbd17c5148fbd94dc071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530fb5679d4f7d26839fac131edc08bf64649525fc15bbd17c5148fbd94dc071->enter($__internal_530fb5679d4f7d26839fac131edc08bf64649525fc15bbd17c5148fbd94dc071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:addClasse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b19ca7b7e1e6294c41b939bdb221cb45e6befb5fe25375a27c757940e155525->leave($__internal_8b19ca7b7e1e6294c41b939bdb221cb45e6befb5fe25375a27c757940e155525_prof);

        
        $__internal_530fb5679d4f7d26839fac131edc08bf64649525fc15bbd17c5148fbd94dc071->leave($__internal_530fb5679d4f7d26839fac131edc08bf64649525fc15bbd17c5148fbd94dc071_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0622c9473649a67b307a1fd1bb697eab6647785ad22daeef49a89b174ae179a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0622c9473649a67b307a1fd1bb697eab6647785ad22daeef49a89b174ae179a1->enter($__internal_0622c9473649a67b307a1fd1bb697eab6647785ad22daeef49a89b174ae179a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e737c8cef3a5d67a96c40df3ffd33e8e1cafbd1be3238f37f9ee98654c3b19bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e737c8cef3a5d67a96c40df3ffd33e8e1cafbd1be3238f37f9ee98654c3b19bc->enter($__internal_e737c8cef3a5d67a96c40df3ffd33e8e1cafbd1be3238f37f9ee98654c3b19bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t\t    \t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsable", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsable", array()), 'widget', array("attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t\t    \t";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsable", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t        <div class=\"panel-footer\">                                    
\t\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t    </div>                     
\t</div>
";
        
        $__internal_e737c8cef3a5d67a96c40df3ffd33e8e1cafbd1be3238f37f9ee98654c3b19bc->leave($__internal_e737c8cef3a5d67a96c40df3ffd33e8e1cafbd1be3238f37f9ee98654c3b19bc_prof);

        
        $__internal_0622c9473649a67b307a1fd1bb697eab6647785ad22daeef49a89b174ae179a1->leave($__internal_0622c9473649a67b307a1fd1bb697eab6647785ad22daeef49a89b174ae179a1_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3857b232e0f1dca3752d5f05d8e3690a4443d6d5bd0cf1da895734a4193e3575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3857b232e0f1dca3752d5f05d8e3690a4443d6d5bd0cf1da895734a4193e3575->enter($__internal_3857b232e0f1dca3752d5f05d8e3690a4443d6d5bd0cf1da895734a4193e3575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_64e0c97464d49551bfae378835992546a84ab9fd6441187658f26f858f4bb864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e0c97464d49551bfae378835992546a84ab9fd6441187658f26f858f4bb864->enter($__internal_64e0c97464d49551bfae378835992546a84ab9fd6441187658f26f858f4bb864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('.active').removeClass('active');
        \$('.classe').addClass('active');
        \$('.addCl').addClass('active');
    </script>
";
        
        $__internal_64e0c97464d49551bfae378835992546a84ab9fd6441187658f26f858f4bb864->leave($__internal_64e0c97464d49551bfae378835992546a84ab9fd6441187658f26f858f4bb864_prof);

        
        $__internal_3857b232e0f1dca3752d5f05d8e3690a4443d6d5bd0cf1da895734a4193e3575->leave($__internal_3857b232e0f1dca3752d5f05d8e3690a4443d6d5bd0cf1da895734a4193e3575_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:addClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 61,  164 => 60,  149 => 53,  138 => 45,  134 => 44,  129 => 42,  121 => 37,  117 => 36,  112 => 34,  104 => 29,  100 => 28,  95 => 26,  87 => 21,  82 => 19,  75 => 15,  62 => 11,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t                <h3 class=\"panel-title\"><strong>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} </strong> {{'classe'|trans}}</h3>
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
\t\t\t\t\t\t\t{{ form_label(form.annee , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.annee ,{ 'attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.annee) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.description , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.description ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.description) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.responsable , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t{{ form_widget(form.responsable ,{ 'attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t\t    \t{{ form_errors(form.responsable) }}
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
        \$('.classe').addClass('active');
        \$('.addCl').addClass('active');
    </script>
{% endblock %}

", ":classesViews:addClasse.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/addClasse.html.twig");
    }
}
