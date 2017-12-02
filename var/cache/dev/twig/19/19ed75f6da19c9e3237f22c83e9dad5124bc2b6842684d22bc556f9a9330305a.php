<?php

/* enseignantsViews/listEnseignants.html.twig */
class __TwigTemplate_cb06fb9f79182773523b721e327d0218886f5531e26b51e98d6f7f42cb6c152e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", "enseignantsViews/listEnseignants.html.twig", 1);
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
        $__internal_eafcca0dda238b24332ab27966f2e7550170e3f62565cf33cdd3f1119179b4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafcca0dda238b24332ab27966f2e7550170e3f62565cf33cdd3f1119179b4ff->enter($__internal_eafcca0dda238b24332ab27966f2e7550170e3f62565cf33cdd3f1119179b4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $__internal_a2d10e5e195ebdd2ad0f187070744ca12079c42e3cc6b5079d36e7a28a32b96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d10e5e195ebdd2ad0f187070744ca12079c42e3cc6b5079d36e7a28a32b96d->enter($__internal_a2d10e5e195ebdd2ad0f187070744ca12079c42e3cc6b5079d36e7a28a32b96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eafcca0dda238b24332ab27966f2e7550170e3f62565cf33cdd3f1119179b4ff->leave($__internal_eafcca0dda238b24332ab27966f2e7550170e3f62565cf33cdd3f1119179b4ff_prof);

        
        $__internal_a2d10e5e195ebdd2ad0f187070744ca12079c42e3cc6b5079d36e7a28a32b96d->leave($__internal_a2d10e5e195ebdd2ad0f187070744ca12079c42e3cc6b5079d36e7a28a32b96d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c742f753c1c69df9001999195b6ff5e7582db9cade12b8aa9130ac04030d7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c742f753c1c69df9001999195b6ff5e7582db9cade12b8aa9130ac04030d7eb->enter($__internal_5c742f753c1c69df9001999195b6ff5e7582db9cade12b8aa9130ac04030d7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_815799f8b14aee209b05739773581612404ec9e3c287d50b6b0e4763d5a42d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815799f8b14aee209b05739773581612404ec9e3c287d50b6b0e4763d5a42d28->enter($__internal_815799f8b14aee209b05739773581612404ec9e3c287d50b6b0e4763d5a42d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_815799f8b14aee209b05739773581612404ec9e3c287d50b6b0e4763d5a42d28->leave($__internal_815799f8b14aee209b05739773581612404ec9e3c287d50b6b0e4763d5a42d28_prof);

        
        $__internal_5c742f753c1c69df9001999195b6ff5e7582db9cade12b8aa9130ac04030d7eb->leave($__internal_5c742f753c1c69df9001999195b6ff5e7582db9cade12b8aa9130ac04030d7eb_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_fdb233843e58b15e01bd1be233cc1ed9df7a6ebc035bc38d396e8dc9cfeceb15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb233843e58b15e01bd1be233cc1ed9df7a6ebc035bc38d396e8dc9cfeceb15->enter($__internal_fdb233843e58b15e01bd1be233cc1ed9df7a6ebc035bc38d396e8dc9cfeceb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_32a55ee373325a91d029271a975d8f838e572c9892819ef6f1dff46e76df8423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a55ee373325a91d029271a975d8f838e572c9892819ef6f1dff46e76df8423->enter($__internal_32a55ee373325a91d029271a975d8f838e572c9892819ef6f1dff46e76df8423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array()));
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
        
        $__internal_32a55ee373325a91d029271a975d8f838e572c9892819ef6f1dff46e76df8423->leave($__internal_32a55ee373325a91d029271a975d8f838e572c9892819ef6f1dff46e76df8423_prof);

        
        $__internal_fdb233843e58b15e01bd1be233cc1ed9df7a6ebc035bc38d396e8dc9cfeceb15->leave($__internal_fdb233843e58b15e01bd1be233cc1ed9df7a6ebc035bc38d396e8dc9cfeceb15_prof);

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
        return array (  158 => 47,  146 => 41,  138 => 36,  130 => 31,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  107 => 25,  104 => 24,  100 => 23,  93 => 19,  89 => 18,  85 => 17,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
", "enseignantsViews/listEnseignants.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/listEnseignants.html.twig");
    }
}
