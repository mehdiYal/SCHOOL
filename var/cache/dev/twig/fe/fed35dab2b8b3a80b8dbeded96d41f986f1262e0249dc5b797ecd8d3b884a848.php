<?php

/* :matieresViews:listProgram.html.twig */
class __TwigTemplate_c822e91e26dbc55f535d843d60104d3397a13ed4cfabca7bcedce3452c933b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":matieresViews:listProgram.html.twig", 1);
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
        $__internal_9aea8a829f10f25a83d3a34ddc845d745963caff0c64e02ef2800b70e24c841d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aea8a829f10f25a83d3a34ddc845d745963caff0c64e02ef2800b70e24c841d->enter($__internal_9aea8a829f10f25a83d3a34ddc845d745963caff0c64e02ef2800b70e24c841d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listProgram.html.twig"));

        $__internal_9e0be1c23cea0a1ce2aeecbd855b0d9c5c0ad148329fb0c6a1f8f1d22efffeca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0be1c23cea0a1ce2aeecbd855b0d9c5c0ad148329fb0c6a1f8f1d22efffeca->enter($__internal_9e0be1c23cea0a1ce2aeecbd855b0d9c5c0ad148329fb0c6a1f8f1d22efffeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listProgram.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aea8a829f10f25a83d3a34ddc845d745963caff0c64e02ef2800b70e24c841d->leave($__internal_9aea8a829f10f25a83d3a34ddc845d745963caff0c64e02ef2800b70e24c841d_prof);

        
        $__internal_9e0be1c23cea0a1ce2aeecbd855b0d9c5c0ad148329fb0c6a1f8f1d22efffeca->leave($__internal_9e0be1c23cea0a1ce2aeecbd855b0d9c5c0ad148329fb0c6a1f8f1d22efffeca_prof);

    }

    // line 3
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_2b289582af9a2777edcefb44219cab802b1f4b714fb33cad455597f5691c7ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b289582af9a2777edcefb44219cab802b1f4b714fb33cad455597f5691c7ae5->enter($__internal_2b289582af9a2777edcefb44219cab802b1f4b714fb33cad455597f5691c7ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_01cf431414e0ec0f28be0a565929da201dc72bd29a78d0a1ec093514236e0fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cf431414e0ec0f28be0a565929da201dc72bd29a78d0a1ec093514236e0fc0->enter($__internal_01cf431414e0ec0f28be0a565929da201dc72bd29a78d0a1ec093514236e0fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 4
        echo "
 <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.annual.program"), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 12
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.edit") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.annual.program")), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
            \t";
        // line 17
        $context["i"] = 0;
        // line 18
        echo "            \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ensmat"]) {
            // line 19
            echo "            \t\t<tr>
\t\t\t\t\t\t";
            // line 20
            $context["formFile"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "createView", array());
            // line 21
            echo "
\t\t\t\t\t    ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "
\t\t\t\t\t    <input hidden=\"hidden\" name=\"idEnsMat";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ensmat"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t<input hidden=\"hidden\" name=\"cpt\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" />
\t\t\t\t\t\t<input hidden=\"hidden\" name=\"taille\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["ensmat"]), "html", null, true);
            echo "\" />

\t\t\t\t\t    <td class=\"text-center\">
\t\t\t\t\t    \t<label>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ensmat"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<label>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ensmat"], "classe", array()), "nom", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t";
            // line 35
            if ( !(null === $this->getAttribute($context["ensmat"], "programmeAnnuel", array()))) {
                // line 36
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["uploads_matiere_prog_annuel"]) ? $context["uploads_matiere_prog_annuel"] : $this->getContext($context, "uploads_matiere_prog_annuel")) . "/") . $this->getAttribute($context["ensmat"], "programmeAnnuel", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                       \t\t\t<span>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.parcourir"), "html", null, true);
            echo "</span>
                       \t\t\t";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), "programmeAnnuel", array()), 'widget', array("label_attr" => array("class" => "fileinput")));
            echo "
\t\t\t\t  \t\t\t</a>
\t\t\t\t\t\t\t<button style=\"margin-left:5%;\" type=\"submit\" class=\"btn btn-success btn-condensed\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t   \t</td>
\t\t\t\t\t    ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), 'form_end');
            echo "
\t\t\t\t\t    <td class=\"text-center\">
\t\t\t\t\t\t\t";
            // line 52
            if ((twig_length_filter($this->env, $this->getAttribute($context["ensmat"], "programmeAnnuel", array())) == 0)) {
                // line 53
                echo "\t\t\t\t\t\t\t\t<a href=\"\" class=\"disabled btn btn-danger btn-condensed\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } else {
                // line 57
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-danger btn-condensed\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("matiere_program_annual_delete", array("id" => $this->getAttribute($context["ensmat"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 62
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 63
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ensmat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tbody>
        </table>                                    
    </div>
\t<style type=\"text/css\">

\t
.disabled {
   pointer-events: none;
   cursor: default;
}
\t</style>
";
        
        $__internal_01cf431414e0ec0f28be0a565929da201dc72bd29a78d0a1ec093514236e0fc0->leave($__internal_01cf431414e0ec0f28be0a565929da201dc72bd29a78d0a1ec093514236e0fc0_prof);

        
        $__internal_2b289582af9a2777edcefb44219cab802b1f4b714fb33cad455597f5691c7ae5->leave($__internal_2b289582af9a2777edcefb44219cab802b1f4b714fb33cad455597f5691c7ae5_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da40a2b5b0ad3422888d2a0f839c77934e58337aa4db1b3f581df502522449bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da40a2b5b0ad3422888d2a0f839c77934e58337aa4db1b3f581df502522449bf->enter($__internal_da40a2b5b0ad3422888d2a0f839c77934e58337aa4db1b3f581df502522449bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_12b2b0c684316331cd05ace7c012270d646926c0b8aab9e8de8ca62b07eb01b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b2b0c684316331cd05ace7c012270d646926c0b8aab9e8de8ca62b07eb01b3->enter($__internal_12b2b0c684316331cd05ace7c012270d646926c0b8aab9e8de8ca62b07eb01b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "
<script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

     
</script>
";
        
        $__internal_12b2b0c684316331cd05ace7c012270d646926c0b8aab9e8de8ca62b07eb01b3->leave($__internal_12b2b0c684316331cd05ace7c012270d646926c0b8aab9e8de8ca62b07eb01b3_prof);

        
        $__internal_da40a2b5b0ad3422888d2a0f839c77934e58337aa4db1b3f581df502522449bf->leave($__internal_da40a2b5b0ad3422888d2a0f839c77934e58337aa4db1b3f581df502522449bf_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:listProgram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 79,  219 => 78,  210 => 77,  189 => 65,  182 => 63,  180 => 62,  177 => 61,  169 => 57,  163 => 53,  161 => 52,  156 => 50,  147 => 44,  143 => 43,  138 => 40,  130 => 36,  128 => 35,  121 => 31,  115 => 28,  109 => 25,  105 => 24,  99 => 23,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  82 => 18,  80 => 17,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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

 <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th class=\"text-center\">{{'matiere'|trans}}</th>
                    <th class=\"text-center\">{{'classe'|trans}}</th>
                    <th class=\"text-center\">{{'global.annual.program'|trans}}</th>
                    <th class=\"text-center\">{{'global.edit'|trans ~' '~ 'global.annual.program'|trans }}</th>
                    <th class=\"text-center\">{{'global.delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
            \t{% set i=0 %}
            \t{% for ensmat in data %}
            \t\t<tr>
\t\t\t\t\t\t{% set formFile =  form[i].createView %}

\t\t\t\t\t    {{ form_start(formFile, { 'attr' : { 'class': 'form-horizontal' } }) }}
\t\t\t\t\t    <input hidden=\"hidden\" name=\"idEnsMat{{i}}\" value=\"{{ensmat.id}}\" />
\t\t\t\t\t\t<input hidden=\"hidden\" name=\"cpt\" value=\"{{i}}\" />
\t\t\t\t\t\t<input hidden=\"hidden\" name=\"taille\" value=\"{{ensmat|length}}\" />

\t\t\t\t\t    <td class=\"text-center\">
\t\t\t\t\t    \t<label>{{ensmat.matiere.nom}}</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<label>{{ensmat.classe.nom}}</label>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t{% if ensmat.programmeAnnuel is not null %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{asset(uploads_matiere_prog_annuel~'/'~ensmat.programmeAnnuel)}}\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"file-input-wrapper btn btn-default  fileinput\">
                       \t\t\t<span>{{'global.parcourir'|trans}}</span>
                       \t\t\t{{ form_widget(formFile.programmeAnnuel,{ 'label_attr': {'class': 'fileinput'} } ) }}
\t\t\t\t  \t\t\t</a>
\t\t\t\t\t\t\t<button style=\"margin-left:5%;\" type=\"submit\" class=\"btn btn-success btn-condensed\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t   \t</td>
\t\t\t\t\t    {{ form_end(formFile) }}
\t\t\t\t\t    <td class=\"text-center\">
\t\t\t\t\t\t\t{% if ensmat.programmeAnnuel|length==0 %}
\t\t\t\t\t\t\t\t<a href=\"\" class=\"disabled btn btn-danger btn-condensed\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-danger btn-condensed\" href=\"{{path('matiere_program_annual_delete',{'id': ensmat.id})}}\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% set i=i+1 %}
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
            </tbody>
        </table>                                    
    </div>
\t<style type=\"text/css\">

\t
.disabled {
   pointer-events: none;
   cursor: default;
}
\t</style>
{% endblock %}
{% block javascripts %}

<script type=\"text/javascript\" src=\"{{asset('js/plugins/bootstrap/bootstrap-file-input.js')}}\"></script>
<script type=\"text/javascript\">

     
</script>
{% endblock %}", ":matieresViews:listProgram.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/matieresViews/listProgram.html.twig");
    }
}
