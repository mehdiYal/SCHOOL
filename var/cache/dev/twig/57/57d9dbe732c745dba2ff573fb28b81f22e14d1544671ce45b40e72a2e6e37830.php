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
        $__internal_233c503bca0996ad229ad7804bcc49207c4e151137147cff0be0397ec11755e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233c503bca0996ad229ad7804bcc49207c4e151137147cff0be0397ec11755e8->enter($__internal_233c503bca0996ad229ad7804bcc49207c4e151137147cff0be0397ec11755e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $__internal_70af089899ced54aa950e001496fcb71896f3cf0501573b7632492386b5d9052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70af089899ced54aa950e001496fcb71896f3cf0501573b7632492386b5d9052->enter($__internal_70af089899ced54aa950e001496fcb71896f3cf0501573b7632492386b5d9052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_233c503bca0996ad229ad7804bcc49207c4e151137147cff0be0397ec11755e8->leave($__internal_233c503bca0996ad229ad7804bcc49207c4e151137147cff0be0397ec11755e8_prof);

        
        $__internal_70af089899ced54aa950e001496fcb71896f3cf0501573b7632492386b5d9052->leave($__internal_70af089899ced54aa950e001496fcb71896f3cf0501573b7632492386b5d9052_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f4ca273fdc37dc75a1b51a31302339d7bacb062ba4266e023cf9ff7a968f0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4ca273fdc37dc75a1b51a31302339d7bacb062ba4266e023cf9ff7a968f0f9->enter($__internal_4f4ca273fdc37dc75a1b51a31302339d7bacb062ba4266e023cf9ff7a968f0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48f7457fcfd2843fcd133319dcbfa83471b45f95d36c4b4f4f845c94cf3dcbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f7457fcfd2843fcd133319dcbfa83471b45f95d36c4b4f4f845c94cf3dcbb1->enter($__internal_48f7457fcfd2843fcd133319dcbfa83471b45f95d36c4b4f4f845c94cf3dcbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_48f7457fcfd2843fcd133319dcbfa83471b45f95d36c4b4f4f845c94cf3dcbb1->leave($__internal_48f7457fcfd2843fcd133319dcbfa83471b45f95d36c4b4f4f845c94cf3dcbb1_prof);

        
        $__internal_4f4ca273fdc37dc75a1b51a31302339d7bacb062ba4266e023cf9ff7a968f0f9->leave($__internal_4f4ca273fdc37dc75a1b51a31302339d7bacb062ba4266e023cf9ff7a968f0f9_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_71892aa29818faee4221a9d0680d983a9710155c29953547dedf7b33a0b80894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71892aa29818faee4221a9d0680d983a9710155c29953547dedf7b33a0b80894->enter($__internal_71892aa29818faee4221a9d0680d983a9710155c29953547dedf7b33a0b80894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d29bb966deea2a89b5d2258e48d1ea3c01c793087e314abd1248c51271e2928c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29bb966deea2a89b5d2258e48d1ea3c01c793087e314abd1248c51271e2928c->enter($__internal_d29bb966deea2a89b5d2258e48d1ea3c01c793087e314abd1248c51271e2928c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_d29bb966deea2a89b5d2258e48d1ea3c01c793087e314abd1248c51271e2928c->leave($__internal_d29bb966deea2a89b5d2258e48d1ea3c01c793087e314abd1248c51271e2928c_prof);

        
        $__internal_71892aa29818faee4221a9d0680d983a9710155c29953547dedf7b33a0b80894->leave($__internal_71892aa29818faee4221a9d0680d983a9710155c29953547dedf7b33a0b80894_prof);

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
    
{% endblock %}  ", ":menusViews:listMenus.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/menusViews/listMenus.html.twig");
    }
}
