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
        $__internal_897393e999a64c3d91fe25f8b048f98146d89fab3f574cc1b4c38e517c7f0415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897393e999a64c3d91fe25f8b048f98146d89fab3f574cc1b4c38e517c7f0415->enter($__internal_897393e999a64c3d91fe25f8b048f98146d89fab3f574cc1b4c38e517c7f0415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $__internal_17113c1bc3087759b1564d814bbf2538b3766ffed2c2526094b3621622266b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17113c1bc3087759b1564d814bbf2538b3766ffed2c2526094b3621622266b48->enter($__internal_17113c1bc3087759b1564d814bbf2538b3766ffed2c2526094b3621622266b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897393e999a64c3d91fe25f8b048f98146d89fab3f574cc1b4c38e517c7f0415->leave($__internal_897393e999a64c3d91fe25f8b048f98146d89fab3f574cc1b4c38e517c7f0415_prof);

        
        $__internal_17113c1bc3087759b1564d814bbf2538b3766ffed2c2526094b3621622266b48->leave($__internal_17113c1bc3087759b1564d814bbf2538b3766ffed2c2526094b3621622266b48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_728ce504fb3c0ca6858089e1f3924d42933aa2e56d8dd346c59391087ad65f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728ce504fb3c0ca6858089e1f3924d42933aa2e56d8dd346c59391087ad65f3b->enter($__internal_728ce504fb3c0ca6858089e1f3924d42933aa2e56d8dd346c59391087ad65f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7b6fadab5c72538dcba8e60a924e1a0e4908d88b7ec762b906a033809720ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b6fadab5c72538dcba8e60a924e1a0e4908d88b7ec762b906a033809720ed6->enter($__internal_a7b6fadab5c72538dcba8e60a924e1a0e4908d88b7ec762b906a033809720ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_a7b6fadab5c72538dcba8e60a924e1a0e4908d88b7ec762b906a033809720ed6->leave($__internal_a7b6fadab5c72538dcba8e60a924e1a0e4908d88b7ec762b906a033809720ed6_prof);

        
        $__internal_728ce504fb3c0ca6858089e1f3924d42933aa2e56d8dd346c59391087ad65f3b->leave($__internal_728ce504fb3c0ca6858089e1f3924d42933aa2e56d8dd346c59391087ad65f3b_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_d7dd2b60618b48d397630907dd9f71d654e3572a7102c3e49eda4ef3b0d1f93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dd2b60618b48d397630907dd9f71d654e3572a7102c3e49eda4ef3b0d1f93f->enter($__internal_d7dd2b60618b48d397630907dd9f71d654e3572a7102c3e49eda4ef3b0d1f93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_5bfcdb35d7b46122ce52963384dfe22004ffa7d63626d4661dcf4de282e3ffbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfcdb35d7b46122ce52963384dfe22004ffa7d63626d4661dcf4de282e3ffbf->enter($__internal_5bfcdb35d7b46122ce52963384dfe22004ffa7d63626d4661dcf4de282e3ffbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_5bfcdb35d7b46122ce52963384dfe22004ffa7d63626d4661dcf4de282e3ffbf->leave($__internal_5bfcdb35d7b46122ce52963384dfe22004ffa7d63626d4661dcf4de282e3ffbf_prof);

        
        $__internal_d7dd2b60618b48d397630907dd9f71d654e3572a7102c3e49eda4ef3b0d1f93f->leave($__internal_d7dd2b60618b48d397630907dd9f71d654e3572a7102c3e49eda4ef3b0d1f93f_prof);

    }

    // line 52
    public function block_active($context, array $blocks = array())
    {
        $__internal_12f36bde181c5c959acad472a24df44fafe784e441053dbc014a83f6cef97626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f36bde181c5c959acad472a24df44fafe784e441053dbc014a83f6cef97626->enter($__internal_12f36bde181c5c959acad472a24df44fafe784e441053dbc014a83f6cef97626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_7c1a622005216412411712b2accb2f9431c3aebfd523c1448619608c352fd3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1a622005216412411712b2accb2f9431c3aebfd523c1448619608c352fd3bc->enter($__internal_7c1a622005216412411712b2accb2f9431c3aebfd523c1448619608c352fd3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 53
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.ens').addClass('active');
        \$('.listEns').addClass('active');
    </script>
";
        
        $__internal_7c1a622005216412411712b2accb2f9431c3aebfd523c1448619608c352fd3bc->leave($__internal_7c1a622005216412411712b2accb2f9431c3aebfd523c1448619608c352fd3bc_prof);

        
        $__internal_12f36bde181c5c959acad472a24df44fafe784e441053dbc014a83f6cef97626->leave($__internal_12f36bde181c5c959acad472a24df44fafe784e441053dbc014a83f6cef97626_prof);

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
