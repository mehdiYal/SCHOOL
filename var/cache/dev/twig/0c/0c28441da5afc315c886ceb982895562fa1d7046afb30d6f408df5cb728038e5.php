<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2fc68b444575203d13be345155eb50e837ece93389e95d8a09d5c0d050ebf028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dff2015bd242df18bd7072e40d4ae4c02fcf1c2f32c8f5a7e0873b9f9fe7638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dff2015bd242df18bd7072e40d4ae4c02fcf1c2f32c8f5a7e0873b9f9fe7638->enter($__internal_8dff2015bd242df18bd7072e40d4ae4c02fcf1c2f32c8f5a7e0873b9f9fe7638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e0f8ce43179a67bede9efa712560f8d45e096f910e02b7ba3b00295548859f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f8ce43179a67bede9efa712560f8d45e096f910e02b7ba3b00295548859f0a->enter($__internal_e0f8ce43179a67bede9efa712560f8d45e096f910e02b7ba3b00295548859f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dff2015bd242df18bd7072e40d4ae4c02fcf1c2f32c8f5a7e0873b9f9fe7638->leave($__internal_8dff2015bd242df18bd7072e40d4ae4c02fcf1c2f32c8f5a7e0873b9f9fe7638_prof);

        
        $__internal_e0f8ce43179a67bede9efa712560f8d45e096f910e02b7ba3b00295548859f0a->leave($__internal_e0f8ce43179a67bede9efa712560f8d45e096f910e02b7ba3b00295548859f0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcbcbdc7df43b935c07b93f345749ff1ccaa76d68f88c60854b85bb69a36e825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbcbdc7df43b935c07b93f345749ff1ccaa76d68f88c60854b85bb69a36e825->enter($__internal_bcbcbdc7df43b935c07b93f345749ff1ccaa76d68f88c60854b85bb69a36e825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ef76b092e72f08e8ace62a2d496cca677e6fa2b21b64c7a77aea314982c9368b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef76b092e72f08e8ace62a2d496cca677e6fa2b21b64c7a77aea314982c9368b->enter($__internal_ef76b092e72f08e8ace62a2d496cca677e6fa2b21b64c7a77aea314982c9368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ef76b092e72f08e8ace62a2d496cca677e6fa2b21b64c7a77aea314982c9368b->leave($__internal_ef76b092e72f08e8ace62a2d496cca677e6fa2b21b64c7a77aea314982c9368b_prof);

        
        $__internal_bcbcbdc7df43b935c07b93f345749ff1ccaa76d68f88c60854b85bb69a36e825->leave($__internal_bcbcbdc7df43b935c07b93f345749ff1ccaa76d68f88c60854b85bb69a36e825_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_24d4b61f912289e498ae88580a34da0971a33eaa22ca5025b5632ca6afa2e0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d4b61f912289e498ae88580a34da0971a33eaa22ca5025b5632ca6afa2e0db->enter($__internal_24d4b61f912289e498ae88580a34da0971a33eaa22ca5025b5632ca6afa2e0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cd10f813d35dd4f37317f337d4076eedfcc54ea0fd04d38bd76e54891b2f169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd10f813d35dd4f37317f337d4076eedfcc54ea0fd04d38bd76e54891b2f169->enter($__internal_3cd10f813d35dd4f37317f337d4076eedfcc54ea0fd04d38bd76e54891b2f169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_3cd10f813d35dd4f37317f337d4076eedfcc54ea0fd04d38bd76e54891b2f169->leave($__internal_3cd10f813d35dd4f37317f337d4076eedfcc54ea0fd04d38bd76e54891b2f169_prof);

        
        $__internal_24d4b61f912289e498ae88580a34da0971a33eaa22ca5025b5632ca6afa2e0db->leave($__internal_24d4b61f912289e498ae88580a34da0971a33eaa22ca5025b5632ca6afa2e0db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
