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
        $__internal_bc01d60172d1a32e6c0bd372e0935442b66747b03120fdf72ce29c97fc304c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc01d60172d1a32e6c0bd372e0935442b66747b03120fdf72ce29c97fc304c1e->enter($__internal_bc01d60172d1a32e6c0bd372e0935442b66747b03120fdf72ce29c97fc304c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $__internal_0787860753717e8485cb76744f1c626dc289ed1001b06719399c1b934f50ba22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0787860753717e8485cb76744f1c626dc289ed1001b06719399c1b934f50ba22->enter($__internal_0787860753717e8485cb76744f1c626dc289ed1001b06719399c1b934f50ba22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc01d60172d1a32e6c0bd372e0935442b66747b03120fdf72ce29c97fc304c1e->leave($__internal_bc01d60172d1a32e6c0bd372e0935442b66747b03120fdf72ce29c97fc304c1e_prof);

        
        $__internal_0787860753717e8485cb76744f1c626dc289ed1001b06719399c1b934f50ba22->leave($__internal_0787860753717e8485cb76744f1c626dc289ed1001b06719399c1b934f50ba22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06dab2ccbd05d0a6edb4ca24df28fbb95e2cb8d7edd7655ad6a6d100bd626b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dab2ccbd05d0a6edb4ca24df28fbb95e2cb8d7edd7655ad6a6d100bd626b6c->enter($__internal_06dab2ccbd05d0a6edb4ca24df28fbb95e2cb8d7edd7655ad6a6d100bd626b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5163c6706d8dc5dcb6214e0e2ed42ac10a00bb2bca245c27ac6a22a167abfc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5163c6706d8dc5dcb6214e0e2ed42ac10a00bb2bca245c27ac6a22a167abfc25->enter($__internal_5163c6706d8dc5dcb6214e0e2ed42ac10a00bb2bca245c27ac6a22a167abfc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admins"), "html", null, true);
        echo "
";
        
        $__internal_5163c6706d8dc5dcb6214e0e2ed42ac10a00bb2bca245c27ac6a22a167abfc25->leave($__internal_5163c6706d8dc5dcb6214e0e2ed42ac10a00bb2bca245c27ac6a22a167abfc25_prof);

        
        $__internal_06dab2ccbd05d0a6edb4ca24df28fbb95e2cb8d7edd7655ad6a6d100bd626b6c->leave($__internal_06dab2ccbd05d0a6edb4ca24df28fbb95e2cb8d7edd7655ad6a6d100bd626b6c_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_5421daea9de1accf6b172c6f869d4e65d97d93d6f553ee5c3a63d9f80fdc1a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5421daea9de1accf6b172c6f869d4e65d97d93d6f553ee5c3a63d9f80fdc1a81->enter($__internal_5421daea9de1accf6b172c6f869d4e65d97d93d6f553ee5c3a63d9f80fdc1a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_7f73a151e63ea98c3ed7ccdb67ca643e7e4777b1a22aacd67e1bbc642a85d2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f73a151e63ea98c3ed7ccdb67ca643e7e4777b1a22aacd67e1bbc642a85d2f2->enter($__internal_7f73a151e63ea98c3ed7ccdb67ca643e7e4777b1a22aacd67e1bbc642a85d2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_7f73a151e63ea98c3ed7ccdb67ca643e7e4777b1a22aacd67e1bbc642a85d2f2->leave($__internal_7f73a151e63ea98c3ed7ccdb67ca643e7e4777b1a22aacd67e1bbc642a85d2f2_prof);

        
        $__internal_5421daea9de1accf6b172c6f869d4e65d97d93d6f553ee5c3a63d9f80fdc1a81->leave($__internal_5421daea9de1accf6b172c6f869d4e65d97d93d6f553ee5c3a63d9f80fdc1a81_prof);

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
