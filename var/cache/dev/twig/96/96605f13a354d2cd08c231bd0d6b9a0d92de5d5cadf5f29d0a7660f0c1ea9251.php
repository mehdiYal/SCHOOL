<?php

/* :classesViews:listClasses.html.twig */
class __TwigTemplate_4874af51db16f800e270367de0e6eca819139e568a6183239dbf62caca1df0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":classesViews:listClasses.html.twig", 1);
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
        $__internal_8bdd304b561ee2fb9a1494c4a980ecdf6e3fc44ee1534c153d9f335c2140d2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bdd304b561ee2fb9a1494c4a980ecdf6e3fc44ee1534c153d9f335c2140d2a2->enter($__internal_8bdd304b561ee2fb9a1494c4a980ecdf6e3fc44ee1534c153d9f335c2140d2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $__internal_38dea500d86273ac799d21a02b6c3487760905a6cc5538468dbb124cf495c09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38dea500d86273ac799d21a02b6c3487760905a6cc5538468dbb124cf495c09a->enter($__internal_38dea500d86273ac799d21a02b6c3487760905a6cc5538468dbb124cf495c09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bdd304b561ee2fb9a1494c4a980ecdf6e3fc44ee1534c153d9f335c2140d2a2->leave($__internal_8bdd304b561ee2fb9a1494c4a980ecdf6e3fc44ee1534c153d9f335c2140d2a2_prof);

        
        $__internal_38dea500d86273ac799d21a02b6c3487760905a6cc5538468dbb124cf495c09a->leave($__internal_38dea500d86273ac799d21a02b6c3487760905a6cc5538468dbb124cf495c09a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_acec5b63d6dc1df433359a0323968c93d85edeef3dbc47f586f1da30d16deb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acec5b63d6dc1df433359a0323968c93d85edeef3dbc47f586f1da30d16deb8b->enter($__internal_acec5b63d6dc1df433359a0323968c93d85edeef3dbc47f586f1da30d16deb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e0537184374620ab94d5fb77a356d2d3e1080bc87241e98fa573fc0e974b2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0537184374620ab94d5fb77a356d2d3e1080bc87241e98fa573fc0e974b2b3->enter($__internal_1e0537184374620ab94d5fb77a356d2d3e1080bc87241e98fa573fc0e974b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_1e0537184374620ab94d5fb77a356d2d3e1080bc87241e98fa573fc0e974b2b3->leave($__internal_1e0537184374620ab94d5fb77a356d2d3e1080bc87241e98fa573fc0e974b2b3_prof);

        
        $__internal_acec5b63d6dc1df433359a0323968c93d85edeef3dbc47f586f1da30d16deb8b->leave($__internal_acec5b63d6dc1df433359a0323968c93d85edeef3dbc47f586f1da30d16deb8b_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_9a614ce8b9c882a304aa7ad9365c8fae751cb0021113eca983a437db3c713cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a614ce8b9c882a304aa7ad9365c8fae751cb0021113eca983a437db3c713cd0->enter($__internal_9a614ce8b9c882a304aa7ad9365c8fae751cb0021113eca983a437db3c713cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_fb79f1e6756222811bc77b604c4d441e7b7af05434ee82bd5f4c6b6435d059d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb79f1e6756222811bc77b604c4d441e7b7af05434ee82bd5f4c6b6435d059d4->enter($__internal_fb79f1e6756222811bc77b604c4d441e7b7af05434ee82bd5f4c6b6435d059d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Annee</th>
                    <th>Nombre d'èléves</th>
                    <th>Responsable</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>Affecter Profs</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 26
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["classe"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "responsable", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectProf", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user-plus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_fb79f1e6756222811bc77b604c4d441e7b7af05434ee82bd5f4c6b6435d059d4->leave($__internal_fb79f1e6756222811bc77b604c4d441e7b7af05434ee82bd5f4c6b6435d059d4_prof);

        
        $__internal_9a614ce8b9c882a304aa7ad9365c8fae751cb0021113eca983a437db3c713cd0->leave($__internal_9a614ce8b9c882a304aa7ad9365c8fae751cb0021113eca983a437db3c713cd0_prof);

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
        return array (  156 => 49,  144 => 43,  136 => 38,  128 => 33,  123 => 31,  119 => 30,  113 => 29,  109 => 28,  105 => 27,  102 => 26,  98 => 25,  90 => 20,  86 => 19,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
                    <th>Nombre d'èléves</th>
                    <th>Responsable</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>Affecter Profs</th>
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
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", ":classesViews:listClasses.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
