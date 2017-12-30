<?php

/* anneesViews/listAnnees.html.twig */
class __TwigTemplate_ef14d072bf603457f8232e2ecb208000c6df2b0071e4016ce2d9f16eca116c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", "anneesViews/listAnnees.html.twig", 1);
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
        $__internal_bf7b0f232d1d9c576b3cc33bc5faeaf5e558dcf84b9aa9b5e04b8c31722b0dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7b0f232d1d9c576b3cc33bc5faeaf5e558dcf84b9aa9b5e04b8c31722b0dc2->enter($__internal_bf7b0f232d1d9c576b3cc33bc5faeaf5e558dcf84b9aa9b5e04b8c31722b0dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $__internal_e378b398401797b732e4c49b29531657467369f50787c917be912339d2ad3f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e378b398401797b732e4c49b29531657467369f50787c917be912339d2ad3f6e->enter($__internal_e378b398401797b732e4c49b29531657467369f50787c917be912339d2ad3f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf7b0f232d1d9c576b3cc33bc5faeaf5e558dcf84b9aa9b5e04b8c31722b0dc2->leave($__internal_bf7b0f232d1d9c576b3cc33bc5faeaf5e558dcf84b9aa9b5e04b8c31722b0dc2_prof);

        
        $__internal_e378b398401797b732e4c49b29531657467369f50787c917be912339d2ad3f6e->leave($__internal_e378b398401797b732e4c49b29531657467369f50787c917be912339d2ad3f6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cfbe0cf249535d768e3db5608bea410c4bdb3ce28e6d352e9ff1f50f3f827ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cfbe0cf249535d768e3db5608bea410c4bdb3ce28e6d352e9ff1f50f3f827ed->enter($__internal_0cfbe0cf249535d768e3db5608bea410c4bdb3ce28e6d352e9ff1f50f3f827ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b939b674b9c33853fd3588797e1c5555bc96af2c8b43b8bcf6eca2a088b9c152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b939b674b9c33853fd3588797e1c5555bc96af2c8b43b8bcf6eca2a088b9c152->enter($__internal_b939b674b9c33853fd3588797e1c5555bc96af2c8b43b8bcf6eca2a088b9c152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annees"), "html", null, true);
        echo "
";
        
        $__internal_b939b674b9c33853fd3588797e1c5555bc96af2c8b43b8bcf6eca2a088b9c152->leave($__internal_b939b674b9c33853fd3588797e1c5555bc96af2c8b43b8bcf6eca2a088b9c152_prof);

        
        $__internal_0cfbe0cf249535d768e3db5608bea410c4bdb3ce28e6d352e9ff1f50f3f827ed->leave($__internal_0cfbe0cf249535d768e3db5608bea410c4bdb3ce28e6d352e9ff1f50f3f827ed_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_ee4aa5829a4d4166c27d0e3ca52bfffd87b904781da9fbbcf9fb4ae965025259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4aa5829a4d4166c27d0e3ca52bfffd87b904781da9fbbcf9fb4ae965025259->enter($__internal_ee4aa5829a4d4166c27d0e3ca52bfffd87b904781da9fbbcf9fb4ae965025259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4f0e4de39fab9dce614b148832c0dd3cf6cce04f767dc752d2a1047dc85a274d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0e4de39fab9dce614b148832c0dd3cf6cce04f767dc752d2a1047dc85a274d->enter($__internal_4f0e4de39fab9dce614b148832c0dd3cf6cce04f767dc752d2a1047dc85a274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_4f0e4de39fab9dce614b148832c0dd3cf6cce04f767dc752d2a1047dc85a274d->leave($__internal_4f0e4de39fab9dce614b148832c0dd3cf6cce04f767dc752d2a1047dc85a274d_prof);

        
        $__internal_ee4aa5829a4d4166c27d0e3ca52bfffd87b904781da9fbbcf9fb4ae965025259->leave($__internal_ee4aa5829a4d4166c27d0e3ca52bfffd87b904781da9fbbcf9fb4ae965025259_prof);

    }

    public function getTemplateName()
    {
        return "anneesViews/listAnnees.html.twig";
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
", "anneesViews/listAnnees.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\anneesViews\\listAnnees.html.twig");
    }
}
