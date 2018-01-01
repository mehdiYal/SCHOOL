<?php

/* :absence:index.html.twig */
class __TwigTemplate_2d02fc20367d9093452216b4d9a51e471c7c960703bbf0bcc7a9986be1cdf11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":absence:index.html.twig", 1);
        $this->blocks = array(
            'bodyList' => array($this, 'block_bodyList'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1125a0cc31a0138e7f12c280abd688472cafe289434428697adbc3e75c824ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1125a0cc31a0138e7f12c280abd688472cafe289434428697adbc3e75c824ff->enter($__internal_a1125a0cc31a0138e7f12c280abd688472cafe289434428697adbc3e75c824ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:index.html.twig"));

        $__internal_fb5e0e98d0af7a768df768d6fbc5c5d7dd5262b580c9d42a887bbf9d20925736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5e0e98d0af7a768df768d6fbc5c5d7dd5262b580c9d42a887bbf9d20925736->enter($__internal_fb5e0e98d0af7a768df768d6fbc5c5d7dd5262b580c9d42a887bbf9d20925736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":absence:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1125a0cc31a0138e7f12c280abd688472cafe289434428697adbc3e75c824ff->leave($__internal_a1125a0cc31a0138e7f12c280abd688472cafe289434428697adbc3e75c824ff_prof);

        
        $__internal_fb5e0e98d0af7a768df768d6fbc5c5d7dd5262b580c9d42a887bbf9d20925736->leave($__internal_fb5e0e98d0af7a768df768d6fbc5c5d7dd5262b580c9d42a887bbf9d20925736_prof);

    }

    // line 3
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_732dd98709383ae4ad7bf1564ff1541c8378f8c285f703b0b08caf44441bcc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732dd98709383ae4ad7bf1564ff1541c8378f8c285f703b0b08caf44441bcc1c->enter($__internal_732dd98709383ae4ad7bf1564ff1541c8378f8c285f703b0b08caf44441bcc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_28a4d8eb4d3c19f046eb9e17a27e8de25ccdda368d0412f379a3859ee6823845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a4d8eb4d3c19f046eb9e17a27e8de25ccdda368d0412f379a3859ee6823845->enter($__internal_28a4d8eb4d3c19f046eb9e17a27e8de25ccdda368d0412f379a3859ee6823845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 4
        echo "<div class=\"page-content-wrap\">
    ";
        // line 6
        echo "         ";
        // line 7
        echo "           <!-- <a href=\"";
        echo "</a> -->
        ";
        // line 9
        echo "    ";
        echo "            
    <div class=\"row\">
        <div class=\"col-md-12\">
\t\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.manage"), "html", null, true);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget', array("id" => "selectClasse", "attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t    \t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget', array("id" => "selectYear", "attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">Chercher</button>
\t\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>

";
        // line 47
        if ((twig_length_filter($this->env, (isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences"))) != 0)) {
            // line 48
            echo "\t<div class=\"col-md-12\" style=\"margin-top: 5%;\">
\t\t<div class=\"table-responsive\">
\t\t   \t<table id=\"customers2\" class=\"table \">
\t\t        <thead>
\t\t            <tr>
\t\t                <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("eleve.nom"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("eleve.prenom"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.type"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.date"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.comment"), "html", null, true);
            echo "</th>
\t\t                <th>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.action"), "html", null, true);
            echo "</th>
\t\t            </tr>
\t\t\t    </thead>
\t\t        <tbody>
\t\t          \t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
            foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                // line 63
                echo "\t\t           \t<tr>
\t\t    \t       \t<td>";
                // line 64
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "nom", array())), "html", null, true);
                echo "</td>
\t\t            \t<td>";
                // line 65
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "prenom", array())), "html", null, true);
                echo "</td>
\t\t            \t<td>";
                // line 66
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["absence"], "type", array())), "html", null, true);
                echo "</td>
\t\t            \t<td>";
                // line 67
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t            \t<td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "commentaire", array()), "html", null, true);
                echo "</td>
\t\t            \t<td>
\t\t            \t\t<a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_absence", array("id" => $this->getAttribute($context["absence"], "id", array()), "idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($context["absence"], "eleve", array()), "classe", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-condensed btn-info\">
\t\t            \t\t\t<span class=\"fa fa-edit\"></span>
\t\t            \t\t</a>
\t\t            \t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_absence", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-condensed btn-danger\">
\t\t            \t\t\t<span class=\"fa fa-trash\"></span>
\t\t            \t\t</a>
\t\t            \t</td>
\t\t            </tr>
\t\t            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t        </tbody>
\t\t    </table>
\t\t</div>
\t</div>

";
        }
        // line 85
        echo "
</div>
";
        
        $__internal_28a4d8eb4d3c19f046eb9e17a27e8de25ccdda368d0412f379a3859ee6823845->leave($__internal_28a4d8eb4d3c19f046eb9e17a27e8de25ccdda368d0412f379a3859ee6823845_prof);

        
        $__internal_732dd98709383ae4ad7bf1564ff1541c8378f8c285f703b0b08caf44441bcc1c->leave($__internal_732dd98709383ae4ad7bf1564ff1541c8378f8c285f703b0b08caf44441bcc1c_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38147d1d4bf00dc2a0a746f3ada59b2b0aa01d2decd420191aae5b62935307ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38147d1d4bf00dc2a0a746f3ada59b2b0aa01d2decd420191aae5b62935307ca->enter($__internal_38147d1d4bf00dc2a0a746f3ada59b2b0aa01d2decd420191aae5b62935307ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_593fc013c3e7fa4966c48c00801835fabeba68801818b764306044bec36403b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593fc013c3e7fa4966c48c00801835fabeba68801818b764306044bec36403b5->enter($__internal_593fc013c3e7fa4966c48c00801835fabeba68801818b764306044bec36403b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('#selectYear').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t \$('#selectClasse').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});

\t\t\t\t\$('.active').removeClass('active');
                \$('.abs').addClass('active');
            });
</script>

";
        
        $__internal_593fc013c3e7fa4966c48c00801835fabeba68801818b764306044bec36403b5->leave($__internal_593fc013c3e7fa4966c48c00801835fabeba68801818b764306044bec36403b5_prof);

        
        $__internal_38147d1d4bf00dc2a0a746f3ada59b2b0aa01d2decd420191aae5b62935307ca->leave($__internal_38147d1d4bf00dc2a0a746f3ada59b2b0aa01d2decd420191aae5b62935307ca_prof);

    }

    public function getTemplateName()
    {
        return ":absence:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 90,  229 => 89,  217 => 85,  209 => 79,  197 => 73,  191 => 70,  186 => 68,  182 => 67,  178 => 66,  174 => 65,  170 => 64,  167 => 63,  163 => 62,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  129 => 48,  127 => 47,  120 => 43,  111 => 37,  106 => 35,  99 => 31,  92 => 27,  87 => 25,  80 => 21,  72 => 16,  65 => 12,  59 => 9,  55 => 7,  53 => 6,  50 => 4,  41 => 3,  11 => 1,);
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

{% block bodyList %}
<div class=\"page-content-wrap\">
    {#% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %#}
         {#% # if 'ROLE_SUPER_ADMIN' in app.user.roles %#}
           <!-- <a href=\"{#{path('absence_new')}}\">{{'absence.add'|trans}#}</a> -->
        {#% # endif %#}
    {#% # endif %#}            
    <div class=\"row\">
        <div class=\"col-md-12\">
\t\t\t{{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t{{'absence.manage'|trans}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.classe, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t{{ form_widget(form.classe ,{'id':'selectClasse', 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t    \t{{ form_errors(form.classe) }}
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.annee, null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t    \t{{ form_widget(form.annee ,{'id': 'selectYear', 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_errors(form.annee) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">Chercher</button>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>

{% if absences|length != 0 %}
\t<div class=\"col-md-12\" style=\"margin-top: 5%;\">
\t\t<div class=\"table-responsive\">
\t\t   \t<table id=\"customers2\" class=\"table \">
\t\t        <thead>
\t\t            <tr>
\t\t                <th>{{'eleve.nom'|trans}}</th>
\t\t                <th>{{'eleve.prenom'|trans}}</th>
\t\t                <th>{{'global.type'|trans}}</th>
\t\t                <th>{{'absence.date'|trans}}</th>
\t\t                <th>{{'form.comment'|trans}}</th>
\t\t                <th>{{'global.action'|trans}}</th>
\t\t            </tr>
\t\t\t    </thead>
\t\t        <tbody>
\t\t          \t{% for absence in absences %}
\t\t           \t<tr>
\t\t    \t       \t<td>{{absence.eleve.nom | upper}}</td>
\t\t            \t<td>{{absence.eleve.prenom | upper}}</td>
\t\t            \t<td>{{absence.type | upper}}</td>
\t\t            \t<td>{{absence.date|date('d/m/Y')}}</td>
\t\t            \t<td>{{absence.commentaire}}</td>
\t\t            \t<td>
\t\t            \t\t<a href=\"{{path('edit_absence',{'id': absence.id, 'idClasse': absence.eleve.classe.id})}}\" class=\"btn btn-condensed btn-info\">
\t\t            \t\t\t<span class=\"fa fa-edit\"></span>
\t\t            \t\t</a>
\t\t            \t\t<a href=\"{{path('delete_absence',{'id': absence.id})}}\" class=\"btn btn-condensed btn-danger\">
\t\t            \t\t\t<span class=\"fa fa-trash\"></span>
\t\t            \t\t</a>
\t\t            \t</td>
\t\t            </tr>
\t\t            \t{% endfor %}
\t\t        </tbody>
\t\t    </table>
\t\t</div>
\t</div>

{% endif %}

</div>
{% endblock %}

{% block javascripts %}
\t
<script type=\"text/javascript\">

     \$( document ).ready( function() {

                \$('#selectYear').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});
\t\t\t\t \$('#selectClasse').selectpicker({
 \t\t\t\t\tstyle: 'btn-default',
  \t\t\t\t\tsize: 4
\t\t\t\t});

\t\t\t\t\$('.active').removeClass('active');
                \$('.abs').addClass('active');
            });
</script>

{% endblock %}", ":absence:index.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/absence/index.html.twig");
    }
}
