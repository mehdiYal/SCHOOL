<?php

/* :sallesViews:listSalles.html.twig */
class __TwigTemplate_3c4e86226ad522f5b132e28e6efdc36e83cb174a25c790db0e8ec670375a6324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":sallesViews:listSalles.html.twig", 1);
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
        $__internal_eff8e6be7123b24729cbaeefcd22cd162cadd9c4bcc02a77e9f40241da384fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff8e6be7123b24729cbaeefcd22cd162cadd9c4bcc02a77e9f40241da384fc8->enter($__internal_eff8e6be7123b24729cbaeefcd22cd162cadd9c4bcc02a77e9f40241da384fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $__internal_e780d6fb654490355e193195d6657c0263a30cfa53061694a44916ce335b7f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e780d6fb654490355e193195d6657c0263a30cfa53061694a44916ce335b7f49->enter($__internal_e780d6fb654490355e193195d6657c0263a30cfa53061694a44916ce335b7f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eff8e6be7123b24729cbaeefcd22cd162cadd9c4bcc02a77e9f40241da384fc8->leave($__internal_eff8e6be7123b24729cbaeefcd22cd162cadd9c4bcc02a77e9f40241da384fc8_prof);

        
        $__internal_e780d6fb654490355e193195d6657c0263a30cfa53061694a44916ce335b7f49->leave($__internal_e780d6fb654490355e193195d6657c0263a30cfa53061694a44916ce335b7f49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6088e9054e7de42c2ea2f548aa093f6d794ac10a369c81fd4c219af346d209e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6088e9054e7de42c2ea2f548aa093f6d794ac10a369c81fd4c219af346d209e9->enter($__internal_6088e9054e7de42c2ea2f548aa093f6d794ac10a369c81fd4c219af346d209e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f7ba7f4247ffcf563dabe6802285ced11bd0724e548349024ebef0eb23403fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7ba7f4247ffcf563dabe6802285ced11bd0724e548349024ebef0eb23403fc->enter($__internal_7f7ba7f4247ffcf563dabe6802285ced11bd0724e548349024ebef0eb23403fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "
";
        
        $__internal_7f7ba7f4247ffcf563dabe6802285ced11bd0724e548349024ebef0eb23403fc->leave($__internal_7f7ba7f4247ffcf563dabe6802285ced11bd0724e548349024ebef0eb23403fc_prof);

        
        $__internal_6088e9054e7de42c2ea2f548aa093f6d794ac10a369c81fd4c219af346d209e9->leave($__internal_6088e9054e7de42c2ea2f548aa093f6d794ac10a369c81fd4c219af346d209e9_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_81aeeaea5e6955897d4e9a66183da8bb4f6ec212977e3ddd075c6c0e6067d8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81aeeaea5e6955897d4e9a66183da8bb4f6ec212977e3ddd075c6c0e6067d8b2->enter($__internal_81aeeaea5e6955897d4e9a66183da8bb4f6ec212977e3ddd075c6c0e6067d8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_08f231af9ebaa4a43ea2ba7870fde1de9f0413f6f7594d4b05378db08030f07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f231af9ebaa4a43ea2ba7870fde1de9f0413f6f7594d4b05378db08030f07e->enter($__internal_08f231af9ebaa4a43ea2ba7870fde1de9f0413f6f7594d4b05378db08030f07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Equipements</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "salles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["salle"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "capacite", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "equipement", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_08f231af9ebaa4a43ea2ba7870fde1de9f0413f6f7594d4b05378db08030f07e->leave($__internal_08f231af9ebaa4a43ea2ba7870fde1de9f0413f6f7594d4b05378db08030f07e_prof);

        
        $__internal_81aeeaea5e6955897d4e9a66183da8bb4f6ec212977e3ddd075c6c0e6067d8b2->leave($__internal_81aeeaea5e6955897d4e9a66183da8bb4f6ec212977e3ddd075c6c0e6067d8b2_prof);

    }

    public function getTemplateName()
    {
        return ":sallesViews:listSalles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  123 => 33,  115 => 28,  110 => 26,  106 => 25,  102 => 24,  99 => 23,  95 => 22,  88 => 18,  84 => 17,  74 => 9,  65 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t{{'list'|trans}} {{'salles'|trans}}
{% endblock %}


{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Equipements</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for salle in app.user.ecole.salles%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ salle.nom|upper}}</td>
\t\t\t\t\t\t<td>{{ salle.capacite}}</td>
\t\t\t\t\t\t<td>{{ salle.equipement}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editSalle',{'id':salle.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeSalle',{'id':salle.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  ", ":sallesViews:listSalles.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/sallesViews/listSalles.html.twig");
    }
}
