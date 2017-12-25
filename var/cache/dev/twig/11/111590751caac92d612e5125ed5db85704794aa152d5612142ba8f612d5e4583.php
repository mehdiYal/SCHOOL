<?php

/* travailrealise/show.html.twig */
class __TwigTemplate_87298d78ae0d43149edc523bb33d650a77b6d690d6aa7f5e9b6ece57ec508854 extends Twig_Template
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
        $__internal_3264bfb4429371c4d905a57ddb130f4395a562376caaeaec450035c0a7ad1eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3264bfb4429371c4d905a57ddb130f4395a562376caaeaec450035c0a7ad1eff->enter($__internal_3264bfb4429371c4d905a57ddb130f4395a562376caaeaec450035c0a7ad1eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/show.html.twig"));

        $__internal_6c51ad666d998aac03a6cc4c3a29ad34cb470ab2ba23dd07a71622704d6dacaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c51ad666d998aac03a6cc4c3a29ad34cb470ab2ba23dd07a71622704d6dacaf->enter($__internal_6c51ad666d998aac03a6cc4c3a29ad34cb470ab2ba23dd07a71622704d6dacaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3264bfb4429371c4d905a57ddb130f4395a562376caaeaec450035c0a7ad1eff->leave($__internal_3264bfb4429371c4d905a57ddb130f4395a562376caaeaec450035c0a7ad1eff_prof);

        
        $__internal_6c51ad666d998aac03a6cc4c3a29ad34cb470ab2ba23dd07a71622704d6dacaf->leave($__internal_6c51ad666d998aac03a6cc4c3a29ad34cb470ab2ba23dd07a71622704d6dacaf_prof);

    }

    // line 4
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c703a9b25f9677b628ea394576c06b67804143efb824f5c2db366663df54ea1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c703a9b25f9677b628ea394576c06b67804143efb824f5c2db366663df54ea1b->enter($__internal_c703a9b25f9677b628ea394576c06b67804143efb824f5c2db366663df54ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_9edcde882318f80d95f58ac95cf400aa5ddefda04f3df6ec245dd0e82f96e0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edcde882318f80d95f58ac95cf400aa5ddefda04f3df6ec245dd0e82f96e0df->enter($__internal_9edcde882318f80d95f58ac95cf400aa5ddefda04f3df6ec245dd0e82f96e0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_devoir"] ?? $this->getContext($context, "uploads_devoir")) . "/") . $this->getAttribute($context["travail"], "travail", array()))), "html", null, true);
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
        
        $__internal_9edcde882318f80d95f58ac95cf400aa5ddefda04f3df6ec245dd0e82f96e0df->leave($__internal_9edcde882318f80d95f58ac95cf400aa5ddefda04f3df6ec245dd0e82f96e0df_prof);

        
        $__internal_c703a9b25f9677b628ea394576c06b67804143efb824f5c2db366663df54ea1b->leave($__internal_c703a9b25f9677b628ea394576c06b67804143efb824f5c2db366663df54ea1b_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47f3fb8f2b02e76ba7e6cc789b07b307d25d6e91f7de9f8e79791f722ae8fd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f3fb8f2b02e76ba7e6cc789b07b307d25d6e91f7de9f8e79791f722ae8fd46->enter($__internal_47f3fb8f2b02e76ba7e6cc789b07b307d25d6e91f7de9f8e79791f722ae8fd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc149b6a3a1180f6c0f2799fe05073acaafda5a31c5013c97d43e42541893796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc149b6a3a1180f6c0f2799fe05073acaafda5a31c5013c97d43e42541893796->enter($__internal_dc149b6a3a1180f6c0f2799fe05073acaafda5a31c5013c97d43e42541893796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dc149b6a3a1180f6c0f2799fe05073acaafda5a31c5013c97d43e42541893796->leave($__internal_dc149b6a3a1180f6c0f2799fe05073acaafda5a31c5013c97d43e42541893796_prof);

        
        $__internal_47f3fb8f2b02e76ba7e6cc789b07b307d25d6e91f7de9f8e79791f722ae8fd46->leave($__internal_47f3fb8f2b02e76ba7e6cc789b07b307d25d6e91f7de9f8e79791f722ae8fd46_prof);

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

{% endblock %}", "travailrealise/show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/travailrealise/show.html.twig");
    }
}
