<?php

/* :classesViews:affecterEleve.html.twig */
class __TwigTemplate_0541cd4da06b650e9c003d561c17687e68e50b4f17cda4b35ced6a45f4e674ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":classesViews:affecterEleve.html.twig", 1);
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
        $__internal_ab93300886212b380033bae88a6ad7992e19d3fe3d707fbe19bb8b38c4363c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab93300886212b380033bae88a6ad7992e19d3fe3d707fbe19bb8b38c4363c62->enter($__internal_ab93300886212b380033bae88a6ad7992e19d3fe3d707fbe19bb8b38c4363c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterEleve.html.twig"));

        $__internal_e6ae3e00694895ef4a75ffbe8bc318d55f9f0fc9e0ec3b2be87e8bf85327cadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ae3e00694895ef4a75ffbe8bc318d55f9f0fc9e0ec3b2be87e8bf85327cadf->enter($__internal_e6ae3e00694895ef4a75ffbe8bc318d55f9f0fc9e0ec3b2be87e8bf85327cadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab93300886212b380033bae88a6ad7992e19d3fe3d707fbe19bb8b38c4363c62->leave($__internal_ab93300886212b380033bae88a6ad7992e19d3fe3d707fbe19bb8b38c4363c62_prof);

        
        $__internal_e6ae3e00694895ef4a75ffbe8bc318d55f9f0fc9e0ec3b2be87e8bf85327cadf->leave($__internal_e6ae3e00694895ef4a75ffbe8bc318d55f9f0fc9e0ec3b2be87e8bf85327cadf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5798aed6ebe88ffcb6b59dbe0a5f44cc96b059b9ce3cf8e4520303c25cb25598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5798aed6ebe88ffcb6b59dbe0a5f44cc96b059b9ce3cf8e4520303c25cb25598->enter($__internal_5798aed6ebe88ffcb6b59dbe0a5f44cc96b059b9ce3cf8e4520303c25cb25598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e2000f98a9d45754a0426e146d097bafd01797ca93a6f8826b58b8d0aca7c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2000f98a9d45754a0426e146d097bafd01797ca93a6f8826b58b8d0aca7c7a->enter($__internal_3e2000f98a9d45754a0426e146d097bafd01797ca93a6f8826b58b8d0aca7c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">           
    <div class=\"row\">
    \t<div class=\"col-md-6\">
    \t\t<div class=\"panel panel-default\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\">Liste des Eleves en ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "annee", array()), "html", null, true);
        echo " </h3>
\t            </div>
\t            <div class=\"panel-body\">
\t\t    \t\t<div class=\"table-responsive\">
\t\t\t\t        <table id=\"customers2\" class=\"table\">
\t\t\t\t            <thead>
\t\t\t\t                <tr>
\t\t\t\t                    <th>Nom & Prenom </th>
\t\t\t\t                    <th>Remettre</th>
\t\t\t\t                </tr>
\t\t\t\t            </thead>
\t\t\t\t            <tbody>
\t\t\t\t                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 22
            echo "\t\t\t\t                    <tr class=\"danger\">
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t                                ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "
\t\t\t\t                            </a>
\t\t\t\t                    \t</td>
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectEleveClasse", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()), "eleveID" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t                                <span class=\"fa fa-chevron-right\"></span>
\t\t\t\t                            </a>
\t\t\t\t                    \t</td>
\t\t\t\t                    </tr>
\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t            </tbody>
\t\t\t\t        </table>                                    
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
    \t</div>
    \t<div class=\"col-md-6\">
    \t\t<div class=\"panel panel-default\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\">Liste des Eleves dans la classe</h3>
\t            </div>
\t            <div class=\"panel-body\">
\t\t    \t\t<div class=\"table-responsive\">
\t\t\t\t        <table id=\"customers2\" class=\"table\">
\t\t\t\t            <thead>
\t\t\t\t                <tr>
\t\t\t\t                \t<th>Remettre</th>
\t\t\t\t                    <th>Nom & Prenom </th>
\t\t\t\t                </tr>
\t\t\t\t            </thead>
\t\t\t\t            <tbody>
\t\t\t\t                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 57
            echo "\t\t\t\t                    <tr>
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remettreEleveClasse", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()), "eleveID" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t                                <span class=\"fa fa-chevron-left\"></span>
\t\t\t\t                            </a>
\t\t\t\t                    \t</td>
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t                                ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "
\t\t\t\t                            </a>
\t\t\t\t                    \t</td>
\t\t\t\t                    </tr>
\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t            </tbody>
\t\t\t\t        </table>                                    
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
    \t</div>
    </div>                    
</div>
";
        
        $__internal_3e2000f98a9d45754a0426e146d097bafd01797ca93a6f8826b58b8d0aca7c7a->leave($__internal_3e2000f98a9d45754a0426e146d097bafd01797ca93a6f8826b58b8d0aca7c7a_prof);

        
        $__internal_5798aed6ebe88ffcb6b59dbe0a5f44cc96b059b9ce3cf8e4520303c25cb25598->leave($__internal_5798aed6ebe88ffcb6b59dbe0a5f44cc96b059b9ce3cf8e4520303c25cb25598_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_968d8368185a367c30913477c6b69fb7061cd6fe86a94ee97eed8fc1b050e846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968d8368185a367c30913477c6b69fb7061cd6fe86a94ee97eed8fc1b050e846->enter($__internal_968d8368185a367c30913477c6b69fb7061cd6fe86a94ee97eed8fc1b050e846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c8b2943f2c69f6558a564516fa173a9e677dce0b5d8889a7507515ebc2c15e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b2943f2c69f6558a564516fa173a9e677dce0b5d8889a7507515ebc2c15e6a->enter($__internal_c8b2943f2c69f6558a564516fa173a9e677dce0b5d8889a7507515ebc2c15e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c8b2943f2c69f6558a564516fa173a9e677dce0b5d8889a7507515ebc2c15e6a->leave($__internal_c8b2943f2c69f6558a564516fa173a9e677dce0b5d8889a7507515ebc2c15e6a_prof);

        
        $__internal_968d8368185a367c30913477c6b69fb7061cd6fe86a94ee97eed8fc1b050e846->leave($__internal_968d8368185a367c30913477c6b69fb7061cd6fe86a94ee97eed8fc1b050e846_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:affecterEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 82,  179 => 81,  161 => 70,  148 => 65,  144 => 64,  136 => 59,  132 => 57,  128 => 56,  105 => 35,  93 => 29,  84 => 25,  80 => 24,  76 => 22,  72 => 21,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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
    \t<div class=\"col-md-6\">
    \t\t<div class=\"panel panel-default\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\">Liste des Eleves en {{classe.annee}} </h3>
\t            </div>
\t            <div class=\"panel-body\">
\t\t    \t\t<div class=\"table-responsive\">
\t\t\t\t        <table id=\"customers2\" class=\"table\">
\t\t\t\t            <thead>
\t\t\t\t                <tr>
\t\t\t\t                    <th>Nom & Prenom </th>
\t\t\t\t                    <th>Remettre</th>
\t\t\t\t                </tr>
\t\t\t\t            </thead>
\t\t\t\t            <tbody>
\t\t\t\t                {% for eleve in eleves %}
\t\t\t\t                    <tr class=\"danger\">
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">
\t\t\t\t                                {{eleve.nom}} {{eleve.prenom}}
\t\t\t\t                            </a>
\t\t\t\t                    \t</td>
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"{{ path('affectEleveClasse',{'id':classe.id,'eleveID':eleve.id}) }}\">
\t\t\t\t                                <span class=\"fa fa-chevron-right\"></span>
\t\t\t\t                            </a>
\t\t\t\t                    \t</td>
\t\t\t\t                    </tr>
\t\t\t\t                {% endfor %}
\t\t\t\t            </tbody>
\t\t\t\t        </table>                                    
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
    \t</div>
    \t<div class=\"col-md-6\">
    \t\t<div class=\"panel panel-default\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\">Liste des Eleves dans la classe</h3>
\t            </div>
\t            <div class=\"panel-body\">
\t\t    \t\t<div class=\"table-responsive\">
\t\t\t\t        <table id=\"customers2\" class=\"table\">
\t\t\t\t            <thead>
\t\t\t\t                <tr>
\t\t\t\t                \t<th>Remettre</th>
\t\t\t\t                    <th>Nom & Prenom </th>
\t\t\t\t                </tr>
\t\t\t\t            </thead>
\t\t\t\t            <tbody>
\t\t\t\t                {% for eleve in classe.eleves %}
\t\t\t\t                    <tr>
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"{{ path('remettreEleveClasse',{'id':classe.id,'eleveID':eleve.id})}}\">
\t\t\t\t                                <span class=\"fa fa-chevron-left\"></span>
\t\t\t\t                            </a>
\t\t\t\t                    \t</td>
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">
\t\t\t\t                                {{eleve.nom}} {{eleve.prenom}}
\t\t\t\t                            </a>
\t\t\t\t                    \t</td>
\t\t\t\t                    </tr>
\t\t\t\t                {% endfor %}
\t\t\t\t            </tbody>
\t\t\t\t        </table>                                    
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
    \t</div>
    </div>                    
</div>
{% endblock %}


{% block javascripts %}
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
{% endblock %}
", ":classesViews:affecterEleve.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/affecterEleve.html.twig");
    }
}
