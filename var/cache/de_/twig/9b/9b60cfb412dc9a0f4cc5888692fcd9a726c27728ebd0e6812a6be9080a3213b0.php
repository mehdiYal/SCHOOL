<?php

/* :travailrealise:show.html.twig */
class __TwigTemplate_5af2109cce2f3049c1a1fd92ce7d103fa43470b63752ff31ddd3c119c577cc0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":travailrealise:show.html.twig", 1);
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
        $__internal_288ed761c5bf20daa692c7c895d0a670325043564a2d139b1730412116ce0ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288ed761c5bf20daa692c7c895d0a670325043564a2d139b1730412116ce0ad8->enter($__internal_288ed761c5bf20daa692c7c895d0a670325043564a2d139b1730412116ce0ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:show.html.twig"));

        $__internal_c29ee009dbe0e5a9aab3b8ac32440db71542a6b162cd7e5dcfb25fc0019fceed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29ee009dbe0e5a9aab3b8ac32440db71542a6b162cd7e5dcfb25fc0019fceed->enter($__internal_c29ee009dbe0e5a9aab3b8ac32440db71542a6b162cd7e5dcfb25fc0019fceed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288ed761c5bf20daa692c7c895d0a670325043564a2d139b1730412116ce0ad8->leave($__internal_288ed761c5bf20daa692c7c895d0a670325043564a2d139b1730412116ce0ad8_prof);

        
        $__internal_c29ee009dbe0e5a9aab3b8ac32440db71542a6b162cd7e5dcfb25fc0019fceed->leave($__internal_c29ee009dbe0e5a9aab3b8ac32440db71542a6b162cd7e5dcfb25fc0019fceed_prof);

    }

    // line 4
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_34030707a5289ae9e4e599c47df58bc602fd9c66c07c8af6e214e3ec300bfd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34030707a5289ae9e4e599c47df58bc602fd9c66c07c8af6e214e3ec300bfd2e->enter($__internal_34030707a5289ae9e4e599c47df58bc602fd9c66c07c8af6e214e3ec300bfd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_140e00336194bc88458e70f71aea42cde7255758bd48d8a90cfd79685f80f7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140e00336194bc88458e70f71aea42cde7255758bd48d8a90cfd79685f80f7a2->enter($__internal_140e00336194bc88458e70f71aea42cde7255758bd48d8a90cfd79685f80f7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
                    <th class=\"text-center\" style=\"width:10%;\">";
        // line 12
        echo "annee";
        echo "</th>
                    <th class=\"text-center\">";
        // line 13
        echo "niveau";
        echo "</th>
                   \t<th class=\"text-center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</th>
                   \t<th class=\"text-center\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.date"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">Travail demandé</th>
                    <th class=\"text-center\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.action"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
               \t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["travail"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["travail"], "annee", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["travail"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["travail"], "classe", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["travail"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["travail"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["uploads_devoir"]) ? $context["uploads_devoir"] : $this->getContext($context, "uploads_devoir")) . "/") . $this->getAttribute($context["travail"], "travail", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-file\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_travail", array("id" => $this->getAttribute($context["travail"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-edit\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-danger\" href=\"";
            // line 38
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
        // line 44
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_140e00336194bc88458e70f71aea42cde7255758bd48d8a90cfd79685f80f7a2->leave($__internal_140e00336194bc88458e70f71aea42cde7255758bd48d8a90cfd79685f80f7a2_prof);

        
        $__internal_34030707a5289ae9e4e599c47df58bc602fd9c66c07c8af6e214e3ec300bfd2e->leave($__internal_34030707a5289ae9e4e599c47df58bc602fd9c66c07c8af6e214e3ec300bfd2e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_beb847b4fd4dcd64a104addd93bcbb1a2d8d1609e6965dc6ac109ddc3c97e6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb847b4fd4dcd64a104addd93bcbb1a2d8d1609e6965dc6ac109ddc3c97e6c9->enter($__internal_beb847b4fd4dcd64a104addd93bcbb1a2d8d1609e6965dc6ac109ddc3c97e6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9a86e0740e01db970993d8ed4350f59797f019232e57cda98acf440f3a726c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a86e0740e01db970993d8ed4350f59797f019232e57cda98acf440f3a726c89->enter($__internal_9a86e0740e01db970993d8ed4350f59797f019232e57cda98acf440f3a726c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
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
        
        $__internal_9a86e0740e01db970993d8ed4350f59797f019232e57cda98acf440f3a726c89->leave($__internal_9a86e0740e01db970993d8ed4350f59797f019232e57cda98acf440f3a726c89_prof);

        
        $__internal_beb847b4fd4dcd64a104addd93bcbb1a2d8d1609e6965dc6ac109ddc3c97e6c9->leave($__internal_beb847b4fd4dcd64a104addd93bcbb1a2d8d1609e6965dc6ac109ddc3c97e6c9_prof);

    }

    public function getTemplateName()
    {
        return ":travailrealise:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 50,  160 => 49,  147 => 44,  135 => 38,  129 => 35,  121 => 30,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  97 => 23,  93 => 22,  86 => 18,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  57 => 7,  53 => 6,  50 => 5,  41 => 4,  11 => 1,);
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
                    <th class=\"text-center\" style=\"width:10%;\">{{'annee'}}</th>
                    <th class=\"text-center\">{{'niveau'}}</th>
                   \t<th class=\"text-center\">{{'classe'|trans}}</th>
                   \t<th class=\"text-center\">{{'matiere'|trans}}</th>
                    <th class=\"text-center\">{{'global.date'|trans}}</th>
                    <th class=\"text-center\">Travail demandé</th>
                    <th class=\"text-center\">{{'global.action'|trans}}</th>
                </tr>
            </thead>
            <tbody>
               \t{% for travail in data %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.annee.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.annee.niveau}}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.classe.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.matiere.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{travail.date|date('d/m/Y')}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-condensed btn-info\" href=\"{{asset(uploads_devoir~'/'~travail.travail)}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-file\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
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

{% endblock %}", ":travailrealise:show.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/travailrealise/show.html.twig");
    }
}
