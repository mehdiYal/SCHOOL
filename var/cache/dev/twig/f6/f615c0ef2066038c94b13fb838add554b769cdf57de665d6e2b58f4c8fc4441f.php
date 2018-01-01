<?php

/* :adminsViews:listAdmins.html.twig */
class __TwigTemplate_31de246c59a6e300b543563d5eb4e72546af1ddda928438ebf86611053e2ed55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", ":adminsViews:listAdmins.html.twig", 1);
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
        $__internal_c1e88ae991231c6bb15ed2bb511ff4546cdcaf31f976c8ad5c320c0863fbfbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e88ae991231c6bb15ed2bb511ff4546cdcaf31f976c8ad5c320c0863fbfbd8->enter($__internal_c1e88ae991231c6bb15ed2bb511ff4546cdcaf31f976c8ad5c320c0863fbfbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $__internal_6d6dd1c0971f44f320d8a9e005e300b5264ad0b54525c8381bae4e83f68228a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6dd1c0971f44f320d8a9e005e300b5264ad0b54525c8381bae4e83f68228a0->enter($__internal_6d6dd1c0971f44f320d8a9e005e300b5264ad0b54525c8381bae4e83f68228a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1e88ae991231c6bb15ed2bb511ff4546cdcaf31f976c8ad5c320c0863fbfbd8->leave($__internal_c1e88ae991231c6bb15ed2bb511ff4546cdcaf31f976c8ad5c320c0863fbfbd8_prof);

        
        $__internal_6d6dd1c0971f44f320d8a9e005e300b5264ad0b54525c8381bae4e83f68228a0->leave($__internal_6d6dd1c0971f44f320d8a9e005e300b5264ad0b54525c8381bae4e83f68228a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecea8bd013bd47d9080537317364897b09d64feb2b48dc518c3b1ab900517043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecea8bd013bd47d9080537317364897b09d64feb2b48dc518c3b1ab900517043->enter($__internal_ecea8bd013bd47d9080537317364897b09d64feb2b48dc518c3b1ab900517043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e95b78a5cf6688e8f7b5f81f4148f8e21c90cab3c795b95dff5fc479e348c931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95b78a5cf6688e8f7b5f81f4148f8e21c90cab3c795b95dff5fc479e348c931->enter($__internal_e95b78a5cf6688e8f7b5f81f4148f8e21c90cab3c795b95dff5fc479e348c931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admins"), "html", null, true);
        echo "
";
        
        $__internal_e95b78a5cf6688e8f7b5f81f4148f8e21c90cab3c795b95dff5fc479e348c931->leave($__internal_e95b78a5cf6688e8f7b5f81f4148f8e21c90cab3c795b95dff5fc479e348c931_prof);

        
        $__internal_ecea8bd013bd47d9080537317364897b09d64feb2b48dc518c3b1ab900517043->leave($__internal_ecea8bd013bd47d9080537317364897b09d64feb2b48dc518c3b1ab900517043_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_a0ef9581fb0af952429a12dd93c8c98699212259b67c5cdcf36dca179a8c53ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ef9581fb0af952429a12dd93c8c98699212259b67c5cdcf36dca179a8c53ec->enter($__internal_a0ef9581fb0af952429a12dd93c8c98699212259b67c5cdcf36dca179a8c53ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_52bc3ccbd3df252dacca8be7d6d36b4a3ee9823da1a39a5cb13f64bbc5d5e5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bc3ccbd3df252dacca8be7d6d36b4a3ee9823da1a39a5cb13f64bbc5d5e5c6->enter($__internal_52bc3ccbd3df252dacca8be7d6d36b4a3ee9823da1a39a5cb13f64bbc5d5e5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Pseudo</th>
                    <th>telephone</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("school"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 23
            echo "                    ";
            if (($this->getAttribute($context["admin"], "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method") == false)) {
                // line 24
                echo "                    <tr class=\"";
                if (($this->getAttribute($context["admin"], "ecole", array()) == null)) {
                    echo " danger ";
                }
                echo "\">
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "prenom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "telephone", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"fa fa-user\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("schoolAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"fa fa-university\"></span>
                            </a>
                        </td>
                    </tr>
                    ";
            }
            // line 50
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_52bc3ccbd3df252dacca8be7d6d36b4a3ee9823da1a39a5cb13f64bbc5d5e5c6->leave($__internal_52bc3ccbd3df252dacca8be7d6d36b4a3ee9823da1a39a5cb13f64bbc5d5e5c6_prof);

        
        $__internal_a0ef9581fb0af952429a12dd93c8c98699212259b67c5cdcf36dca179a8c53ec->leave($__internal_a0ef9581fb0af952429a12dd93c8c98699212259b67c5cdcf36dca179a8c53ec_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:listAdmins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 51,  164 => 50,  155 => 44,  147 => 39,  139 => 34,  131 => 29,  126 => 27,  122 => 26,  116 => 25,  109 => 24,  106 => 23,  102 => 22,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    {{'list'|trans}} {{'admins'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Pseudo</th>
                    <th>telephone</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                    <th>{{'school'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for admin in admins %}
                    {% if (admin.hasRole('ROLE_SUPER_ADMIN')==false) %}
                    <tr class=\"{% if (admin.ecole == null)%} danger {% endif %}\">
                        <td>{{ admin.nom}} {{ admin.prenom}}</td>
                        <td>{{ admin.username}}</td>
                        <td>{{ admin.telephone}}</td>
                        <td>
                            <a href=\"{{ path('editAdmin',{'id':admin.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeAdmin',{'id':admin.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('profileAdmin',{'id':admin.id})}}\">
                                <span class=\"fa fa-user\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('schoolAdmin',{'id':admin.id})}}\">
                                <span class=\"fa fa-university\"></span>
                            </a>
                        </td>
                    </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}
", ":adminsViews:listAdmins.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/adminsViews/listAdmins.html.twig");
    }
}
