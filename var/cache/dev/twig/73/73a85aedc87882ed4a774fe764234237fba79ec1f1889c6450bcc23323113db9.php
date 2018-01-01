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
        $__internal_92ecfb35ebde0097e1a7f67aa825bbd4ec4ebe331e9716315a93bccaa5f9a10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ecfb35ebde0097e1a7f67aa825bbd4ec4ebe331e9716315a93bccaa5f9a10a->enter($__internal_92ecfb35ebde0097e1a7f67aa825bbd4ec4ebe331e9716315a93bccaa5f9a10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $__internal_9853eb4454c0b49ac305aa1be1707e57b8bf1bd3005c5a3a2917d5464e647ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9853eb4454c0b49ac305aa1be1707e57b8bf1bd3005c5a3a2917d5464e647ed4->enter($__internal_9853eb4454c0b49ac305aa1be1707e57b8bf1bd3005c5a3a2917d5464e647ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ecfb35ebde0097e1a7f67aa825bbd4ec4ebe331e9716315a93bccaa5f9a10a->leave($__internal_92ecfb35ebde0097e1a7f67aa825bbd4ec4ebe331e9716315a93bccaa5f9a10a_prof);

        
        $__internal_9853eb4454c0b49ac305aa1be1707e57b8bf1bd3005c5a3a2917d5464e647ed4->leave($__internal_9853eb4454c0b49ac305aa1be1707e57b8bf1bd3005c5a3a2917d5464e647ed4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0af8600d8c0ea8ca31ab23b95cb28ad49fe235ac35058af23886fc54ef885c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0af8600d8c0ea8ca31ab23b95cb28ad49fe235ac35058af23886fc54ef885c1->enter($__internal_f0af8600d8c0ea8ca31ab23b95cb28ad49fe235ac35058af23886fc54ef885c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff30aad4d252386c85e07072155106ed32043378d7b63f7055d7d75f9de4f9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff30aad4d252386c85e07072155106ed32043378d7b63f7055d7d75f9de4f9d8->enter($__internal_ff30aad4d252386c85e07072155106ed32043378d7b63f7055d7d75f9de4f9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classes")) . "-") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matieres")), "html", null, true);
        echo "
";
        
        $__internal_ff30aad4d252386c85e07072155106ed32043378d7b63f7055d7d75f9de4f9d8->leave($__internal_ff30aad4d252386c85e07072155106ed32043378d7b63f7055d7d75f9de4f9d8_prof);

        
        $__internal_f0af8600d8c0ea8ca31ab23b95cb28ad49fe235ac35058af23886fc54ef885c1->leave($__internal_f0af8600d8c0ea8ca31ab23b95cb28ad49fe235ac35058af23886fc54ef885c1_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_8701b9a8d58a83b66a5c4311f782844c295b83002e7c1ebce4a9ff48b8c3139e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8701b9a8d58a83b66a5c4311f782844c295b83002e7c1ebce4a9ff48b8c3139e->enter($__internal_8701b9a8d58a83b66a5c4311f782844c295b83002e7c1ebce4a9ff48b8c3139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_a9ba55c1c44bb187747da2c4ae631e25a30e19161f0cb77deeaea3315f4cd4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ba55c1c44bb187747da2c4ae631e25a30e19161f0cb77deeaea3315f4cd4c4->enter($__internal_a9ba55c1c44bb187747da2c4ae631e25a30e19161f0cb77deeaea3315f4cd4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_a9ba55c1c44bb187747da2c4ae631e25a30e19161f0cb77deeaea3315f4cd4c4->leave($__internal_a9ba55c1c44bb187747da2c4ae631e25a30e19161f0cb77deeaea3315f4cd4c4_prof);

        
        $__internal_8701b9a8d58a83b66a5c4311f782844c295b83002e7c1ebce4a9ff48b8c3139e->leave($__internal_8701b9a8d58a83b66a5c4311f782844c295b83002e7c1ebce4a9ff48b8c3139e_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a7ff693ca2d5add66dfc6e36e743b11e7399e9262788b8a46282e2f8d3a5dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7ff693ca2d5add66dfc6e36e743b11e7399e9262788b8a46282e2f8d3a5dc0->enter($__internal_7a7ff693ca2d5add66dfc6e36e743b11e7399e9262788b8a46282e2f8d3a5dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06267de80560ec19d3743ea2cbab53584268550825e1f5a1d3d2761c9c1e97d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06267de80560ec19d3743ea2cbab53584268550825e1f5a1d3d2761c9c1e97d0->enter($__internal_06267de80560ec19d3743ea2cbab53584268550825e1f5a1d3d2761c9c1e97d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_06267de80560ec19d3743ea2cbab53584268550825e1f5a1d3d2761c9c1e97d0->leave($__internal_06267de80560ec19d3743ea2cbab53584268550825e1f5a1d3d2761c9c1e97d0_prof);

        
        $__internal_7a7ff693ca2d5add66dfc6e36e743b11e7399e9262788b8a46282e2f8d3a5dc0->leave($__internal_7a7ff693ca2d5add66dfc6e36e743b11e7399e9262788b8a46282e2f8d3a5dc0_prof);

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
