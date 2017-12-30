<?php

/* :elevesViews:listEleves.html.twig */
class __TwigTemplate_8862af2b5a408e81aff7a39e96c121c50e4052b85f3c9af51664cd29008aa4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":elevesViews:listEleves.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_292f75916b1f096be5bc026be91030bd786e9fb8b89b4e0d0ad47f5790d4fa8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292f75916b1f096be5bc026be91030bd786e9fb8b89b4e0d0ad47f5790d4fa8d->enter($__internal_292f75916b1f096be5bc026be91030bd786e9fb8b89b4e0d0ad47f5790d4fa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $__internal_f29a1240c2465c66f9dc4e1b17b5e79c686ebb30002e0f53e4c98f4c239ba38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29a1240c2465c66f9dc4e1b17b5e79c686ebb30002e0f53e4c98f4c239ba38f->enter($__internal_f29a1240c2465c66f9dc4e1b17b5e79c686ebb30002e0f53e4c98f4c239ba38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292f75916b1f096be5bc026be91030bd786e9fb8b89b4e0d0ad47f5790d4fa8d->leave($__internal_292f75916b1f096be5bc026be91030bd786e9fb8b89b4e0d0ad47f5790d4fa8d_prof);

        
        $__internal_f29a1240c2465c66f9dc4e1b17b5e79c686ebb30002e0f53e4c98f4c239ba38f->leave($__internal_f29a1240c2465c66f9dc4e1b17b5e79c686ebb30002e0f53e4c98f4c239ba38f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_422959efb9d3b21d204cf50693af2b3a0f1145ab8f4ec162c0790de4e79aa5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422959efb9d3b21d204cf50693af2b3a0f1145ab8f4ec162c0790de4e79aa5c8->enter($__internal_422959efb9d3b21d204cf50693af2b3a0f1145ab8f4ec162c0790de4e79aa5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_baaa38d5488cd92a37d48a6cbee2c55f7493f0551a24d148ddbb40739420505f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaa38d5488cd92a37d48a6cbee2c55f7493f0551a24d148ddbb40739420505f->enter($__internal_baaa38d5488cd92a37d48a6cbee2c55f7493f0551a24d148ddbb40739420505f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_baaa38d5488cd92a37d48a6cbee2c55f7493f0551a24d148ddbb40739420505f->leave($__internal_baaa38d5488cd92a37d48a6cbee2c55f7493f0551a24d148ddbb40739420505f_prof);

        
        $__internal_422959efb9d3b21d204cf50693af2b3a0f1145ab8f4ec162c0790de4e79aa5c8->leave($__internal_422959efb9d3b21d204cf50693af2b3a0f1145ab8f4ec162c0790de4e79aa5c8_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_e471ce392600d70ceb72142b15282f240b891abf157fa090ed67145ba6a640b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e471ce392600d70ceb72142b15282f240b891abf157fa090ed67145ba6a640b7->enter($__internal_e471ce392600d70ceb72142b15282f240b891abf157fa090ed67145ba6a640b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_38de5e84891febb0c1b0e5985331acecab298b614fe781f63820537003213120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38de5e84891febb0c1b0e5985331acecab298b614fe781f63820537003213120->enter($__internal_38de5e84891febb0c1b0e5985331acecab298b614fe781f63820537003213120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parent"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 24
            echo "\t\t\t\t\t<tr class=\"";
            if (($this->getAttribute($context["eleve"], "parent", array()) == null)) {
                echo " danger ";
            }
            echo "\">
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["eleve"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["eleve"], "dateDeNaissance", array()), "Y")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parentEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>                                    
    </div>
    ";
        // line 53
        $this->displayBlock('active', $context, $blocks);
        
        $__internal_38de5e84891febb0c1b0e5985331acecab298b614fe781f63820537003213120->leave($__internal_38de5e84891febb0c1b0e5985331acecab298b614fe781f63820537003213120_prof);

        
        $__internal_e471ce392600d70ceb72142b15282f240b891abf157fa090ed67145ba6a640b7->leave($__internal_e471ce392600d70ceb72142b15282f240b891abf157fa090ed67145ba6a640b7_prof);

    }

    public function block_active($context, array $blocks = array())
    {
        $__internal_42c75a9c9dabd5a47a21488a0c99d4e6da54f010b50f8485cde290426a340754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c75a9c9dabd5a47a21488a0c99d4e6da54f010b50f8485cde290426a340754->enter($__internal_42c75a9c9dabd5a47a21488a0c99d4e6da54f010b50f8485cde290426a340754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_b87d3ad46cc0ac748044e47b57e2afb1bb07d7cfa489117b46299aac1885b248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87d3ad46cc0ac748044e47b57e2afb1bb07d7cfa489117b46299aac1885b248->enter($__internal_b87d3ad46cc0ac748044e47b57e2afb1bb07d7cfa489117b46299aac1885b248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 54
        echo "    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    ";
        
        $__internal_b87d3ad46cc0ac748044e47b57e2afb1bb07d7cfa489117b46299aac1885b248->leave($__internal_b87d3ad46cc0ac748044e47b57e2afb1bb07d7cfa489117b46299aac1885b248_prof);

        
        $__internal_42c75a9c9dabd5a47a21488a0c99d4e6da54f010b50f8485cde290426a340754->leave($__internal_42c75a9c9dabd5a47a21488a0c99d4e6da54f010b50f8485cde290426a340754_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:listEleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 54,  173 => 53,  168 => 50,  156 => 44,  148 => 39,  140 => 34,  132 => 29,  125 => 27,  121 => 26,  115 => 25,  108 => 24,  104 => 23,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'students'|trans}}
{% endblock %}

{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                    <th>{{'parent'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for eleve in app.user.ecole.eleves %}
\t\t\t\t\t<tr class=\"{% if (eleve.parent == null)%} danger {% endif %}\">
\t\t\t\t\t\t<td>{{ eleve.nom|upper}} {{ eleve.prenom}}</td>
\t\t\t\t\t\t<td>{{ (\"now\"|date(\"Y\"))-( eleve.dateDeNaissance|date(\"Y\"))}}</td>
\t\t\t\t\t\t<td>{{ eleve.annee.nom}} {{ eleve.annee.niveau}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('parentEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    {% block active %}
    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    {% endblock%}
{% endblock %}               
", ":elevesViews:listEleves.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/elevesViews/listEleves.html.twig");
    }
}
