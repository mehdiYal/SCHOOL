<?php

/* matieresViews/listMatieres.html.twig */
class __TwigTemplate_2cee12acc29825c02385f9e993d0e8a70f27d4ff210fec342a4938a0d3b9d0b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", "matieresViews/listMatieres.html.twig", 1);
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
        $__internal_70529de55beb9a9bc0e77ba0c9cea440df7fcd6ef46480965155d31d8e83af9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70529de55beb9a9bc0e77ba0c9cea440df7fcd6ef46480965155d31d8e83af9e->enter($__internal_70529de55beb9a9bc0e77ba0c9cea440df7fcd6ef46480965155d31d8e83af9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $__internal_2b60a2e7eb944b1cd71cb4627053c6a60b2a9ab9c05989fa9c957363132884fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b60a2e7eb944b1cd71cb4627053c6a60b2a9ab9c05989fa9c957363132884fd->enter($__internal_2b60a2e7eb944b1cd71cb4627053c6a60b2a9ab9c05989fa9c957363132884fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70529de55beb9a9bc0e77ba0c9cea440df7fcd6ef46480965155d31d8e83af9e->leave($__internal_70529de55beb9a9bc0e77ba0c9cea440df7fcd6ef46480965155d31d8e83af9e_prof);

        
        $__internal_2b60a2e7eb944b1cd71cb4627053c6a60b2a9ab9c05989fa9c957363132884fd->leave($__internal_2b60a2e7eb944b1cd71cb4627053c6a60b2a9ab9c05989fa9c957363132884fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7d720fbca8b87e69dda6cca2b3fe23f2cfc5f90027e56cb76ed6a1e221616ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d720fbca8b87e69dda6cca2b3fe23f2cfc5f90027e56cb76ed6a1e221616ee->enter($__internal_c7d720fbca8b87e69dda6cca2b3fe23f2cfc5f90027e56cb76ed6a1e221616ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d7c1adeab2e64107df3ffd945be32282acf87cf351e49ad85fb19698a95679a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7c1adeab2e64107df3ffd945be32282acf87cf351e49ad85fb19698a95679a->enter($__internal_0d7c1adeab2e64107df3ffd945be32282acf87cf351e49ad85fb19698a95679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "
";
        
        $__internal_0d7c1adeab2e64107df3ffd945be32282acf87cf351e49ad85fb19698a95679a->leave($__internal_0d7c1adeab2e64107df3ffd945be32282acf87cf351e49ad85fb19698a95679a_prof);

        
        $__internal_c7d720fbca8b87e69dda6cca2b3fe23f2cfc5f90027e56cb76ed6a1e221616ee->leave($__internal_c7d720fbca8b87e69dda6cca2b3fe23f2cfc5f90027e56cb76ed6a1e221616ee_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c8dc2153600429566d1865b0706a48be2436e36da831470ef288a9f40dc8d6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8dc2153600429566d1865b0706a48be2436e36da831470ef288a9f40dc8d6c8->enter($__internal_c8dc2153600429566d1865b0706a48be2436e36da831470ef288a9f40dc8d6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_22fb84e6713f1e29e04178af89b6ea6bdcf88e009637835ae60bb63d3e298aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fb84e6713f1e29e04178af89b6ea6bdcf88e009637835ae60bb63d3e298aa5->enter($__internal_22fb84e6713f1e29e04178af89b6ea6bdcf88e009637835ae60bb63d3e298aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Description</th>
                    <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 20
            echo "                    <tr>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
            echo " </td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "description", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_22fb84e6713f1e29e04178af89b6ea6bdcf88e009637835ae60bb63d3e298aa5->leave($__internal_22fb84e6713f1e29e04178af89b6ea6bdcf88e009637835ae60bb63d3e298aa5_prof);

        
        $__internal_c8dc2153600429566d1865b0706a48be2436e36da831470ef288a9f40dc8d6c8->leave($__internal_c8dc2153600429566d1865b0706a48be2436e36da831470ef288a9f40dc8d6c8_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/listMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  117 => 29,  109 => 24,  104 => 22,  100 => 21,  97 => 20,  93 => 19,  86 => 15,  82 => 14,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    {{'list'|trans}} {{'matiere'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Description</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for matiere in matieres %}
                    <tr>
                        <td>{{ matiere.nom}} </td>
                        <td>{{ matiere.description}}</td>
                        <td>
                            <a href=\"{{ path('editMatiere',{'id':matiere.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeMatiere',{'id':matiere.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}", "matieresViews/listMatieres.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\matieresViews\\listMatieres.html.twig");
    }
}
