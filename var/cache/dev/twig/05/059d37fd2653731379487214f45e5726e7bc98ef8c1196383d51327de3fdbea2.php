<?php

/* :menusViews:addMenu.html.twig */
class __TwigTemplate_e15d38102b29f3c80701df7fef9464b2304aa93c3b808a047768c47b9c4617d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":menusViews:addMenu.html.twig", 1);
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
        $__internal_da30f972ffa4b02a923df6829a5b859c04eba86032f5ddc91a086db8775a17ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da30f972ffa4b02a923df6829a5b859c04eba86032f5ddc91a086db8775a17ed->enter($__internal_da30f972ffa4b02a923df6829a5b859c04eba86032f5ddc91a086db8775a17ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:addMenu.html.twig"));

        $__internal_9e1e822d9b525a543348e1defd866059e35fac18881ff17c400179b1ef5fbe84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1e822d9b525a543348e1defd866059e35fac18881ff17c400179b1ef5fbe84->enter($__internal_9e1e822d9b525a543348e1defd866059e35fac18881ff17c400179b1ef5fbe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:addMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da30f972ffa4b02a923df6829a5b859c04eba86032f5ddc91a086db8775a17ed->leave($__internal_da30f972ffa4b02a923df6829a5b859c04eba86032f5ddc91a086db8775a17ed_prof);

        
        $__internal_9e1e822d9b525a543348e1defd866059e35fac18881ff17c400179b1ef5fbe84->leave($__internal_9e1e822d9b525a543348e1defd866059e35fac18881ff17c400179b1ef5fbe84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9fb202501f52a4afcefec5ba88a48dfd8f6f648047df3dd1bf3fcb2ae6d3e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9fb202501f52a4afcefec5ba88a48dfd8f6f648047df3dd1bf3fcb2ae6d3e20->enter($__internal_f9fb202501f52a4afcefec5ba88a48dfd8f6f648047df3dd1bf3fcb2ae6d3e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_317a15404715e4723565ffe27389165769c9e5b955a49506612e99478535ced7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317a15404715e4723565ffe27389165769c9e5b955a49506612e99478535ced7->enter($__internal_317a15404715e4723565ffe27389165769c9e5b955a49506612e99478535ced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_317a15404715e4723565ffe27389165769c9e5b955a49506612e99478535ced7->leave($__internal_317a15404715e4723565ffe27389165769c9e5b955a49506612e99478535ced7_prof);

        
        $__internal_f9fb202501f52a4afcefec5ba88a48dfd8f6f648047df3dd1bf3fcb2ae6d3e20->leave($__internal_f9fb202501f52a4afcefec5ba88a48dfd8f6f648047df3dd1bf3fcb2ae6d3e20_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f418f52bf8108117c6186963ea92afd467c72e8650b753ab5a6e10c4fd1d16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f418f52bf8108117c6186963ea92afd467c72e8650b753ab5a6e10c4fd1d16e->enter($__internal_3f418f52bf8108117c6186963ea92afd467c72e8650b753ab5a6e10c4fd1d16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d959d489a5b0ebecfa82a6d405c1349a1243b71e77645b7d83f27134aba17169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d959d489a5b0ebecfa82a6d405c1349a1243b71e77645b7d83f27134aba17169->enter($__internal_d959d489a5b0ebecfa82a6d405c1349a1243b71e77645b7d83f27134aba17169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d959d489a5b0ebecfa82a6d405c1349a1243b71e77645b7d83f27134aba17169->leave($__internal_d959d489a5b0ebecfa82a6d405c1349a1243b71e77645b7d83f27134aba17169_prof);

        
        $__internal_3f418f52bf8108117c6186963ea92afd467c72e8650b753ab5a6e10c4fd1d16e->leave($__internal_3f418f52bf8108117c6186963ea92afd467c72e8650b753ab5a6e10c4fd1d16e_prof);

    }

    public function getTemplateName()
    {
        return ":menusViews:addMenu.html.twig";
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
{% endblock %}
", ":menusViews:addMenu.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/menusViews/addMenu.html.twig");
    }
}
