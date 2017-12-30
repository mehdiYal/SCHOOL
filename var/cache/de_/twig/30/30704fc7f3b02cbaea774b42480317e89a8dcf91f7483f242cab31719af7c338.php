<?php

/* adminsViews/listAdmins.html.twig */
class __TwigTemplate_840ce70e8df194a8dfe954016263cdef155b49a93f8410b62c57e51536efce0e extends Twig_Template
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
        $__internal_a33b0e849ef0a2009bd6cd04b9df8b40199ba5f5beef611fd5fedc34a06e5eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33b0e849ef0a2009bd6cd04b9df8b40199ba5f5beef611fd5fedc34a06e5eef->enter($__internal_a33b0e849ef0a2009bd6cd04b9df8b40199ba5f5beef611fd5fedc34a06e5eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/listAdmins.html.twig"));

        $__internal_f2151f8583ad0e4c563671faa39c675fc96cf5d97a247cb88ea8132828ee8e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2151f8583ad0e4c563671faa39c675fc96cf5d97a247cb88ea8132828ee8e58->enter($__internal_f2151f8583ad0e4c563671faa39c675fc96cf5d97a247cb88ea8132828ee8e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33b0e849ef0a2009bd6cd04b9df8b40199ba5f5beef611fd5fedc34a06e5eef->leave($__internal_a33b0e849ef0a2009bd6cd04b9df8b40199ba5f5beef611fd5fedc34a06e5eef_prof);

        
        $__internal_f2151f8583ad0e4c563671faa39c675fc96cf5d97a247cb88ea8132828ee8e58->leave($__internal_f2151f8583ad0e4c563671faa39c675fc96cf5d97a247cb88ea8132828ee8e58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cd89eddf4f524869490676927020ef54e9f29a55d0405c2d450cff29b75beb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd89eddf4f524869490676927020ef54e9f29a55d0405c2d450cff29b75beb1->enter($__internal_6cd89eddf4f524869490676927020ef54e9f29a55d0405c2d450cff29b75beb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bee50ba4258757ae7ae1575becc230176080201e76abbcacceaea08b1fdcbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bee50ba4258757ae7ae1575becc230176080201e76abbcacceaea08b1fdcbd3->enter($__internal_4bee50ba4258757ae7ae1575becc230176080201e76abbcacceaea08b1fdcbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admins"), "html", null, true);
        echo "
";
        
        $__internal_4bee50ba4258757ae7ae1575becc230176080201e76abbcacceaea08b1fdcbd3->leave($__internal_4bee50ba4258757ae7ae1575becc230176080201e76abbcacceaea08b1fdcbd3_prof);

        
        $__internal_6cd89eddf4f524869490676927020ef54e9f29a55d0405c2d450cff29b75beb1->leave($__internal_6cd89eddf4f524869490676927020ef54e9f29a55d0405c2d450cff29b75beb1_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_09c10ba7cf37fb3677df776d86f6e74c7e814ff37b3eee603d7881ae1cb9fe9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c10ba7cf37fb3677df776d86f6e74c7e814ff37b3eee603d7881ae1cb9fe9f->enter($__internal_09c10ba7cf37fb3677df776d86f6e74c7e814ff37b3eee603d7881ae1cb9fe9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_9d1f54f9b3e2160e7e4fc005a61cd1bbcd49cf870cacebb0c9ceb6bd99dbedf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1f54f9b3e2160e7e4fc005a61cd1bbcd49cf870cacebb0c9ceb6bd99dbedf7->enter($__internal_9d1f54f9b3e2160e7e4fc005a61cd1bbcd49cf870cacebb0c9ceb6bd99dbedf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_9d1f54f9b3e2160e7e4fc005a61cd1bbcd49cf870cacebb0c9ceb6bd99dbedf7->leave($__internal_9d1f54f9b3e2160e7e4fc005a61cd1bbcd49cf870cacebb0c9ceb6bd99dbedf7_prof);

        
        $__internal_09c10ba7cf37fb3677df776d86f6e74c7e814ff37b3eee603d7881ae1cb9fe9f->leave($__internal_09c10ba7cf37fb3677df776d86f6e74c7e814ff37b3eee603d7881ae1cb9fe9f_prof);

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
", "adminsViews/listAdmins.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\adminsViews\\listAdmins.html.twig");
    }
}
