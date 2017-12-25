<?php

/* classesViews/listClasses.html.twig */
class __TwigTemplate_61a5c7aed38ebd7e646ef93e880f962234540f743383dc70c1576ac8201dbfc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "classesViews/listClasses.html.twig", 1);
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
        $__internal_cbbba1912b44660b6a3bfbb31eee6793a5e7f5aeb50d0f23177e86ec565aa00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbba1912b44660b6a3bfbb31eee6793a5e7f5aeb50d0f23177e86ec565aa00e->enter($__internal_cbbba1912b44660b6a3bfbb31eee6793a5e7f5aeb50d0f23177e86ec565aa00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $__internal_8e7e8778b631d786994ba6bf02ef02af088dd27a1c7b1454391d0b3ccc470054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7e8778b631d786994ba6bf02ef02af088dd27a1c7b1454391d0b3ccc470054->enter($__internal_8e7e8778b631d786994ba6bf02ef02af088dd27a1c7b1454391d0b3ccc470054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbba1912b44660b6a3bfbb31eee6793a5e7f5aeb50d0f23177e86ec565aa00e->leave($__internal_cbbba1912b44660b6a3bfbb31eee6793a5e7f5aeb50d0f23177e86ec565aa00e_prof);

        
        $__internal_8e7e8778b631d786994ba6bf02ef02af088dd27a1c7b1454391d0b3ccc470054->leave($__internal_8e7e8778b631d786994ba6bf02ef02af088dd27a1c7b1454391d0b3ccc470054_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_492f15e2c5c9ee8e01c8c0a9871d634f4a4bc85bd5ba1253acdd9dd828366cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492f15e2c5c9ee8e01c8c0a9871d634f4a4bc85bd5ba1253acdd9dd828366cd8->enter($__internal_492f15e2c5c9ee8e01c8c0a9871d634f4a4bc85bd5ba1253acdd9dd828366cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2366a0fe78218d15868ab3c83a467940064e0b299f97e08eeadb6fa3a63da18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2366a0fe78218d15868ab3c83a467940064e0b299f97e08eeadb6fa3a63da18->enter($__internal_b2366a0fe78218d15868ab3c83a467940064e0b299f97e08eeadb6fa3a63da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_b2366a0fe78218d15868ab3c83a467940064e0b299f97e08eeadb6fa3a63da18->leave($__internal_b2366a0fe78218d15868ab3c83a467940064e0b299f97e08eeadb6fa3a63da18_prof);

        
        $__internal_492f15e2c5c9ee8e01c8c0a9871d634f4a4bc85bd5ba1253acdd9dd828366cd8->leave($__internal_492f15e2c5c9ee8e01c8c0a9871d634f4a4bc85bd5ba1253acdd9dd828366cd8_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_b85aed41876dc0651d67da2e222b3b87744cbce0060a87d671c99051f6e733b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85aed41876dc0651d67da2e222b3b87744cbce0060a87d671c99051f6e733b0->enter($__internal_b85aed41876dc0651d67da2e222b3b87744cbce0060a87d671c99051f6e733b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_084ac23177bffefa502265b4a2010c7006929e8cf798eff4fb26f40cd0105e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084ac23177bffefa502265b4a2010c7006929e8cf798eff4fb26f40cd0105e46->enter($__internal_084ac23177bffefa502265b4a2010c7006929e8cf798eff4fb26f40cd0105e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
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
        
        $__internal_084ac23177bffefa502265b4a2010c7006929e8cf798eff4fb26f40cd0105e46->leave($__internal_084ac23177bffefa502265b4a2010c7006929e8cf798eff4fb26f40cd0105e46_prof);

        
        $__internal_b85aed41876dc0651d67da2e222b3b87744cbce0060a87d671c99051f6e733b0->leave($__internal_b85aed41876dc0651d67da2e222b3b87744cbce0060a87d671c99051f6e733b0_prof);

    }

    // line 59
    public function block_active($context, array $blocks = array())
    {
        $__internal_ebcbedaf703321c316e7bcc9eaef9346f2548491e0f55ae9bc7685c721a4847f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcbedaf703321c316e7bcc9eaef9346f2548491e0f55ae9bc7685c721a4847f->enter($__internal_ebcbedaf703321c316e7bcc9eaef9346f2548491e0f55ae9bc7685c721a4847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_06d43ee5c98b8ac2e7f3687fdd2756898d404af2387e1721d19a1e9279a4a391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d43ee5c98b8ac2e7f3687fdd2756898d404af2387e1721d19a1e9279a4a391->enter($__internal_06d43ee5c98b8ac2e7f3687fdd2756898d404af2387e1721d19a1e9279a4a391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 60
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.classe').addClass('active');
        \$('.listCl').addClass('active');
    </script>
";
        
        $__internal_06d43ee5c98b8ac2e7f3687fdd2756898d404af2387e1721d19a1e9279a4a391->leave($__internal_06d43ee5c98b8ac2e7f3687fdd2756898d404af2387e1721d19a1e9279a4a391_prof);

        
        $__internal_ebcbedaf703321c316e7bcc9eaef9346f2548491e0f55ae9bc7685c721a4847f->leave($__internal_ebcbedaf703321c316e7bcc9eaef9346f2548491e0f55ae9bc7685c721a4847f_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/listClasses.html.twig";
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
{% endblock%}", "classesViews/listClasses.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
