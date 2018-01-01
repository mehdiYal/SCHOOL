<?php

/* :enseignantsViews:listClasses.html.twig */
class __TwigTemplate_fe41392a3d19e7ea2a29841398a6078a1171aa7e0c5fb27725ec783844658a52 extends Twig_Template
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
        $__internal_e7e205e796cd6b64d06521dc86bf656252eafae3e20c480f604c3d3532e97ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e205e796cd6b64d06521dc86bf656252eafae3e20c480f604c3d3532e97ebf->enter($__internal_e7e205e796cd6b64d06521dc86bf656252eafae3e20c480f604c3d3532e97ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $__internal_7a5fb13f6eb47e91a7ce5787485f395990ff7a98f4e73a1472e712e6833bbc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5fb13f6eb47e91a7ce5787485f395990ff7a98f4e73a1472e712e6833bbc07->enter($__internal_7a5fb13f6eb47e91a7ce5787485f395990ff7a98f4e73a1472e712e6833bbc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e205e796cd6b64d06521dc86bf656252eafae3e20c480f604c3d3532e97ebf->leave($__internal_e7e205e796cd6b64d06521dc86bf656252eafae3e20c480f604c3d3532e97ebf_prof);

        
        $__internal_7a5fb13f6eb47e91a7ce5787485f395990ff7a98f4e73a1472e712e6833bbc07->leave($__internal_7a5fb13f6eb47e91a7ce5787485f395990ff7a98f4e73a1472e712e6833bbc07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bc85644467670499176ccf3b354ec0199e6526070df073d6919d332375e061f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc85644467670499176ccf3b354ec0199e6526070df073d6919d332375e061f->enter($__internal_2bc85644467670499176ccf3b354ec0199e6526070df073d6919d332375e061f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9512f0a3be0ffd4bd96b59cf04269a616448d5989f2ad242db8997c60f82ab86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9512f0a3be0ffd4bd96b59cf04269a616448d5989f2ad242db8997c60f82ab86->enter($__internal_9512f0a3be0ffd4bd96b59cf04269a616448d5989f2ad242db8997c60f82ab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classes")) . "-") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matieres")), "html", null, true);
        echo "
";
        
        $__internal_9512f0a3be0ffd4bd96b59cf04269a616448d5989f2ad242db8997c60f82ab86->leave($__internal_9512f0a3be0ffd4bd96b59cf04269a616448d5989f2ad242db8997c60f82ab86_prof);

        
        $__internal_2bc85644467670499176ccf3b354ec0199e6526070df073d6919d332375e061f->leave($__internal_2bc85644467670499176ccf3b354ec0199e6526070df073d6919d332375e061f_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_50c661988eb4d1d5d5e69644b824430f0c485b50bc2b28f30bc39c905a1707bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c661988eb4d1d5d5e69644b824430f0c485b50bc2b28f30bc39c905a1707bf->enter($__internal_50c661988eb4d1d5d5e69644b824430f0c485b50bc2b28f30bc39c905a1707bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_f1cebff5ac621a4928eed45af5f6141afd4296754501620e0b91d15052c61c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cebff5ac621a4928eed45af5f6141afd4296754501620e0b91d15052c61c59->enter($__internal_f1cebff5ac621a4928eed45af5f6141afd4296754501620e0b91d15052c61c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_f1cebff5ac621a4928eed45af5f6141afd4296754501620e0b91d15052c61c59->leave($__internal_f1cebff5ac621a4928eed45af5f6141afd4296754501620e0b91d15052c61c59_prof);

        
        $__internal_50c661988eb4d1d5d5e69644b824430f0c485b50bc2b28f30bc39c905a1707bf->leave($__internal_50c661988eb4d1d5d5e69644b824430f0c485b50bc2b28f30bc39c905a1707bf_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_844d9ae83df17d4111aaf0a0f9ce8e4da4d103c1741da44d49f822fc0d939caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844d9ae83df17d4111aaf0a0f9ce8e4da4d103c1741da44d49f822fc0d939caa->enter($__internal_844d9ae83df17d4111aaf0a0f9ce8e4da4d103c1741da44d49f822fc0d939caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c2e2fc4debd0bfebf9e8b4b593c33bdacbb81b9b1621fc12eade0ba2a177fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2e2fc4debd0bfebf9e8b4b593c33bdacbb81b9b1621fc12eade0ba2a177fe9->enter($__internal_2c2e2fc4debd0bfebf9e8b4b593c33bdacbb81b9b1621fc12eade0ba2a177fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2c2e2fc4debd0bfebf9e8b4b593c33bdacbb81b9b1621fc12eade0ba2a177fe9->leave($__internal_2c2e2fc4debd0bfebf9e8b4b593c33bdacbb81b9b1621fc12eade0ba2a177fe9_prof);

        
        $__internal_844d9ae83df17d4111aaf0a0f9ce8e4da4d103c1741da44d49f822fc0d939caa->leave($__internal_844d9ae83df17d4111aaf0a0f9ce8e4da4d103c1741da44d49f822fc0d939caa_prof);

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
{% endblock %}", ":enseignantsViews:listClasses.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/enseignantsViews/listClasses.html.twig");
    }
}
