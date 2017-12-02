<?php

/* classesViews/listClasses.html.twig */
class __TwigTemplate_61a5c7aed38ebd7e646ef93e880f962234540f743383dc70c1576ac8201dbfc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "classesViews/listClasses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ad8440973f80b09da2d6ad9c6c1a2aff59d76e9205c88b1e0efc59ec4e3f60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad8440973f80b09da2d6ad9c6c1a2aff59d76e9205c88b1e0efc59ec4e3f60f->enter($__internal_0ad8440973f80b09da2d6ad9c6c1a2aff59d76e9205c88b1e0efc59ec4e3f60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $__internal_594b64682512caad9aba5e84bb7f97345f9ba8256750db64eb03f189958e36a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594b64682512caad9aba5e84bb7f97345f9ba8256750db64eb03f189958e36a1->enter($__internal_594b64682512caad9aba5e84bb7f97345f9ba8256750db64eb03f189958e36a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad8440973f80b09da2d6ad9c6c1a2aff59d76e9205c88b1e0efc59ec4e3f60f->leave($__internal_0ad8440973f80b09da2d6ad9c6c1a2aff59d76e9205c88b1e0efc59ec4e3f60f_prof);

        
        $__internal_594b64682512caad9aba5e84bb7f97345f9ba8256750db64eb03f189958e36a1->leave($__internal_594b64682512caad9aba5e84bb7f97345f9ba8256750db64eb03f189958e36a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f07c491d76c6e47fa9bfdd79e0c144388c07b9fc5cc226d1a34b5b8a3a937f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07c491d76c6e47fa9bfdd79e0c144388c07b9fc5cc226d1a34b5b8a3a937f2e->enter($__internal_f07c491d76c6e47fa9bfdd79e0c144388c07b9fc5cc226d1a34b5b8a3a937f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f64dc13cdfeb2438075b2fffaf573bd8011b0918bad595dd0b0f5f0153283264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64dc13cdfeb2438075b2fffaf573bd8011b0918bad595dd0b0f5f0153283264->enter($__internal_f64dc13cdfeb2438075b2fffaf573bd8011b0918bad595dd0b0f5f0153283264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_f64dc13cdfeb2438075b2fffaf573bd8011b0918bad595dd0b0f5f0153283264->leave($__internal_f64dc13cdfeb2438075b2fffaf573bd8011b0918bad595dd0b0f5f0153283264_prof);

        
        $__internal_f07c491d76c6e47fa9bfdd79e0c144388c07b9fc5cc226d1a34b5b8a3a937f2e->leave($__internal_f07c491d76c6e47fa9bfdd79e0c144388c07b9fc5cc226d1a34b5b8a3a937f2e_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_590dcd08f707f6161ca212fe4417fbb4f1dfa1852af1a50af29d436524dabe90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590dcd08f707f6161ca212fe4417fbb4f1dfa1852af1a50af29d436524dabe90->enter($__internal_590dcd08f707f6161ca212fe4417fbb4f1dfa1852af1a50af29d436524dabe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_c86e310561473018802bfdc6296308d4f8cc70118356e77d50b5d9a4545f8ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86e310561473018802bfdc6296308d4f8cc70118356e77d50b5d9a4545f8ec4->enter($__internal_c86e310561473018802bfdc6296308d4f8cc70118356e77d50b5d9a4545f8ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Nombre d'èléves</th>
                    <th>Responsable</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>Affecter Profs</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 26
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["classe"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "responsable", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectProf", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_c86e310561473018802bfdc6296308d4f8cc70118356e77d50b5d9a4545f8ec4->leave($__internal_c86e310561473018802bfdc6296308d4f8cc70118356e77d50b5d9a4545f8ec4_prof);

        
        $__internal_590dcd08f707f6161ca212fe4417fbb4f1dfa1852af1a50af29d436524dabe90->leave($__internal_590dcd08f707f6161ca212fe4417fbb4f1dfa1852af1a50af29d436524dabe90_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  144 => 43,  136 => 38,  128 => 33,  123 => 31,  119 => 30,  113 => 29,  109 => 28,  105 => 27,  102 => 26,  98 => 25,  90 => 20,  86 => 19,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t{{'list'|trans}} {{'classe'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Nombre d'èléves</th>
                    <th>Responsable</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>Affecter Profs</th>
                </tr>
            </thead>
            <tbody>
                {% for classe in app.user.ecole.classes%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ classe.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ classe.description}}</td>
\t\t\t\t\t\t<td>{{ classe.annee.nom}} {{ classe.annee.niveau}}</td>
\t\t\t\t\t\t<td>{{ classe.eleves|length}}</td>
\t\t\t\t\t\t<td>{{ classe.responsable.nom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('affectProf',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", "classesViews/listClasses.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
