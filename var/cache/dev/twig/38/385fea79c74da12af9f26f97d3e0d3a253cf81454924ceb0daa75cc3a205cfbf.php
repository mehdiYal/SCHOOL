<?php

/* classesViews/affecterEleve.html.twig */
class __TwigTemplate_e7fe5784095e07a21b73ded628611367fd731b5d035e6239e9085d38730a7cc5 extends Twig_Template
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
        $__internal_64637887ff71205ad243301e5549cf8ea3c267c002c4557bed10eb36dc355ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64637887ff71205ad243301e5549cf8ea3c267c002c4557bed10eb36dc355ef0->enter($__internal_64637887ff71205ad243301e5549cf8ea3c267c002c4557bed10eb36dc355ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/affecterEleve.html.twig"));

        $__internal_753c1f6db98ff1c15d8a4c0cae7e9b23db68f859e414cb1aa1f3cc885b4062a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753c1f6db98ff1c15d8a4c0cae7e9b23db68f859e414cb1aa1f3cc885b4062a9->enter($__internal_753c1f6db98ff1c15d8a4c0cae7e9b23db68f859e414cb1aa1f3cc885b4062a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/affecterEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64637887ff71205ad243301e5549cf8ea3c267c002c4557bed10eb36dc355ef0->leave($__internal_64637887ff71205ad243301e5549cf8ea3c267c002c4557bed10eb36dc355ef0_prof);

        
        $__internal_753c1f6db98ff1c15d8a4c0cae7e9b23db68f859e414cb1aa1f3cc885b4062a9->leave($__internal_753c1f6db98ff1c15d8a4c0cae7e9b23db68f859e414cb1aa1f3cc885b4062a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6492c7d51dacb98488e910da1a685b0ef2d2e431d635479f1b3ce63abeb8eea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6492c7d51dacb98488e910da1a685b0ef2d2e431d635479f1b3ce63abeb8eea1->enter($__internal_6492c7d51dacb98488e910da1a685b0ef2d2e431d635479f1b3ce63abeb8eea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5ca8c7a0c93b4d72f9d5e6bbe587359dfd35beaf6e7231fc2c5d37978bbf5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ca8c7a0c93b4d72f9d5e6bbe587359dfd35beaf6e7231fc2c5d37978bbf5c4->enter($__internal_e5ca8c7a0c93b4d72f9d5e6bbe587359dfd35beaf6e7231fc2c5d37978bbf5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">           
    <div class=\"row\">
    \t<div class=\"col-md-6\">
    \t\t<div class=\"panel panel-default\">
\t            <div class=\"panel-heading\">
\t                <h3 class=\"panel-title\">Liste des Eleves en ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "annee", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? $this->getContext($context, "eleves")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectEleveClasse", array("id" => $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "id", array()), "eleveID" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 57
            echo "\t\t\t\t                    <tr>
\t\t\t\t                    \t<td>
\t\t\t\t                    \t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remettreEleveClasse", array("id" => $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "id", array()), "eleveID" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
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
        
        $__internal_e5ca8c7a0c93b4d72f9d5e6bbe587359dfd35beaf6e7231fc2c5d37978bbf5c4->leave($__internal_e5ca8c7a0c93b4d72f9d5e6bbe587359dfd35beaf6e7231fc2c5d37978bbf5c4_prof);

        
        $__internal_6492c7d51dacb98488e910da1a685b0ef2d2e431d635479f1b3ce63abeb8eea1->leave($__internal_6492c7d51dacb98488e910da1a685b0ef2d2e431d635479f1b3ce63abeb8eea1_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27611c012b050cfb6454761dd188722a27501983bf2feb81f17fa506dcea9900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27611c012b050cfb6454761dd188722a27501983bf2feb81f17fa506dcea9900->enter($__internal_27611c012b050cfb6454761dd188722a27501983bf2feb81f17fa506dcea9900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc5de87fe3f7620e44d76060948a54117cfef699670cc5530567d83d67994162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5de87fe3f7620e44d76060948a54117cfef699670cc5530567d83d67994162->enter($__internal_bc5de87fe3f7620e44d76060948a54117cfef699670cc5530567d83d67994162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_bc5de87fe3f7620e44d76060948a54117cfef699670cc5530567d83d67994162->leave($__internal_bc5de87fe3f7620e44d76060948a54117cfef699670cc5530567d83d67994162_prof);

        
        $__internal_27611c012b050cfb6454761dd188722a27501983bf2feb81f17fa506dcea9900->leave($__internal_27611c012b050cfb6454761dd188722a27501983bf2feb81f17fa506dcea9900_prof);

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
", "classesViews/affecterEleve.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/affecterEleve.html.twig");
    }
}
