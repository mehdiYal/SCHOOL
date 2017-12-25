<?php

/* transportsViews/listTransports.html.twig */
class __TwigTemplate_b16957e8d0c27a4fc56d3ea72ce4c3b31d759779059df6544ff041aa3ff7dd02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "transportsViews/listTransports.html.twig", 1);
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
        $__internal_8fff687a098cfa8fb191eda0b72cc64df44811ed2bd6d51585d0a96d113c6887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fff687a098cfa8fb191eda0b72cc64df44811ed2bd6d51585d0a96d113c6887->enter($__internal_8fff687a098cfa8fb191eda0b72cc64df44811ed2bd6d51585d0a96d113c6887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/listTransports.html.twig"));

        $__internal_935d12424de22fae989ef4177955ab75b267aa1b164c7660cd1c3be99fe5a240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935d12424de22fae989ef4177955ab75b267aa1b164c7660cd1c3be99fe5a240->enter($__internal_935d12424de22fae989ef4177955ab75b267aa1b164c7660cd1c3be99fe5a240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fff687a098cfa8fb191eda0b72cc64df44811ed2bd6d51585d0a96d113c6887->leave($__internal_8fff687a098cfa8fb191eda0b72cc64df44811ed2bd6d51585d0a96d113c6887_prof);

        
        $__internal_935d12424de22fae989ef4177955ab75b267aa1b164c7660cd1c3be99fe5a240->leave($__internal_935d12424de22fae989ef4177955ab75b267aa1b164c7660cd1c3be99fe5a240_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_747a744777c9e8052049194552bc1048d8dab0cea1632ca16a21eeaf509f4090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747a744777c9e8052049194552bc1048d8dab0cea1632ca16a21eeaf509f4090->enter($__internal_747a744777c9e8052049194552bc1048d8dab0cea1632ca16a21eeaf509f4090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb0fc3483befb600887642c4cef171a1835c1b1f7127c8381c3d360b17a61245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0fc3483befb600887642c4cef171a1835c1b1f7127c8381c3d360b17a61245->enter($__internal_cb0fc3483befb600887642c4cef171a1835c1b1f7127c8381c3d360b17a61245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "
";
        
        $__internal_cb0fc3483befb600887642c4cef171a1835c1b1f7127c8381c3d360b17a61245->leave($__internal_cb0fc3483befb600887642c4cef171a1835c1b1f7127c8381c3d360b17a61245_prof);

        
        $__internal_747a744777c9e8052049194552bc1048d8dab0cea1632ca16a21eeaf509f4090->leave($__internal_747a744777c9e8052049194552bc1048d8dab0cea1632ca16a21eeaf509f4090_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c540f59ea0bdc0030ffc2a5bd5961da9575a3a41328ef7cb0d7b75cbe54abfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c540f59ea0bdc0030ffc2a5bd5961da9575a3a41328ef7cb0d7b75cbe54abfa8->enter($__internal_c540f59ea0bdc0030ffc2a5bd5961da9575a3a41328ef7cb0d7b75cbe54abfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_589735c004e97aaafe6dbe86323658a5da0bdcda62d3867683ee93a390f91217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589735c004e97aaafe6dbe86323658a5da0bdcda62d3867683ee93a390f91217->enter($__internal_589735c004e97aaafe6dbe86323658a5da0bdcda62d3867683ee93a390f91217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "transports", array()));
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
        
        $__internal_589735c004e97aaafe6dbe86323658a5da0bdcda62d3867683ee93a390f91217->leave($__internal_589735c004e97aaafe6dbe86323658a5da0bdcda62d3867683ee93a390f91217_prof);

        
        $__internal_c540f59ea0bdc0030ffc2a5bd5961da9575a3a41328ef7cb0d7b75cbe54abfa8->leave($__internal_c540f59ea0bdc0030ffc2a5bd5961da9575a3a41328ef7cb0d7b75cbe54abfa8_prof);

    }

    // line 48
    public function block_active($context, array $blocks = array())
    {
        $__internal_b2128a557ecd02a636cf4732a194b59cbe8280c7ec9ca046a13100973c88599d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2128a557ecd02a636cf4732a194b59cbe8280c7ec9ca046a13100973c88599d->enter($__internal_b2128a557ecd02a636cf4732a194b59cbe8280c7ec9ca046a13100973c88599d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_74ef5217021a5f506c3aa5b1fb80b096319055b354d2922daab271c3e8e9828d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ef5217021a5f506c3aa5b1fb80b096319055b354d2922daab271c3e8e9828d->enter($__internal_74ef5217021a5f506c3aa5b1fb80b096319055b354d2922daab271c3e8e9828d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 49
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.trans').addClass('active');
        \$('.listTrans').addClass('active');
    </script>
";
        
        $__internal_74ef5217021a5f506c3aa5b1fb80b096319055b354d2922daab271c3e8e9828d->leave($__internal_74ef5217021a5f506c3aa5b1fb80b096319055b354d2922daab271c3e8e9828d_prof);

        
        $__internal_b2128a557ecd02a636cf4732a194b59cbe8280c7ec9ca046a13100973c88599d->leave($__internal_b2128a557ecd02a636cf4732a194b59cbe8280c7ec9ca046a13100973c88599d_prof);

    }

    public function getTemplateName()
    {
        return "transportsViews/listTransports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 49,  160 => 48,  146 => 43,  134 => 37,  126 => 32,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  102 => 25,  98 => 24,  91 => 20,  87 => 19,  75 => 9,  66 => 8,  51 => 4,  42 => 3,  11 => 1,);
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

{% endblock %}  
{% block active %}
    <script>
        \$('.active').removeClass('active');
        \$('.trans').addClass('active');
        \$('.listTrans').addClass('active');
    </script>
{% endblock%}", "transportsViews/listTransports.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/transportsViews/listTransports.html.twig");
    }
}
