<?php

/* elevesViews/listEleves.html.twig */
class __TwigTemplate_bc1c22505332ea2d858a1929343714f245dc39299949ee8dd686514fc0acc83f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "elevesViews/listEleves.html.twig", 1);
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
        $__internal_4795782cd2f7434e854c59f1a61c227b2474f1a6d9ec33357a03a31dfb66bec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4795782cd2f7434e854c59f1a61c227b2474f1a6d9ec33357a03a31dfb66bec2->enter($__internal_4795782cd2f7434e854c59f1a61c227b2474f1a6d9ec33357a03a31dfb66bec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $__internal_6357a02eb961ee4a67530b86336e93c5e373bc404f2cdffbef78cc121414aea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6357a02eb961ee4a67530b86336e93c5e373bc404f2cdffbef78cc121414aea2->enter($__internal_6357a02eb961ee4a67530b86336e93c5e373bc404f2cdffbef78cc121414aea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4795782cd2f7434e854c59f1a61c227b2474f1a6d9ec33357a03a31dfb66bec2->leave($__internal_4795782cd2f7434e854c59f1a61c227b2474f1a6d9ec33357a03a31dfb66bec2_prof);

        
        $__internal_6357a02eb961ee4a67530b86336e93c5e373bc404f2cdffbef78cc121414aea2->leave($__internal_6357a02eb961ee4a67530b86336e93c5e373bc404f2cdffbef78cc121414aea2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29c5726de1303576b95c99d8d423aaf4b74875aa75ab50bc3df11b8fd2d22d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c5726de1303576b95c99d8d423aaf4b74875aa75ab50bc3df11b8fd2d22d58->enter($__internal_29c5726de1303576b95c99d8d423aaf4b74875aa75ab50bc3df11b8fd2d22d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f966cc69534aed72d86f967f49a49d7b28935adecc93675072ed219a34d6ca9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f966cc69534aed72d86f967f49a49d7b28935adecc93675072ed219a34d6ca9f->enter($__internal_f966cc69534aed72d86f967f49a49d7b28935adecc93675072ed219a34d6ca9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "
";
        
        $__internal_f966cc69534aed72d86f967f49a49d7b28935adecc93675072ed219a34d6ca9f->leave($__internal_f966cc69534aed72d86f967f49a49d7b28935adecc93675072ed219a34d6ca9f_prof);

        
        $__internal_29c5726de1303576b95c99d8d423aaf4b74875aa75ab50bc3df11b8fd2d22d58->leave($__internal_29c5726de1303576b95c99d8d423aaf4b74875aa75ab50bc3df11b8fd2d22d58_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_272845b9e416d0f30d4e712f728b1c712600d4c7a80b84cee99d56998aba2a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272845b9e416d0f30d4e712f728b1c712600d4c7a80b84cee99d56998aba2a79->enter($__internal_272845b9e416d0f30d4e712f728b1c712600d4c7a80b84cee99d56998aba2a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4d875f8e8ca9d42a70ab56bb33e8c768480b45b262b313897473a3b1370b4bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d875f8e8ca9d42a70ab56bb33e8c768480b45b262b313897473a3b1370b4bd7->enter($__internal_4d875f8e8ca9d42a70ab56bb33e8c768480b45b262b313897473a3b1370b4bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parent"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 24
            echo "\t\t\t\t\t<tr class=\"";
            if (($this->getAttribute($context["eleve"], "parent", array()) == null)) {
                echo " danger ";
            }
            echo "\">
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["eleve"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["eleve"], "dateDeNaissance", array()), "Y")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "annee", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parentEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>                                    
    </div>
    ";
        // line 53
        $this->displayBlock('active', $context, $blocks);
        
        $__internal_4d875f8e8ca9d42a70ab56bb33e8c768480b45b262b313897473a3b1370b4bd7->leave($__internal_4d875f8e8ca9d42a70ab56bb33e8c768480b45b262b313897473a3b1370b4bd7_prof);

        
        $__internal_272845b9e416d0f30d4e712f728b1c712600d4c7a80b84cee99d56998aba2a79->leave($__internal_272845b9e416d0f30d4e712f728b1c712600d4c7a80b84cee99d56998aba2a79_prof);

    }

    public function block_active($context, array $blocks = array())
    {
        $__internal_036eb8eb126912d8b127c974fe9a880f663a4bb46e3e2c3aecd4ac4d1c34c2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036eb8eb126912d8b127c974fe9a880f663a4bb46e3e2c3aecd4ac4d1c34c2a2->enter($__internal_036eb8eb126912d8b127c974fe9a880f663a4bb46e3e2c3aecd4ac4d1c34c2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_c4721611db5de96654c0ab5bb0e3efdbcdb914e554f2ad7ac35da0db7a3354b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4721611db5de96654c0ab5bb0e3efdbcdb914e554f2ad7ac35da0db7a3354b5->enter($__internal_c4721611db5de96654c0ab5bb0e3efdbcdb914e554f2ad7ac35da0db7a3354b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 54
        echo "    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    ";
        
        $__internal_c4721611db5de96654c0ab5bb0e3efdbcdb914e554f2ad7ac35da0db7a3354b5->leave($__internal_c4721611db5de96654c0ab5bb0e3efdbcdb914e554f2ad7ac35da0db7a3354b5_prof);

        
        $__internal_036eb8eb126912d8b127c974fe9a880f663a4bb46e3e2c3aecd4ac4d1c34c2a2->leave($__internal_036eb8eb126912d8b127c974fe9a880f663a4bb46e3e2c3aecd4ac4d1c34c2a2_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/listEleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 54,  173 => 53,  168 => 50,  156 => 44,  148 => 39,  140 => 34,  132 => 29,  125 => 27,  121 => 26,  115 => 25,  108 => 24,  104 => 23,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'students'|trans}}
{% endblock %}

{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Age</th>
                    <th>Annee</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                    <th>{{'parent'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for eleve in app.user.ecole.eleves %}
\t\t\t\t\t<tr class=\"{% if (eleve.parent == null)%} danger {% endif %}\">
\t\t\t\t\t\t<td>{{ eleve.nom|upper}} {{ eleve.prenom}}</td>
\t\t\t\t\t\t<td>{{ (\"now\"|date(\"Y\"))-( eleve.dateDeNaissance|date(\"Y\"))}}</td>
\t\t\t\t\t\t<td>{{ eleve.annee.nom}} {{ eleve.annee.niveau}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('parentEleve',{'id':eleve.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    {% block active %}
    \t<script>
\t\t\t\$('.active').removeClass('active');
\t        \$('.eleve').addClass('active');
\t        \$('.listEl').addClass('active');
\t\t</script>
    {% endblock%}
{% endblock %}               
", "elevesViews/listEleves.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/elevesViews/listEleves.html.twig");
    }
}
