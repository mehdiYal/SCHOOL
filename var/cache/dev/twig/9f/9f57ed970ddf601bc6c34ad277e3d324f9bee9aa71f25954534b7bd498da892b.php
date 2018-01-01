<?php

/* :absence:show.html.twig */
class __TwigTemplate_24e6c1ed0277ea1c105e68593b01c963c5771fbaa4b2212fc0374b83ef3fe6a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseParent.html.twig", ":absence:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e7d9b3895565101e34a8dbbbe94e02548246540069dd0541f44269fd0345280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7d9b3895565101e34a8dbbbe94e02548246540069dd0541f44269fd0345280->enter($__internal_5e7d9b3895565101e34a8dbbbe94e02548246540069dd0541f44269fd0345280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:show.html.twig"));

        $__internal_e66548e68e6c4022df5ecf75a695c07ff514a2827ca48a3e5c935496399806db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66548e68e6c4022df5ecf75a695c07ff514a2827ca48a3e5c935496399806db->enter($__internal_e66548e68e6c4022df5ecf75a695c07ff514a2827ca48a3e5c935496399806db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7d9b3895565101e34a8dbbbe94e02548246540069dd0541f44269fd0345280->leave($__internal_5e7d9b3895565101e34a8dbbbe94e02548246540069dd0541f44269fd0345280_prof);

        
        $__internal_e66548e68e6c4022df5ecf75a695c07ff514a2827ca48a3e5c935496399806db->leave($__internal_e66548e68e6c4022df5ecf75a695c07ff514a2827ca48a3e5c935496399806db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da84c85b9c3809d08339321c1a8b825e6637626f746f06c37d89a0412c27aece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da84c85b9c3809d08339321c1a8b825e6637626f746f06c37d89a0412c27aece->enter($__internal_da84c85b9c3809d08339321c1a8b825e6637626f746f06c37d89a0412c27aece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b733ea3fade9160cad70f5b3e3cd90b825794661b8672ca2d70bad0e5c52d82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b733ea3fade9160cad70f5b3e3cd90b825794661b8672ca2d70bad0e5c52d82c->enter($__internal_b733ea3fade9160cad70f5b3e3cd90b825794661b8672ca2d70bad0e5c52d82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-content-wrap\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Lis des absences et des retards de ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo "</h3>
                <div class=\"table-responsive\">
                    <table id=\"customers2\" class=\"table \">
                        <thead>
                            <tr>
                                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.type"), "html", null, true);
        echo "</th>
                                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.date"), "html", null, true);
        echo "</th>
                                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.comment"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "absences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 19
            echo "                            <tr>
                                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["absence"], "type", array())), "html", null, true);
            echo "</td>
                                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "commentaire", array()), "html", null, true);
            echo "</td>
                            </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>          
    </div>

";
        
        $__internal_b733ea3fade9160cad70f5b3e3cd90b825794661b8672ca2d70bad0e5c52d82c->leave($__internal_b733ea3fade9160cad70f5b3e3cd90b825794661b8672ca2d70bad0e5c52d82c_prof);

        
        $__internal_da84c85b9c3809d08339321c1a8b825e6637626f746f06c37d89a0412c27aece->leave($__internal_da84c85b9c3809d08339321c1a8b825e6637626f746f06c37d89a0412c27aece_prof);

    }

    public function getTemplateName()
    {
        return ":absence:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  94 => 22,  90 => 21,  86 => 20,  83 => 19,  79 => 18,  72 => 14,  68 => 13,  64 => 12,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseParent.html.twig' %}

{% block body %}
    <div class=\"page-content-wrap\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Lis des absences et des retards de {{eleve.nom}} {{eleve.prenom}}</h3>
                <div class=\"table-responsive\">
                    <table id=\"customers2\" class=\"table \">
                        <thead>
                            <tr>
                                <th>{{'global.type'|trans}}</th>
                                <th>{{'absence.date'|trans}}</th>
                                <th>{{'form.comment'|trans}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for absence in eleve.absences %}
                            <tr>
                                <td>{{absence.type | upper}}</td>
                                <td>{{absence.date|date('d/m/Y')}}</td>
                                <td>{{absence.commentaire}}</td>
                            </tr>
                                {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>          
    </div>

{% endblock %}", ":absence:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/absence/show.html.twig");
    }
}
