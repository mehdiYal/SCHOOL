<?php

/* :classesViews:eleves.html.twig */
class __TwigTemplate_604c7120324177ee0d696f33f8bea56583e7a0c345ab02ab143fe5e3ce431f4a extends Twig_Template
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
        $__internal_e49ba744453b50bc4eaf9d968a1e79a873a3355d1bab88897304b15fc8f1202b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49ba744453b50bc4eaf9d968a1e79a873a3355d1bab88897304b15fc8f1202b->enter($__internal_e49ba744453b50bc4eaf9d968a1e79a873a3355d1bab88897304b15fc8f1202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $__internal_300167d860e57372090870be838b87ddc2a62180e0972bbe80bd22f50987b500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300167d860e57372090870be838b87ddc2a62180e0972bbe80bd22f50987b500->enter($__internal_300167d860e57372090870be838b87ddc2a62180e0972bbe80bd22f50987b500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49ba744453b50bc4eaf9d968a1e79a873a3355d1bab88897304b15fc8f1202b->leave($__internal_e49ba744453b50bc4eaf9d968a1e79a873a3355d1bab88897304b15fc8f1202b_prof);

        
        $__internal_300167d860e57372090870be838b87ddc2a62180e0972bbe80bd22f50987b500->leave($__internal_300167d860e57372090870be838b87ddc2a62180e0972bbe80bd22f50987b500_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4624f297c71435b72faabc345fee001b3d9276c81cec9a1f327812bb3c5c9570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4624f297c71435b72faabc345fee001b3d9276c81cec9a1f327812bb3c5c9570->enter($__internal_4624f297c71435b72faabc345fee001b3d9276c81cec9a1f327812bb3c5c9570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91e4f175c9b8a89dcf6f44e718cdf7687e0fd2c990374d749817926f00c3d9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e4f175c9b8a89dcf6f44e718cdf7687e0fd2c990374d749817926f00c3d9cd->enter($__internal_91e4f175c9b8a89dcf6f44e718cdf7687e0fd2c990374d749817926f00c3d9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91e4f175c9b8a89dcf6f44e718cdf7687e0fd2c990374d749817926f00c3d9cd->leave($__internal_91e4f175c9b8a89dcf6f44e718cdf7687e0fd2c990374d749817926f00c3d9cd_prof);

        
        $__internal_4624f297c71435b72faabc345fee001b3d9276c81cec9a1f327812bb3c5c9570->leave($__internal_4624f297c71435b72faabc345fee001b3d9276c81cec9a1f327812bb3c5c9570_prof);

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
{% endblock %}", ":classesViews:eleves.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/eleves.html.twig");
    }
}
