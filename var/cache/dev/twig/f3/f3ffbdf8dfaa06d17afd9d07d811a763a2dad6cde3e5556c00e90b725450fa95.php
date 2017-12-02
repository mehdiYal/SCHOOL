<?php

/* parentsViews/listParents.html.twig */
class __TwigTemplate_5a0e4e1e48556099764d77c94977c8e9fb4896215cbb261008b6fb57d8f6ecaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "parentsViews/listParents.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a8f6c42ecb5df9d43eb7eabfcbc08f2599fadd7508c20876623d22a2c750a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8f6c42ecb5df9d43eb7eabfcbc08f2599fadd7508c20876623d22a2c750a00->enter($__internal_1a8f6c42ecb5df9d43eb7eabfcbc08f2599fadd7508c20876623d22a2c750a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $__internal_b2e7b514ba8f97ddb54a3bb1641f6e0ac5b6416a1f2ccd4867f1da189b2f1820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e7b514ba8f97ddb54a3bb1641f6e0ac5b6416a1f2ccd4867f1da189b2f1820->enter($__internal_b2e7b514ba8f97ddb54a3bb1641f6e0ac5b6416a1f2ccd4867f1da189b2f1820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a8f6c42ecb5df9d43eb7eabfcbc08f2599fadd7508c20876623d22a2c750a00->leave($__internal_1a8f6c42ecb5df9d43eb7eabfcbc08f2599fadd7508c20876623d22a2c750a00_prof);

        
        $__internal_b2e7b514ba8f97ddb54a3bb1641f6e0ac5b6416a1f2ccd4867f1da189b2f1820->leave($__internal_b2e7b514ba8f97ddb54a3bb1641f6e0ac5b6416a1f2ccd4867f1da189b2f1820_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a73a0edee6e9cacc79493389e85ab1666002809cc9f9aafdf04b34c6802d45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a73a0edee6e9cacc79493389e85ab1666002809cc9f9aafdf04b34c6802d45c->enter($__internal_0a73a0edee6e9cacc79493389e85ab1666002809cc9f9aafdf04b34c6802d45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e30d0453db08a56627876f24ee6cf33538c146dfab00c435fe74c629b75bfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e30d0453db08a56627876f24ee6cf33538c146dfab00c435fe74c629b75bfc8->enter($__internal_3e30d0453db08a56627876f24ee6cf33538c146dfab00c435fe74c629b75bfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_3e30d0453db08a56627876f24ee6cf33538c146dfab00c435fe74c629b75bfc8->leave($__internal_3e30d0453db08a56627876f24ee6cf33538c146dfab00c435fe74c629b75bfc8_prof);

        
        $__internal_0a73a0edee6e9cacc79493389e85ab1666002809cc9f9aafdf04b34c6802d45c->leave($__internal_0a73a0edee6e9cacc79493389e85ab1666002809cc9f9aafdf04b34c6802d45c_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c512be91da57068d5cdee4c9cf633731892ad64569522047b013e637e75bcdfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c512be91da57068d5cdee4c9cf633731892ad64569522047b013e637e75bcdfe->enter($__internal_c512be91da57068d5cdee4c9cf633731892ad64569522047b013e637e75bcdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_06ab6f316c9cbdd91e610fe24754b041a6ea8dc7dbb6a8aa699565c15118f1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ab6f316c9cbdd91e610fe24754b041a6ea8dc7dbb6a8aa699565c15118f1eb->enter($__internal_06ab6f316c9cbdd91e610fe24754b041a6ea8dc7dbb6a8aa699565c15118f1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["parent"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent"], "eleves", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["e"], "nom", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
                echo "</a></li>\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_06ab6f316c9cbdd91e610fe24754b041a6ea8dc7dbb6a8aa699565c15118f1eb->leave($__internal_06ab6f316c9cbdd91e610fe24754b041a6ea8dc7dbb6a8aa699565c15118f1eb_prof);

        
        $__internal_c512be91da57068d5cdee4c9cf633731892ad64569522047b013e637e75bcdfe->leave($__internal_c512be91da57068d5cdee4c9cf633731892ad64569522047b013e637e75bcdfe_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/listParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 49,  152 => 43,  144 => 38,  136 => 33,  131 => 30,  118 => 28,  114 => 27,  106 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t{{'list'|trans}} {{'parents'|trans}}
{% endblock %}

{% block bodyList %}

\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for parent in app.user.ecole.parents %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ parent.nom|upper}} {{ parent.prenom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t{% for e in parent.eleves %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('profileEleve',{'id':e.id})}}\">{{ e.nom|upper}} {{ e.prenom}}</a></li>\t
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %} ", "parentsViews/listParents.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/parentsViews/listParents.html.twig");
    }
}
