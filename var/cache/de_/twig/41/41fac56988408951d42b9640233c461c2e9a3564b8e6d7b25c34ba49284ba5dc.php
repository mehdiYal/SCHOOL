<?php

/* :classesViews:listClasses.html.twig */
class __TwigTemplate_f9d3b3faf022c1d021b06e249fbc17d461f86c33fc073833cb3c618b420ea892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":classesViews:listClasses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ed2fe410a921d8ad5abb1a16e967a90a1bfc26f47a75b8683c96000e5e1d2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed2fe410a921d8ad5abb1a16e967a90a1bfc26f47a75b8683c96000e5e1d2d6->enter($__internal_7ed2fe410a921d8ad5abb1a16e967a90a1bfc26f47a75b8683c96000e5e1d2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $__internal_1177d17b0fc3227e150c4ed2a754f0c197ee6292bc1a6a2320b7913da0a489ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1177d17b0fc3227e150c4ed2a754f0c197ee6292bc1a6a2320b7913da0a489ff->enter($__internal_1177d17b0fc3227e150c4ed2a754f0c197ee6292bc1a6a2320b7913da0a489ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed2fe410a921d8ad5abb1a16e967a90a1bfc26f47a75b8683c96000e5e1d2d6->leave($__internal_7ed2fe410a921d8ad5abb1a16e967a90a1bfc26f47a75b8683c96000e5e1d2d6_prof);

        
        $__internal_1177d17b0fc3227e150c4ed2a754f0c197ee6292bc1a6a2320b7913da0a489ff->leave($__internal_1177d17b0fc3227e150c4ed2a754f0c197ee6292bc1a6a2320b7913da0a489ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5a4215e8b3ab6f7b2f25bc32f9fb763ec77a5de748a4ae0a022e1f81ea0639f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a4215e8b3ab6f7b2f25bc32f9fb763ec77a5de748a4ae0a022e1f81ea0639f->enter($__internal_f5a4215e8b3ab6f7b2f25bc32f9fb763ec77a5de748a4ae0a022e1f81ea0639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_683b928267f037e18bad5f6a9970a907b11d354e82f035da05236236d6a23228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683b928267f037e18bad5f6a9970a907b11d354e82f035da05236236d6a23228->enter($__internal_683b928267f037e18bad5f6a9970a907b11d354e82f035da05236236d6a23228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_683b928267f037e18bad5f6a9970a907b11d354e82f035da05236236d6a23228->leave($__internal_683b928267f037e18bad5f6a9970a907b11d354e82f035da05236236d6a23228_prof);

        
        $__internal_f5a4215e8b3ab6f7b2f25bc32f9fb763ec77a5de748a4ae0a022e1f81ea0639f->leave($__internal_f5a4215e8b3ab6f7b2f25bc32f9fb763ec77a5de748a4ae0a022e1f81ea0639f_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_7741cac8d5ffc4be450c48962ee5a63f5db37dd98d2dc845532dcfcfc89e1eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7741cac8d5ffc4be450c48962ee5a63f5db37dd98d2dc845532dcfcfc89e1eb1->enter($__internal_7741cac8d5ffc4be450c48962ee5a63f5db37dd98d2dc845532dcfcfc89e1eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_13687f5edbc0f8a021cb0d6adf9a7256033c6e6f43f8da515bb65102a3f3136d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13687f5edbc0f8a021cb0d6adf9a7256033c6e6f43f8da515bb65102a3f3136d->enter($__internal_13687f5edbc0f8a021cb0d6adf9a7256033c6e6f43f8da515bb65102a3f3136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Eleves</th>
                    <th>Responsable</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>Aff Ens.</th>
                    <th>Aff Eleves</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["classe"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "responsable", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectProf", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectEleves", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-users\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_13687f5edbc0f8a021cb0d6adf9a7256033c6e6f43f8da515bb65102a3f3136d->leave($__internal_13687f5edbc0f8a021cb0d6adf9a7256033c6e6f43f8da515bb65102a3f3136d_prof);

        
        $__internal_7741cac8d5ffc4be450c48962ee5a63f5db37dd98d2dc845532dcfcfc89e1eb1->leave($__internal_7741cac8d5ffc4be450c48962ee5a63f5db37dd98d2dc845532dcfcfc89e1eb1_prof);

    }

    // line 59
    public function block_active($context, array $blocks = array())
    {
        $__internal_e895f58d132bd002b4173b2b40b1d015683eb3774455c2f2f1b99a82ea93d216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e895f58d132bd002b4173b2b40b1d015683eb3774455c2f2f1b99a82ea93d216->enter($__internal_e895f58d132bd002b4173b2b40b1d015683eb3774455c2f2f1b99a82ea93d216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_3073c521eea306e83543c556edcfc2a1149d9080b9f04bd9145c689303d402d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3073c521eea306e83543c556edcfc2a1149d9080b9f04bd9145c689303d402d6->enter($__internal_3073c521eea306e83543c556edcfc2a1149d9080b9f04bd9145c689303d402d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 60
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.classe').addClass('active');
        \$('.listCl').addClass('active');
    </script>
";
        
        $__internal_3073c521eea306e83543c556edcfc2a1149d9080b9f04bd9145c689303d402d6->leave($__internal_3073c521eea306e83543c556edcfc2a1149d9080b9f04bd9145c689303d402d6_prof);

        
        $__internal_e895f58d132bd002b4173b2b40b1d015683eb3774455c2f2f1b99a82ea93d216->leave($__internal_e895f58d132bd002b4173b2b40b1d015683eb3774455c2f2f1b99a82ea93d216_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 60,  179 => 59,  166 => 55,  154 => 49,  146 => 44,  138 => 39,  130 => 34,  125 => 32,  121 => 31,  115 => 30,  111 => 29,  107 => 28,  104 => 27,  100 => 26,  91 => 20,  87 => 19,  75 => 9,  66 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'classe'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Eleves</th>
                    <th>Responsable</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>Aff Ens.</th>
                    <th>Aff Eleves</th>
                </tr>
            </thead>
            <tbody>
                {% for classe in app.user.ecole.classes%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ classe.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ classe.description}}</td>
\t\t\t\t\t\t<td>{{ classe.annee.nom}} {{ classe.annee.niveau}}</td>
\t\t\t\t\t\t<td>{{ classe.eleves|length}}</td>
\t\t\t\t\t\t<td>{{ classe.responsable.nom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeClasse',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('affectProf',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('affectEleves',{'id':classe.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-users\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}  
{% block active %}
    <script>
        \$('.active').removeClass('active');
        \$('.classe').addClass('active');
        \$('.listCl').addClass('active');
    </script>
{% endblock%}", ":classesViews:listClasses.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/classesViews/listClasses.html.twig");
    }
}
