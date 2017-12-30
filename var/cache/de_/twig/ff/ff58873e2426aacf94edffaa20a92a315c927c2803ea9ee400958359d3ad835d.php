<?php

/* :classesViews:eleves.html.twig */
class __TwigTemplate_77e6652844871d5e776beab522ca3f42f731b1873f69b3a9359ec1b76101ab4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":classesViews:eleves.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc0878f1f4100293c84c6409edf3d51465d06620072303b895f559c35db3cc2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0878f1f4100293c84c6409edf3d51465d06620072303b895f559c35db3cc2d->enter($__internal_cc0878f1f4100293c84c6409edf3d51465d06620072303b895f559c35db3cc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $__internal_5a663521aa4cfea6faeab70537dcfd9b0bb4e1535d94b31c468e87783378a75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a663521aa4cfea6faeab70537dcfd9b0bb4e1535d94b31c468e87783378a75c->enter($__internal_5a663521aa4cfea6faeab70537dcfd9b0bb4e1535d94b31c468e87783378a75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0878f1f4100293c84c6409edf3d51465d06620072303b895f559c35db3cc2d->leave($__internal_cc0878f1f4100293c84c6409edf3d51465d06620072303b895f559c35db3cc2d_prof);

        
        $__internal_5a663521aa4cfea6faeab70537dcfd9b0bb4e1535d94b31c468e87783378a75c->leave($__internal_5a663521aa4cfea6faeab70537dcfd9b0bb4e1535d94b31c468e87783378a75c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9d153e0a423b87d1d171a8ea4c8de3411891283221e1c0c24c5ee67b865bcb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d153e0a423b87d1d171a8ea4c8de3411891283221e1c0c24c5ee67b865bcb5->enter($__internal_f9d153e0a423b87d1d171a8ea4c8de3411891283221e1c0c24c5ee67b865bcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3964ae3c211a5b8cfa583995570ba0a6dc6c291b8b77142dda8b93dc23540fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3964ae3c211a5b8cfa583995570ba0a6dc6c291b8b77142dda8b93dc23540fe->enter($__internal_d3964ae3c211a5b8cfa583995570ba0a6dc6c291b8b77142dda8b93dc23540fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        }
        // line 6
        echo "\t<ol>
\t\t
\t</ol>
\t
";
        
        $__internal_d3964ae3c211a5b8cfa583995570ba0a6dc6c291b8b77142dda8b93dc23540fe->leave($__internal_d3964ae3c211a5b8cfa583995570ba0a6dc6c291b8b77142dda8b93dc23540fe_prof);

        
        $__internal_f9d153e0a423b87d1d171a8ea4c8de3411891283221e1c0c24c5ee67b865bcb5->leave($__internal_f9d153e0a423b87d1d171a8ea4c8de3411891283221e1c0c24c5ee67b865bcb5_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:eleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
{% dump(eleves) %}
\t<ol>
\t\t
\t</ol>
\t
{% endblock %}", ":classesViews:eleves.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/classesViews/eleves.html.twig");
    }
}
