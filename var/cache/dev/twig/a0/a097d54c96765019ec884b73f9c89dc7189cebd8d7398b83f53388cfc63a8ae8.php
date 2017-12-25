<?php

/* :transportsViews:listTransports.html.twig */
class __TwigTemplate_436a553038e960936e86674809adae9ee52a659b220d98e6999ed7c8bd0c5f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":transportsViews:listTransports.html.twig", 1);
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
        $__internal_8caa71d47e1d6c22450729ed1c22b7382659e1f7fa61895ba54c714ff869ee69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8caa71d47e1d6c22450729ed1c22b7382659e1f7fa61895ba54c714ff869ee69->enter($__internal_8caa71d47e1d6c22450729ed1c22b7382659e1f7fa61895ba54c714ff869ee69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $__internal_61126edfc79dd77e7841c8cfb5fe7b8b741ef32cea7f718326bb48b1cc0caf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61126edfc79dd77e7841c8cfb5fe7b8b741ef32cea7f718326bb48b1cc0caf3c->enter($__internal_61126edfc79dd77e7841c8cfb5fe7b8b741ef32cea7f718326bb48b1cc0caf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8caa71d47e1d6c22450729ed1c22b7382659e1f7fa61895ba54c714ff869ee69->leave($__internal_8caa71d47e1d6c22450729ed1c22b7382659e1f7fa61895ba54c714ff869ee69_prof);

        
        $__internal_61126edfc79dd77e7841c8cfb5fe7b8b741ef32cea7f718326bb48b1cc0caf3c->leave($__internal_61126edfc79dd77e7841c8cfb5fe7b8b741ef32cea7f718326bb48b1cc0caf3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8284cfae66bfafcf39c54115fb978449bbe578aaa668660693d36988a7d89a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8284cfae66bfafcf39c54115fb978449bbe578aaa668660693d36988a7d89a4->enter($__internal_f8284cfae66bfafcf39c54115fb978449bbe578aaa668660693d36988a7d89a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2210ce66f067a0aff26b154e925834633929117847d96610f5d42a3d5c7eb9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2210ce66f067a0aff26b154e925834633929117847d96610f5d42a3d5c7eb9ed->enter($__internal_2210ce66f067a0aff26b154e925834633929117847d96610f5d42a3d5c7eb9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "
";
        
        $__internal_2210ce66f067a0aff26b154e925834633929117847d96610f5d42a3d5c7eb9ed->leave($__internal_2210ce66f067a0aff26b154e925834633929117847d96610f5d42a3d5c7eb9ed_prof);

        
        $__internal_f8284cfae66bfafcf39c54115fb978449bbe578aaa668660693d36988a7d89a4->leave($__internal_f8284cfae66bfafcf39c54115fb978449bbe578aaa668660693d36988a7d89a4_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_d044ca0a169c5122e99f9a7f0ed15366aa913149bfd052d4cf14b9d47836ce99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d044ca0a169c5122e99f9a7f0ed15366aa913149bfd052d4cf14b9d47836ce99->enter($__internal_d044ca0a169c5122e99f9a7f0ed15366aa913149bfd052d4cf14b9d47836ce99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_6c471089f7b2674cd43b614ce27443d43bad3f1a59c01ab5cf1e0c617df44e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c471089f7b2674cd43b614ce27443d43bad3f1a59c01ab5cf1e0c617df44e3e->enter($__internal_6c471089f7b2674cd43b614ce27443d43bad3f1a59c01ab5cf1e0c617df44e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Départ</th>
                    <th>Trajet</th>
                    <th>Heure Départ</th>
                    <th>Capacité</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "transports", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["trans"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "depart", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "trajet", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trans"], "heureDepart", array()), "h:m"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "capacite", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>                                    
    </div>

";
        
        $__internal_6c471089f7b2674cd43b614ce27443d43bad3f1a59c01ab5cf1e0c617df44e3e->leave($__internal_6c471089f7b2674cd43b614ce27443d43bad3f1a59c01ab5cf1e0c617df44e3e_prof);

        
        $__internal_d044ca0a169c5122e99f9a7f0ed15366aa913149bfd052d4cf14b9d47836ce99->leave($__internal_d044ca0a169c5122e99f9a7f0ed15366aa913149bfd052d4cf14b9d47836ce99_prof);

    }

    public function getTemplateName()
    {
        return ":transportsViews:listTransports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  133 => 37,  125 => 32,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  101 => 25,  97 => 24,  90 => 20,  86 => 19,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'lignes'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Départ</th>
                    <th>Trajet</th>
                    <th>Heure Départ</th>
                    <th>Capacité</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for trans in app.user.ecole.transports %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ trans.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ trans.depart}}</td>
\t\t\t\t\t\t<td>{{ trans.trajet}}</td>
\t\t\t\t\t\t<td>{{ trans.heureDepart|date('h:m')}}</td>
\t\t\t\t\t\t<td>{{ trans.capacite}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editTransport',{'id':trans.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeTransport',{'id':trans.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>

{% endblock %}  ", ":transportsViews:listTransports.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/transportsViews/listTransports.html.twig");
    }
}
