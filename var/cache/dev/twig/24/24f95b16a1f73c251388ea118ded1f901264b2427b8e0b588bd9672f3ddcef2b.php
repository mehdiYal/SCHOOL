<?php

/* :matieresViews:listMatieres.html.twig */
class __TwigTemplate_afc14e46b3ad334e4dbd2f1d00d71f33b8a47a5ad09d0e29521d0db520c9b2ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", ":matieresViews:listMatieres.html.twig", 1);
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
        $__internal_fd3ca185f6721998a7a17154a21705f9fcf6004c43496b3a2947138b7bf1c90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3ca185f6721998a7a17154a21705f9fcf6004c43496b3a2947138b7bf1c90f->enter($__internal_fd3ca185f6721998a7a17154a21705f9fcf6004c43496b3a2947138b7bf1c90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_8e15e865c0c11fade1e17af703c7f418022cf91d1f7dc04d3c45ad0232d72544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e15e865c0c11fade1e17af703c7f418022cf91d1f7dc04d3c45ad0232d72544->enter($__internal_8e15e865c0c11fade1e17af703c7f418022cf91d1f7dc04d3c45ad0232d72544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd3ca185f6721998a7a17154a21705f9fcf6004c43496b3a2947138b7bf1c90f->leave($__internal_fd3ca185f6721998a7a17154a21705f9fcf6004c43496b3a2947138b7bf1c90f_prof);

        
        $__internal_8e15e865c0c11fade1e17af703c7f418022cf91d1f7dc04d3c45ad0232d72544->leave($__internal_8e15e865c0c11fade1e17af703c7f418022cf91d1f7dc04d3c45ad0232d72544_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf9f7bebf95f38aaa86064469c086bee59ef2a56f8e051f864ddf10f7d0448b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9f7bebf95f38aaa86064469c086bee59ef2a56f8e051f864ddf10f7d0448b0->enter($__internal_bf9f7bebf95f38aaa86064469c086bee59ef2a56f8e051f864ddf10f7d0448b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_430faaa3f4f96ed63cca4572bddde0f3a4684c2f5ed392a6ff8d4544a04d958f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430faaa3f4f96ed63cca4572bddde0f3a4684c2f5ed392a6ff8d4544a04d958f->enter($__internal_430faaa3f4f96ed63cca4572bddde0f3a4684c2f5ed392a6ff8d4544a04d958f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "
";
        
        $__internal_430faaa3f4f96ed63cca4572bddde0f3a4684c2f5ed392a6ff8d4544a04d958f->leave($__internal_430faaa3f4f96ed63cca4572bddde0f3a4684c2f5ed392a6ff8d4544a04d958f_prof);

        
        $__internal_bf9f7bebf95f38aaa86064469c086bee59ef2a56f8e051f864ddf10f7d0448b0->leave($__internal_bf9f7bebf95f38aaa86064469c086bee59ef2a56f8e051f864ddf10f7d0448b0_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_7e8d3e8540477d3422a2465c3039e23a67c35288579659f24804fcd48df8efe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8d3e8540477d3422a2465c3039e23a67c35288579659f24804fcd48df8efe4->enter($__internal_7e8d3e8540477d3422a2465c3039e23a67c35288579659f24804fcd48df8efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_374ab52d1977b0f36b7be0459e24e3b9039caf83b4fa175cea27b850f606fb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374ab52d1977b0f36b7be0459e24e3b9039caf83b4fa175cea27b850f606fb0a->enter($__internal_374ab52d1977b0f36b7be0459e24e3b9039caf83b4fa175cea27b850f606fb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_374ab52d1977b0f36b7be0459e24e3b9039caf83b4fa175cea27b850f606fb0a->leave($__internal_374ab52d1977b0f36b7be0459e24e3b9039caf83b4fa175cea27b850f606fb0a_prof);

        
        $__internal_7e8d3e8540477d3422a2465c3039e23a67c35288579659f24804fcd48df8efe4->leave($__internal_7e8d3e8540477d3422a2465c3039e23a67c35288579659f24804fcd48df8efe4_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:listMatieres.html.twig";
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
{% endblock %}", ":matieresViews:listMatieres.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/matieresViews/listMatieres.html.twig");
    }
}
