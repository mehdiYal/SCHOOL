<?php

/* :classesViews:affecterProf.html.twig */
class __TwigTemplate_a2bb35b9f9e65e50cf616ab26278257fb961a1b9e7016f92126ddb477d3e89fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":classesViews:affecterProf.html.twig", 1);
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
        $__internal_ceece8a6485f6ed91c6890a8d07698200829a92d6f2bab3fd90b8b76edd8eaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceece8a6485f6ed91c6890a8d07698200829a92d6f2bab3fd90b8b76edd8eaf9->enter($__internal_ceece8a6485f6ed91c6890a8d07698200829a92d6f2bab3fd90b8b76edd8eaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $__internal_c70ea2ce72c44609fdd77bd1253d74a58260ddad9196c0c602049bbc0fa85215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70ea2ce72c44609fdd77bd1253d74a58260ddad9196c0c602049bbc0fa85215->enter($__internal_c70ea2ce72c44609fdd77bd1253d74a58260ddad9196c0c602049bbc0fa85215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceece8a6485f6ed91c6890a8d07698200829a92d6f2bab3fd90b8b76edd8eaf9->leave($__internal_ceece8a6485f6ed91c6890a8d07698200829a92d6f2bab3fd90b8b76edd8eaf9_prof);

        
        $__internal_c70ea2ce72c44609fdd77bd1253d74a58260ddad9196c0c602049bbc0fa85215->leave($__internal_c70ea2ce72c44609fdd77bd1253d74a58260ddad9196c0c602049bbc0fa85215_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d6d701940c3c4a082761d4034359b6916b259b1640f21d35d6501ad2a1ddfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6d701940c3c4a082761d4034359b6916b259b1640f21d35d6501ad2a1ddfa8->enter($__internal_3d6d701940c3c4a082761d4034359b6916b259b1640f21d35d6501ad2a1ddfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dce111bba97bdddd05b5a479abaa7ff93138125fea3e442b8be55b3a44f7d7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce111bba97bdddd05b5a479abaa7ff93138125fea3e442b8be55b3a44f7d7a8->enter($__internal_dce111bba97bdddd05b5a479abaa7ff93138125fea3e442b8be55b3a44f7d7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">           
    <div class=\"row\">
        <div class=\"col-md-12\">               
\t\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "  
\t\t\t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "annee", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "annee", array()), "niveau", array()), "html", null, true);
        echo "</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseignant", array()), 'errors');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t        <div class=\"panel-footer\">                                    
\t\t\t            <button class=\"btn btn-primary pull-right\">Valider</button>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t\t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t    </div>
\t    <div class=\"row\">
\t    \t<div class=\"col-md-12\">
\t    \t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\">Liste des Enseignants</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">
\t\t\t    \t\t<div class=\"table-responsive\">
\t\t\t\t\t        <table id=\"customers2\" class=\"table datatable\">
\t\t\t\t\t            <thead>
\t\t\t\t\t                <tr>
\t\t\t\t\t                    <th>Enseignant</th>
\t\t\t\t\t                    <th>Matiere</th>
\t\t\t\t\t                </tr>
\t\t\t\t\t            </thead>
\t\t\t\t\t            <tbody>
\t\t\t\t\t                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "ensMat", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
            // line 59
            echo "\t\t\t\t\t                    <tr>
\t\t\t\t\t                    \t<td>
\t\t\t\t\t                    \t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEnseignant", array("id" => $this->getAttribute($this->getAttribute($context["ens"], "enseignant", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens"], "enseignant", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens"], "enseignant", array()), "prenom", array()), "html", null, true);
            echo "
\t\t\t\t\t                            </a>
\t\t\t\t\t                    \t</td>
\t\t\t\t\t                    \t<td>
\t\t\t\t\t                    \t\t";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens"], "matiere", array()), "nom", array()), "html", null, true);
            echo "
\t\t\t\t\t                    \t</td>
\t\t\t\t\t                    </tr>
\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t            </tbody>
\t\t\t\t\t        </table>                                    
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t    \t</div>
\t    </div>                    
\t</div>
";
        
        $__internal_dce111bba97bdddd05b5a479abaa7ff93138125fea3e442b8be55b3a44f7d7a8->leave($__internal_dce111bba97bdddd05b5a479abaa7ff93138125fea3e442b8be55b3a44f7d7a8_prof);

        
        $__internal_3d6d701940c3c4a082761d4034359b6916b259b1640f21d35d6501ad2a1ddfa8->leave($__internal_3d6d701940c3c4a082761d4034359b6916b259b1640f21d35d6501ad2a1ddfa8_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9004d96befcc6e4f13080abb3319ff5431df3f477c1966ad09f0aca66bd9929a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9004d96befcc6e4f13080abb3319ff5431df3f477c1966ad09f0aca66bd9929a->enter($__internal_9004d96befcc6e4f13080abb3319ff5431df3f477c1966ad09f0aca66bd9929a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd570aafe8c6293273e51b600cfd2f7c67d63415065ed0c5027f471231260883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd570aafe8c6293273e51b600cfd2f7c67d63415065ed0c5027f471231260883->enter($__internal_cd570aafe8c6293273e51b600cfd2f7c67d63415065ed0c5027f471231260883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cd570aafe8c6293273e51b600cfd2f7c67d63415065ed0c5027f471231260883->leave($__internal_cd570aafe8c6293273e51b600cfd2f7c67d63415065ed0c5027f471231260883_prof);

        
        $__internal_9004d96befcc6e4f13080abb3319ff5431df3f477c1966ad09f0aca66bd9929a->leave($__internal_9004d96befcc6e4f13080abb3319ff5431df3f477c1966ad09f0aca66bd9929a_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:affecterProf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 83,  195 => 82,  186 => 81,  168 => 70,  158 => 66,  149 => 62,  145 => 61,  141 => 59,  137 => 58,  115 => 39,  104 => 31,  99 => 29,  92 => 25,  84 => 20,  79 => 18,  72 => 14,  61 => 10,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t                <h3 class=\"panel-title\">{{classe.nom|trans}} {{classe.annee.nom}} {{classe.annee.niveau}}</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.matiere , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t\t{{ form_widget(form.matiere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t{{ form_errors(form.matiere) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.enseignant , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t\t{{ form_widget(form.enseignant ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t{{ form_errors(form.enseignant) }}
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
\t    <div class=\"row\">
\t    \t<div class=\"col-md-12\">
\t    \t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\">Liste des Enseignants</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">
\t\t\t    \t\t<div class=\"table-responsive\">
\t\t\t\t\t        <table id=\"customers2\" class=\"table datatable\">
\t\t\t\t\t            <thead>
\t\t\t\t\t                <tr>
\t\t\t\t\t                    <th>Enseignant</th>
\t\t\t\t\t                    <th>Matiere</th>
\t\t\t\t\t                </tr>
\t\t\t\t\t            </thead>
\t\t\t\t\t            <tbody>
\t\t\t\t\t                {% for ens in classe.ensMat %}
\t\t\t\t\t                    <tr>
\t\t\t\t\t                    \t<td>
\t\t\t\t\t                    \t\t<a href=\"{{ path('profileEnseignant',{'id':ens.enseignant.id})}}\">
\t\t\t\t\t                                {{ens.enseignant.nom}} {{ens.enseignant.prenom}}
\t\t\t\t\t                            </a>
\t\t\t\t\t                    \t</td>
\t\t\t\t\t                    \t<td>
\t\t\t\t\t                    \t\t{{ens.matiere.nom}}
\t\t\t\t\t                    \t</td>
\t\t\t\t\t                    </tr>
\t\t\t\t\t                {% endfor %}
\t\t\t\t\t            </tbody>
\t\t\t\t\t        </table>                                    
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t    \t</div>
\t    </div>                    
\t</div>
{% endblock %}


{% block javascripts %}
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
{% endblock %}
", ":classesViews:affecterProf.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/affecterProf.html.twig");
    }
}
