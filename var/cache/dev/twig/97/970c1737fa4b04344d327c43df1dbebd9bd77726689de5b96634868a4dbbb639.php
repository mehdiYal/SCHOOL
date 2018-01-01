<?php

/* :matieresViews:listMatieres.html.twig */
class __TwigTemplate_d6ad194bb9ab1e014689c5b6cc74875fc7205f0fc45b24329572bd5de2530456 extends Twig_Template
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
        $__internal_35e4e20dacca63a335f5132289e74ccda37e62f601694d99c72dcc8dee3b8e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e4e20dacca63a335f5132289e74ccda37e62f601694d99c72dcc8dee3b8e39->enter($__internal_35e4e20dacca63a335f5132289e74ccda37e62f601694d99c72dcc8dee3b8e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_d8149d48f73d72b626e84085368f2a49b52771c2d45ca9bd8e85843e3710e07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8149d48f73d72b626e84085368f2a49b52771c2d45ca9bd8e85843e3710e07b->enter($__internal_d8149d48f73d72b626e84085368f2a49b52771c2d45ca9bd8e85843e3710e07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e4e20dacca63a335f5132289e74ccda37e62f601694d99c72dcc8dee3b8e39->leave($__internal_35e4e20dacca63a335f5132289e74ccda37e62f601694d99c72dcc8dee3b8e39_prof);

        
        $__internal_d8149d48f73d72b626e84085368f2a49b52771c2d45ca9bd8e85843e3710e07b->leave($__internal_d8149d48f73d72b626e84085368f2a49b52771c2d45ca9bd8e85843e3710e07b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f18f8a25fe4ec93a0cdd01586e9e1a0d6a78f8113874eda83b00f39f11a36b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f18f8a25fe4ec93a0cdd01586e9e1a0d6a78f8113874eda83b00f39f11a36b2->enter($__internal_3f18f8a25fe4ec93a0cdd01586e9e1a0d6a78f8113874eda83b00f39f11a36b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b82aeca4fddee8e8e7aa225f5e5d676b40db87349a3df7bce89f915f475ec1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82aeca4fddee8e8e7aa225f5e5d676b40db87349a3df7bce89f915f475ec1a1->enter($__internal_b82aeca4fddee8e8e7aa225f5e5d676b40db87349a3df7bce89f915f475ec1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "
";
        
        $__internal_b82aeca4fddee8e8e7aa225f5e5d676b40db87349a3df7bce89f915f475ec1a1->leave($__internal_b82aeca4fddee8e8e7aa225f5e5d676b40db87349a3df7bce89f915f475ec1a1_prof);

        
        $__internal_3f18f8a25fe4ec93a0cdd01586e9e1a0d6a78f8113874eda83b00f39f11a36b2->leave($__internal_3f18f8a25fe4ec93a0cdd01586e9e1a0d6a78f8113874eda83b00f39f11a36b2_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_72704cfdcf6e467b1bbc87937f212bf2dac1dbabf859234a04cc0170131f0e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72704cfdcf6e467b1bbc87937f212bf2dac1dbabf859234a04cc0170131f0e12->enter($__internal_72704cfdcf6e467b1bbc87937f212bf2dac1dbabf859234a04cc0170131f0e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_513aa8ce10eaa2f9bdca1a1b7c4ed59e09bdb9a9b6919072020a156a2263069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513aa8ce10eaa2f9bdca1a1b7c4ed59e09bdb9a9b6919072020a156a2263069b->enter($__internal_513aa8ce10eaa2f9bdca1a1b7c4ed59e09bdb9a9b6919072020a156a2263069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_513aa8ce10eaa2f9bdca1a1b7c4ed59e09bdb9a9b6919072020a156a2263069b->leave($__internal_513aa8ce10eaa2f9bdca1a1b7c4ed59e09bdb9a9b6919072020a156a2263069b_prof);

        
        $__internal_72704cfdcf6e467b1bbc87937f212bf2dac1dbabf859234a04cc0170131f0e12->leave($__internal_72704cfdcf6e467b1bbc87937f212bf2dac1dbabf859234a04cc0170131f0e12_prof);

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
