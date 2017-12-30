<?php

/* matieresViews/listProgram.html.twig */
class __TwigTemplate_b0c8ae38fb783a69edf4b43603e9491fa06155d80bc771703016ad134c6ef4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "matieresViews/listProgram.html.twig", 1);
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
        $__internal_1fefbc43b1a80cd629664b0906caeb270e95a3c097925c68bd893eacd914dd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fefbc43b1a80cd629664b0906caeb270e95a3c097925c68bd893eacd914dd2f->enter($__internal_1fefbc43b1a80cd629664b0906caeb270e95a3c097925c68bd893eacd914dd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listProgram.html.twig"));

        $__internal_a8a638086272c7d2aab9b025dbf0cf8d99560672aa4f0c11e8fcb6a038d4a31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a638086272c7d2aab9b025dbf0cf8d99560672aa4f0c11e8fcb6a038d4a31f->enter($__internal_a8a638086272c7d2aab9b025dbf0cf8d99560672aa4f0c11e8fcb6a038d4a31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listProgram.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fefbc43b1a80cd629664b0906caeb270e95a3c097925c68bd893eacd914dd2f->leave($__internal_1fefbc43b1a80cd629664b0906caeb270e95a3c097925c68bd893eacd914dd2f_prof);

        
        $__internal_a8a638086272c7d2aab9b025dbf0cf8d99560672aa4f0c11e8fcb6a038d4a31f->leave($__internal_a8a638086272c7d2aab9b025dbf0cf8d99560672aa4f0c11e8fcb6a038d4a31f_prof);

    }

    // line 3
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_b0baecdeeeac5d2f28e439f2719f13e0118e48c2ce84ee9ec119152d521da744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0baecdeeeac5d2f28e439f2719f13e0118e48c2ce84ee9ec119152d521da744->enter($__internal_b0baecdeeeac5d2f28e439f2719f13e0118e48c2ce84ee9ec119152d521da744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_ca62bd8ffd0bd1fe7523815128015886169ad19861a23862bc42606d9974acf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca62bd8ffd0bd1fe7523815128015886169ad19861a23862bc42606d9974acf2->enter($__internal_ca62bd8ffd0bd1fe7523815128015886169ad19861a23862bc42606d9974acf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 4
        echo "
 <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table\">
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
            echo "\t\t\t\t\t\t</td>

\t\t\t\t\t\t
\t\t\t\t\t\t<td class=\"text-center\">
                       \t\t\t";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), "programmeAnnuel", array()), 'widget', array("label_attr" => array("class" => "fileinput btn-primary")));
            echo "
\t\t\t\t\t\t\t<button style=\"margin-left:5%;\" type=\"submit\" class=\"btn btn-success btn-condensed\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t   \t</td>
\t\t\t\t\t    ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formFile"]) ? $context["formFile"] : $this->getContext($context, "formFile")), 'form_end');
            echo "
\t\t\t\t\t    <td class=\"text-center\">
\t\t\t\t\t\t\t";
            // line 51
            if ((twig_length_filter($this->env, $this->getAttribute($context["ensmat"], "programmeAnnuel", array())) == 0)) {
                // line 52
                echo "\t\t\t\t\t\t\t\t<a href=\"\" class=\"disabled btn btn-danger btn-condensed\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-danger btn-condensed\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("matiere_program_annual_delete", array("id" => $this->getAttribute($context["ensmat"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 61
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 62
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ensmat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        
        $__internal_ca62bd8ffd0bd1fe7523815128015886169ad19861a23862bc42606d9974acf2->leave($__internal_ca62bd8ffd0bd1fe7523815128015886169ad19861a23862bc42606d9974acf2_prof);

        
        $__internal_b0baecdeeeac5d2f28e439f2719f13e0118e48c2ce84ee9ec119152d521da744->leave($__internal_b0baecdeeeac5d2f28e439f2719f13e0118e48c2ce84ee9ec119152d521da744_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2dcde7602f2bcf71e05a63aa9d897c3488c8cf5cb90ea6158d212929322aad3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcde7602f2bcf71e05a63aa9d897c3488c8cf5cb90ea6158d212929322aad3c->enter($__internal_2dcde7602f2bcf71e05a63aa9d897c3488c8cf5cb90ea6158d212929322aad3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb7db15a17f694e0a2efd9b5aacb305076b42cb45764a942ea7ef354859287b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7db15a17f694e0a2efd9b5aacb305076b42cb45764a942ea7ef354859287b7->enter($__internal_fb7db15a17f694e0a2efd9b5aacb305076b42cb45764a942ea7ef354859287b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "
<script type='text/javascript' src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
     \$( document ).ready( function() {

                \$('.active').removeClass('active');
                \$('.GC').addClass('active');
                \$('.prgmAnn').addClass('active');
            });
</script>

";
        
        $__internal_fb7db15a17f694e0a2efd9b5aacb305076b42cb45764a942ea7ef354859287b7->leave($__internal_fb7db15a17f694e0a2efd9b5aacb305076b42cb45764a942ea7ef354859287b7_prof);

        
        $__internal_2dcde7602f2bcf71e05a63aa9d897c3488c8cf5cb90ea6158d212929322aad3c->leave($__internal_2dcde7602f2bcf71e05a63aa9d897c3488c8cf5cb90ea6158d212929322aad3c_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/listProgram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 78,  215 => 77,  206 => 76,  185 => 64,  178 => 62,  176 => 61,  173 => 60,  165 => 56,  159 => 52,  157 => 51,  152 => 49,  144 => 44,  138 => 40,  130 => 36,  128 => 35,  121 => 31,  115 => 28,  109 => 25,  105 => 24,  99 => 23,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  82 => 18,  80 => 17,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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
        <table id=\"customers2\" class=\"table\">
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
\t\t\t\t\t\t</td>

\t\t\t\t\t\t
\t\t\t\t\t\t<td class=\"text-center\">
                       \t\t\t{{ form_widget(formFile.programmeAnnuel,{ 'label_attr': {'class': 'fileinput btn-primary'} } ) }}
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

<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-file-input.js') }}\"></script>
<script type=\"text/javascript\">
     \$( document ).ready( function() {

                \$('.active').removeClass('active');
                \$('.GC').addClass('active');
                \$('.prgmAnn').addClass('active');
            });
</script>

{% endblock %}", "matieresViews/listProgram.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\matieresViews\\listProgram.html.twig");
    }
}
