<?php

/* classesViews/affecterEleve.html.twig */
class __TwigTemplate_2924e70facb5fa1f3f3e95e04f00f2cae64585e5d10692e075e030cc08f59701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "classesViews/affecterEleve.html.twig", 1);
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
        $__internal_2d820c40bc2f89500888f096815339acdfd8dc02ccd1fa488a565742c64d143c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d820c40bc2f89500888f096815339acdfd8dc02ccd1fa488a565742c64d143c->enter($__internal_2d820c40bc2f89500888f096815339acdfd8dc02ccd1fa488a565742c64d143c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/affecterEleve.html.twig"));

        $__internal_0988492e07dc59ebb02efca580208223817cb19af9ea69001756a5aa366f625e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0988492e07dc59ebb02efca580208223817cb19af9ea69001756a5aa366f625e->enter($__internal_0988492e07dc59ebb02efca580208223817cb19af9ea69001756a5aa366f625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/affecterEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d820c40bc2f89500888f096815339acdfd8dc02ccd1fa488a565742c64d143c->leave($__internal_2d820c40bc2f89500888f096815339acdfd8dc02ccd1fa488a565742c64d143c_prof);

        
        $__internal_0988492e07dc59ebb02efca580208223817cb19af9ea69001756a5aa366f625e->leave($__internal_0988492e07dc59ebb02efca580208223817cb19af9ea69001756a5aa366f625e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea8c52a04f8d3a0c29ad4f94c38f6bc85c8a42556152f58a578971870651fe2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8c52a04f8d3a0c29ad4f94c38f6bc85c8a42556152f58a578971870651fe2c->enter($__internal_ea8c52a04f8d3a0c29ad4f94c38f6bc85c8a42556152f58a578971870651fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d2f329800aa536ffe923119f0ec6c9492326436bd5b3112618d5c90531567aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2f329800aa536ffe923119f0ec6c9492326436bd5b3112618d5c90531567aa->enter($__internal_6d2f329800aa536ffe923119f0ec6c9492326436bd5b3112618d5c90531567aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d2f329800aa536ffe923119f0ec6c9492326436bd5b3112618d5c90531567aa->leave($__internal_6d2f329800aa536ffe923119f0ec6c9492326436bd5b3112618d5c90531567aa_prof);

        
        $__internal_ea8c52a04f8d3a0c29ad4f94c38f6bc85c8a42556152f58a578971870651fe2c->leave($__internal_ea8c52a04f8d3a0c29ad4f94c38f6bc85c8a42556152f58a578971870651fe2c_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30998b59f2b1a14b77ea318d84826320ef61b397714021a8643beabb64202da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30998b59f2b1a14b77ea318d84826320ef61b397714021a8643beabb64202da6->enter($__internal_30998b59f2b1a14b77ea318d84826320ef61b397714021a8643beabb64202da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4b8aa42b4d63f704d43fa9de8122d7b3cf364f89d07acf60a7b2e1be32efa403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8aa42b4d63f704d43fa9de8122d7b3cf364f89d07acf60a7b2e1be32efa403->enter($__internal_4b8aa42b4d63f704d43fa9de8122d7b3cf364f89d07acf60a7b2e1be32efa403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4b8aa42b4d63f704d43fa9de8122d7b3cf364f89d07acf60a7b2e1be32efa403->leave($__internal_4b8aa42b4d63f704d43fa9de8122d7b3cf364f89d07acf60a7b2e1be32efa403_prof);

        
        $__internal_30998b59f2b1a14b77ea318d84826320ef61b397714021a8643beabb64202da6->leave($__internal_30998b59f2b1a14b77ea318d84826320ef61b397714021a8643beabb64202da6_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/affecterEleve.html.twig";
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
", "classesViews/affecterEleve.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\classesViews\\affecterEleve.html.twig");
    }
}
