<?php

/* :enseignantsViews:listClasses.html.twig */
class __TwigTemplate_1aa35bda28b44ff312fb3542c4fc9ed4cc6e6801004c2ee8c231887ae9f579a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":enseignantsViews:listClasses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_c9a9b3a59dc16cae1362e664892b439d59a451c1db96974fa675c9aa3c2aa35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a9b3a59dc16cae1362e664892b439d59a451c1db96974fa675c9aa3c2aa35d->enter($__internal_c9a9b3a59dc16cae1362e664892b439d59a451c1db96974fa675c9aa3c2aa35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $__internal_e43bbea4159589b55eeb0263066a6fafd51196e91f8f9dc664454b332bdada2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43bbea4159589b55eeb0263066a6fafd51196e91f8f9dc664454b332bdada2b->enter($__internal_e43bbea4159589b55eeb0263066a6fafd51196e91f8f9dc664454b332bdada2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9a9b3a59dc16cae1362e664892b439d59a451c1db96974fa675c9aa3c2aa35d->leave($__internal_c9a9b3a59dc16cae1362e664892b439d59a451c1db96974fa675c9aa3c2aa35d_prof);

        
        $__internal_e43bbea4159589b55eeb0263066a6fafd51196e91f8f9dc664454b332bdada2b->leave($__internal_e43bbea4159589b55eeb0263066a6fafd51196e91f8f9dc664454b332bdada2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c579633465524ec5786eaa631c8b53dd6870b4b378292d23479b8e33bcacb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c579633465524ec5786eaa631c8b53dd6870b4b378292d23479b8e33bcacb8f->enter($__internal_9c579633465524ec5786eaa631c8b53dd6870b4b378292d23479b8e33bcacb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e09ba151b0afb5731f5e5307b7cf86baebe28cdadbee2a8f5861dcc06b99b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e09ba151b0afb5731f5e5307b7cf86baebe28cdadbee2a8f5861dcc06b99b85->enter($__internal_0e09ba151b0afb5731f5e5307b7cf86baebe28cdadbee2a8f5861dcc06b99b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classes")) . "-") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matieres")), "html", null, true);
        echo "
";
        
        $__internal_0e09ba151b0afb5731f5e5307b7cf86baebe28cdadbee2a8f5861dcc06b99b85->leave($__internal_0e09ba151b0afb5731f5e5307b7cf86baebe28cdadbee2a8f5861dcc06b99b85_prof);

        
        $__internal_9c579633465524ec5786eaa631c8b53dd6870b4b378292d23479b8e33bcacb8f->leave($__internal_9c579633465524ec5786eaa631c8b53dd6870b4b378292d23479b8e33bcacb8f_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_896b13a74d184099b8fbc7dbbf917c95c2fc4b50df86145970e5e8dcd69d6281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896b13a74d184099b8fbc7dbbf917c95c2fc4b50df86145970e5e8dcd69d6281->enter($__internal_896b13a74d184099b8fbc7dbbf917c95c2fc4b50df86145970e5e8dcd69d6281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_a17c03287f13cb819793c1f2c22d5d3a0d60b1b8a650e6a1f8e20538a58a3c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17c03287f13cb819793c1f2c22d5d3a0d60b1b8a650e6a1f8e20538a58a3c1e->enter($__internal_a17c03287f13cb819793c1f2c22d5d3a0d60b1b8a650e6a1f8e20538a58a3c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "\t\t\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("school"), "html", null, true);
        echo "</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("niveau"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("eleve.title"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
        echo "</th>
                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.annual.program"), "html", null, true);
        echo "</th>
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.title"), "html", null, true);
        echo "</th>
                    <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.title"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            ";
        if ($this->env->isDebug()) {
            // line 26
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 27
        echo "            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 29
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "ecole", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEleve", array("idClasse" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_show_class", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t";
            // line 45
            if ( !(null === $this->getAttribute($context["classe"], "programmeAnnuel", array()))) {
                // line 46
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["uploads_matiere_prog_annuel"]) ? $context["uploads_matiere_prog_annuel"] : $this->getContext($context, "uploads_matiere_prog_annuel")) . "/") . $this->getAttribute($context["classe"], "programmeAnnuel", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-file\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_new", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_a17c03287f13cb819793c1f2c22d5d3a0d60b1b8a650e6a1f8e20538a58a3c1e->leave($__internal_a17c03287f13cb819793c1f2c22d5d3a0d60b1b8a650e6a1f8e20538a58a3c1e_prof);

        
        $__internal_896b13a74d184099b8fbc7dbbf917c95c2fc4b50df86145970e5e8dcd69d6281->leave($__internal_896b13a74d184099b8fbc7dbbf917c95c2fc4b50df86145970e5e8dcd69d6281_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_893d1d047b4fdea3647cd88f6748873f8951715d0d10485026cf0b55f02cef5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893d1d047b4fdea3647cd88f6748873f8951715d0d10485026cf0b55f02cef5f->enter($__internal_893d1d047b4fdea3647cd88f6748873f8951715d0d10485026cf0b55f02cef5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b905ac1a0d04e9e9f4db0c2a7621a7e52efd9920aefcb018dc89a6c5ad67f46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b905ac1a0d04e9e9f4db0c2a7621a7e52efd9920aefcb018dc89a6c5ad67f46b->enter($__internal_b905ac1a0d04e9e9f4db0c2a7621a7e52efd9920aefcb018dc89a6c5ad67f46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    
<script type=\"text/javascript\">
\t
     \$( document ).ready( function() {

                \$('#customers2').dataTable();
                \$('.active').removeClass('active');
                \$('.GC').addClass('active');
                \$('.listClasse').addClass('active');
            });
</script>
";
        
        $__internal_b905ac1a0d04e9e9f4db0c2a7621a7e52efd9920aefcb018dc89a6c5ad67f46b->leave($__internal_b905ac1a0d04e9e9f4db0c2a7621a7e52efd9920aefcb018dc89a6c5ad67f46b_prof);

        
        $__internal_893d1d047b4fdea3647cd88f6748873f8951715d0d10485026cf0b55f02cef5f->leave($__internal_893d1d047b4fdea3647cd88f6748873f8951715d0d10485026cf0b55f02cef5f_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 70,  217 => 69,  203 => 63,  186 => 52,  182 => 50,  174 => 46,  172 => 45,  164 => 40,  157 => 36,  152 => 34,  148 => 33,  144 => 32,  140 => 31,  136 => 30,  133 => 29,  129 => 28,  126 => 27,  123 => 26,  116 => 23,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  73 => 9,  64 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans ~' '~ 'classes'|trans ~'-'~ 'matieres'|trans}}
{% endblock %}


{% block bodyList %}
\t\t\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>{{'school'|trans}}</th>
                    <th>{{'classe'|trans}}</th>
                    <th>{{'annee'|trans}}</th>
                    <th>{{'niveau'|trans}}</th>
                    <th>{{'matiere'|trans}}</th>
                    <th>{{'eleve.title'|trans}}</th>
                    <th>{{'global.program'|trans}}</th>
                    <th>{{'global.annual.program'|trans}}</th>
                    <th>{{'absence.title'|trans}}</th>
                    <th>{{'message.title'|trans}}</th>
                </tr>
            </thead>
            {% dump(data) %}
            <tbody>
                {% for classe in data.classes %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ classe.classe.ecole.nom}} </td>
\t\t\t\t\t\t<td>{{ classe.classe.nom }}</td>
\t\t\t\t\t\t<td>{{ classe.classe.annee.nom}}</td>
\t\t\t\t\t\t<td>{{ classe.classe.annee.niveau}}</td>
\t\t\t\t\t\t<td>{{classe.matiere.nom}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{ path('showEleve', { 'idClasse': classe.classe.id, 'idMatiere': classe.matiere.id}) }}\"> <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{path('program_show_class',{ 'id': classe.classe.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t{% if classe.programmeAnnuel is not null %}
\t\t\t\t\t\t\t<a href=\"{{asset(uploads_matiere_prog_annuel~'/'~classe.programmeAnnuel)}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-file\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{path('absence_new',{ 'id': classe.classe.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  

{% block javascripts %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    
<script type=\"text/javascript\">
\t
     \$( document ).ready( function() {

                \$('#customers2').dataTable();
                \$('.active').removeClass('active');
                \$('.GC').addClass('active');
                \$('.listClasse').addClass('active');
            });
</script>
{% endblock %}", ":enseignantsViews:listClasses.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/enseignantsViews/listClasses.html.twig");
    }
}
