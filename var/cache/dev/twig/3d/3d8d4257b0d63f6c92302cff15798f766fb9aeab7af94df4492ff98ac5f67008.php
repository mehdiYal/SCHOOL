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
        $__internal_4524f75ceb8b5139688a0f8a46ca8b9e0f18422e3b11b8f677c9a28392834a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4524f75ceb8b5139688a0f8a46ca8b9e0f18422e3b11b8f677c9a28392834a3b->enter($__internal_4524f75ceb8b5139688a0f8a46ca8b9e0f18422e3b11b8f677c9a28392834a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/listAdmins.html.twig"));

        $__internal_3cb057799882313772ca24f7bd99a9f86c213f845c80d58566e5d5d28d797850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb057799882313772ca24f7bd99a9f86c213f845c80d58566e5d5d28d797850->enter($__internal_3cb057799882313772ca24f7bd99a9f86c213f845c80d58566e5d5d28d797850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4524f75ceb8b5139688a0f8a46ca8b9e0f18422e3b11b8f677c9a28392834a3b->leave($__internal_4524f75ceb8b5139688a0f8a46ca8b9e0f18422e3b11b8f677c9a28392834a3b_prof);

        
        $__internal_3cb057799882313772ca24f7bd99a9f86c213f845c80d58566e5d5d28d797850->leave($__internal_3cb057799882313772ca24f7bd99a9f86c213f845c80d58566e5d5d28d797850_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8a1641b77716034bd86b62253b4647dac7fb2b1026a12b4d1df77ff22341735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a1641b77716034bd86b62253b4647dac7fb2b1026a12b4d1df77ff22341735->enter($__internal_d8a1641b77716034bd86b62253b4647dac7fb2b1026a12b4d1df77ff22341735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b21a62c0400e5029eb5b34d0ea54274f3cb75cc1ca9f452c87df33f083f2ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b21a62c0400e5029eb5b34d0ea54274f3cb75cc1ca9f452c87df33f083f2ece->enter($__internal_1b21a62c0400e5029eb5b34d0ea54274f3cb75cc1ca9f452c87df33f083f2ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admins"), "html", null, true);
        echo "
";
        
        $__internal_1b21a62c0400e5029eb5b34d0ea54274f3cb75cc1ca9f452c87df33f083f2ece->leave($__internal_1b21a62c0400e5029eb5b34d0ea54274f3cb75cc1ca9f452c87df33f083f2ece_prof);

        
        $__internal_d8a1641b77716034bd86b62253b4647dac7fb2b1026a12b4d1df77ff22341735->leave($__internal_d8a1641b77716034bd86b62253b4647dac7fb2b1026a12b4d1df77ff22341735_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_47552868c6e2cfd22bc47c67170c3d0ebb8a9f909ef1fb60b1f587b3b4e7b705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47552868c6e2cfd22bc47c67170c3d0ebb8a9f909ef1fb60b1f587b3b4e7b705->enter($__internal_47552868c6e2cfd22bc47c67170c3d0ebb8a9f909ef1fb60b1f587b3b4e7b705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_832d09c22e97a41eac56f5261d677d3631d8f17ecbe9e91aeec42de72f4e906c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832d09c22e97a41eac56f5261d677d3631d8f17ecbe9e91aeec42de72f4e906c->enter($__internal_832d09c22e97a41eac56f5261d677d3631d8f17ecbe9e91aeec42de72f4e906c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_832d09c22e97a41eac56f5261d677d3631d8f17ecbe9e91aeec42de72f4e906c->leave($__internal_832d09c22e97a41eac56f5261d677d3631d8f17ecbe9e91aeec42de72f4e906c_prof);

        
        $__internal_47552868c6e2cfd22bc47c67170c3d0ebb8a9f909ef1fb60b1f587b3b4e7b705->leave($__internal_47552868c6e2cfd22bc47c67170c3d0ebb8a9f909ef1fb60b1f587b3b4e7b705_prof);

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
", "adminsViews/listAdmins.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/adminsViews/listAdmins.html.twig");
    }
}
