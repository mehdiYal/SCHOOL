<?php

/* parentsViews/listParents.html.twig */
class __TwigTemplate_5a0e4e1e48556099764d77c94977c8e9fb4896215cbb261008b6fb57d8f6ecaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "parentsViews/listParents.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a0da62e121ace30c74c18e506e0f5fd7cdcecdf9293e4e1881685302def6895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0da62e121ace30c74c18e506e0f5fd7cdcecdf9293e4e1881685302def6895->enter($__internal_2a0da62e121ace30c74c18e506e0f5fd7cdcecdf9293e4e1881685302def6895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $__internal_a2aa76eac325e74341f0dbecf3668553367da1c6f510825d23ff800106d64b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2aa76eac325e74341f0dbecf3668553367da1c6f510825d23ff800106d64b57->enter($__internal_a2aa76eac325e74341f0dbecf3668553367da1c6f510825d23ff800106d64b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a0da62e121ace30c74c18e506e0f5fd7cdcecdf9293e4e1881685302def6895->leave($__internal_2a0da62e121ace30c74c18e506e0f5fd7cdcecdf9293e4e1881685302def6895_prof);

        
        $__internal_a2aa76eac325e74341f0dbecf3668553367da1c6f510825d23ff800106d64b57->leave($__internal_a2aa76eac325e74341f0dbecf3668553367da1c6f510825d23ff800106d64b57_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_851529172a22d2a20dcac238e5590976bd60e33dd8c315c565b00771002d0f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851529172a22d2a20dcac238e5590976bd60e33dd8c315c565b00771002d0f6c->enter($__internal_851529172a22d2a20dcac238e5590976bd60e33dd8c315c565b00771002d0f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85e7637fb523446b43a4e3d00089942b96055211feecc735467ef2d05b272b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e7637fb523446b43a4e3d00089942b96055211feecc735467ef2d05b272b71->enter($__internal_85e7637fb523446b43a4e3d00089942b96055211feecc735467ef2d05b272b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_85e7637fb523446b43a4e3d00089942b96055211feecc735467ef2d05b272b71->leave($__internal_85e7637fb523446b43a4e3d00089942b96055211feecc735467ef2d05b272b71_prof);

        
        $__internal_851529172a22d2a20dcac238e5590976bd60e33dd8c315c565b00771002d0f6c->leave($__internal_851529172a22d2a20dcac238e5590976bd60e33dd8c315c565b00771002d0f6c_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_bdba5dbcb6b0c29fa54b4852660a20206727acc5a8275fcb6a550ba1e2676731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdba5dbcb6b0c29fa54b4852660a20206727acc5a8275fcb6a550ba1e2676731->enter($__internal_bdba5dbcb6b0c29fa54b4852660a20206727acc5a8275fcb6a550ba1e2676731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_eeac0c384fddbe2b02ba10c8792b41586e7dabe15fb31396691196edbc3139cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeac0c384fddbe2b02ba10c8792b41586e7dabe15fb31396691196edbc3139cd->enter($__internal_eeac0c384fddbe2b02ba10c8792b41586e7dabe15fb31396691196edbc3139cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
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
        
        $__internal_eeac0c384fddbe2b02ba10c8792b41586e7dabe15fb31396691196edbc3139cd->leave($__internal_eeac0c384fddbe2b02ba10c8792b41586e7dabe15fb31396691196edbc3139cd_prof);

        
        $__internal_bdba5dbcb6b0c29fa54b4852660a20206727acc5a8275fcb6a550ba1e2676731->leave($__internal_bdba5dbcb6b0c29fa54b4852660a20206727acc5a8275fcb6a550ba1e2676731_prof);

    }

    // line 54
    public function block_active($context, array $blocks = array())
    {
        $__internal_0b1c20749d591ee2f9b13b428f010468b82244d3ceb1d8a8196c41536aa9c79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1c20749d591ee2f9b13b428f010468b82244d3ceb1d8a8196c41536aa9c79b->enter($__internal_0b1c20749d591ee2f9b13b428f010468b82244d3ceb1d8a8196c41536aa9c79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_c391fb399c339c7718355a532feb7559a9687fb2df336fae53c2870fe988a342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c391fb399c339c7718355a532feb7559a9687fb2df336fae53c2870fe988a342->enter($__internal_c391fb399c339c7718355a532feb7559a9687fb2df336fae53c2870fe988a342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 55
        echo "\t<script>
\t\t\$('.active').removeClass('active');
        \$('.parent').addClass('active');
        \$('.listPar').addClass('active');
\t</script>
";
        
        $__internal_c391fb399c339c7718355a532feb7559a9687fb2df336fae53c2870fe988a342->leave($__internal_c391fb399c339c7718355a532feb7559a9687fb2df336fae53c2870fe988a342_prof);

        
        $__internal_0b1c20749d591ee2f9b13b428f010468b82244d3ceb1d8a8196c41536aa9c79b->leave($__internal_0b1c20749d591ee2f9b13b428f010468b82244d3ceb1d8a8196c41536aa9c79b_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/listParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 55,  178 => 54,  165 => 49,  153 => 43,  145 => 38,  137 => 33,  132 => 30,  119 => 28,  115 => 27,  107 => 24,  104 => 23,  100 => 22,  93 => 18,  89 => 17,  85 => 16,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
{% endblock %} 

{% block active %}
\t<script>
\t\t\$('.active').removeClass('active');
        \$('.parent').addClass('active');
        \$('.listPar').addClass('active');
\t</script>
{% endblock%}", "parentsViews/listParents.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/parentsViews/listParents.html.twig");
    }
}
