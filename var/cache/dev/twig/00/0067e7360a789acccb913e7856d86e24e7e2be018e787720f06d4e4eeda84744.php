<?php

/* :enseignantsViews:listEnseignants.html.twig */
class __TwigTemplate_1c4238b60e2937e0e3604fb366637c0c7bec57d8651df4883f5fa2abf92685b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":enseignantsViews:listEnseignants.html.twig", 1);
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
        $__internal_11b52e2e5870001892f3609850aa1edb36f5130edd6220acb38de71743d96288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b52e2e5870001892f3609850aa1edb36f5130edd6220acb38de71743d96288->enter($__internal_11b52e2e5870001892f3609850aa1edb36f5130edd6220acb38de71743d96288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $__internal_8822a0dee01790769ae582862d88a2d809195a34186f0a9250aa50931245288a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8822a0dee01790769ae582862d88a2d809195a34186f0a9250aa50931245288a->enter($__internal_8822a0dee01790769ae582862d88a2d809195a34186f0a9250aa50931245288a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11b52e2e5870001892f3609850aa1edb36f5130edd6220acb38de71743d96288->leave($__internal_11b52e2e5870001892f3609850aa1edb36f5130edd6220acb38de71743d96288_prof);

        
        $__internal_8822a0dee01790769ae582862d88a2d809195a34186f0a9250aa50931245288a->leave($__internal_8822a0dee01790769ae582862d88a2d809195a34186f0a9250aa50931245288a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdb55421eda3b81d660fb7dad4bf4dac50dd936595cdb8e299a661423ef90562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb55421eda3b81d660fb7dad4bf4dac50dd936595cdb8e299a661423ef90562->enter($__internal_cdb55421eda3b81d660fb7dad4bf4dac50dd936595cdb8e299a661423ef90562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47246c43d483177b728d2e0f413e91473a70776fe2b3b9c51f5afe4539ba527f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47246c43d483177b728d2e0f413e91473a70776fe2b3b9c51f5afe4539ba527f->enter($__internal_47246c43d483177b728d2e0f413e91473a70776fe2b3b9c51f5afe4539ba527f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_47246c43d483177b728d2e0f413e91473a70776fe2b3b9c51f5afe4539ba527f->leave($__internal_47246c43d483177b728d2e0f413e91473a70776fe2b3b9c51f5afe4539ba527f_prof);

        
        $__internal_cdb55421eda3b81d660fb7dad4bf4dac50dd936595cdb8e299a661423ef90562->leave($__internal_cdb55421eda3b81d660fb7dad4bf4dac50dd936595cdb8e299a661423ef90562_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_efb5431533c326c3dea776ef49357f86e81c8330a9820f9e63039c05bf2d4b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb5431533c326c3dea776ef49357f86e81c8330a9820f9e63039c05bf2d4b0f->enter($__internal_efb5431533c326c3dea776ef49357f86e81c8330a9820f9e63039c05bf2d4b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_08f8703355573702404b9521e1e14c35bfdee44c62979cba3878241f26cea6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f8703355573702404b9521e1e14c35bfdee44c62979cba3878241f26cea6d6->enter($__internal_08f8703355573702404b9521e1e14c35bfdee44c62979cba3878241f26cea6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th> Age </th>
                    <th>Date d'entrée</th>
                    <th>Type de contrat</th>
                    <th>telephone</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["enseignant"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["enseignant"], "dateDeNaissance", array()), "Y")), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["enseignant"], "dateDEntree", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "typeContrat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-user\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_08f8703355573702404b9521e1e14c35bfdee44c62979cba3878241f26cea6d6->leave($__internal_08f8703355573702404b9521e1e14c35bfdee44c62979cba3878241f26cea6d6_prof);

        
        $__internal_efb5431533c326c3dea776ef49357f86e81c8330a9820f9e63039c05bf2d4b0f->leave($__internal_efb5431533c326c3dea776ef49357f86e81c8330a9820f9e63039c05bf2d4b0f_prof);

    }

    // line 52
    public function block_active($context, array $blocks = array())
    {
        $__internal_49af9c06b54a7da8787d81ad9aabbf24a199451c21f34cd670317cdc5c32f8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49af9c06b54a7da8787d81ad9aabbf24a199451c21f34cd670317cdc5c32f8bc->enter($__internal_49af9c06b54a7da8787d81ad9aabbf24a199451c21f34cd670317cdc5c32f8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_7e4050d256a4ab1211e59eb16cfb0d2d71e9fcaaf526fc581014a848c18ff37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4050d256a4ab1211e59eb16cfb0d2d71e9fcaaf526fc581014a848c18ff37e->enter($__internal_7e4050d256a4ab1211e59eb16cfb0d2d71e9fcaaf526fc581014a848c18ff37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 53
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.ens').addClass('active');
        \$('.listEns').addClass('active');
    </script>
";
        
        $__internal_7e4050d256a4ab1211e59eb16cfb0d2d71e9fcaaf526fc581014a848c18ff37e->leave($__internal_7e4050d256a4ab1211e59eb16cfb0d2d71e9fcaaf526fc581014a848c18ff37e_prof);

        
        $__internal_49af9c06b54a7da8787d81ad9aabbf24a199451c21f34cd670317cdc5c32f8bc->leave($__internal_49af9c06b54a7da8787d81ad9aabbf24a199451c21f34cd670317cdc5c32f8bc_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:listEnseignants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 53,  172 => 52,  159 => 47,  147 => 41,  139 => 36,  131 => 31,  126 => 29,  122 => 28,  118 => 27,  114 => 26,  108 => 25,  105 => 24,  101 => 23,  94 => 19,  90 => 18,  86 => 17,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    {{'list'|trans}} {{'teachers'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th> Age </th>
                    <th>Date d'entrée</th>
                    <th>Type de contrat</th>
                    <th>telephone</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for enseignant in app.user.ecole.enseignants %}
                    <tr>
                        <td>{{ enseignant.nom|upper}} {{ enseignant.prenom}}</td>
                        <td>{{ (\"now\"|date(\"Y\"))-( enseignant.dateDeNaissance|date(\"Y\"))}}</td>
                        <td>{{enseignant.dateDEntree|date(\"Y-m-d\")}}</td>
                        <td>{{enseignant.typeContrat}}</td>
                        <td>{{enseignant.telephone}}</td>
                        <td>
                            <a href=\"{{ path('editEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('profileEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-user\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}

{% block active %}
    <script>
        \$('.active').removeClass('active');
        \$('.ens').addClass('active');
        \$('.listEns').addClass('active');
    </script>
{% endblock%}

", ":enseignantsViews:listEnseignants.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/enseignantsViews/listEnseignants.html.twig");
    }
}
