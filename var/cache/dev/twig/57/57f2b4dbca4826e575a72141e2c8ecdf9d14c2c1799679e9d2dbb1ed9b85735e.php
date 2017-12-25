<?php

/* :enseignantsViews:listEnseignants.html.twig */
class __TwigTemplate_38d39be3573fffeb0adeeb9ef72436df39337e601b3496f7e25e23119c72b2db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":enseignantsViews:listEnseignants.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e5ba81122d3617bae46a1f7ce4da4b9d195781bc40514ec6aa0ca4b7942de38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5ba81122d3617bae46a1f7ce4da4b9d195781bc40514ec6aa0ca4b7942de38->enter($__internal_8e5ba81122d3617bae46a1f7ce4da4b9d195781bc40514ec6aa0ca4b7942de38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $__internal_75bdadc1f097edaca8975c4bfe60197117c56c3ad25eb6dd3526d7614e21e488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bdadc1f097edaca8975c4bfe60197117c56c3ad25eb6dd3526d7614e21e488->enter($__internal_75bdadc1f097edaca8975c4bfe60197117c56c3ad25eb6dd3526d7614e21e488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5ba81122d3617bae46a1f7ce4da4b9d195781bc40514ec6aa0ca4b7942de38->leave($__internal_8e5ba81122d3617bae46a1f7ce4da4b9d195781bc40514ec6aa0ca4b7942de38_prof);

        
        $__internal_75bdadc1f097edaca8975c4bfe60197117c56c3ad25eb6dd3526d7614e21e488->leave($__internal_75bdadc1f097edaca8975c4bfe60197117c56c3ad25eb6dd3526d7614e21e488_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_641021080cd6f0af7d48691605f03e19e80a655df7fb7c3d24fcf309776bd329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641021080cd6f0af7d48691605f03e19e80a655df7fb7c3d24fcf309776bd329->enter($__internal_641021080cd6f0af7d48691605f03e19e80a655df7fb7c3d24fcf309776bd329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78b769b280ce023041a530a16ad964fb86fc84890e682f17a73f6ca4972bcf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b769b280ce023041a530a16ad964fb86fc84890e682f17a73f6ca4972bcf5f->enter($__internal_78b769b280ce023041a530a16ad964fb86fc84890e682f17a73f6ca4972bcf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_78b769b280ce023041a530a16ad964fb86fc84890e682f17a73f6ca4972bcf5f->leave($__internal_78b769b280ce023041a530a16ad964fb86fc84890e682f17a73f6ca4972bcf5f_prof);

        
        $__internal_641021080cd6f0af7d48691605f03e19e80a655df7fb7c3d24fcf309776bd329->leave($__internal_641021080cd6f0af7d48691605f03e19e80a655df7fb7c3d24fcf309776bd329_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_3a838720f30ea7d43dab9dcf1633e9bbdfeb1d7894de021967ab3665fb2c031b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a838720f30ea7d43dab9dcf1633e9bbdfeb1d7894de021967ab3665fb2c031b->enter($__internal_3a838720f30ea7d43dab9dcf1633e9bbdfeb1d7894de021967ab3665fb2c031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_83b557e6b48bccbcb4c4857085fc8db291f4ab181b39ae33e03a70b3750c9ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b557e6b48bccbcb4c4857085fc8db291f4ab181b39ae33e03a70b3750c9ae0->enter($__internal_83b557e6b48bccbcb4c4857085fc8db291f4ab181b39ae33e03a70b3750c9ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_83b557e6b48bccbcb4c4857085fc8db291f4ab181b39ae33e03a70b3750c9ae0->leave($__internal_83b557e6b48bccbcb4c4857085fc8db291f4ab181b39ae33e03a70b3750c9ae0_prof);

        
        $__internal_3a838720f30ea7d43dab9dcf1633e9bbdfeb1d7894de021967ab3665fb2c031b->leave($__internal_3a838720f30ea7d43dab9dcf1633e9bbdfeb1d7894de021967ab3665fb2c031b_prof);

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
        return array (  158 => 47,  146 => 41,  138 => 36,  130 => 31,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  107 => 25,  104 => 24,  100 => 23,  93 => 19,  89 => 18,  85 => 17,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

", ":enseignantsViews:listEnseignants.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/enseignantsViews/listEnseignants.html.twig");
    }
}
