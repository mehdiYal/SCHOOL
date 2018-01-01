<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_1e2fbe8fe189b49e929482ef85839333a6172a5ed4cb6dd10f9a81ece57b6d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", ":anneesViews:listAnnees.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseListSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce8cf8955b7486991b0d5e32eb9b941dadb83d55c28a657ad946d93bf986d9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8cf8955b7486991b0d5e32eb9b941dadb83d55c28a657ad946d93bf986d9c6->enter($__internal_ce8cf8955b7486991b0d5e32eb9b941dadb83d55c28a657ad946d93bf986d9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_fc27d8a039a564746dff467b3123ea24d34f44281117a5521dd724d7a7bdd1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc27d8a039a564746dff467b3123ea24d34f44281117a5521dd724d7a7bdd1a6->enter($__internal_fc27d8a039a564746dff467b3123ea24d34f44281117a5521dd724d7a7bdd1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8cf8955b7486991b0d5e32eb9b941dadb83d55c28a657ad946d93bf986d9c6->leave($__internal_ce8cf8955b7486991b0d5e32eb9b941dadb83d55c28a657ad946d93bf986d9c6_prof);

        
        $__internal_fc27d8a039a564746dff467b3123ea24d34f44281117a5521dd724d7a7bdd1a6->leave($__internal_fc27d8a039a564746dff467b3123ea24d34f44281117a5521dd724d7a7bdd1a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3723a04709384a18937e4a49e9da4d645b3421fa0d8f75bbd7c05877d62003c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3723a04709384a18937e4a49e9da4d645b3421fa0d8f75bbd7c05877d62003c2->enter($__internal_3723a04709384a18937e4a49e9da4d645b3421fa0d8f75bbd7c05877d62003c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0bfd799458876229510c94ea46c47ea8aafaa837a75ea936eb92f4f2be5a009c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfd799458876229510c94ea46c47ea8aafaa837a75ea936eb92f4f2be5a009c->enter($__internal_0bfd799458876229510c94ea46c47ea8aafaa837a75ea936eb92f4f2be5a009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annees"), "html", null, true);
        echo "
";
        
        $__internal_0bfd799458876229510c94ea46c47ea8aafaa837a75ea936eb92f4f2be5a009c->leave($__internal_0bfd799458876229510c94ea46c47ea8aafaa837a75ea936eb92f4f2be5a009c_prof);

        
        $__internal_3723a04709384a18937e4a49e9da4d645b3421fa0d8f75bbd7c05877d62003c2->leave($__internal_3723a04709384a18937e4a49e9da4d645b3421fa0d8f75bbd7c05877d62003c2_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_ad356e3bb4b1eaa8cef4357f6387b7feffbbcdca140d86046fa5afdf15fe25cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad356e3bb4b1eaa8cef4357f6387b7feffbbcdca140d86046fa5afdf15fe25cf->enter($__internal_ad356e3bb4b1eaa8cef4357f6387b7feffbbcdca140d86046fa5afdf15fe25cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_9270160da8e2ee2f5b8310f60d975e202fd27a959c3b7e0a661ee1e0b4da53c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9270160da8e2ee2f5b8310f60d975e202fd27a959c3b7e0a661ee1e0b4da53c8->enter($__internal_9270160da8e2ee2f5b8310f60d975e202fd27a959c3b7e0a661ee1e0b4da53c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Niveau</th>
                    <th>Specialité</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : $this->getContext($context, "annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["annee"]) {
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "nom", array()), "html", null, true);
            echo " </td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "niveau", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "specialite", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_9270160da8e2ee2f5b8310f60d975e202fd27a959c3b7e0a661ee1e0b4da53c8->leave($__internal_9270160da8e2ee2f5b8310f60d975e202fd27a959c3b7e0a661ee1e0b4da53c8_prof);

        
        $__internal_ad356e3bb4b1eaa8cef4357f6387b7feffbbcdca140d86046fa5afdf15fe25cf->leave($__internal_ad356e3bb4b1eaa8cef4357f6387b7feffbbcdca140d86046fa5afdf15fe25cf_prof);

    }

    public function getTemplateName()
    {
        return ":anneesViews:listAnnees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  122 => 31,  114 => 26,  109 => 24,  105 => 23,  101 => 22,  98 => 21,  94 => 20,  87 => 16,  83 => 15,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseListSuper.html.twig' %}

{% block title %}
    {{'list'|trans}} {{'annees'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Niveau</th>
                    <th>Specialité</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for annee in annees %}
                    <tr>
                        <td>{{ annee.nom}} </td>
                        <td>{{ annee.niveau}}</td>
                        <td>{{ annee.specialite}}</td>
                        <td>
                            <a href=\"{{ path('editAnnee',{'id':annee.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeAnnee',{'id':annee.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}
", ":anneesViews:listAnnees.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/anneesViews/listAnnees.html.twig");
    }
}
