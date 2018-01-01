<?php

/* :transportsViews:listTransports.html.twig */
class __TwigTemplate_9c7f6b3d5021925359f65c4e3a9e852ce125cdf4339d656824730f8e51f87279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":transportsViews:listTransports.html.twig", 1);
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
        $__internal_7eebcffc7822bd08eb6e4d42bb3ce8890c2bd6e7ceaf7cdd7731eeab6addf98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eebcffc7822bd08eb6e4d42bb3ce8890c2bd6e7ceaf7cdd7731eeab6addf98e->enter($__internal_7eebcffc7822bd08eb6e4d42bb3ce8890c2bd6e7ceaf7cdd7731eeab6addf98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $__internal_4f8edd06a868a63888f20adcded27954fd618d6d82d1c37dc88b0f8322891c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8edd06a868a63888f20adcded27954fd618d6d82d1c37dc88b0f8322891c2f->enter($__internal_4f8edd06a868a63888f20adcded27954fd618d6d82d1c37dc88b0f8322891c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eebcffc7822bd08eb6e4d42bb3ce8890c2bd6e7ceaf7cdd7731eeab6addf98e->leave($__internal_7eebcffc7822bd08eb6e4d42bb3ce8890c2bd6e7ceaf7cdd7731eeab6addf98e_prof);

        
        $__internal_4f8edd06a868a63888f20adcded27954fd618d6d82d1c37dc88b0f8322891c2f->leave($__internal_4f8edd06a868a63888f20adcded27954fd618d6d82d1c37dc88b0f8322891c2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_809ad15b7367d6cbcd3e8a5a3db056f7574851a8418bd1268f194857b2596911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809ad15b7367d6cbcd3e8a5a3db056f7574851a8418bd1268f194857b2596911->enter($__internal_809ad15b7367d6cbcd3e8a5a3db056f7574851a8418bd1268f194857b2596911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df9e0c41f189399589cf4288dbfbafc4d559c54da9c9580a50e52c5c0a7affda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9e0c41f189399589cf4288dbfbafc4d559c54da9c9580a50e52c5c0a7affda->enter($__internal_df9e0c41f189399589cf4288dbfbafc4d559c54da9c9580a50e52c5c0a7affda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "
";
        
        $__internal_df9e0c41f189399589cf4288dbfbafc4d559c54da9c9580a50e52c5c0a7affda->leave($__internal_df9e0c41f189399589cf4288dbfbafc4d559c54da9c9580a50e52c5c0a7affda_prof);

        
        $__internal_809ad15b7367d6cbcd3e8a5a3db056f7574851a8418bd1268f194857b2596911->leave($__internal_809ad15b7367d6cbcd3e8a5a3db056f7574851a8418bd1268f194857b2596911_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_7e62d1d794a4fd0d0f75ba243f022f0e3ade2600ed81a8953f72eb7b2f629853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e62d1d794a4fd0d0f75ba243f022f0e3ade2600ed81a8953f72eb7b2f629853->enter($__internal_7e62d1d794a4fd0d0f75ba243f022f0e3ade2600ed81a8953f72eb7b2f629853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_9ebfd61db5190f4939e7557457cd6f01ec6fd00e2da0f8fd79bed25bfe61ad1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebfd61db5190f4939e7557457cd6f01ec6fd00e2da0f8fd79bed25bfe61ad1c->enter($__internal_9ebfd61db5190f4939e7557457cd6f01ec6fd00e2da0f8fd79bed25bfe61ad1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_9ebfd61db5190f4939e7557457cd6f01ec6fd00e2da0f8fd79bed25bfe61ad1c->leave($__internal_9ebfd61db5190f4939e7557457cd6f01ec6fd00e2da0f8fd79bed25bfe61ad1c_prof);

        
        $__internal_7e62d1d794a4fd0d0f75ba243f022f0e3ade2600ed81a8953f72eb7b2f629853->leave($__internal_7e62d1d794a4fd0d0f75ba243f022f0e3ade2600ed81a8953f72eb7b2f629853_prof);

    }

    // line 48
    public function block_active($context, array $blocks = array())
    {
        $__internal_acd315d6ac338c055fa91a8d9704260439565ba6e44257393cb20e38bad9d3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd315d6ac338c055fa91a8d9704260439565ba6e44257393cb20e38bad9d3ff->enter($__internal_acd315d6ac338c055fa91a8d9704260439565ba6e44257393cb20e38bad9d3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_c2775dda78a6f9a8e020b2b167ac4ecd8e69c023312c807ac2138855fff0ac4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2775dda78a6f9a8e020b2b167ac4ecd8e69c023312c807ac2138855fff0ac4f->enter($__internal_c2775dda78a6f9a8e020b2b167ac4ecd8e69c023312c807ac2138855fff0ac4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 49
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.trans').addClass('active');
        \$('.listTrans').addClass('active');
    </script>
";
        
        $__internal_c2775dda78a6f9a8e020b2b167ac4ecd8e69c023312c807ac2138855fff0ac4f->leave($__internal_c2775dda78a6f9a8e020b2b167ac4ecd8e69c023312c807ac2138855fff0ac4f_prof);

        
        $__internal_acd315d6ac338c055fa91a8d9704260439565ba6e44257393cb20e38bad9d3ff->leave($__internal_acd315d6ac338c055fa91a8d9704260439565ba6e44257393cb20e38bad9d3ff_prof);

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
{% endblock%}", ":transportsViews:listTransports.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/transportsViews/listTransports.html.twig");
    }
}
