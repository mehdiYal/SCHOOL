<?php

/* travailrealise/show.html.twig */
class __TwigTemplate_8ddd2a3bc4cba5f33f147c9278282544d197c0fba3b3d906caddad58f147aae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "travailrealise/show.html.twig", 1);
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
        $__internal_651a25be55b19859e7e7bbbfdfc3639d01eb8c22a06062710b3ce543080f7ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651a25be55b19859e7e7bbbfdfc3639d01eb8c22a06062710b3ce543080f7ff7->enter($__internal_651a25be55b19859e7e7bbbfdfc3639d01eb8c22a06062710b3ce543080f7ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/show.html.twig"));

        $__internal_99b5ae197345e07fe214057cb3a42f6821293df20eff3aa452e92c8a29d2589d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b5ae197345e07fe214057cb3a42f6821293df20eff3aa452e92c8a29d2589d->enter($__internal_99b5ae197345e07fe214057cb3a42f6821293df20eff3aa452e92c8a29d2589d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651a25be55b19859e7e7bbbfdfc3639d01eb8c22a06062710b3ce543080f7ff7->leave($__internal_651a25be55b19859e7e7bbbfdfc3639d01eb8c22a06062710b3ce543080f7ff7_prof);

        
        $__internal_99b5ae197345e07fe214057cb3a42f6821293df20eff3aa452e92c8a29d2589d->leave($__internal_99b5ae197345e07fe214057cb3a42f6821293df20eff3aa452e92c8a29d2589d_prof);

    }

    // line 4
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_2651975e7ccf44fe388cac44deff0dd006bebd673554fb7658553ff239f2c644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2651975e7ccf44fe388cac44deff0dd006bebd673554fb7658553ff239f2c644->enter($__internal_2651975e7ccf44fe388cac44deff0dd006bebd673554fb7658553ff239f2c644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_8975ba9d941f74b674959cfc2d891f79c80d182245dddf15627bd6c98296dda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8975ba9d941f74b674959cfc2d891f79c80d182245dddf15627bd6c98296dda5->enter($__internal_8975ba9d941f74b674959cfc2d891f79c80d182245dddf15627bd6c98296dda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 5
        echo "\t<div class=\"table-responsive\">
\t\t<a style=\"margin-bottom:2%;\" class=\"btn btn-info\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_travail");
        echo "\">
\t\t\t<span class=\"fa fa-plus\"></span>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("travail.add"), "html", null, true);
        echo "
\t\t</a>
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th class=\"text-center\" style=\"width:20%;\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</th>
                   \t<th class=\"text-center\" style=\"width:10%;\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\" style=\"width:10%;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.date"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\" style=\"width:10%;\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("travail.done"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\" style=\"width:30%;\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.comment"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\" style=\"width:20%;\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.action"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
               \t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["travail"]) {
            // line 22
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 23
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["travail"], "annee", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["travail"], "annee", array()), "niveau", array())) . " ") . $this->getAttribute($this->getAttribute($context["travail"], "classe", array()), "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["travail"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute($context["travail"], "date", array()), "d/m/Y") . " ") . twig_date_format_filter($this->env, $this->getAttribute($context["travail"], "time", array()), "H:i")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_devoir"] ?? $this->getContext($context, "uploads_devoir")) . "/") . $this->getAttribute($context["travail"], "travail", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-file\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["travail"], "commentaire", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_travail", array("id" => $this->getAttribute($context["travail"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-edit\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-danger\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_travail", array("id" => $this->getAttribute($context["travail"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['travail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_8975ba9d941f74b674959cfc2d891f79c80d182245dddf15627bd6c98296dda5->leave($__internal_8975ba9d941f74b674959cfc2d891f79c80d182245dddf15627bd6c98296dda5_prof);

        
        $__internal_2651975e7ccf44fe388cac44deff0dd006bebd673554fb7658553ff239f2c644->leave($__internal_2651975e7ccf44fe388cac44deff0dd006bebd673554fb7658553ff239f2c644_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9021078d51e8ac171d8dc104ed2661ca7c1aea6dca58a9bca0886d3c314741e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9021078d51e8ac171d8dc104ed2661ca7c1aea6dca58a9bca0886d3c314741e8->enter($__internal_9021078d51e8ac171d8dc104ed2661ca7c1aea6dca58a9bca0886d3c314741e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_19efb64e7ca3e03bc714d09bf771702e2a98bf512634e25fc3f1a27296740217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19efb64e7ca3e03bc714d09bf771702e2a98bf512634e25fc3f1a27296740217->enter($__internal_19efb64e7ca3e03bc714d09bf771702e2a98bf512634e25fc3f1a27296740217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    
<script type=\"text/javascript\">
\t
     \$( document ).ready( function() {

                \$('#customers2').dataTable();
                \$('.active').removeClass('active');
                \$('.GC').addClass('active');
                \$('.showTravail').addClass('active');
            });
</script>

";
        
        $__internal_19efb64e7ca3e03bc714d09bf771702e2a98bf512634e25fc3f1a27296740217->leave($__internal_19efb64e7ca3e03bc714d09bf771702e2a98bf512634e25fc3f1a27296740217_prof);

        
        $__internal_9021078d51e8ac171d8dc104ed2661ca7c1aea6dca58a9bca0886d3c314741e8->leave($__internal_9021078d51e8ac171d8dc104ed2661ca7c1aea6dca58a9bca0886d3c314741e8_prof);

    }

    public function getTemplateName()
    {
        return "travailrealise/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 48,  155 => 47,  142 => 42,  130 => 36,  124 => 33,  119 => 31,  112 => 27,  107 => 25,  103 => 24,  99 => 23,  96 => 22,  92 => 21,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  57 => 7,  53 => 6,  50 => 5,  41 => 4,  11 => 1,);
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


{% block  bodyList %}
\t<div class=\"table-responsive\">
\t\t<a style=\"margin-bottom:2%;\" class=\"btn btn-info\" href=\"{{path('new_travail')}}\">
\t\t\t<span class=\"fa fa-plus\"></span>{{'travail.add'|trans}}
\t\t</a>
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th class=\"text-center\" style=\"width:20%;\">{{'classe'|trans}}</th>
                   \t<th class=\"text-center\" style=\"width:10%;\">{{'matiere'|trans}}</th>
                    <th class=\"text-center\" style=\"width:10%;\">{{'global.date'|trans}}</th>
                    <th class=\"text-center\" style=\"width:10%;\">{{'travail.done'|trans}}</th>
                    <th class=\"text-center\" style=\"width:30%;\">{{'form.comment'|trans}}</th>
                    <th class=\"text-center\" style=\"width:20%;\">{{'global.action'|trans}}</th>
                </tr>
            </thead>
            <tbody>
               \t{% for travail in data %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.annee.nom~' '~travail.annee.niveau~' '~travail.classe.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.matiere.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.date|date('d/m/Y')~' '~travail.time|date('H:i')}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{asset(uploads_devoir~'/'~travail.travail)}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-file\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.commentaire}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{path('edit_travail',{'id':travail.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-edit\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-danger\" href=\"{{path('delete_travail',{'id':travail.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}

{% block javascripts %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    
<script type=\"text/javascript\">
\t
     \$( document ).ready( function() {

                \$('#customers2').dataTable();
                \$('.active').removeClass('active');
                \$('.GC').addClass('active');
                \$('.showTravail').addClass('active');
            });
</script>

{% endblock %}", "travailrealise/show.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\travailrealise\\show.html.twig");
    }
}
