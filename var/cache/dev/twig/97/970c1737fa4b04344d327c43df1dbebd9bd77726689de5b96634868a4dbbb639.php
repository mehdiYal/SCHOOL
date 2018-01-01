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
        $__internal_6e504d2b5020f1f17328b5e8cc04fc2faa006afa2214571ce42eb326163fd959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e504d2b5020f1f17328b5e8cc04fc2faa006afa2214571ce42eb326163fd959->enter($__internal_6e504d2b5020f1f17328b5e8cc04fc2faa006afa2214571ce42eb326163fd959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_6683f16b0978c0101dbd9777921879378f764bd79c61e085795eedfef5bddb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6683f16b0978c0101dbd9777921879378f764bd79c61e085795eedfef5bddb20->enter($__internal_6683f16b0978c0101dbd9777921879378f764bd79c61e085795eedfef5bddb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e504d2b5020f1f17328b5e8cc04fc2faa006afa2214571ce42eb326163fd959->leave($__internal_6e504d2b5020f1f17328b5e8cc04fc2faa006afa2214571ce42eb326163fd959_prof);

        
        $__internal_6683f16b0978c0101dbd9777921879378f764bd79c61e085795eedfef5bddb20->leave($__internal_6683f16b0978c0101dbd9777921879378f764bd79c61e085795eedfef5bddb20_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82842c1ef6e761bbe9ed2a2c0a39fd29b8e7be919325815aa5859dee0dc4ad7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82842c1ef6e761bbe9ed2a2c0a39fd29b8e7be919325815aa5859dee0dc4ad7e->enter($__internal_82842c1ef6e761bbe9ed2a2c0a39fd29b8e7be919325815aa5859dee0dc4ad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_229d6efbd6dd97b2d7d2c9e86b6420f49956ae719b0e7adf41f2d7325e819a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229d6efbd6dd97b2d7d2c9e86b6420f49956ae719b0e7adf41f2d7325e819a0a->enter($__internal_229d6efbd6dd97b2d7d2c9e86b6420f49956ae719b0e7adf41f2d7325e819a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "
";
        
        $__internal_229d6efbd6dd97b2d7d2c9e86b6420f49956ae719b0e7adf41f2d7325e819a0a->leave($__internal_229d6efbd6dd97b2d7d2c9e86b6420f49956ae719b0e7adf41f2d7325e819a0a_prof);

        
        $__internal_82842c1ef6e761bbe9ed2a2c0a39fd29b8e7be919325815aa5859dee0dc4ad7e->leave($__internal_82842c1ef6e761bbe9ed2a2c0a39fd29b8e7be919325815aa5859dee0dc4ad7e_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_3ce73f46bf8efb33b8c3c5bdb20216829ed5b40f39a8425943506db2d4632032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce73f46bf8efb33b8c3c5bdb20216829ed5b40f39a8425943506db2d4632032->enter($__internal_3ce73f46bf8efb33b8c3c5bdb20216829ed5b40f39a8425943506db2d4632032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_f5777c9ecbab0b5ef1d9a401a1ea9034fba6f0cdd18b742ded55da971cca7d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5777c9ecbab0b5ef1d9a401a1ea9034fba6f0cdd18b742ded55da971cca7d04->enter($__internal_f5777c9ecbab0b5ef1d9a401a1ea9034fba6f0cdd18b742ded55da971cca7d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_f5777c9ecbab0b5ef1d9a401a1ea9034fba6f0cdd18b742ded55da971cca7d04->leave($__internal_f5777c9ecbab0b5ef1d9a401a1ea9034fba6f0cdd18b742ded55da971cca7d04_prof);

        
        $__internal_3ce73f46bf8efb33b8c3c5bdb20216829ed5b40f39a8425943506db2d4632032->leave($__internal_3ce73f46bf8efb33b8c3c5bdb20216829ed5b40f39a8425943506db2d4632032_prof);

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
