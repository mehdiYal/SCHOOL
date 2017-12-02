<?php

/* schoolsViews/listSchools.html.twig */
class __TwigTemplate_13953c88e92466ac3ab28d493fc7a62bc6d5c40895036a568cc330b983c8b1ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", "schoolsViews/listSchools.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseListSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e75d3348b5f856a61f9928a57cbe1734e081a5ca3942a53369ea10f9971177ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75d3348b5f856a61f9928a57cbe1734e081a5ca3942a53369ea10f9971177ff->enter($__internal_e75d3348b5f856a61f9928a57cbe1734e081a5ca3942a53369ea10f9971177ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $__internal_4275503da3ea905f0bee3252a2ab15697bb2761f6c0cfd49fc5db23e6bb236d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4275503da3ea905f0bee3252a2ab15697bb2761f6c0cfd49fc5db23e6bb236d1->enter($__internal_4275503da3ea905f0bee3252a2ab15697bb2761f6c0cfd49fc5db23e6bb236d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e75d3348b5f856a61f9928a57cbe1734e081a5ca3942a53369ea10f9971177ff->leave($__internal_e75d3348b5f856a61f9928a57cbe1734e081a5ca3942a53369ea10f9971177ff_prof);

        
        $__internal_4275503da3ea905f0bee3252a2ab15697bb2761f6c0cfd49fc5db23e6bb236d1->leave($__internal_4275503da3ea905f0bee3252a2ab15697bb2761f6c0cfd49fc5db23e6bb236d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4222a9cfc62697222b88e0249e831b82150ffad429d65074c61bf6d96be1d768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4222a9cfc62697222b88e0249e831b82150ffad429d65074c61bf6d96be1d768->enter($__internal_4222a9cfc62697222b88e0249e831b82150ffad429d65074c61bf6d96be1d768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4fdc0433fdb7c91aa538f8faf334ba39aa576072366aea8e15c8dbeb13fcd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fdc0433fdb7c91aa538f8faf334ba39aa576072366aea8e15c8dbeb13fcd85->enter($__internal_b4fdc0433fdb7c91aa538f8faf334ba39aa576072366aea8e15c8dbeb13fcd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "
";
        
        $__internal_b4fdc0433fdb7c91aa538f8faf334ba39aa576072366aea8e15c8dbeb13fcd85->leave($__internal_b4fdc0433fdb7c91aa538f8faf334ba39aa576072366aea8e15c8dbeb13fcd85_prof);

        
        $__internal_4222a9cfc62697222b88e0249e831b82150ffad429d65074c61bf6d96be1d768->leave($__internal_4222a9cfc62697222b88e0249e831b82150ffad429d65074c61bf6d96be1d768_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_92b7e0329433454ebc142dbf4911b118cc47f7e733e473940c903a7956169784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b7e0329433454ebc142dbf4911b118cc47f7e733e473940c903a7956169784->enter($__internal_92b7e0329433454ebc142dbf4911b118cc47f7e733e473940c903a7956169784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4c9a922e3d7755b6e461d0be6dc9dfd8748d4e6c831ac91c859acbcbc03b5ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9a922e3d7755b6e461d0be6dc9dfd8748d4e6c831ac91c859acbcbc03b5ec8->enter($__internal_4c9a922e3d7755b6e461d0be6dc9dfd8748d4e6c831ac91c859acbcbc03b5ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Code</th>
                    <th>adresse</th>
                    <th>telephone</th>
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
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecoles"] ?? $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "code", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "adresse", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-university\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_4c9a922e3d7755b6e461d0be6dc9dfd8748d4e6c831ac91c859acbcbc03b5ec8->leave($__internal_4c9a922e3d7755b6e461d0be6dc9dfd8748d4e6c831ac91c859acbcbc03b5ec8_prof);

        
        $__internal_92b7e0329433454ebc142dbf4911b118cc47f7e733e473940c903a7956169784->leave($__internal_92b7e0329433454ebc142dbf4911b118cc47f7e733e473940c903a7956169784_prof);

    }

    public function getTemplateName()
    {
        return "schoolsViews/listSchools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  139 => 39,  131 => 34,  123 => 29,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseListSuper.html.twig' %}

{% block title %}
    {{'list'|trans}} {{'schools'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Code</th>
                    <th>adresse</th>
                    <th>telephone</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for ecole in ecoles %}
                    <tr>
                        <td>{{ ecole.nom}}</td>
                        <td>{{ ecole.code}}</td>
                        <td>{{ ecole.adresse}}</td>
                        <td>{{ ecole.telephone}}</td>
                        <td>
                            <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">
                                <span class=\"fa fa-university\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}
", "schoolsViews/listSchools.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/schoolsViews/listSchools.html.twig");
    }
}
