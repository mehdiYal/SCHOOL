<?php

/* :schoolsViews:listSchools.html.twig */
class __TwigTemplate_923a09d4f07bb83d8831f1bd28577b781f44b2d55aceb7bd6683f230cddc487d extends Twig_Template
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
        $__internal_a30e29f62de11e917bc809fc26da93bbf5a6e918dcaaa17c1c091104c226090b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30e29f62de11e917bc809fc26da93bbf5a6e918dcaaa17c1c091104c226090b->enter($__internal_a30e29f62de11e917bc809fc26da93bbf5a6e918dcaaa17c1c091104c226090b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_81c8c4a146d6f51dad193c0b3a42353200047745828ec0573e650735e4d98133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c8c4a146d6f51dad193c0b3a42353200047745828ec0573e650735e4d98133->enter($__internal_81c8c4a146d6f51dad193c0b3a42353200047745828ec0573e650735e4d98133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30e29f62de11e917bc809fc26da93bbf5a6e918dcaaa17c1c091104c226090b->leave($__internal_a30e29f62de11e917bc809fc26da93bbf5a6e918dcaaa17c1c091104c226090b_prof);

        
        $__internal_81c8c4a146d6f51dad193c0b3a42353200047745828ec0573e650735e4d98133->leave($__internal_81c8c4a146d6f51dad193c0b3a42353200047745828ec0573e650735e4d98133_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c669b468744617983ac83d2a732d5f71bd824337a169736b48a94e597334c6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c669b468744617983ac83d2a732d5f71bd824337a169736b48a94e597334c6a9->enter($__internal_c669b468744617983ac83d2a732d5f71bd824337a169736b48a94e597334c6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9a91452e100a357ad8d3b62a1bba220a1e6d65a02b3b94f59d97b998be50fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a91452e100a357ad8d3b62a1bba220a1e6d65a02b3b94f59d97b998be50fbf->enter($__internal_d9a91452e100a357ad8d3b62a1bba220a1e6d65a02b3b94f59d97b998be50fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "
";
        
        $__internal_d9a91452e100a357ad8d3b62a1bba220a1e6d65a02b3b94f59d97b998be50fbf->leave($__internal_d9a91452e100a357ad8d3b62a1bba220a1e6d65a02b3b94f59d97b998be50fbf_prof);

        
        $__internal_c669b468744617983ac83d2a732d5f71bd824337a169736b48a94e597334c6a9->leave($__internal_c669b468744617983ac83d2a732d5f71bd824337a169736b48a94e597334c6a9_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_f16c0cd833c56f1b3b7f73d68a486c0b6a0c73c3a21a557dbfc3b795211a5db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16c0cd833c56f1b3b7f73d68a486c0b6a0c73c3a21a557dbfc3b795211a5db1->enter($__internal_f16c0cd833c56f1b3b7f73d68a486c0b6a0c73c3a21a557dbfc3b795211a5db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_ba81bcc780e3f7d2086ae5d44789543799f3703a49b301a71c03d2e5c14eb4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba81bcc780e3f7d2086ae5d44789543799f3703a49b301a71c03d2e5c14eb4da->enter($__internal_ba81bcc780e3f7d2086ae5d44789543799f3703a49b301a71c03d2e5c14eb4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_ba81bcc780e3f7d2086ae5d44789543799f3703a49b301a71c03d2e5c14eb4da->leave($__internal_ba81bcc780e3f7d2086ae5d44789543799f3703a49b301a71c03d2e5c14eb4da_prof);

        
        $__internal_f16c0cd833c56f1b3b7f73d68a486c0b6a0c73c3a21a557dbfc3b795211a5db1->leave($__internal_f16c0cd833c56f1b3b7f73d68a486c0b6a0c73c3a21a557dbfc3b795211a5db1_prof);

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
", ":schoolsViews:listSchools.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/schoolsViews/listSchools.html.twig");
    }
}
