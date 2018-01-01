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
        $__internal_9834e0ec26aa72a4df991462acd814ca206954e8c9b40941c463f47a96d2ed67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9834e0ec26aa72a4df991462acd814ca206954e8c9b40941c463f47a96d2ed67->enter($__internal_9834e0ec26aa72a4df991462acd814ca206954e8c9b40941c463f47a96d2ed67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $__internal_26522bc7779a95e27ed9d29b447a303dc7f06a013baf9b82b246907f345e624e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26522bc7779a95e27ed9d29b447a303dc7f06a013baf9b82b246907f345e624e->enter($__internal_26522bc7779a95e27ed9d29b447a303dc7f06a013baf9b82b246907f345e624e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterProf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9834e0ec26aa72a4df991462acd814ca206954e8c9b40941c463f47a96d2ed67->leave($__internal_9834e0ec26aa72a4df991462acd814ca206954e8c9b40941c463f47a96d2ed67_prof);

        
        $__internal_26522bc7779a95e27ed9d29b447a303dc7f06a013baf9b82b246907f345e624e->leave($__internal_26522bc7779a95e27ed9d29b447a303dc7f06a013baf9b82b246907f345e624e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b596004c2c36ff27a9706fbcd4faa004ddfa2dfe54e5e637bca524a1e5dd19a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b596004c2c36ff27a9706fbcd4faa004ddfa2dfe54e5e637bca524a1e5dd19a7->enter($__internal_b596004c2c36ff27a9706fbcd4faa004ddfa2dfe54e5e637bca524a1e5dd19a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_730276bd8afb3748050c693337d9ccdad465cd3abddb03933c887e4d9862b175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730276bd8afb3748050c693337d9ccdad465cd3abddb03933c887e4d9862b175->enter($__internal_730276bd8afb3748050c693337d9ccdad465cd3abddb03933c887e4d9862b175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_730276bd8afb3748050c693337d9ccdad465cd3abddb03933c887e4d9862b175->leave($__internal_730276bd8afb3748050c693337d9ccdad465cd3abddb03933c887e4d9862b175_prof);

        
        $__internal_b596004c2c36ff27a9706fbcd4faa004ddfa2dfe54e5e637bca524a1e5dd19a7->leave($__internal_b596004c2c36ff27a9706fbcd4faa004ddfa2dfe54e5e637bca524a1e5dd19a7_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a9fa6c0887500abaf7366b5d8e912ce5bd3b0596f29cdcb3fa727a352826bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9fa6c0887500abaf7366b5d8e912ce5bd3b0596f29cdcb3fa727a352826bde->enter($__internal_4a9fa6c0887500abaf7366b5d8e912ce5bd3b0596f29cdcb3fa727a352826bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_59181e5047946d0dc8416fd02646d0596792f573c0a94e7be801f27892289dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59181e5047946d0dc8416fd02646d0596792f573c0a94e7be801f27892289dae->enter($__internal_59181e5047946d0dc8416fd02646d0596792f573c0a94e7be801f27892289dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_59181e5047946d0dc8416fd02646d0596792f573c0a94e7be801f27892289dae->leave($__internal_59181e5047946d0dc8416fd02646d0596792f573c0a94e7be801f27892289dae_prof);

        
        $__internal_4a9fa6c0887500abaf7366b5d8e912ce5bd3b0596f29cdcb3fa727a352826bde->leave($__internal_4a9fa6c0887500abaf7366b5d8e912ce5bd3b0596f29cdcb3fa727a352826bde_prof);

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
