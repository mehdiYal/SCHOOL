<?php

/* :schoolsViews:listSchools.html.twig */
class __TwigTemplate_8956076265d10d237180854017a183e3f919650ea889228529a3adde018bccd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", ":schoolsViews:listSchools.html.twig", 1);
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
        $__internal_0c727a153eae3e56750a6dbc3dc3504311518d1acbde36f46c95dcc3e98fe892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c727a153eae3e56750a6dbc3dc3504311518d1acbde36f46c95dcc3e98fe892->enter($__internal_0c727a153eae3e56750a6dbc3dc3504311518d1acbde36f46c95dcc3e98fe892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_bf9c073bb83728e8640ff3ad390dbf43145c1d5d003cbd160c70cf4290beb0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9c073bb83728e8640ff3ad390dbf43145c1d5d003cbd160c70cf4290beb0a8->enter($__internal_bf9c073bb83728e8640ff3ad390dbf43145c1d5d003cbd160c70cf4290beb0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c727a153eae3e56750a6dbc3dc3504311518d1acbde36f46c95dcc3e98fe892->leave($__internal_0c727a153eae3e56750a6dbc3dc3504311518d1acbde36f46c95dcc3e98fe892_prof);

        
        $__internal_bf9c073bb83728e8640ff3ad390dbf43145c1d5d003cbd160c70cf4290beb0a8->leave($__internal_bf9c073bb83728e8640ff3ad390dbf43145c1d5d003cbd160c70cf4290beb0a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bef8b409422431c7b792e6a1fd234d74bcd21361b45d7b7dcb7f6fe68a391a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef8b409422431c7b792e6a1fd234d74bcd21361b45d7b7dcb7f6fe68a391a54->enter($__internal_bef8b409422431c7b792e6a1fd234d74bcd21361b45d7b7dcb7f6fe68a391a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6a58b072a3077d0cc2a2984116b5b62723e1d6811de313293982e81a4216e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a58b072a3077d0cc2a2984116b5b62723e1d6811de313293982e81a4216e52->enter($__internal_b6a58b072a3077d0cc2a2984116b5b62723e1d6811de313293982e81a4216e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "
";
        
        $__internal_b6a58b072a3077d0cc2a2984116b5b62723e1d6811de313293982e81a4216e52->leave($__internal_b6a58b072a3077d0cc2a2984116b5b62723e1d6811de313293982e81a4216e52_prof);

        
        $__internal_bef8b409422431c7b792e6a1fd234d74bcd21361b45d7b7dcb7f6fe68a391a54->leave($__internal_bef8b409422431c7b792e6a1fd234d74bcd21361b45d7b7dcb7f6fe68a391a54_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_2ccf8b18593258841825f0b2d992cdbb73a632245cbdcb061cf5cb224ecd2133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccf8b18593258841825f0b2d992cdbb73a632245cbdcb061cf5cb224ecd2133->enter($__internal_2ccf8b18593258841825f0b2d992cdbb73a632245cbdcb061cf5cb224ecd2133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_5691b4a9f701866d87aaf5ff4c7e2b497766de962ba9313b10e3a845a1b99d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5691b4a9f701866d87aaf5ff4c7e2b497766de962ba9313b10e3a845a1b99d81->enter($__internal_5691b4a9f701866d87aaf5ff4c7e2b497766de962ba9313b10e3a845a1b99d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Code</th>
                    <th>adresse</th>
                    <th>telephone</th>
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
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "code", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "adresse", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-university\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_5691b4a9f701866d87aaf5ff4c7e2b497766de962ba9313b10e3a845a1b99d81->leave($__internal_5691b4a9f701866d87aaf5ff4c7e2b497766de962ba9313b10e3a845a1b99d81_prof);

        
        $__internal_2ccf8b18593258841825f0b2d992cdbb73a632245cbdcb061cf5cb224ecd2133->leave($__internal_2ccf8b18593258841825f0b2d992cdbb73a632245cbdcb061cf5cb224ecd2133_prof);

    }

    public function getTemplateName()
    {
        return ":schoolsViews:listSchools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  139 => 39,  131 => 34,  123 => 29,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    {{'list'|trans}} {{'schools'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Code</th>
                    <th>adresse</th>
                    <th>telephone</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for ecole in ecoles %}
                    <tr>
                        <td>{{ ecole.nom}}</td>
                        <td>{{ ecole.code}}</td>
                        <td>{{ ecole.adresse}}</td>
                        <td>{{ ecole.telephone}}</td>
                        <td>
                            <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">
                                <span class=\"fa fa-university\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}
", ":schoolsViews:listSchools.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/schoolsViews/listSchools.html.twig");
    }
}
