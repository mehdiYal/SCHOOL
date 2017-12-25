<?php

/* :menusViews:listMenus.html.twig */
class __TwigTemplate_2be886a7e6ceb572bf3fc1a9d0a8a0cedb350736374e45f96fbf64b0d3760aed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":menusViews:listMenus.html.twig", 1);
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
        $__internal_92e455b9e93c26a07afea16a4ae4d6b09f7e83dc3f9301ec4a43af5e78d5f56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e455b9e93c26a07afea16a4ae4d6b09f7e83dc3f9301ec4a43af5e78d5f56d->enter($__internal_92e455b9e93c26a07afea16a4ae4d6b09f7e83dc3f9301ec4a43af5e78d5f56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $__internal_b1dc1d519ec6b8fb34338deb250c1a19218f1b0f4b11893ea77b2cb35db3984d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dc1d519ec6b8fb34338deb250c1a19218f1b0f4b11893ea77b2cb35db3984d->enter($__internal_b1dc1d519ec6b8fb34338deb250c1a19218f1b0f4b11893ea77b2cb35db3984d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92e455b9e93c26a07afea16a4ae4d6b09f7e83dc3f9301ec4a43af5e78d5f56d->leave($__internal_92e455b9e93c26a07afea16a4ae4d6b09f7e83dc3f9301ec4a43af5e78d5f56d_prof);

        
        $__internal_b1dc1d519ec6b8fb34338deb250c1a19218f1b0f4b11893ea77b2cb35db3984d->leave($__internal_b1dc1d519ec6b8fb34338deb250c1a19218f1b0f4b11893ea77b2cb35db3984d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b5b745e6b1b7175647cafe1f2d8c13003ee0c20a226aab6ec3016634179505d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5b745e6b1b7175647cafe1f2d8c13003ee0c20a226aab6ec3016634179505d->enter($__internal_7b5b745e6b1b7175647cafe1f2d8c13003ee0c20a226aab6ec3016634179505d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_746f1d26f10ac037772ff7a2052d989155172683d1c50e7e7241344a47c83b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746f1d26f10ac037772ff7a2052d989155172683d1c50e7e7241344a47c83b7f->enter($__internal_746f1d26f10ac037772ff7a2052d989155172683d1c50e7e7241344a47c83b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_746f1d26f10ac037772ff7a2052d989155172683d1c50e7e7241344a47c83b7f->leave($__internal_746f1d26f10ac037772ff7a2052d989155172683d1c50e7e7241344a47c83b7f_prof);

        
        $__internal_7b5b745e6b1b7175647cafe1f2d8c13003ee0c20a226aab6ec3016634179505d->leave($__internal_7b5b745e6b1b7175647cafe1f2d8c13003ee0c20a226aab6ec3016634179505d_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_b69963fc585d1dd15f67e6bee3d914703b4735eeb493658d45528cf3b8d1d00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69963fc585d1dd15f67e6bee3d914703b4735eeb493658d45528cf3b8d1d00f->enter($__internal_b69963fc585d1dd15f67e6bee3d914703b4735eeb493658d45528cf3b8d1d00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_80841f7b1b22f31ed3aaf47d056f1744fce4e3ad88b9446ba18b052836d56303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80841f7b1b22f31ed3aaf47d056f1744fce4e3ad88b9446ba18b052836d56303->enter($__internal_80841f7b1b22f31ed3aaf47d056f1744fce4e3ad88b9446ba18b052836d56303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                \t<th>ID</th>
                    <th>Jour</th>
                    <th>Menu</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "menus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "jour", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "menu", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_80841f7b1b22f31ed3aaf47d056f1744fce4e3ad88b9446ba18b052836d56303->leave($__internal_80841f7b1b22f31ed3aaf47d056f1744fce4e3ad88b9446ba18b052836d56303_prof);

        
        $__internal_b69963fc585d1dd15f67e6bee3d914703b4735eeb493658d45528cf3b8d1d00f->leave($__internal_b69963fc585d1dd15f67e6bee3d914703b4735eeb493658d45528cf3b8d1d00f_prof);

    }

    public function getTemplateName()
    {
        return ":menusViews:listMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  123 => 33,  115 => 28,  110 => 26,  106 => 25,  102 => 24,  99 => 23,  95 => 22,  88 => 18,  84 => 17,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'menues'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                \t<th>ID</th>
                    <th>Jour</th>
                    <th>Menu</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for menu in app.user.ecole.menus %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ menu.id}}</td>
\t\t\t\t\t\t<td>{{ menu.jour}}</td>
\t\t\t\t\t\t<td>{{ menu.menu}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editMenu',{'id':menu.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeMenu',{'id':menu.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", ":menusViews:listMenus.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/menusViews/listMenus.html.twig");
    }
}
