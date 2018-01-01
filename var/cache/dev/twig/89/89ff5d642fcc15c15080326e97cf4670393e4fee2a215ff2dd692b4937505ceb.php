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
        $__internal_1902f02b41e62ec1229a0195bc4ab0cfbeaba40411fd701f35b3f840ec6907da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1902f02b41e62ec1229a0195bc4ab0cfbeaba40411fd701f35b3f840ec6907da->enter($__internal_1902f02b41e62ec1229a0195bc4ab0cfbeaba40411fd701f35b3f840ec6907da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $__internal_8b2d5277524c953786e24e58ab0f1e705c6dc14bd4da0fafba5fdd8c2290b807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2d5277524c953786e24e58ab0f1e705c6dc14bd4da0fafba5fdd8c2290b807->enter($__internal_8b2d5277524c953786e24e58ab0f1e705c6dc14bd4da0fafba5fdd8c2290b807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1902f02b41e62ec1229a0195bc4ab0cfbeaba40411fd701f35b3f840ec6907da->leave($__internal_1902f02b41e62ec1229a0195bc4ab0cfbeaba40411fd701f35b3f840ec6907da_prof);

        
        $__internal_8b2d5277524c953786e24e58ab0f1e705c6dc14bd4da0fafba5fdd8c2290b807->leave($__internal_8b2d5277524c953786e24e58ab0f1e705c6dc14bd4da0fafba5fdd8c2290b807_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60e72d0d1ce8ae3d3ab67e9ad56e1351c7d6b441308cfaafa7b81df8c8e68158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e72d0d1ce8ae3d3ab67e9ad56e1351c7d6b441308cfaafa7b81df8c8e68158->enter($__internal_60e72d0d1ce8ae3d3ab67e9ad56e1351c7d6b441308cfaafa7b81df8c8e68158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9d8af4d3a50a5ecc2b914095fb8844af0c140f36d2bdc9d2cf5f043e407c63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d8af4d3a50a5ecc2b914095fb8844af0c140f36d2bdc9d2cf5f043e407c63c->enter($__internal_e9d8af4d3a50a5ecc2b914095fb8844af0c140f36d2bdc9d2cf5f043e407c63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "
";
        
        $__internal_e9d8af4d3a50a5ecc2b914095fb8844af0c140f36d2bdc9d2cf5f043e407c63c->leave($__internal_e9d8af4d3a50a5ecc2b914095fb8844af0c140f36d2bdc9d2cf5f043e407c63c_prof);

        
        $__internal_60e72d0d1ce8ae3d3ab67e9ad56e1351c7d6b441308cfaafa7b81df8c8e68158->leave($__internal_60e72d0d1ce8ae3d3ab67e9ad56e1351c7d6b441308cfaafa7b81df8c8e68158_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_cf37e5e992b38f85300609253c573d1ba45d3c88277f6eea8e89529bba97d870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf37e5e992b38f85300609253c573d1ba45d3c88277f6eea8e89529bba97d870->enter($__internal_cf37e5e992b38f85300609253c573d1ba45d3c88277f6eea8e89529bba97d870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_38b001356d50373db83ba1dfadcb4dea60c0c0d39a15a82d22b3e3b4b3553670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b001356d50373db83ba1dfadcb4dea60c0c0d39a15a82d22b3e3b4b3553670->enter($__internal_38b001356d50373db83ba1dfadcb4dea60c0c0d39a15a82d22b3e3b4b3553670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_38b001356d50373db83ba1dfadcb4dea60c0c0d39a15a82d22b3e3b4b3553670->leave($__internal_38b001356d50373db83ba1dfadcb4dea60c0c0d39a15a82d22b3e3b4b3553670_prof);

        
        $__internal_cf37e5e992b38f85300609253c573d1ba45d3c88277f6eea8e89529bba97d870->leave($__internal_cf37e5e992b38f85300609253c573d1ba45d3c88277f6eea8e89529bba97d870_prof);

    }

    // line 48
    public function block_active($context, array $blocks = array())
    {
        $__internal_35dd1444457d7ab19f6b91349791b7feb39cfab4ece2a7f51ef31af27840045d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35dd1444457d7ab19f6b91349791b7feb39cfab4ece2a7f51ef31af27840045d->enter($__internal_35dd1444457d7ab19f6b91349791b7feb39cfab4ece2a7f51ef31af27840045d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_810d01d9b0ce462c4413463abf7c2e6dfa3164bc20fc918c3f4968eff9622fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810d01d9b0ce462c4413463abf7c2e6dfa3164bc20fc918c3f4968eff9622fb4->enter($__internal_810d01d9b0ce462c4413463abf7c2e6dfa3164bc20fc918c3f4968eff9622fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 49
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.trans').addClass('active');
        \$('.listTrans').addClass('active');
    </script>
";
        
        $__internal_810d01d9b0ce462c4413463abf7c2e6dfa3164bc20fc918c3f4968eff9622fb4->leave($__internal_810d01d9b0ce462c4413463abf7c2e6dfa3164bc20fc918c3f4968eff9622fb4_prof);

        
        $__internal_35dd1444457d7ab19f6b91349791b7feb39cfab4ece2a7f51ef31af27840045d->leave($__internal_35dd1444457d7ab19f6b91349791b7feb39cfab4ece2a7f51ef31af27840045d_prof);

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
