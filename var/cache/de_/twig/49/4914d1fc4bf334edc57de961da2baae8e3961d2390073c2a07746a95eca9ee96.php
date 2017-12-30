<?php

/* :adminsViews:listAdmins.html.twig */
class __TwigTemplate_682c43bdb1dab1f8f123b00522c333bbadcdfd56d97e439aa2f8ab744a2922f0 extends Twig_Template
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
        $__internal_3cd3701b58acdf485f275fbedcd0246bd67fd1f70ae2a83d2a335d159e8f9f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd3701b58acdf485f275fbedcd0246bd67fd1f70ae2a83d2a335d159e8f9f16->enter($__internal_3cd3701b58acdf485f275fbedcd0246bd67fd1f70ae2a83d2a335d159e8f9f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $__internal_dc8b883c0630be24ca611d73c363526e7134b3be7374dd9e12df0edffb71746b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8b883c0630be24ca611d73c363526e7134b3be7374dd9e12df0edffb71746b->enter($__internal_dc8b883c0630be24ca611d73c363526e7134b3be7374dd9e12df0edffb71746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd3701b58acdf485f275fbedcd0246bd67fd1f70ae2a83d2a335d159e8f9f16->leave($__internal_3cd3701b58acdf485f275fbedcd0246bd67fd1f70ae2a83d2a335d159e8f9f16_prof);

        
        $__internal_dc8b883c0630be24ca611d73c363526e7134b3be7374dd9e12df0edffb71746b->leave($__internal_dc8b883c0630be24ca611d73c363526e7134b3be7374dd9e12df0edffb71746b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42e6592d718e1743fc1f5595761e06e6bee60e41a2e53e7d4febce79032c1c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e6592d718e1743fc1f5595761e06e6bee60e41a2e53e7d4febce79032c1c37->enter($__internal_42e6592d718e1743fc1f5595761e06e6bee60e41a2e53e7d4febce79032c1c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ee9a3858b67e52d7d1976a9bf41a83c85ae96717dac83e21767248b02e012c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee9a3858b67e52d7d1976a9bf41a83c85ae96717dac83e21767248b02e012c9->enter($__internal_1ee9a3858b67e52d7d1976a9bf41a83c85ae96717dac83e21767248b02e012c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admins"), "html", null, true);
        echo "
";
        
        $__internal_1ee9a3858b67e52d7d1976a9bf41a83c85ae96717dac83e21767248b02e012c9->leave($__internal_1ee9a3858b67e52d7d1976a9bf41a83c85ae96717dac83e21767248b02e012c9_prof);

        
        $__internal_42e6592d718e1743fc1f5595761e06e6bee60e41a2e53e7d4febce79032c1c37->leave($__internal_42e6592d718e1743fc1f5595761e06e6bee60e41a2e53e7d4febce79032c1c37_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_9b9f71d9bc6cac012fba18e8749fb9a994a43376f4ea18846750d6b8ef6a3259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9f71d9bc6cac012fba18e8749fb9a994a43376f4ea18846750d6b8ef6a3259->enter($__internal_9b9f71d9bc6cac012fba18e8749fb9a994a43376f4ea18846750d6b8ef6a3259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4e5119501129220afb59ca3988c4706d80d7291e18d078b9f19eed2ba641e409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5119501129220afb59ca3988c4706d80d7291e18d078b9f19eed2ba641e409->enter($__internal_4e5119501129220afb59ca3988c4706d80d7291e18d078b9f19eed2ba641e409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_4e5119501129220afb59ca3988c4706d80d7291e18d078b9f19eed2ba641e409->leave($__internal_4e5119501129220afb59ca3988c4706d80d7291e18d078b9f19eed2ba641e409_prof);

        
        $__internal_9b9f71d9bc6cac012fba18e8749fb9a994a43376f4ea18846750d6b8ef6a3259->leave($__internal_9b9f71d9bc6cac012fba18e8749fb9a994a43376f4ea18846750d6b8ef6a3259_prof);

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
", ":adminsViews:listAdmins.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/adminsViews/listAdmins.html.twig");
    }
}
