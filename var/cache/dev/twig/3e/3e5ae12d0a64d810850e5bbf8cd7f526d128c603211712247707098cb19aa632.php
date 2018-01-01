<?php

/* :menusViews:addMenu.html.twig */
class __TwigTemplate_2afa05f17c000c2138c75e65e841c4354eaf7d0333099ac489598196ff382a01 extends Twig_Template
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
        $__internal_1b4b9b3b68876d1467d2381e66a343826f01288a88ada7ab54de41480de9c020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4b9b3b68876d1467d2381e66a343826f01288a88ada7ab54de41480de9c020->enter($__internal_1b4b9b3b68876d1467d2381e66a343826f01288a88ada7ab54de41480de9c020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:addMenu.html.twig"));

        $__internal_34af281024b39aaa9bebe1b00f0e9fe53c057849e4e0f86db1c19c9ed1cb8808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34af281024b39aaa9bebe1b00f0e9fe53c057849e4e0f86db1c19c9ed1cb8808->enter($__internal_34af281024b39aaa9bebe1b00f0e9fe53c057849e4e0f86db1c19c9ed1cb8808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:addMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b4b9b3b68876d1467d2381e66a343826f01288a88ada7ab54de41480de9c020->leave($__internal_1b4b9b3b68876d1467d2381e66a343826f01288a88ada7ab54de41480de9c020_prof);

        
        $__internal_34af281024b39aaa9bebe1b00f0e9fe53c057849e4e0f86db1c19c9ed1cb8808->leave($__internal_34af281024b39aaa9bebe1b00f0e9fe53c057849e4e0f86db1c19c9ed1cb8808_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_449dfbe59fef05cf74493a7f42198233bacdb1993dad8c8b4856b9c2686f0331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449dfbe59fef05cf74493a7f42198233bacdb1993dad8c8b4856b9c2686f0331->enter($__internal_449dfbe59fef05cf74493a7f42198233bacdb1993dad8c8b4856b9c2686f0331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f7c6b02abed6838b74e488cb0dcf5184b50f91aa7e65aba488c5631bf6aad88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7c6b02abed6838b74e488cb0dcf5184b50f91aa7e65aba488c5631bf6aad88->enter($__internal_3f7c6b02abed6838b74e488cb0dcf5184b50f91aa7e65aba488c5631bf6aad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f7c6b02abed6838b74e488cb0dcf5184b50f91aa7e65aba488c5631bf6aad88->leave($__internal_3f7c6b02abed6838b74e488cb0dcf5184b50f91aa7e65aba488c5631bf6aad88_prof);

        
        $__internal_449dfbe59fef05cf74493a7f42198233bacdb1993dad8c8b4856b9c2686f0331->leave($__internal_449dfbe59fef05cf74493a7f42198233bacdb1993dad8c8b4856b9c2686f0331_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26ca1910bf7c5dbc374db014fe05c22ed8cf0c931b451d666c3c2e1c57375b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ca1910bf7c5dbc374db014fe05c22ed8cf0c931b451d666c3c2e1c57375b2b->enter($__internal_26ca1910bf7c5dbc374db014fe05c22ed8cf0c931b451d666c3c2e1c57375b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_012b4310295b31ef1b238b937c916c08b5c33fb9b08b32a11d5fb60dd0b40cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012b4310295b31ef1b238b937c916c08b5c33fb9b08b32a11d5fb60dd0b40cc1->enter($__internal_012b4310295b31ef1b238b937c916c08b5c33fb9b08b32a11d5fb60dd0b40cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_012b4310295b31ef1b238b937c916c08b5c33fb9b08b32a11d5fb60dd0b40cc1->leave($__internal_012b4310295b31ef1b238b937c916c08b5c33fb9b08b32a11d5fb60dd0b40cc1_prof);

        
        $__internal_26ca1910bf7c5dbc374db014fe05c22ed8cf0c931b451d666c3c2e1c57375b2b->leave($__internal_26ca1910bf7c5dbc374db014fe05c22ed8cf0c931b451d666c3c2e1c57375b2b_prof);

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
    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.addMenu').addClass('active');
    </script>
{% endblock %}
", ":menusViews:addMenu.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/menusViews/addMenu.html.twig");
    }
}
