<?php

/* :classesViews:listClasses.html.twig */
class __TwigTemplate_4a928486ddd020b0d2ab5e7b0c4e47dcf1b25afff637359e8319c77aeeccb279 extends Twig_Template
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
        $__internal_e4d73c749e550abb0b80abe89526379646c86ec5364a17ecad2d5ecb9ddc156c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d73c749e550abb0b80abe89526379646c86ec5364a17ecad2d5ecb9ddc156c->enter($__internal_e4d73c749e550abb0b80abe89526379646c86ec5364a17ecad2d5ecb9ddc156c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $__internal_8555208bfb619170ae428c2882218ca54c2796bff29291f1ab0675bcc0604f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8555208bfb619170ae428c2882218ca54c2796bff29291f1ab0675bcc0604f28->enter($__internal_8555208bfb619170ae428c2882218ca54c2796bff29291f1ab0675bcc0604f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d73c749e550abb0b80abe89526379646c86ec5364a17ecad2d5ecb9ddc156c->leave($__internal_e4d73c749e550abb0b80abe89526379646c86ec5364a17ecad2d5ecb9ddc156c_prof);

        
        $__internal_8555208bfb619170ae428c2882218ca54c2796bff29291f1ab0675bcc0604f28->leave($__internal_8555208bfb619170ae428c2882218ca54c2796bff29291f1ab0675bcc0604f28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40848affdef9e60392620a31f8f757e9e9963cb841b5119b1f405bab50cfdced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40848affdef9e60392620a31f8f757e9e9963cb841b5119b1f405bab50cfdced->enter($__internal_40848affdef9e60392620a31f8f757e9e9963cb841b5119b1f405bab50cfdced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48beb10694f3848b86013ce81dc192e95aed7590bd51e44284e1ceb0cf92464b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48beb10694f3848b86013ce81dc192e95aed7590bd51e44284e1ceb0cf92464b->enter($__internal_48beb10694f3848b86013ce81dc192e95aed7590bd51e44284e1ceb0cf92464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "
";
        
        $__internal_48beb10694f3848b86013ce81dc192e95aed7590bd51e44284e1ceb0cf92464b->leave($__internal_48beb10694f3848b86013ce81dc192e95aed7590bd51e44284e1ceb0cf92464b_prof);

        
        $__internal_40848affdef9e60392620a31f8f757e9e9963cb841b5119b1f405bab50cfdced->leave($__internal_40848affdef9e60392620a31f8f757e9e9963cb841b5119b1f405bab50cfdced_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_5d9874235dc0dd43ffdbecd3790f43ba18d21f177e6ffff7638c03c787f54aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9874235dc0dd43ffdbecd3790f43ba18d21f177e6ffff7638c03c787f54aa4->enter($__internal_5d9874235dc0dd43ffdbecd3790f43ba18d21f177e6ffff7638c03c787f54aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_ce995f9364274d1e40b9a0430d02f15f4419f8a3050190f4b6561805af84efa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce995f9364274d1e40b9a0430d02f15f4419f8a3050190f4b6561805af84efa7->enter($__internal_ce995f9364274d1e40b9a0430d02f15f4419f8a3050190f4b6561805af84efa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_ce995f9364274d1e40b9a0430d02f15f4419f8a3050190f4b6561805af84efa7->leave($__internal_ce995f9364274d1e40b9a0430d02f15f4419f8a3050190f4b6561805af84efa7_prof);

        
        $__internal_5d9874235dc0dd43ffdbecd3790f43ba18d21f177e6ffff7638c03c787f54aa4->leave($__internal_5d9874235dc0dd43ffdbecd3790f43ba18d21f177e6ffff7638c03c787f54aa4_prof);

    }

    // line 59
    public function block_active($context, array $blocks = array())
    {
        $__internal_e354c84f25b84c476ef2cab59c884f17c5e27a32bba193c3ae6d2d8f3941955d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e354c84f25b84c476ef2cab59c884f17c5e27a32bba193c3ae6d2d8f3941955d->enter($__internal_e354c84f25b84c476ef2cab59c884f17c5e27a32bba193c3ae6d2d8f3941955d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_046fbc1b5e2ed8fd475bc463c9638691aecdc52f7220a1eb44283d72f0af0ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046fbc1b5e2ed8fd475bc463c9638691aecdc52f7220a1eb44283d72f0af0ada->enter($__internal_046fbc1b5e2ed8fd475bc463c9638691aecdc52f7220a1eb44283d72f0af0ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 60
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.classe').addClass('active');
        \$('.listCl').addClass('active');
    </script>
";
        
        $__internal_046fbc1b5e2ed8fd475bc463c9638691aecdc52f7220a1eb44283d72f0af0ada->leave($__internal_046fbc1b5e2ed8fd475bc463c9638691aecdc52f7220a1eb44283d72f0af0ada_prof);

        
        $__internal_e354c84f25b84c476ef2cab59c884f17c5e27a32bba193c3ae6d2d8f3941955d->leave($__internal_e354c84f25b84c476ef2cab59c884f17c5e27a32bba193c3ae6d2d8f3941955d_prof);

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
{% endblock%}", ":classesViews:listClasses.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
