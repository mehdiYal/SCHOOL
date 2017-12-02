<?php

/* matieresViews/listMatieres.html.twig */
class __TwigTemplate_801bb1405c4eda18f17f055c608f4dccef9de220b2f8b56692c86408c19211b7 extends Twig_Template
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
        $__internal_119699a7c7f3c212a8f2edf74a844a162402b675b107c856ec8354c4db923081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119699a7c7f3c212a8f2edf74a844a162402b675b107c856ec8354c4db923081->enter($__internal_119699a7c7f3c212a8f2edf74a844a162402b675b107c856ec8354c4db923081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $__internal_d7e8e521fa45f6c292022f4b5058e3f815ff9ccba18dcf9993d59be3b230672a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e8e521fa45f6c292022f4b5058e3f815ff9ccba18dcf9993d59be3b230672a->enter($__internal_d7e8e521fa45f6c292022f4b5058e3f815ff9ccba18dcf9993d59be3b230672a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_119699a7c7f3c212a8f2edf74a844a162402b675b107c856ec8354c4db923081->leave($__internal_119699a7c7f3c212a8f2edf74a844a162402b675b107c856ec8354c4db923081_prof);

        
        $__internal_d7e8e521fa45f6c292022f4b5058e3f815ff9ccba18dcf9993d59be3b230672a->leave($__internal_d7e8e521fa45f6c292022f4b5058e3f815ff9ccba18dcf9993d59be3b230672a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d59612b0e377f7fba6165e589fb797092d6ed8fa3385296ca99f9f1a8319391f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59612b0e377f7fba6165e589fb797092d6ed8fa3385296ca99f9f1a8319391f->enter($__internal_d59612b0e377f7fba6165e589fb797092d6ed8fa3385296ca99f9f1a8319391f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26d157dc4bf095731682172cd4ac6576af4bb24981407dc05b9d1ca7b945fc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d157dc4bf095731682172cd4ac6576af4bb24981407dc05b9d1ca7b945fc29->enter($__internal_26d157dc4bf095731682172cd4ac6576af4bb24981407dc05b9d1ca7b945fc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "
";
        
        $__internal_26d157dc4bf095731682172cd4ac6576af4bb24981407dc05b9d1ca7b945fc29->leave($__internal_26d157dc4bf095731682172cd4ac6576af4bb24981407dc05b9d1ca7b945fc29_prof);

        
        $__internal_d59612b0e377f7fba6165e589fb797092d6ed8fa3385296ca99f9f1a8319391f->leave($__internal_d59612b0e377f7fba6165e589fb797092d6ed8fa3385296ca99f9f1a8319391f_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_958be3eeb5a901c22665469d62ed2507e1bc08ada7ce5622118dc9318310f4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958be3eeb5a901c22665469d62ed2507e1bc08ada7ce5622118dc9318310f4c1->enter($__internal_958be3eeb5a901c22665469d62ed2507e1bc08ada7ce5622118dc9318310f4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_b76357f2f5864031d4f73873878c80510362705bf2f92507fbdaa5317697540a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76357f2f5864031d4f73873878c80510362705bf2f92507fbdaa5317697540a->enter($__internal_b76357f2f5864031d4f73873878c80510362705bf2f92507fbdaa5317697540a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? $this->getContext($context, "matieres")));
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
        
        $__internal_b76357f2f5864031d4f73873878c80510362705bf2f92507fbdaa5317697540a->leave($__internal_b76357f2f5864031d4f73873878c80510362705bf2f92507fbdaa5317697540a_prof);

        
        $__internal_958be3eeb5a901c22665469d62ed2507e1bc08ada7ce5622118dc9318310f4c1->leave($__internal_958be3eeb5a901c22665469d62ed2507e1bc08ada7ce5622118dc9318310f4c1_prof);

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
{% endblock %}
", "matieresViews/listMatieres.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/matieresViews/listMatieres.html.twig");
    }
}
