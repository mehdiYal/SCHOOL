<?php

/* ressource/show.html.twig */
class __TwigTemplate_90f023de62857a851df06e830a90c97f8a76d99728873816991f2f6cd35cc1a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "ressource/show.html.twig", 1);
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
        $__internal_06b9966e001c8c2381eda8e0a5786a4e7ebe87130f7b82cbd90bacd78c5dc9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b9966e001c8c2381eda8e0a5786a4e7ebe87130f7b82cbd90bacd78c5dc9b0->enter($__internal_06b9966e001c8c2381eda8e0a5786a4e7ebe87130f7b82cbd90bacd78c5dc9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ressource/show.html.twig"));

        $__internal_1802a4204cfb14b88d57bc82c753b417769e5e0f14e67c7b71f7afb90f002b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1802a4204cfb14b88d57bc82c753b417769e5e0f14e67c7b71f7afb90f002b39->enter($__internal_1802a4204cfb14b88d57bc82c753b417769e5e0f14e67c7b71f7afb90f002b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ressource/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b9966e001c8c2381eda8e0a5786a4e7ebe87130f7b82cbd90bacd78c5dc9b0->leave($__internal_06b9966e001c8c2381eda8e0a5786a4e7ebe87130f7b82cbd90bacd78c5dc9b0_prof);

        
        $__internal_1802a4204cfb14b88d57bc82c753b417769e5e0f14e67c7b71f7afb90f002b39->leave($__internal_1802a4204cfb14b88d57bc82c753b417769e5e0f14e67c7b71f7afb90f002b39_prof);

    }

    // line 4
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_cc0aa88b837699faaf11272d1d253847ab4d8b1814ce9b2f30141838e2497f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0aa88b837699faaf11272d1d253847ab4d8b1814ce9b2f30141838e2497f8e->enter($__internal_cc0aa88b837699faaf11272d1d253847ab4d8b1814ce9b2f30141838e2497f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_26d9cf2539fe7d3dec34ee72a1a2be3587afaf864c28564b5f79ae40152e9dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d9cf2539fe7d3dec34ee72a1a2be3587afaf864c28564b5f79ae40152e9dc7->enter($__internal_26d9cf2539fe7d3dec34ee72a1a2be3587afaf864c28564b5f79ae40152e9dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 5
        echo "\t<div class=\"table-responsive\">
\t\t<a style=\"margin-bottom:2%;\" class=\"btn btn-info\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_ressource");
        echo "\">
\t\t\t<span class=\"fa fa-plus\"></span>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.ressource.add"), "html", null, true);
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
                   \t<th class=\"text-center\" style=\"width:10%;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.title"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\" style=\"width:10%;\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.title") . "/") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.support.title")), "html", null, true);
        echo "</th>
                    <th class=\"text-center\" style=\"width:10%;\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.ressource.external"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\" style=\"width:30%;\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.comment"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\" style=\"width:20%;\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.action"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
               \t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["ressource"], "annee", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["ressource"], "annee", array()), "niveau", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ressource"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressource"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("uploads_ressource" . "/") . $this->getAttribute($context["ressource"], "cours", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-file\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("uploads_ressource" . "/") . $this->getAttribute($context["ressource"], "ressource", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-file\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressource"], "commentaire", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_ressource", array("id" => $this->getAttribute($context["ressource"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-edit\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_ressource", array("id" => $this->getAttribute($context["ressource"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_26d9cf2539fe7d3dec34ee72a1a2be3587afaf864c28564b5f79ae40152e9dc7->leave($__internal_26d9cf2539fe7d3dec34ee72a1a2be3587afaf864c28564b5f79ae40152e9dc7_prof);

        
        $__internal_cc0aa88b837699faaf11272d1d253847ab4d8b1814ce9b2f30141838e2497f8e->leave($__internal_cc0aa88b837699faaf11272d1d253847ab4d8b1814ce9b2f30141838e2497f8e_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05615d3c8055960017dc1a47d626215237639df261e2d5c9801bd84d5315e777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05615d3c8055960017dc1a47d626215237639df261e2d5c9801bd84d5315e777->enter($__internal_05615d3c8055960017dc1a47d626215237639df261e2d5c9801bd84d5315e777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_835072ddd0befae5aa3016872e20e14b7406b086cf16333978249ff559060fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835072ddd0befae5aa3016872e20e14b7406b086cf16333978249ff559060fed->enter($__internal_835072ddd0befae5aa3016872e20e14b7406b086cf16333978249ff559060fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
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
        
        $__internal_835072ddd0befae5aa3016872e20e14b7406b086cf16333978249ff559060fed->leave($__internal_835072ddd0befae5aa3016872e20e14b7406b086cf16333978249ff559060fed_prof);

        
        $__internal_05615d3c8055960017dc1a47d626215237639df261e2d5c9801bd84d5315e777->leave($__internal_05615d3c8055960017dc1a47d626215237639df261e2d5c9801bd84d5315e777_prof);

    }

    public function getTemplateName()
    {
        return "ressource/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 54,  167 => 53,  154 => 48,  142 => 42,  136 => 39,  131 => 37,  124 => 33,  116 => 28,  111 => 26,  107 => 25,  103 => 24,  100 => 23,  96 => 22,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  57 => 7,  53 => 6,  50 => 5,  41 => 4,  11 => 1,);
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
\t\t<a style=\"margin-bottom:2%;\" class=\"btn btn-info\" href=\"{{path('new_ressource')}}\">
\t\t\t<span class=\"fa fa-plus\"></span>{{'global.ressource.add'|trans}}
\t\t</a>
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th class=\"text-center\" style=\"width:20%;\">{{'classe'|trans}}</th>
                   \t<th class=\"text-center\" style=\"width:10%;\">{{'matiere'|trans}}</th>
                   \t<th class=\"text-center\" style=\"width:10%;\">{{'global.title'|trans}}</th>
                    <th class=\"text-center\" style=\"width:10%;\">{{'cours.title'|trans~'/'~'cours.support.title'|trans}}</th>
                    <th class=\"text-center\" style=\"width:10%;\">{{'global.ressource.external'|trans}}</th>
                    <th class=\"text-center\" style=\"width:30%;\">{{'form.comment'|trans}}</th>
                    <th class=\"text-center\" style=\"width:20%;\">{{'global.action'|trans}}</th>
                </tr>
            </thead>
            <tbody>
               \t{% for ressource in data %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">{{ressource.annee.nom~' '~ressource.annee.niveau}}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ressource.matiere.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ressource.titre}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{asset('uploads_ressource'~'/'~ressource.cours)}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-file\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{asset('uploads_ressource'~'/'~ressource.ressource)}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-file\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ressource.commentaire}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{path('edit_ressource',{'id':ressource.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-edit\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-danger\" href=\"{{path('delete_ressource',{'id':ressource.id})}}\">
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

{% endblock %}", "ressource/show.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\ressource\\show.html.twig");
    }
}
