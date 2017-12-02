<?php

/* :parentsViews:listParents.html.twig */
class __TwigTemplate_c907cfbd7da4730b3c6b2341b92413b7715cd30963792f8005890b6cf8bf2a78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":parentsViews:listParents.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06b2cd11dd1d9e0d47c9812455ee62eb94e593bee4e5b00c77a6b0f0b53d9fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b2cd11dd1d9e0d47c9812455ee62eb94e593bee4e5b00c77a6b0f0b53d9fec->enter($__internal_06b2cd11dd1d9e0d47c9812455ee62eb94e593bee4e5b00c77a6b0f0b53d9fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $__internal_946ddeeb17ba553baf32a6e78b77346a320f5af294f3b1e06503e4f3e488c635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946ddeeb17ba553baf32a6e78b77346a320f5af294f3b1e06503e4f3e488c635->enter($__internal_946ddeeb17ba553baf32a6e78b77346a320f5af294f3b1e06503e4f3e488c635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b2cd11dd1d9e0d47c9812455ee62eb94e593bee4e5b00c77a6b0f0b53d9fec->leave($__internal_06b2cd11dd1d9e0d47c9812455ee62eb94e593bee4e5b00c77a6b0f0b53d9fec_prof);

        
        $__internal_946ddeeb17ba553baf32a6e78b77346a320f5af294f3b1e06503e4f3e488c635->leave($__internal_946ddeeb17ba553baf32a6e78b77346a320f5af294f3b1e06503e4f3e488c635_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a551d815c54ebf818978aeb8bb64c0b65ad05aa8a5d6e38ece39bbe9ae109256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a551d815c54ebf818978aeb8bb64c0b65ad05aa8a5d6e38ece39bbe9ae109256->enter($__internal_a551d815c54ebf818978aeb8bb64c0b65ad05aa8a5d6e38ece39bbe9ae109256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5be1286d379a666067bdd4a78dc7e62ce06a9ec7bbd176af617a788279c91211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be1286d379a666067bdd4a78dc7e62ce06a9ec7bbd176af617a788279c91211->enter($__internal_5be1286d379a666067bdd4a78dc7e62ce06a9ec7bbd176af617a788279c91211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_5be1286d379a666067bdd4a78dc7e62ce06a9ec7bbd176af617a788279c91211->leave($__internal_5be1286d379a666067bdd4a78dc7e62ce06a9ec7bbd176af617a788279c91211_prof);

        
        $__internal_a551d815c54ebf818978aeb8bb64c0b65ad05aa8a5d6e38ece39bbe9ae109256->leave($__internal_a551d815c54ebf818978aeb8bb64c0b65ad05aa8a5d6e38ece39bbe9ae109256_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_16da5d94bbad1840bbfe55ad7e5e0ca2e74f8c637a40d5686010a21488cd0ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16da5d94bbad1840bbfe55ad7e5e0ca2e74f8c637a40d5686010a21488cd0ca6->enter($__internal_16da5d94bbad1840bbfe55ad7e5e0ca2e74f8c637a40d5686010a21488cd0ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_daf24a4c82ef2a84c9078373e2589089db9624401ce2e4d243bc4ccd6c2e9c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf24a4c82ef2a84c9078373e2589089db9624401ce2e4d243bc4ccd6c2e9c73->enter($__internal_daf24a4c82ef2a84c9078373e2589089db9624401ce2e4d243bc4ccd6c2e9c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["parent"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent"], "eleves", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["e"], "nom", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
                echo "</a></li>\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_daf24a4c82ef2a84c9078373e2589089db9624401ce2e4d243bc4ccd6c2e9c73->leave($__internal_daf24a4c82ef2a84c9078373e2589089db9624401ce2e4d243bc4ccd6c2e9c73_prof);

        
        $__internal_16da5d94bbad1840bbfe55ad7e5e0ca2e74f8c637a40d5686010a21488cd0ca6->leave($__internal_16da5d94bbad1840bbfe55ad7e5e0ca2e74f8c637a40d5686010a21488cd0ca6_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:listParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 49,  152 => 43,  144 => 38,  136 => 33,  131 => 30,  118 => 28,  114 => 27,  106 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  74 => 8,  65 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t{{'list'|trans}} {{'parents'|trans}}
{% endblock %}

{% block bodyList %}

\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for parent in app.user.ecole.parents %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ parent.nom|upper}} {{ parent.prenom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t{% for e in parent.eleves %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('profileEleve',{'id':e.id})}}\">{{ e.nom|upper}} {{ e.prenom}}</a></li>\t
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %} ", ":parentsViews:listParents.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/parentsViews/listParents.html.twig");
    }
}
