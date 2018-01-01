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
        $__internal_893e158d132e56d16d716ce56ec7f816f1f801a8fb66f699e51cc023fc9d5bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893e158d132e56d16d716ce56ec7f816f1f801a8fb66f699e51cc023fc9d5bea->enter($__internal_893e158d132e56d16d716ce56ec7f816f1f801a8fb66f699e51cc023fc9d5bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $__internal_5e8ccb7a2424ed4e26459a35b8e5a327ab0a3e915c24a2b03e820217600eb13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8ccb7a2424ed4e26459a35b8e5a327ab0a3e915c24a2b03e820217600eb13f->enter($__internal_5e8ccb7a2424ed4e26459a35b8e5a327ab0a3e915c24a2b03e820217600eb13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893e158d132e56d16d716ce56ec7f816f1f801a8fb66f699e51cc023fc9d5bea->leave($__internal_893e158d132e56d16d716ce56ec7f816f1f801a8fb66f699e51cc023fc9d5bea_prof);

        
        $__internal_5e8ccb7a2424ed4e26459a35b8e5a327ab0a3e915c24a2b03e820217600eb13f->leave($__internal_5e8ccb7a2424ed4e26459a35b8e5a327ab0a3e915c24a2b03e820217600eb13f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_158a8e8e8daec0c5263dd770d76fc923e355cd666cae8bbd4321dcbcf49b7662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158a8e8e8daec0c5263dd770d76fc923e355cd666cae8bbd4321dcbcf49b7662->enter($__internal_158a8e8e8daec0c5263dd770d76fc923e355cd666cae8bbd4321dcbcf49b7662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee9467bb332155564489ee937c6a1ab741275e2e57200dfd2268eb6138bb74bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9467bb332155564489ee937c6a1ab741275e2e57200dfd2268eb6138bb74bf->enter($__internal_ee9467bb332155564489ee937c6a1ab741275e2e57200dfd2268eb6138bb74bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_ee9467bb332155564489ee937c6a1ab741275e2e57200dfd2268eb6138bb74bf->leave($__internal_ee9467bb332155564489ee937c6a1ab741275e2e57200dfd2268eb6138bb74bf_prof);

        
        $__internal_158a8e8e8daec0c5263dd770d76fc923e355cd666cae8bbd4321dcbcf49b7662->leave($__internal_158a8e8e8daec0c5263dd770d76fc923e355cd666cae8bbd4321dcbcf49b7662_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_f5a8bad2a9ae3e7d2c2e387ee11e3200ec654c174b9f2e88137acd81d824194c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a8bad2a9ae3e7d2c2e387ee11e3200ec654c174b9f2e88137acd81d824194c->enter($__internal_f5a8bad2a9ae3e7d2c2e387ee11e3200ec654c174b9f2e88137acd81d824194c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4c861118009bdf30dd078f5c1a54d4a348843c36c5772e2b50468e908f621bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c861118009bdf30dd078f5c1a54d4a348843c36c5772e2b50468e908f621bd6->enter($__internal_4c861118009bdf30dd078f5c1a54d4a348843c36c5772e2b50468e908f621bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_4c861118009bdf30dd078f5c1a54d4a348843c36c5772e2b50468e908f621bd6->leave($__internal_4c861118009bdf30dd078f5c1a54d4a348843c36c5772e2b50468e908f621bd6_prof);

        
        $__internal_f5a8bad2a9ae3e7d2c2e387ee11e3200ec654c174b9f2e88137acd81d824194c->leave($__internal_f5a8bad2a9ae3e7d2c2e387ee11e3200ec654c174b9f2e88137acd81d824194c_prof);

    }

    // line 44
    public function block_active($context, array $blocks = array())
    {
        $__internal_886fd1746c5e0f87db4957110385773c718144d24073923b768ea955513c72f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886fd1746c5e0f87db4957110385773c718144d24073923b768ea955513c72f1->enter($__internal_886fd1746c5e0f87db4957110385773c718144d24073923b768ea955513c72f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_2058bd38adbd8c22a7e774194086f3b730d94ade29b78ae148fab28372675bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2058bd38adbd8c22a7e774194086f3b730d94ade29b78ae148fab28372675bf7->enter($__internal_2058bd38adbd8c22a7e774194086f3b730d94ade29b78ae148fab28372675bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 45
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.listMenu').addClass('active');
    </script>
";
        
        $__internal_2058bd38adbd8c22a7e774194086f3b730d94ade29b78ae148fab28372675bf7->leave($__internal_2058bd38adbd8c22a7e774194086f3b730d94ade29b78ae148fab28372675bf7_prof);

        
        $__internal_886fd1746c5e0f87db4957110385773c718144d24073923b768ea955513c72f1->leave($__internal_886fd1746c5e0f87db4957110385773c718144d24073923b768ea955513c72f1_prof);

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
