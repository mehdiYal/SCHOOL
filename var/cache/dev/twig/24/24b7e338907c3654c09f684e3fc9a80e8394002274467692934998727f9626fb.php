<?php

/* menusViews/addMenu.html.twig */
class __TwigTemplate_8b5d7c301f00acbb19ff26e5e9032f09b05b79a0bac0433f161f3dab45046f24 extends Twig_Template
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
        $__internal_7c717df9062218bbba88b05bc765e5ae320036e552709770bc226910e08dd387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c717df9062218bbba88b05bc765e5ae320036e552709770bc226910e08dd387->enter($__internal_7c717df9062218bbba88b05bc765e5ae320036e552709770bc226910e08dd387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/addMenu.html.twig"));

        $__internal_1007b98e4170848a084ce6582b4c701e31085ea224fa8104476cd76d9360d589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1007b98e4170848a084ce6582b4c701e31085ea224fa8104476cd76d9360d589->enter($__internal_1007b98e4170848a084ce6582b4c701e31085ea224fa8104476cd76d9360d589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/addMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c717df9062218bbba88b05bc765e5ae320036e552709770bc226910e08dd387->leave($__internal_7c717df9062218bbba88b05bc765e5ae320036e552709770bc226910e08dd387_prof);

        
        $__internal_1007b98e4170848a084ce6582b4c701e31085ea224fa8104476cd76d9360d589->leave($__internal_1007b98e4170848a084ce6582b4c701e31085ea224fa8104476cd76d9360d589_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdcbca0f72c26b695db2020b2016cef6433938dc8ee1b6a9765370eb8b799df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcbca0f72c26b695db2020b2016cef6433938dc8ee1b6a9765370eb8b799df4->enter($__internal_cdcbca0f72c26b695db2020b2016cef6433938dc8ee1b6a9765370eb8b799df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e1661151ff4f1e08c9770407e57a0723918cd4280221d6d033f1b9e96472ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1661151ff4f1e08c9770407e57a0723918cd4280221d6d033f1b9e96472ebc->enter($__internal_2e1661151ff4f1e08c9770407e57a0723918cd4280221d6d033f1b9e96472ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">               
\t\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "  
\t\t\t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\"><strong>";
        // line 11
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jour", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jour", array()), 'widget', array("attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t\t    \t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jour", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "menu", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t    \t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "menu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "menu", array()), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t    </div>                     
\t</div>
";
        
        $__internal_2e1661151ff4f1e08c9770407e57a0723918cd4280221d6d033f1b9e96472ebc->leave($__internal_2e1661151ff4f1e08c9770407e57a0723918cd4280221d6d033f1b9e96472ebc_prof);

        
        $__internal_cdcbca0f72c26b695db2020b2016cef6433938dc8ee1b6a9765370eb8b799df4->leave($__internal_cdcbca0f72c26b695db2020b2016cef6433938dc8ee1b6a9765370eb8b799df4_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbd5236c02fb3360b11244309dc1c93bbe0efe58424a5112f635f18101029256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd5236c02fb3360b11244309dc1c93bbe0efe58424a5112f635f18101029256->enter($__internal_dbd5236c02fb3360b11244309dc1c93bbe0efe58424a5112f635f18101029256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f90f673467dc565ded33412e29baf5158dfaf8419e485a3504e89b736339706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f90f673467dc565ded33412e29baf5158dfaf8419e485a3504e89b736339706->enter($__internal_6f90f673467dc565ded33412e29baf5158dfaf8419e485a3504e89b736339706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f90f673467dc565ded33412e29baf5158dfaf8419e485a3504e89b736339706->leave($__internal_6f90f673467dc565ded33412e29baf5158dfaf8419e485a3504e89b736339706_prof);

        
        $__internal_dbd5236c02fb3360b11244309dc1c93bbe0efe58424a5112f635f18101029256->leave($__internal_dbd5236c02fb3360b11244309dc1c93bbe0efe58424a5112f635f18101029256_prof);

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
", "menusViews/addMenu.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/menusViews/addMenu.html.twig");
    }
}
