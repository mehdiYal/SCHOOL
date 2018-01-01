<?php

/* :parentsViews:listParents.html.twig */
class __TwigTemplate_2d85ed918ecb18aa6e838a67d3dcbc4338bca602b94cd5ccddf5fa45ce15a03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":parentsViews:listParents.html.twig", 1);
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
        $__internal_048fe253733b6395f358212b35f50fae4fbe97888f617c51e0411d1a48b02da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048fe253733b6395f358212b35f50fae4fbe97888f617c51e0411d1a48b02da9->enter($__internal_048fe253733b6395f358212b35f50fae4fbe97888f617c51e0411d1a48b02da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $__internal_62f900361a35aa945811403751e0f32f0f039a7cdde8002ff75a0e4e20b26fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f900361a35aa945811403751e0f32f0f039a7cdde8002ff75a0e4e20b26fb1->enter($__internal_62f900361a35aa945811403751e0f32f0f039a7cdde8002ff75a0e4e20b26fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_048fe253733b6395f358212b35f50fae4fbe97888f617c51e0411d1a48b02da9->leave($__internal_048fe253733b6395f358212b35f50fae4fbe97888f617c51e0411d1a48b02da9_prof);

        
        $__internal_62f900361a35aa945811403751e0f32f0f039a7cdde8002ff75a0e4e20b26fb1->leave($__internal_62f900361a35aa945811403751e0f32f0f039a7cdde8002ff75a0e4e20b26fb1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e07bfe069c4ebae474a1a41d1a85025a5c1bda1ebdf817123a1c482afbfadfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e07bfe069c4ebae474a1a41d1a85025a5c1bda1ebdf817123a1c482afbfadfe->enter($__internal_8e07bfe069c4ebae474a1a41d1a85025a5c1bda1ebdf817123a1c482afbfadfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d008e0112cac72ca2eda53915c3e484fca1420ae7f866e08365c5668a58d0eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d008e0112cac72ca2eda53915c3e484fca1420ae7f866e08365c5668a58d0eca->enter($__internal_d008e0112cac72ca2eda53915c3e484fca1420ae7f866e08365c5668a58d0eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_d008e0112cac72ca2eda53915c3e484fca1420ae7f866e08365c5668a58d0eca->leave($__internal_d008e0112cac72ca2eda53915c3e484fca1420ae7f866e08365c5668a58d0eca_prof);

        
        $__internal_8e07bfe069c4ebae474a1a41d1a85025a5c1bda1ebdf817123a1c482afbfadfe->leave($__internal_8e07bfe069c4ebae474a1a41d1a85025a5c1bda1ebdf817123a1c482afbfadfe_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_32eb05c665da1f316a022a06da8e16c36c36ab1a0277064a782c9eddb5e35e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32eb05c665da1f316a022a06da8e16c36c36ab1a0277064a782c9eddb5e35e35->enter($__internal_32eb05c665da1f316a022a06da8e16c36c36ab1a0277064a782c9eddb5e35e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_416ec452b2fec1d0049922befc578d2afdc6b33684ddf7d76e92c5303b4287e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416ec452b2fec1d0049922befc578d2afdc6b33684ddf7d76e92c5303b4287e0->enter($__internal_416ec452b2fec1d0049922befc578d2afdc6b33684ddf7d76e92c5303b4287e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_416ec452b2fec1d0049922befc578d2afdc6b33684ddf7d76e92c5303b4287e0->leave($__internal_416ec452b2fec1d0049922befc578d2afdc6b33684ddf7d76e92c5303b4287e0_prof);

        
        $__internal_32eb05c665da1f316a022a06da8e16c36c36ab1a0277064a782c9eddb5e35e35->leave($__internal_32eb05c665da1f316a022a06da8e16c36c36ab1a0277064a782c9eddb5e35e35_prof);

    }

    // line 54
    public function block_active($context, array $blocks = array())
    {
        $__internal_10cd0a0187956d02b0f0d1684e15280b7b2577396f30e4c77ed8146fbf0a604a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10cd0a0187956d02b0f0d1684e15280b7b2577396f30e4c77ed8146fbf0a604a->enter($__internal_10cd0a0187956d02b0f0d1684e15280b7b2577396f30e4c77ed8146fbf0a604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_5e088185d76367dfc588d2b935999ac2d26667b56b82bcbbbf6515b64e5253fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e088185d76367dfc588d2b935999ac2d26667b56b82bcbbbf6515b64e5253fc->enter($__internal_5e088185d76367dfc588d2b935999ac2d26667b56b82bcbbbf6515b64e5253fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 55
        echo "\t<script>
\t\t\$('.active').removeClass('active');
        \$('.parent').addClass('active');
        \$('.listPar').addClass('active');
\t</script>
";
        
        $__internal_5e088185d76367dfc588d2b935999ac2d26667b56b82bcbbbf6515b64e5253fc->leave($__internal_5e088185d76367dfc588d2b935999ac2d26667b56b82bcbbbf6515b64e5253fc_prof);

        
        $__internal_10cd0a0187956d02b0f0d1684e15280b7b2577396f30e4c77ed8146fbf0a604a->leave($__internal_10cd0a0187956d02b0f0d1684e15280b7b2577396f30e4c77ed8146fbf0a604a_prof);

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
{% endblock%}", ":parentsViews:listParents.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/parentsViews/listParents.html.twig");
    }
}
