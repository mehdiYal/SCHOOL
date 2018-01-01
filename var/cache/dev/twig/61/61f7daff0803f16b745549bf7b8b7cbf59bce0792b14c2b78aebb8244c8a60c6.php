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
        $__internal_666f89fa89239f20fbe46d2fbd833b8fa7c85db8ad15cd5c77b2f0638f2272ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666f89fa89239f20fbe46d2fbd833b8fa7c85db8ad15cd5c77b2f0638f2272ee->enter($__internal_666f89fa89239f20fbe46d2fbd833b8fa7c85db8ad15cd5c77b2f0638f2272ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_067335982291a99c5b95848bf60498a28e93be1e5af5f72f2c0bc7ce0179b5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067335982291a99c5b95848bf60498a28e93be1e5af5f72f2c0bc7ce0179b5d2->enter($__internal_067335982291a99c5b95848bf60498a28e93be1e5af5f72f2c0bc7ce0179b5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666f89fa89239f20fbe46d2fbd833b8fa7c85db8ad15cd5c77b2f0638f2272ee->leave($__internal_666f89fa89239f20fbe46d2fbd833b8fa7c85db8ad15cd5c77b2f0638f2272ee_prof);

        
        $__internal_067335982291a99c5b95848bf60498a28e93be1e5af5f72f2c0bc7ce0179b5d2->leave($__internal_067335982291a99c5b95848bf60498a28e93be1e5af5f72f2c0bc7ce0179b5d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b3ebde5dbb60d298a1dc5725215e053d7aea38a1362fa1d8fe7ed4f568d7fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3ebde5dbb60d298a1dc5725215e053d7aea38a1362fa1d8fe7ed4f568d7fe4->enter($__internal_0b3ebde5dbb60d298a1dc5725215e053d7aea38a1362fa1d8fe7ed4f568d7fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c5dc8c9d9e294e43ba9fb7d0704eb8b3258d66c0b16e76a2b130ce1bd2d7f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5dc8c9d9e294e43ba9fb7d0704eb8b3258d66c0b16e76a2b130ce1bd2d7f54->enter($__internal_1c5dc8c9d9e294e43ba9fb7d0704eb8b3258d66c0b16e76a2b130ce1bd2d7f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "
";
        
        $__internal_1c5dc8c9d9e294e43ba9fb7d0704eb8b3258d66c0b16e76a2b130ce1bd2d7f54->leave($__internal_1c5dc8c9d9e294e43ba9fb7d0704eb8b3258d66c0b16e76a2b130ce1bd2d7f54_prof);

        
        $__internal_0b3ebde5dbb60d298a1dc5725215e053d7aea38a1362fa1d8fe7ed4f568d7fe4->leave($__internal_0b3ebde5dbb60d298a1dc5725215e053d7aea38a1362fa1d8fe7ed4f568d7fe4_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_a90d07c472f7ad3aa5d1f0f2088bd8030c93178515cd20fae9d6cb37364e539c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90d07c472f7ad3aa5d1f0f2088bd8030c93178515cd20fae9d6cb37364e539c->enter($__internal_a90d07c472f7ad3aa5d1f0f2088bd8030c93178515cd20fae9d6cb37364e539c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_e8482537f828da1df5db2219ef39d51ce8e0e478b57d60cd15873ea534833e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8482537f828da1df5db2219ef39d51ce8e0e478b57d60cd15873ea534833e78->enter($__internal_e8482537f828da1df5db2219ef39d51ce8e0e478b57d60cd15873ea534833e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_e8482537f828da1df5db2219ef39d51ce8e0e478b57d60cd15873ea534833e78->leave($__internal_e8482537f828da1df5db2219ef39d51ce8e0e478b57d60cd15873ea534833e78_prof);

        
        $__internal_a90d07c472f7ad3aa5d1f0f2088bd8030c93178515cd20fae9d6cb37364e539c->leave($__internal_a90d07c472f7ad3aa5d1f0f2088bd8030c93178515cd20fae9d6cb37364e539c_prof);

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
