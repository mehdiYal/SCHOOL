<?php

/* :classesViews:affecterEleve.html.twig */
class __TwigTemplate_e117e901467e4631b11e6244d034fac4ed997434da949c19515091686b83ccd7 extends Twig_Template
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
        $__internal_b50954d270cb52f5b0548b39b6713654e12fcbd213487b6190e3bb9bf8ad79c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50954d270cb52f5b0548b39b6713654e12fcbd213487b6190e3bb9bf8ad79c4->enter($__internal_b50954d270cb52f5b0548b39b6713654e12fcbd213487b6190e3bb9bf8ad79c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterEleve.html.twig"));

        $__internal_2625c02a862f7b70cb8743461feb3046407ddef4a91eda8c33dbeb2e414d86e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2625c02a862f7b70cb8743461feb3046407ddef4a91eda8c33dbeb2e414d86e1->enter($__internal_2625c02a862f7b70cb8743461feb3046407ddef4a91eda8c33dbeb2e414d86e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:affecterEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b50954d270cb52f5b0548b39b6713654e12fcbd213487b6190e3bb9bf8ad79c4->leave($__internal_b50954d270cb52f5b0548b39b6713654e12fcbd213487b6190e3bb9bf8ad79c4_prof);

        
        $__internal_2625c02a862f7b70cb8743461feb3046407ddef4a91eda8c33dbeb2e414d86e1->leave($__internal_2625c02a862f7b70cb8743461feb3046407ddef4a91eda8c33dbeb2e414d86e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a460e4dbbd079c383305e31814d0f98b53c32779a08ed90bd52c7c2399f68337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a460e4dbbd079c383305e31814d0f98b53c32779a08ed90bd52c7c2399f68337->enter($__internal_a460e4dbbd079c383305e31814d0f98b53c32779a08ed90bd52c7c2399f68337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb82395158d057b550229d8abfdf1f986d1db124de9aba6e8e6ee112bd837d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb82395158d057b550229d8abfdf1f986d1db124de9aba6e8e6ee112bd837d97->enter($__internal_bb82395158d057b550229d8abfdf1f986d1db124de9aba6e8e6ee112bd837d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb82395158d057b550229d8abfdf1f986d1db124de9aba6e8e6ee112bd837d97->leave($__internal_bb82395158d057b550229d8abfdf1f986d1db124de9aba6e8e6ee112bd837d97_prof);

        
        $__internal_a460e4dbbd079c383305e31814d0f98b53c32779a08ed90bd52c7c2399f68337->leave($__internal_a460e4dbbd079c383305e31814d0f98b53c32779a08ed90bd52c7c2399f68337_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66220fcaf1b3125bec918503e2849a869a03511a6d0c8eb28ec1a5f2aa095ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66220fcaf1b3125bec918503e2849a869a03511a6d0c8eb28ec1a5f2aa095ba7->enter($__internal_66220fcaf1b3125bec918503e2849a869a03511a6d0c8eb28ec1a5f2aa095ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74d6a8344cce873aafd6fa48ff6c52f4908dafb380898d61e97a1db501d4c60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d6a8344cce873aafd6fa48ff6c52f4908dafb380898d61e97a1db501d4c60e->enter($__internal_74d6a8344cce873aafd6fa48ff6c52f4908dafb380898d61e97a1db501d4c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_74d6a8344cce873aafd6fa48ff6c52f4908dafb380898d61e97a1db501d4c60e->leave($__internal_74d6a8344cce873aafd6fa48ff6c52f4908dafb380898d61e97a1db501d4c60e_prof);

        
        $__internal_66220fcaf1b3125bec918503e2849a869a03511a6d0c8eb28ec1a5f2aa095ba7->leave($__internal_66220fcaf1b3125bec918503e2849a869a03511a6d0c8eb28ec1a5f2aa095ba7_prof);

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
