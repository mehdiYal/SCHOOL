<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_e2ee73f99c908f3da35be26e6f4e83e0362add6c700dcbbbe8a32f5dab13af6d extends Twig_Template
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
        $__internal_c745d3a44a077aeede57315446575b94898bc1a5a9b63e8c6fe69e953891475d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c745d3a44a077aeede57315446575b94898bc1a5a9b63e8c6fe69e953891475d->enter($__internal_c745d3a44a077aeede57315446575b94898bc1a5a9b63e8c6fe69e953891475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_6fa76161c0835ae3f8a2e9ed2e8bd491d485a5e28e63f3c1844a5c5e902edebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa76161c0835ae3f8a2e9ed2e8bd491d485a5e28e63f3c1844a5c5e902edebe->enter($__internal_6fa76161c0835ae3f8a2e9ed2e8bd491d485a5e28e63f3c1844a5c5e902edebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c745d3a44a077aeede57315446575b94898bc1a5a9b63e8c6fe69e953891475d->leave($__internal_c745d3a44a077aeede57315446575b94898bc1a5a9b63e8c6fe69e953891475d_prof);

        
        $__internal_6fa76161c0835ae3f8a2e9ed2e8bd491d485a5e28e63f3c1844a5c5e902edebe->leave($__internal_6fa76161c0835ae3f8a2e9ed2e8bd491d485a5e28e63f3c1844a5c5e902edebe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc8e841a22e5ffe2a9851e24a34e134d78a3c4c050c8bbcf8e3d89bbbf50b540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8e841a22e5ffe2a9851e24a34e134d78a3c4c050c8bbcf8e3d89bbbf50b540->enter($__internal_dc8e841a22e5ffe2a9851e24a34e134d78a3c4c050c8bbcf8e3d89bbbf50b540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ef23e235d1066d81d30004f2f74673d443f2ec0b1db40b356b87d9a8e31ac7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef23e235d1066d81d30004f2f74673d443f2ec0b1db40b356b87d9a8e31ac7d->enter($__internal_1ef23e235d1066d81d30004f2f74673d443f2ec0b1db40b356b87d9a8e31ac7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annees"), "html", null, true);
        echo "
";
        
        $__internal_1ef23e235d1066d81d30004f2f74673d443f2ec0b1db40b356b87d9a8e31ac7d->leave($__internal_1ef23e235d1066d81d30004f2f74673d443f2ec0b1db40b356b87d9a8e31ac7d_prof);

        
        $__internal_dc8e841a22e5ffe2a9851e24a34e134d78a3c4c050c8bbcf8e3d89bbbf50b540->leave($__internal_dc8e841a22e5ffe2a9851e24a34e134d78a3c4c050c8bbcf8e3d89bbbf50b540_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_48c63d4e5f7c154fe7d9b6a6f6beb4d208f634dfafcc49dbfeeeb684b88ccaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c63d4e5f7c154fe7d9b6a6f6beb4d208f634dfafcc49dbfeeeb684b88ccaae->enter($__internal_48c63d4e5f7c154fe7d9b6a6f6beb4d208f634dfafcc49dbfeeeb684b88ccaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4e625eff4b1dd7dc9dce95d5e45710836c6e9748f211ae4370a0e9f32b70f1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e625eff4b1dd7dc9dce95d5e45710836c6e9748f211ae4370a0e9f32b70f1c9->enter($__internal_4e625eff4b1dd7dc9dce95d5e45710836c6e9748f211ae4370a0e9f32b70f1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_4e625eff4b1dd7dc9dce95d5e45710836c6e9748f211ae4370a0e9f32b70f1c9->leave($__internal_4e625eff4b1dd7dc9dce95d5e45710836c6e9748f211ae4370a0e9f32b70f1c9_prof);

        
        $__internal_48c63d4e5f7c154fe7d9b6a6f6beb4d208f634dfafcc49dbfeeeb684b88ccaae->leave($__internal_48c63d4e5f7c154fe7d9b6a6f6beb4d208f634dfafcc49dbfeeeb684b88ccaae_prof);

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
