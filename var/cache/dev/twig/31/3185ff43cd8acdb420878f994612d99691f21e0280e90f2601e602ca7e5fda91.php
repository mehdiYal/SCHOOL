<?php

/* :classesViews:eleves.html.twig */
class __TwigTemplate_ea70339a98417b5c2d53097b560056baf80ce908f79d3b3fcf581779894b788b extends Twig_Template
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
        $__internal_7c363b0748bbba1c0de61574605705c71b77c1070addb5ca1b58a8a0ff7cd7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c363b0748bbba1c0de61574605705c71b77c1070addb5ca1b58a8a0ff7cd7a6->enter($__internal_7c363b0748bbba1c0de61574605705c71b77c1070addb5ca1b58a8a0ff7cd7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $__internal_88a8ea5f982ccfffd8481c89d82a299b072829f8e9e9ad15e2b42fe725fa9ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a8ea5f982ccfffd8481c89d82a299b072829f8e9e9ad15e2b42fe725fa9ee3->enter($__internal_88a8ea5f982ccfffd8481c89d82a299b072829f8e9e9ad15e2b42fe725fa9ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c363b0748bbba1c0de61574605705c71b77c1070addb5ca1b58a8a0ff7cd7a6->leave($__internal_7c363b0748bbba1c0de61574605705c71b77c1070addb5ca1b58a8a0ff7cd7a6_prof);

        
        $__internal_88a8ea5f982ccfffd8481c89d82a299b072829f8e9e9ad15e2b42fe725fa9ee3->leave($__internal_88a8ea5f982ccfffd8481c89d82a299b072829f8e9e9ad15e2b42fe725fa9ee3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a416e49584739a7deac3b38ab1e5310b479416541deb09b00c974fc17eb6931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a416e49584739a7deac3b38ab1e5310b479416541deb09b00c974fc17eb6931->enter($__internal_9a416e49584739a7deac3b38ab1e5310b479416541deb09b00c974fc17eb6931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_650d6b51ab01845591fe28e19f59a01c1c03eda3b8b0742ae2825424655466b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650d6b51ab01845591fe28e19f59a01c1c03eda3b8b0742ae2825424655466b8->enter($__internal_650d6b51ab01845591fe28e19f59a01c1c03eda3b8b0742ae2825424655466b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_650d6b51ab01845591fe28e19f59a01c1c03eda3b8b0742ae2825424655466b8->leave($__internal_650d6b51ab01845591fe28e19f59a01c1c03eda3b8b0742ae2825424655466b8_prof);

        
        $__internal_9a416e49584739a7deac3b38ab1e5310b479416541deb09b00c974fc17eb6931->leave($__internal_9a416e49584739a7deac3b38ab1e5310b479416541deb09b00c974fc17eb6931_prof);

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
{% endblock %}", ":classesViews:eleves.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/classesViews/eleves.html.twig");
    }
}
