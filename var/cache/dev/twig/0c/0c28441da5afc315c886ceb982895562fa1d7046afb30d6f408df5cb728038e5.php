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
        $__internal_2ebcbed1acbcccfc180615da65da04a4e99159324c8f2782757bb4352c120e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebcbed1acbcccfc180615da65da04a4e99159324c8f2782757bb4352c120e04->enter($__internal_2ebcbed1acbcccfc180615da65da04a4e99159324c8f2782757bb4352c120e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9f115c1cba2be173e94ddc7d7396c301e6c73308db049c28819e50c9e9693d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f115c1cba2be173e94ddc7d7396c301e6c73308db049c28819e50c9e9693d20->enter($__internal_9f115c1cba2be173e94ddc7d7396c301e6c73308db049c28819e50c9e9693d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ebcbed1acbcccfc180615da65da04a4e99159324c8f2782757bb4352c120e04->leave($__internal_2ebcbed1acbcccfc180615da65da04a4e99159324c8f2782757bb4352c120e04_prof);

        
        $__internal_9f115c1cba2be173e94ddc7d7396c301e6c73308db049c28819e50c9e9693d20->leave($__internal_9f115c1cba2be173e94ddc7d7396c301e6c73308db049c28819e50c9e9693d20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_121264d00b7c0f192f8feb9f82df00a1ecc05ce7d56a465a8367258ddd06d8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121264d00b7c0f192f8feb9f82df00a1ecc05ce7d56a465a8367258ddd06d8cc->enter($__internal_121264d00b7c0f192f8feb9f82df00a1ecc05ce7d56a465a8367258ddd06d8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5021e6ab961e37b55f2ab6dd0965522274cef5b174749a2ab5aa5b46a767f9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5021e6ab961e37b55f2ab6dd0965522274cef5b174749a2ab5aa5b46a767f9fc->enter($__internal_5021e6ab961e37b55f2ab6dd0965522274cef5b174749a2ab5aa5b46a767f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5021e6ab961e37b55f2ab6dd0965522274cef5b174749a2ab5aa5b46a767f9fc->leave($__internal_5021e6ab961e37b55f2ab6dd0965522274cef5b174749a2ab5aa5b46a767f9fc_prof);

        
        $__internal_121264d00b7c0f192f8feb9f82df00a1ecc05ce7d56a465a8367258ddd06d8cc->leave($__internal_121264d00b7c0f192f8feb9f82df00a1ecc05ce7d56a465a8367258ddd06d8cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b243f5b3dd77696ef250a5262a323a456b96f4199243cb1f737d3ef29d9af3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b243f5b3dd77696ef250a5262a323a456b96f4199243cb1f737d3ef29d9af3ce->enter($__internal_b243f5b3dd77696ef250a5262a323a456b96f4199243cb1f737d3ef29d9af3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee2ad0525a040f6718827770266ce31175ca5a2ced7bd275a224a50af51b1e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2ad0525a040f6718827770266ce31175ca5a2ced7bd275a224a50af51b1e05->enter($__internal_ee2ad0525a040f6718827770266ce31175ca5a2ced7bd275a224a50af51b1e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee2ad0525a040f6718827770266ce31175ca5a2ced7bd275a224a50af51b1e05->leave($__internal_ee2ad0525a040f6718827770266ce31175ca5a2ced7bd275a224a50af51b1e05_prof);

        
        $__internal_b243f5b3dd77696ef250a5262a323a456b96f4199243cb1f737d3ef29d9af3ce->leave($__internal_b243f5b3dd77696ef250a5262a323a456b96f4199243cb1f737d3ef29d9af3ce_prof);

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
