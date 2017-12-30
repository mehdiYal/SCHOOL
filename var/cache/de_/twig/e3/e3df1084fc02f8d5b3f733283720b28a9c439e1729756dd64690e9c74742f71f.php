<?php

/* enseignantsViews/listEnseignants.html.twig */
class __TwigTemplate_ce5d1449cf7eca4bf5fb969c7b76c3414af386bb78c1d0388f0ba4368c49ef1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "enseignantsViews/listEnseignants.html.twig", 1);
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
        $__internal_efeb6f9ebc14b31c5cfda20ddd3afc1096dfd35898acd32b3294b3c5cb6f0010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efeb6f9ebc14b31c5cfda20ddd3afc1096dfd35898acd32b3294b3c5cb6f0010->enter($__internal_efeb6f9ebc14b31c5cfda20ddd3afc1096dfd35898acd32b3294b3c5cb6f0010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $__internal_15977f9a6ba8858f3f0f59ac7c9a244718c80e0e01cb015f698f719ec8519cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15977f9a6ba8858f3f0f59ac7c9a244718c80e0e01cb015f698f719ec8519cae->enter($__internal_15977f9a6ba8858f3f0f59ac7c9a244718c80e0e01cb015f698f719ec8519cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efeb6f9ebc14b31c5cfda20ddd3afc1096dfd35898acd32b3294b3c5cb6f0010->leave($__internal_efeb6f9ebc14b31c5cfda20ddd3afc1096dfd35898acd32b3294b3c5cb6f0010_prof);

        
        $__internal_15977f9a6ba8858f3f0f59ac7c9a244718c80e0e01cb015f698f719ec8519cae->leave($__internal_15977f9a6ba8858f3f0f59ac7c9a244718c80e0e01cb015f698f719ec8519cae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5dc1aef9635b354214d55cec1e1086878f7072de5d8a93bb2b8599044046fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5dc1aef9635b354214d55cec1e1086878f7072de5d8a93bb2b8599044046fdb->enter($__internal_b5dc1aef9635b354214d55cec1e1086878f7072de5d8a93bb2b8599044046fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_054df6f9d7a6dc94104e2a955d6aabf7607178c7a9c15da814a599bc98f24bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054df6f9d7a6dc94104e2a955d6aabf7607178c7a9c15da814a599bc98f24bf9->enter($__internal_054df6f9d7a6dc94104e2a955d6aabf7607178c7a9c15da814a599bc98f24bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_054df6f9d7a6dc94104e2a955d6aabf7607178c7a9c15da814a599bc98f24bf9->leave($__internal_054df6f9d7a6dc94104e2a955d6aabf7607178c7a9c15da814a599bc98f24bf9_prof);

        
        $__internal_b5dc1aef9635b354214d55cec1e1086878f7072de5d8a93bb2b8599044046fdb->leave($__internal_b5dc1aef9635b354214d55cec1e1086878f7072de5d8a93bb2b8599044046fdb_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_643f528d0d0f5ee75b1a487ab7b0c328346b8532215e139250067277621cc799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643f528d0d0f5ee75b1a487ab7b0c328346b8532215e139250067277621cc799->enter($__internal_643f528d0d0f5ee75b1a487ab7b0c328346b8532215e139250067277621cc799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_25e08db92cb4f06fba68cbe5f983aa6d028f31c8b2876894293eaf9291177383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e08db92cb4f06fba68cbe5f983aa6d028f31c8b2876894293eaf9291177383->enter($__internal_25e08db92cb4f06fba68cbe5f983aa6d028f31c8b2876894293eaf9291177383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_25e08db92cb4f06fba68cbe5f983aa6d028f31c8b2876894293eaf9291177383->leave($__internal_25e08db92cb4f06fba68cbe5f983aa6d028f31c8b2876894293eaf9291177383_prof);

        
        $__internal_643f528d0d0f5ee75b1a487ab7b0c328346b8532215e139250067277621cc799->leave($__internal_643f528d0d0f5ee75b1a487ab7b0c328346b8532215e139250067277621cc799_prof);

    }

    // line 52
    public function block_active($context, array $blocks = array())
    {
        $__internal_6574b791bbb66f982e50b9562c45eacb2630a4e3c6c6014b44d4aecd084d7d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6574b791bbb66f982e50b9562c45eacb2630a4e3c6c6014b44d4aecd084d7d08->enter($__internal_6574b791bbb66f982e50b9562c45eacb2630a4e3c6c6014b44d4aecd084d7d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_eef5e2bc36dbf0e7f165e39cefae0cea67a5caa8abb9dd3d5d3c9b904373d048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef5e2bc36dbf0e7f165e39cefae0cea67a5caa8abb9dd3d5d3c9b904373d048->enter($__internal_eef5e2bc36dbf0e7f165e39cefae0cea67a5caa8abb9dd3d5d3c9b904373d048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 53
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.ens').addClass('active');
        \$('.listEns').addClass('active');
    </script>
";
        
        $__internal_eef5e2bc36dbf0e7f165e39cefae0cea67a5caa8abb9dd3d5d3c9b904373d048->leave($__internal_eef5e2bc36dbf0e7f165e39cefae0cea67a5caa8abb9dd3d5d3c9b904373d048_prof);

        
        $__internal_6574b791bbb66f982e50b9562c45eacb2630a4e3c6c6014b44d4aecd084d7d08->leave($__internal_6574b791bbb66f982e50b9562c45eacb2630a4e3c6c6014b44d4aecd084d7d08_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listEnseignants.html.twig";
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

", "enseignantsViews/listEnseignants.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\enseignantsViews\\listEnseignants.html.twig");
    }
}
