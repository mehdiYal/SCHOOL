<?php

/* adminsViews/listAdmins.html.twig */
class __TwigTemplate_80c4580ea8f47925573a3d4ff5f118a86eb5739f5d1495a978a95c5c89d0fdcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", "adminsViews/listAdmins.html.twig", 1);
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
        $__internal_e1d95a61e05e256743b80d1064f12af18dfedc5073e72dedb504900d4b0b4ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d95a61e05e256743b80d1064f12af18dfedc5073e72dedb504900d4b0b4ee1->enter($__internal_e1d95a61e05e256743b80d1064f12af18dfedc5073e72dedb504900d4b0b4ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/listAdmins.html.twig"));

        $__internal_8c4fa1c3b4bb38b5b1dc638a9d6d4a0856f1c31450223138ffca3250059f3251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4fa1c3b4bb38b5b1dc638a9d6d4a0856f1c31450223138ffca3250059f3251->enter($__internal_8c4fa1c3b4bb38b5b1dc638a9d6d4a0856f1c31450223138ffca3250059f3251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d95a61e05e256743b80d1064f12af18dfedc5073e72dedb504900d4b0b4ee1->leave($__internal_e1d95a61e05e256743b80d1064f12af18dfedc5073e72dedb504900d4b0b4ee1_prof);

        
        $__internal_8c4fa1c3b4bb38b5b1dc638a9d6d4a0856f1c31450223138ffca3250059f3251->leave($__internal_8c4fa1c3b4bb38b5b1dc638a9d6d4a0856f1c31450223138ffca3250059f3251_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5737edd97b9a2cbe670515904aa95d4c4ee692381ca11aeaf8563239501acad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5737edd97b9a2cbe670515904aa95d4c4ee692381ca11aeaf8563239501acad5->enter($__internal_5737edd97b9a2cbe670515904aa95d4c4ee692381ca11aeaf8563239501acad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d829803e6dbf545f58c315ca974d6b89ddd01270b0836f67aa06922f5eb12c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d829803e6dbf545f58c315ca974d6b89ddd01270b0836f67aa06922f5eb12c5a->enter($__internal_d829803e6dbf545f58c315ca974d6b89ddd01270b0836f67aa06922f5eb12c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admins"), "html", null, true);
        echo "
";
        
        $__internal_d829803e6dbf545f58c315ca974d6b89ddd01270b0836f67aa06922f5eb12c5a->leave($__internal_d829803e6dbf545f58c315ca974d6b89ddd01270b0836f67aa06922f5eb12c5a_prof);

        
        $__internal_5737edd97b9a2cbe670515904aa95d4c4ee692381ca11aeaf8563239501acad5->leave($__internal_5737edd97b9a2cbe670515904aa95d4c4ee692381ca11aeaf8563239501acad5_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_6af0308b29a6eed48e44e02491258c14e8ad86af2395c0702183fa8f2df511e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af0308b29a6eed48e44e02491258c14e8ad86af2395c0702183fa8f2df511e1->enter($__internal_6af0308b29a6eed48e44e02491258c14e8ad86af2395c0702183fa8f2df511e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_c62da6048faabef2113792d5aeb51797f3db18fd009b7d7c0b4fa110da2f7d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62da6048faabef2113792d5aeb51797f3db18fd009b7d7c0b4fa110da2f7d3a->enter($__internal_c62da6048faabef2113792d5aeb51797f3db18fd009b7d7c0b4fa110da2f7d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? $this->getContext($context, "admins")));
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
        
        $__internal_c62da6048faabef2113792d5aeb51797f3db18fd009b7d7c0b4fa110da2f7d3a->leave($__internal_c62da6048faabef2113792d5aeb51797f3db18fd009b7d7c0b4fa110da2f7d3a_prof);

        
        $__internal_6af0308b29a6eed48e44e02491258c14e8ad86af2395c0702183fa8f2df511e1->leave($__internal_6af0308b29a6eed48e44e02491258c14e8ad86af2395c0702183fa8f2df511e1_prof);

    }

    public function getTemplateName()
    {
        return "adminsViews/listAdmins.html.twig";
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
", "adminsViews/listAdmins.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/adminsViews/listAdmins.html.twig");
    }
}
