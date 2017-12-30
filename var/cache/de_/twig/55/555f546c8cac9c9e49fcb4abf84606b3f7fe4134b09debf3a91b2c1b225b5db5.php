<?php

/* menusViews/listMenus.html.twig */
class __TwigTemplate_610dc4c1a2e6ad1dcdc0ac5083198ed10a5aa37df94b1f84c7e41856de780fab extends Twig_Template
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
        $__internal_43c21c17c817d6f5f1af364494596a8e32b969eefa67a18c52e486d9bda1c42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c21c17c817d6f5f1af364494596a8e32b969eefa67a18c52e486d9bda1c42f->enter($__internal_43c21c17c817d6f5f1af364494596a8e32b969eefa67a18c52e486d9bda1c42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $__internal_1b3b628da6a2503988f2117ec7e837b10b10827d76e85177b22aba4ef49cbf99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3b628da6a2503988f2117ec7e837b10b10827d76e85177b22aba4ef49cbf99->enter($__internal_1b3b628da6a2503988f2117ec7e837b10b10827d76e85177b22aba4ef49cbf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c21c17c817d6f5f1af364494596a8e32b969eefa67a18c52e486d9bda1c42f->leave($__internal_43c21c17c817d6f5f1af364494596a8e32b969eefa67a18c52e486d9bda1c42f_prof);

        
        $__internal_1b3b628da6a2503988f2117ec7e837b10b10827d76e85177b22aba4ef49cbf99->leave($__internal_1b3b628da6a2503988f2117ec7e837b10b10827d76e85177b22aba4ef49cbf99_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_356c1301e0b677ab7ff72bca61d30fb367e906a46bf8abb053e579d0d0b1f322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356c1301e0b677ab7ff72bca61d30fb367e906a46bf8abb053e579d0d0b1f322->enter($__internal_356c1301e0b677ab7ff72bca61d30fb367e906a46bf8abb053e579d0d0b1f322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d3354364529b2fd3d2c815fb3ca860d1b2faaa8a4df337937906f187059405d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3354364529b2fd3d2c815fb3ca860d1b2faaa8a4df337937906f187059405d->enter($__internal_6d3354364529b2fd3d2c815fb3ca860d1b2faaa8a4df337937906f187059405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "
";
        
        $__internal_6d3354364529b2fd3d2c815fb3ca860d1b2faaa8a4df337937906f187059405d->leave($__internal_6d3354364529b2fd3d2c815fb3ca860d1b2faaa8a4df337937906f187059405d_prof);

        
        $__internal_356c1301e0b677ab7ff72bca61d30fb367e906a46bf8abb053e579d0d0b1f322->leave($__internal_356c1301e0b677ab7ff72bca61d30fb367e906a46bf8abb053e579d0d0b1f322_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_ab50a82ca7c22aa880714f3225c684267381589a8935ce3bd94b6ccced46782b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab50a82ca7c22aa880714f3225c684267381589a8935ce3bd94b6ccced46782b->enter($__internal_ab50a82ca7c22aa880714f3225c684267381589a8935ce3bd94b6ccced46782b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_1f273c98b7699eafb166af735ba633c330fb1756ad809a92bd0d7ec7be7a07df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f273c98b7699eafb166af735ba633c330fb1756ad809a92bd0d7ec7be7a07df->enter($__internal_1f273c98b7699eafb166af735ba633c330fb1756ad809a92bd0d7ec7be7a07df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_1f273c98b7699eafb166af735ba633c330fb1756ad809a92bd0d7ec7be7a07df->leave($__internal_1f273c98b7699eafb166af735ba633c330fb1756ad809a92bd0d7ec7be7a07df_prof);

        
        $__internal_ab50a82ca7c22aa880714f3225c684267381589a8935ce3bd94b6ccced46782b->leave($__internal_ab50a82ca7c22aa880714f3225c684267381589a8935ce3bd94b6ccced46782b_prof);

    }

    // line 44
    public function block_active($context, array $blocks = array())
    {
        $__internal_dad60be305f2733f2881ae1116c5193aa726faa6613da839c1acb011e4950f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad60be305f2733f2881ae1116c5193aa726faa6613da839c1acb011e4950f03->enter($__internal_dad60be305f2733f2881ae1116c5193aa726faa6613da839c1acb011e4950f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_525c9907e2252a3fc89077ec00d5734b9d4fcebf778ae0a6e4a8b8e7f3732e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525c9907e2252a3fc89077ec00d5734b9d4fcebf778ae0a6e4a8b8e7f3732e7a->enter($__internal_525c9907e2252a3fc89077ec00d5734b9d4fcebf778ae0a6e4a8b8e7f3732e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 45
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.menu').addClass('active');
        \$('.listMenu').addClass('active');
    </script>
";
        
        $__internal_525c9907e2252a3fc89077ec00d5734b9d4fcebf778ae0a6e4a8b8e7f3732e7a->leave($__internal_525c9907e2252a3fc89077ec00d5734b9d4fcebf778ae0a6e4a8b8e7f3732e7a_prof);

        
        $__internal_dad60be305f2733f2881ae1116c5193aa726faa6613da839c1acb011e4950f03->leave($__internal_dad60be305f2733f2881ae1116c5193aa726faa6613da839c1acb011e4950f03_prof);

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
{% endblock%}", "menusViews/listMenus.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\menusViews\\listMenus.html.twig");
    }
}
