<?php

/* :matieresViews:listMatieres.html.twig */
class __TwigTemplate_c4c46843aada3fef81ce62dd10b2083ecc9078d0a638ec5c6cf898d11786a037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", ":matieresViews:listMatieres.html.twig", 1);
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
        $__internal_fd15c4aec0749a88ecb6bedd08d18f38c9b3ee64c13f1882eda8052315244728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd15c4aec0749a88ecb6bedd08d18f38c9b3ee64c13f1882eda8052315244728->enter($__internal_fd15c4aec0749a88ecb6bedd08d18f38c9b3ee64c13f1882eda8052315244728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_ca271eb309ea98830babae9e61c559d71e4d1b326ace9a9f5dfb2e6543034681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca271eb309ea98830babae9e61c559d71e4d1b326ace9a9f5dfb2e6543034681->enter($__internal_ca271eb309ea98830babae9e61c559d71e4d1b326ace9a9f5dfb2e6543034681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd15c4aec0749a88ecb6bedd08d18f38c9b3ee64c13f1882eda8052315244728->leave($__internal_fd15c4aec0749a88ecb6bedd08d18f38c9b3ee64c13f1882eda8052315244728_prof);

        
        $__internal_ca271eb309ea98830babae9e61c559d71e4d1b326ace9a9f5dfb2e6543034681->leave($__internal_ca271eb309ea98830babae9e61c559d71e4d1b326ace9a9f5dfb2e6543034681_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0aa641f009e1289b68134ca1d35a3cbeb080e623b6f439f59df1ecc195054701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa641f009e1289b68134ca1d35a3cbeb080e623b6f439f59df1ecc195054701->enter($__internal_0aa641f009e1289b68134ca1d35a3cbeb080e623b6f439f59df1ecc195054701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_846751b4f3c6189d16688e925edd2d95019d95dbebeef378e1fe5326cf1122b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846751b4f3c6189d16688e925edd2d95019d95dbebeef378e1fe5326cf1122b9->enter($__internal_846751b4f3c6189d16688e925edd2d95019d95dbebeef378e1fe5326cf1122b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "
";
        
        $__internal_846751b4f3c6189d16688e925edd2d95019d95dbebeef378e1fe5326cf1122b9->leave($__internal_846751b4f3c6189d16688e925edd2d95019d95dbebeef378e1fe5326cf1122b9_prof);

        
        $__internal_0aa641f009e1289b68134ca1d35a3cbeb080e623b6f439f59df1ecc195054701->leave($__internal_0aa641f009e1289b68134ca1d35a3cbeb080e623b6f439f59df1ecc195054701_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_4e08adb110e44fe3cb26685cb7e4ea8564e12b45807459b57651ecc1c996b553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e08adb110e44fe3cb26685cb7e4ea8564e12b45807459b57651ecc1c996b553->enter($__internal_4e08adb110e44fe3cb26685cb7e4ea8564e12b45807459b57651ecc1c996b553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d50c1f319523d6ca6c036845a1e2a0854042dde58515f872d298d759b8565a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50c1f319523d6ca6c036845a1e2a0854042dde58515f872d298d759b8565a23->enter($__internal_d50c1f319523d6ca6c036845a1e2a0854042dde58515f872d298d759b8565a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Description</th>
                    <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 20
            echo "                    <tr>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
            echo " </td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "description", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_d50c1f319523d6ca6c036845a1e2a0854042dde58515f872d298d759b8565a23->leave($__internal_d50c1f319523d6ca6c036845a1e2a0854042dde58515f872d298d759b8565a23_prof);

        
        $__internal_4e08adb110e44fe3cb26685cb7e4ea8564e12b45807459b57651ecc1c996b553->leave($__internal_4e08adb110e44fe3cb26685cb7e4ea8564e12b45807459b57651ecc1c996b553_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:listMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  117 => 29,  109 => 24,  104 => 22,  100 => 21,  97 => 20,  93 => 19,  86 => 15,  82 => 14,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    {{'list'|trans}} {{'matiere'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Description</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for matiere in matieres %}
                    <tr>
                        <td>{{ matiere.nom}} </td>
                        <td>{{ matiere.description}}</td>
                        <td>
                            <a href=\"{{ path('editMatiere',{'id':matiere.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeMatiere',{'id':matiere.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}", ":matieresViews:listMatieres.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/matieresViews/listMatieres.html.twig");
    }
}
