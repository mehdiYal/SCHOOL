<?php

/* :transportsViews:listTransports.html.twig */
class __TwigTemplate_5bcebe8765c7242b1495c68aa86b49de76302fa8ddb77877d345be558898be67 extends Twig_Template
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
        $__internal_5d23c9edc03159094b2a948338a77a594f33494f1b63e9a18f5bf8b068ab1c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d23c9edc03159094b2a948338a77a594f33494f1b63e9a18f5bf8b068ab1c1c->enter($__internal_5d23c9edc03159094b2a948338a77a594f33494f1b63e9a18f5bf8b068ab1c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $__internal_359249d37e2ad7a1f9a57143863688143692b0cf709c199c6a6e7120c0152705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359249d37e2ad7a1f9a57143863688143692b0cf709c199c6a6e7120c0152705->enter($__internal_359249d37e2ad7a1f9a57143863688143692b0cf709c199c6a6e7120c0152705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d23c9edc03159094b2a948338a77a594f33494f1b63e9a18f5bf8b068ab1c1c->leave($__internal_5d23c9edc03159094b2a948338a77a594f33494f1b63e9a18f5bf8b068ab1c1c_prof);

        
        $__internal_359249d37e2ad7a1f9a57143863688143692b0cf709c199c6a6e7120c0152705->leave($__internal_359249d37e2ad7a1f9a57143863688143692b0cf709c199c6a6e7120c0152705_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b180884cc3dea5a053d3bc070de938ca2c3cce54441ffa6109ed57f6d2644b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b180884cc3dea5a053d3bc070de938ca2c3cce54441ffa6109ed57f6d2644b08->enter($__internal_b180884cc3dea5a053d3bc070de938ca2c3cce54441ffa6109ed57f6d2644b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef2e988dd706e9dba2d4bcebf0703c758446e5c8dafc13d11884c1a39c4ba351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2e988dd706e9dba2d4bcebf0703c758446e5c8dafc13d11884c1a39c4ba351->enter($__internal_ef2e988dd706e9dba2d4bcebf0703c758446e5c8dafc13d11884c1a39c4ba351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "
";
        
        $__internal_ef2e988dd706e9dba2d4bcebf0703c758446e5c8dafc13d11884c1a39c4ba351->leave($__internal_ef2e988dd706e9dba2d4bcebf0703c758446e5c8dafc13d11884c1a39c4ba351_prof);

        
        $__internal_b180884cc3dea5a053d3bc070de938ca2c3cce54441ffa6109ed57f6d2644b08->leave($__internal_b180884cc3dea5a053d3bc070de938ca2c3cce54441ffa6109ed57f6d2644b08_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_8c910daf25c781f0430c4baf7b9372d1dc03aae298ce2bfd48e614aa244f3509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c910daf25c781f0430c4baf7b9372d1dc03aae298ce2bfd48e614aa244f3509->enter($__internal_8c910daf25c781f0430c4baf7b9372d1dc03aae298ce2bfd48e614aa244f3509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4cc6153c57bd1bdd136088793776fd969eb8e58db60636df81fa9fc7ae51ca50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc6153c57bd1bdd136088793776fd969eb8e58db60636df81fa9fc7ae51ca50->enter($__internal_4cc6153c57bd1bdd136088793776fd969eb8e58db60636df81fa9fc7ae51ca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_4cc6153c57bd1bdd136088793776fd969eb8e58db60636df81fa9fc7ae51ca50->leave($__internal_4cc6153c57bd1bdd136088793776fd969eb8e58db60636df81fa9fc7ae51ca50_prof);

        
        $__internal_8c910daf25c781f0430c4baf7b9372d1dc03aae298ce2bfd48e614aa244f3509->leave($__internal_8c910daf25c781f0430c4baf7b9372d1dc03aae298ce2bfd48e614aa244f3509_prof);

    }

    // line 48
    public function block_active($context, array $blocks = array())
    {
        $__internal_ff65d0979d5df717ece599a28eaefa228e3d4f4ad03042312f61c3c4701c029d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff65d0979d5df717ece599a28eaefa228e3d4f4ad03042312f61c3c4701c029d->enter($__internal_ff65d0979d5df717ece599a28eaefa228e3d4f4ad03042312f61c3c4701c029d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_88dbe51eb4e8a2e86a2170071d1c01cbe10d8899dc1982654dd0a4c25e4f8d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dbe51eb4e8a2e86a2170071d1c01cbe10d8899dc1982654dd0a4c25e4f8d05->enter($__internal_88dbe51eb4e8a2e86a2170071d1c01cbe10d8899dc1982654dd0a4c25e4f8d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 49
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.trans').addClass('active');
        \$('.listTrans').addClass('active');
    </script>
";
        
        $__internal_88dbe51eb4e8a2e86a2170071d1c01cbe10d8899dc1982654dd0a4c25e4f8d05->leave($__internal_88dbe51eb4e8a2e86a2170071d1c01cbe10d8899dc1982654dd0a4c25e4f8d05_prof);

        
        $__internal_ff65d0979d5df717ece599a28eaefa228e3d4f4ad03042312f61c3c4701c029d->leave($__internal_ff65d0979d5df717ece599a28eaefa228e3d4f4ad03042312f61c3c4701c029d_prof);

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
{% endblock%}", ":transportsViews:listTransports.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/transportsViews/listTransports.html.twig");
    }
}
