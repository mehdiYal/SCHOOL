<?php

/* menusViews/listMenus.html.twig */
class __TwigTemplate_dbf2cbe14a4f1ea604512bd51650fce3950d7569a391ed9e0edb270cec1e7007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "menusViews/listMenus.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2a16a24d5b0acaa403c67bac7ee68ec0b6719ffd484ebd35b4937dfad052480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a16a24d5b0acaa403c67bac7ee68ec0b6719ffd484ebd35b4937dfad052480->enter($__internal_e2a16a24d5b0acaa403c67bac7ee68ec0b6719ffd484ebd35b4937dfad052480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $__internal_7a2034819ae6047af20c2665637f99372bbdf6417cd53e040dc05b7b7c98b472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2034819ae6047af20c2665637f99372bbdf6417cd53e040dc05b7b7c98b472->enter($__internal_7a2034819ae6047af20c2665637f99372bbdf6417cd53e040dc05b7b7c98b472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2a16a24d5b0acaa403c67bac7ee68ec0b6719ffd484ebd35b4937dfad052480->leave($__internal_e2a16a24d5b0acaa403c67bac7ee68ec0b6719ffd484ebd35b4937dfad052480_prof);

        
        $__internal_7a2034819ae6047af20c2665637f99372bbdf6417cd53e040dc05b7b7c98b472->leave($__internal_7a2034819ae6047af20c2665637f99372bbdf6417cd53e040dc05b7b7c98b472_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_823f7d0247c32e4c23eebf7b5be4eb273cfaf91096c7e54d1c8dee748d9cbfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823f7d0247c32e4c23eebf7b5be4eb273cfaf91096c7e54d1c8dee748d9cbfab->enter($__internal_823f7d0247c32e4c23eebf7b5be4eb273cfaf91096c7e54d1c8dee748d9cbfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65f5c908411e45939c7a0d6875c9f194af7eec58adbb2fde1842fc76a358554a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f5c908411e45939c7a0d6875c9f194af7eec58adbb2fde1842fc76a358554a->enter($__internal_65f5c908411e45939c7a0d6875c9f194af7eec58adbb2fde1842fc76a358554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_65f5c908411e45939c7a0d6875c9f194af7eec58adbb2fde1842fc76a358554a->leave($__internal_65f5c908411e45939c7a0d6875c9f194af7eec58adbb2fde1842fc76a358554a_prof);

        
        $__internal_823f7d0247c32e4c23eebf7b5be4eb273cfaf91096c7e54d1c8dee748d9cbfab->leave($__internal_823f7d0247c32e4c23eebf7b5be4eb273cfaf91096c7e54d1c8dee748d9cbfab_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_a822c45353d0bdee5810b9f940e2beb1089f4583b173c4c5d77ab6d6e5794a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a822c45353d0bdee5810b9f940e2beb1089f4583b173c4c5d77ab6d6e5794a7c->enter($__internal_a822c45353d0bdee5810b9f940e2beb1089f4583b173c4c5d77ab6d6e5794a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_6b7b916b362f835d0601746d7893cad7811e656af7fc75798351c083d7654470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7b916b362f835d0601746d7893cad7811e656af7fc75798351c083d7654470->enter($__internal_6b7b916b362f835d0601746d7893cad7811e656af7fc75798351c083d7654470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "menus", array()));
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
        
        $__internal_6b7b916b362f835d0601746d7893cad7811e656af7fc75798351c083d7654470->leave($__internal_6b7b916b362f835d0601746d7893cad7811e656af7fc75798351c083d7654470_prof);

        
        $__internal_a822c45353d0bdee5810b9f940e2beb1089f4583b173c4c5d77ab6d6e5794a7c->leave($__internal_a822c45353d0bdee5810b9f940e2beb1089f4583b173c4c5d77ab6d6e5794a7c_prof);

    }

    // line 44
    public function block_active($context, array $blocks = array())
    {
        $__internal_9357881c364bfca821065e8aa9250db2cd79a678c5e338ce129c7a76e8735a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9357881c364bfca821065e8aa9250db2cd79a678c5e338ce129c7a76e8735a2b->enter($__internal_9357881c364bfca821065e8aa9250db2cd79a678c5e338ce129c7a76e8735a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_d43482f5a8701f0011707e2bb66d23705b4816b462d799a0a5f42ab42b743556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43482f5a8701f0011707e2bb66d23705b4816b462d799a0a5f42ab42b743556->enter($__internal_d43482f5a8701f0011707e2bb66d23705b4816b462d799a0a5f42ab42b743556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 45
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.listMenu').addClass('active');
    </script>
";
        
        $__internal_d43482f5a8701f0011707e2bb66d23705b4816b462d799a0a5f42ab42b743556->leave($__internal_d43482f5a8701f0011707e2bb66d23705b4816b462d799a0a5f42ab42b743556_prof);

        
        $__internal_9357881c364bfca821065e8aa9250db2cd79a678c5e338ce129c7a76e8735a2b->leave($__internal_9357881c364bfca821065e8aa9250db2cd79a678c5e338ce129c7a76e8735a2b_prof);

    }

    public function getTemplateName()
    {
        return "menusViews/listMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  150 => 44,  136 => 39,  124 => 33,  116 => 28,  111 => 26,  107 => 25,  103 => 24,  100 => 23,  96 => 22,  89 => 18,  85 => 17,  75 => 9,  66 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
    
{% endblock %}  
{% block active %}
    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.listMenu').addClass('active');
    </script>
{% endblock%}", "menusViews/listMenus.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/menusViews/listMenus.html.twig");
    }
}
