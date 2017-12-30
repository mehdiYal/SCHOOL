<?php

/* :menusViews:listMenus.html.twig */
class __TwigTemplate_138f2308f586705ea2a3170878af89b2815cab2829e60fb7990d9ac5dcb8cb80 extends Twig_Template
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
        $__internal_72b9cb0bf9ae528c12bf65bbf0614ed8d0353a63cc3febb3cec46f88e0c25250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b9cb0bf9ae528c12bf65bbf0614ed8d0353a63cc3febb3cec46f88e0c25250->enter($__internal_72b9cb0bf9ae528c12bf65bbf0614ed8d0353a63cc3febb3cec46f88e0c25250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $__internal_800f380a18224f4023c28aa21b612e350b0132d78aa3f9d2ced86a223596eb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800f380a18224f4023c28aa21b612e350b0132d78aa3f9d2ced86a223596eb39->enter($__internal_800f380a18224f4023c28aa21b612e350b0132d78aa3f9d2ced86a223596eb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b9cb0bf9ae528c12bf65bbf0614ed8d0353a63cc3febb3cec46f88e0c25250->leave($__internal_72b9cb0bf9ae528c12bf65bbf0614ed8d0353a63cc3febb3cec46f88e0c25250_prof);

        
        $__internal_800f380a18224f4023c28aa21b612e350b0132d78aa3f9d2ced86a223596eb39->leave($__internal_800f380a18224f4023c28aa21b612e350b0132d78aa3f9d2ced86a223596eb39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22d3876312df048ff422cb62dd2638d0474f903204cef9cbd318a329f6a95e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d3876312df048ff422cb62dd2638d0474f903204cef9cbd318a329f6a95e41->enter($__internal_22d3876312df048ff422cb62dd2638d0474f903204cef9cbd318a329f6a95e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72353fa22cac36e6432c9e2f4876b1210789c42a73619b1630e1e8085e7ef3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72353fa22cac36e6432c9e2f4876b1210789c42a73619b1630e1e8085e7ef3f9->enter($__internal_72353fa22cac36e6432c9e2f4876b1210789c42a73619b1630e1e8085e7ef3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_72353fa22cac36e6432c9e2f4876b1210789c42a73619b1630e1e8085e7ef3f9->leave($__internal_72353fa22cac36e6432c9e2f4876b1210789c42a73619b1630e1e8085e7ef3f9_prof);

        
        $__internal_22d3876312df048ff422cb62dd2638d0474f903204cef9cbd318a329f6a95e41->leave($__internal_22d3876312df048ff422cb62dd2638d0474f903204cef9cbd318a329f6a95e41_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_53fee06414d6c5f1727de7d6ef1f9d40d6f3589e2c4ca4c80f275f2d88316f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fee06414d6c5f1727de7d6ef1f9d40d6f3589e2c4ca4c80f275f2d88316f0e->enter($__internal_53fee06414d6c5f1727de7d6ef1f9d40d6f3589e2c4ca4c80f275f2d88316f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_e4c7bdc6e55b3d17a249862481595c6adaa28b1a550873f65c24f0c210845f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c7bdc6e55b3d17a249862481595c6adaa28b1a550873f65c24f0c210845f6c->enter($__internal_e4c7bdc6e55b3d17a249862481595c6adaa28b1a550873f65c24f0c210845f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_e4c7bdc6e55b3d17a249862481595c6adaa28b1a550873f65c24f0c210845f6c->leave($__internal_e4c7bdc6e55b3d17a249862481595c6adaa28b1a550873f65c24f0c210845f6c_prof);

        
        $__internal_53fee06414d6c5f1727de7d6ef1f9d40d6f3589e2c4ca4c80f275f2d88316f0e->leave($__internal_53fee06414d6c5f1727de7d6ef1f9d40d6f3589e2c4ca4c80f275f2d88316f0e_prof);

    }

    // line 44
    public function block_active($context, array $blocks = array())
    {
        $__internal_a123ddcadadbaa09c48b0b9d467c5cd6b2f5df8cd2af92ac94b482e9dc723760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a123ddcadadbaa09c48b0b9d467c5cd6b2f5df8cd2af92ac94b482e9dc723760->enter($__internal_a123ddcadadbaa09c48b0b9d467c5cd6b2f5df8cd2af92ac94b482e9dc723760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_0cd90dbfe81a2695e76da2b0ca3835693799ba209f22c505eaf71a4c4d705ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd90dbfe81a2695e76da2b0ca3835693799ba209f22c505eaf71a4c4d705ae6->enter($__internal_0cd90dbfe81a2695e76da2b0ca3835693799ba209f22c505eaf71a4c4d705ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 45
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.listMenu').addClass('active');
    </script>
";
        
        $__internal_0cd90dbfe81a2695e76da2b0ca3835693799ba209f22c505eaf71a4c4d705ae6->leave($__internal_0cd90dbfe81a2695e76da2b0ca3835693799ba209f22c505eaf71a4c4d705ae6_prof);

        
        $__internal_a123ddcadadbaa09c48b0b9d467c5cd6b2f5df8cd2af92ac94b482e9dc723760->leave($__internal_a123ddcadadbaa09c48b0b9d467c5cd6b2f5df8cd2af92ac94b482e9dc723760_prof);

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
{% endblock%}", ":menusViews:listMenus.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/menusViews/listMenus.html.twig");
    }
}
