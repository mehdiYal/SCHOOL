<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6fa1b0db678b4e0c5ff3c51fa6b5124fa1be803219e1aaa4a3ec58fb9977a395 extends Twig_Template
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
        $__internal_e1db49e15dc10a990ad04f052a90cc00b960acf897a14bdeb61c8d6f6133d3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1db49e15dc10a990ad04f052a90cc00b960acf897a14bdeb61c8d6f6133d3a0->enter($__internal_e1db49e15dc10a990ad04f052a90cc00b960acf897a14bdeb61c8d6f6133d3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6ad2692546663dd6c1d881dfb9cbcd9a57a9523838f5b36318a93fe1529b0f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad2692546663dd6c1d881dfb9cbcd9a57a9523838f5b36318a93fe1529b0f59->enter($__internal_6ad2692546663dd6c1d881dfb9cbcd9a57a9523838f5b36318a93fe1529b0f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1db49e15dc10a990ad04f052a90cc00b960acf897a14bdeb61c8d6f6133d3a0->leave($__internal_e1db49e15dc10a990ad04f052a90cc00b960acf897a14bdeb61c8d6f6133d3a0_prof);

        
        $__internal_6ad2692546663dd6c1d881dfb9cbcd9a57a9523838f5b36318a93fe1529b0f59->leave($__internal_6ad2692546663dd6c1d881dfb9cbcd9a57a9523838f5b36318a93fe1529b0f59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_807080aab5b5770a120d9073ea3348aebeb8ed03c058c3f53dfc25f1f06d7837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807080aab5b5770a120d9073ea3348aebeb8ed03c058c3f53dfc25f1f06d7837->enter($__internal_807080aab5b5770a120d9073ea3348aebeb8ed03c058c3f53dfc25f1f06d7837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4c4110cc8ba760dd97df7ddf4ff2f3089be3eff9dc4c44b0f71c09def425750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c4110cc8ba760dd97df7ddf4ff2f3089be3eff9dc4c44b0f71c09def425750->enter($__internal_e4c4110cc8ba760dd97df7ddf4ff2f3089be3eff9dc4c44b0f71c09def425750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e4c4110cc8ba760dd97df7ddf4ff2f3089be3eff9dc4c44b0f71c09def425750->leave($__internal_e4c4110cc8ba760dd97df7ddf4ff2f3089be3eff9dc4c44b0f71c09def425750_prof);

        
        $__internal_807080aab5b5770a120d9073ea3348aebeb8ed03c058c3f53dfc25f1f06d7837->leave($__internal_807080aab5b5770a120d9073ea3348aebeb8ed03c058c3f53dfc25f1f06d7837_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_69f5929a2b46fa434670abf9a1fd3bbf1973ad999a0a27efb6d1af9a909c3d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f5929a2b46fa434670abf9a1fd3bbf1973ad999a0a27efb6d1af9a909c3d6e->enter($__internal_69f5929a2b46fa434670abf9a1fd3bbf1973ad999a0a27efb6d1af9a909c3d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46951fc7983980c3a531640cefaf43a33830c7d3a79c6b3b8d462c7b21d2fc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46951fc7983980c3a531640cefaf43a33830c7d3a79c6b3b8d462c7b21d2fc74->enter($__internal_46951fc7983980c3a531640cefaf43a33830c7d3a79c6b3b8d462c7b21d2fc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_46951fc7983980c3a531640cefaf43a33830c7d3a79c6b3b8d462c7b21d2fc74->leave($__internal_46951fc7983980c3a531640cefaf43a33830c7d3a79c6b3b8d462c7b21d2fc74_prof);

        
        $__internal_69f5929a2b46fa434670abf9a1fd3bbf1973ad999a0a27efb6d1af9a909c3d6e->leave($__internal_69f5929a2b46fa434670abf9a1fd3bbf1973ad999a0a27efb6d1af9a909c3d6e_prof);

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
