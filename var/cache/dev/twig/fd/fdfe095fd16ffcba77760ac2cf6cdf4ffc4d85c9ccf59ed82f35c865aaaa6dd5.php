<?php

/* :menusViews:listMenus.html.twig */
class __TwigTemplate_5922690b40e3c9352112930cfeb3300f5afb2664448c7e6ccb0498ddcb198875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":menusViews:listMenus.html.twig", 1);
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
        $__internal_53358047f7f39c22137bcd4e03031748c05245b4cc340429da12cd7b545aa204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53358047f7f39c22137bcd4e03031748c05245b4cc340429da12cd7b545aa204->enter($__internal_53358047f7f39c22137bcd4e03031748c05245b4cc340429da12cd7b545aa204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $__internal_baf9922ca6176ba860ba6ad40bb3b0cb7e6c21a32198d7fe5b965afcbe73b145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf9922ca6176ba860ba6ad40bb3b0cb7e6c21a32198d7fe5b965afcbe73b145->enter($__internal_baf9922ca6176ba860ba6ad40bb3b0cb7e6c21a32198d7fe5b965afcbe73b145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53358047f7f39c22137bcd4e03031748c05245b4cc340429da12cd7b545aa204->leave($__internal_53358047f7f39c22137bcd4e03031748c05245b4cc340429da12cd7b545aa204_prof);

        
        $__internal_baf9922ca6176ba860ba6ad40bb3b0cb7e6c21a32198d7fe5b965afcbe73b145->leave($__internal_baf9922ca6176ba860ba6ad40bb3b0cb7e6c21a32198d7fe5b965afcbe73b145_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2a41b493a8256b8953758d7ad5031f8e8fb0156228c9044c6e0f49551b3b574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a41b493a8256b8953758d7ad5031f8e8fb0156228c9044c6e0f49551b3b574->enter($__internal_e2a41b493a8256b8953758d7ad5031f8e8fb0156228c9044c6e0f49551b3b574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28aaf8803c09b8d14a83d71f700bbe11df64e9a98b3c0040fe5ce6cd52590c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28aaf8803c09b8d14a83d71f700bbe11df64e9a98b3c0040fe5ce6cd52590c8f->enter($__internal_28aaf8803c09b8d14a83d71f700bbe11df64e9a98b3c0040fe5ce6cd52590c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_28aaf8803c09b8d14a83d71f700bbe11df64e9a98b3c0040fe5ce6cd52590c8f->leave($__internal_28aaf8803c09b8d14a83d71f700bbe11df64e9a98b3c0040fe5ce6cd52590c8f_prof);

        
        $__internal_e2a41b493a8256b8953758d7ad5031f8e8fb0156228c9044c6e0f49551b3b574->leave($__internal_e2a41b493a8256b8953758d7ad5031f8e8fb0156228c9044c6e0f49551b3b574_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c49727b6d3e2419a6d3197c54b3fcb72cf50fdae46472b9398b54889ab603de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49727b6d3e2419a6d3197c54b3fcb72cf50fdae46472b9398b54889ab603de3->enter($__internal_c49727b6d3e2419a6d3197c54b3fcb72cf50fdae46472b9398b54889ab603de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_21c6d13f3b8eea16593bdf7f5899e573eddfb44685248fed75652873464a73db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c6d13f3b8eea16593bdf7f5899e573eddfb44685248fed75652873464a73db->enter($__internal_21c6d13f3b8eea16593bdf7f5899e573eddfb44685248fed75652873464a73db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_21c6d13f3b8eea16593bdf7f5899e573eddfb44685248fed75652873464a73db->leave($__internal_21c6d13f3b8eea16593bdf7f5899e573eddfb44685248fed75652873464a73db_prof);

        
        $__internal_c49727b6d3e2419a6d3197c54b3fcb72cf50fdae46472b9398b54889ab603de3->leave($__internal_c49727b6d3e2419a6d3197c54b3fcb72cf50fdae46472b9398b54889ab603de3_prof);

    }

    // line 44
    public function block_active($context, array $blocks = array())
    {
        $__internal_0aafd970e285c43eadc706fa54f75b5d8d42c5673c301bf32331179f12476d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aafd970e285c43eadc706fa54f75b5d8d42c5673c301bf32331179f12476d83->enter($__internal_0aafd970e285c43eadc706fa54f75b5d8d42c5673c301bf32331179f12476d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_a654eec8df4a61d5351d26e72263248b41c48b9983b25d7fb695b8196f105994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a654eec8df4a61d5351d26e72263248b41c48b9983b25d7fb695b8196f105994->enter($__internal_a654eec8df4a61d5351d26e72263248b41c48b9983b25d7fb695b8196f105994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 45
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.listMenu').addClass('active');
    </script>
";
        
        $__internal_a654eec8df4a61d5351d26e72263248b41c48b9983b25d7fb695b8196f105994->leave($__internal_a654eec8df4a61d5351d26e72263248b41c48b9983b25d7fb695b8196f105994_prof);

        
        $__internal_0aafd970e285c43eadc706fa54f75b5d8d42c5673c301bf32331179f12476d83->leave($__internal_0aafd970e285c43eadc706fa54f75b5d8d42c5673c301bf32331179f12476d83_prof);

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
{% endblock%}", ":menusViews:listMenus.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/menusViews/listMenus.html.twig");
    }
}
