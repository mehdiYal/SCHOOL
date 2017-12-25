<?php

/* :schoolsViews:listSchools.html.twig */
class __TwigTemplate_f3a1cba502a1a8f486dd31403d1d9cfc30c8915676f5739b116fd6cadc7a3665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseListSuper.html.twig", ":schoolsViews:listSchools.html.twig", 1);
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
        $__internal_de7b29ac5e43d114350076713472ef8e457f023e9dcd3d9cef1afc3db5df77ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7b29ac5e43d114350076713472ef8e457f023e9dcd3d9cef1afc3db5df77ca->enter($__internal_de7b29ac5e43d114350076713472ef8e457f023e9dcd3d9cef1afc3db5df77ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_8f1fd97b64a0bd6d14c9556bfa6d3b6e901bc0695ade2f73c4da20cfcabcd663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1fd97b64a0bd6d14c9556bfa6d3b6e901bc0695ade2f73c4da20cfcabcd663->enter($__internal_8f1fd97b64a0bd6d14c9556bfa6d3b6e901bc0695ade2f73c4da20cfcabcd663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de7b29ac5e43d114350076713472ef8e457f023e9dcd3d9cef1afc3db5df77ca->leave($__internal_de7b29ac5e43d114350076713472ef8e457f023e9dcd3d9cef1afc3db5df77ca_prof);

        
        $__internal_8f1fd97b64a0bd6d14c9556bfa6d3b6e901bc0695ade2f73c4da20cfcabcd663->leave($__internal_8f1fd97b64a0bd6d14c9556bfa6d3b6e901bc0695ade2f73c4da20cfcabcd663_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cd801e4f225ba4fc38c4f566e55b2e92cb81bf504e6e17fb74b0a4fa2f34c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd801e4f225ba4fc38c4f566e55b2e92cb81bf504e6e17fb74b0a4fa2f34c37->enter($__internal_9cd801e4f225ba4fc38c4f566e55b2e92cb81bf504e6e17fb74b0a4fa2f34c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_623422777e70938bce64c948cc8fb1f4441b1082cc42bf641f9853f2a6231b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623422777e70938bce64c948cc8fb1f4441b1082cc42bf641f9853f2a6231b6c->enter($__internal_623422777e70938bce64c948cc8fb1f4441b1082cc42bf641f9853f2a6231b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "
";
        
        $__internal_623422777e70938bce64c948cc8fb1f4441b1082cc42bf641f9853f2a6231b6c->leave($__internal_623422777e70938bce64c948cc8fb1f4441b1082cc42bf641f9853f2a6231b6c_prof);

        
        $__internal_9cd801e4f225ba4fc38c4f566e55b2e92cb81bf504e6e17fb74b0a4fa2f34c37->leave($__internal_9cd801e4f225ba4fc38c4f566e55b2e92cb81bf504e6e17fb74b0a4fa2f34c37_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_ea942886784ef95c520817135da67fd3bdb5ad3039d543fc215824d733592c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea942886784ef95c520817135da67fd3bdb5ad3039d543fc215824d733592c72->enter($__internal_ea942886784ef95c520817135da67fd3bdb5ad3039d543fc215824d733592c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_665716493de9df0146341e757e382472b63ea8827dda2b5dbfd2900c7476b3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665716493de9df0146341e757e382472b63ea8827dda2b5dbfd2900c7476b3fd->enter($__internal_665716493de9df0146341e757e382472b63ea8827dda2b5dbfd2900c7476b3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
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
        
        $__internal_665716493de9df0146341e757e382472b63ea8827dda2b5dbfd2900c7476b3fd->leave($__internal_665716493de9df0146341e757e382472b63ea8827dda2b5dbfd2900c7476b3fd_prof);

        
        $__internal_ea942886784ef95c520817135da67fd3bdb5ad3039d543fc215824d733592c72->leave($__internal_ea942886784ef95c520817135da67fd3bdb5ad3039d543fc215824d733592c72_prof);

    }

    public function getTemplateName()
    {
        return ":schoolsViews:listSchools.html.twig";
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
", ":schoolsViews:listSchools.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/schoolsViews/listSchools.html.twig");
    }
}
