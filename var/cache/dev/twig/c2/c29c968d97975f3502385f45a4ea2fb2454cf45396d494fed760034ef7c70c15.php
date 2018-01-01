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
        $__internal_ad7290ed889ac8bd1496ee1bdb1252382664121c9a014a6db1978671757d4ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7290ed889ac8bd1496ee1bdb1252382664121c9a014a6db1978671757d4ece->enter($__internal_ad7290ed889ac8bd1496ee1bdb1252382664121c9a014a6db1978671757d4ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b4b228c529f7a1251993a2c6c186a25fb522ac54bdee473bd5e1f0e37754e66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b228c529f7a1251993a2c6c186a25fb522ac54bdee473bd5e1f0e37754e66b->enter($__internal_b4b228c529f7a1251993a2c6c186a25fb522ac54bdee473bd5e1f0e37754e66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad7290ed889ac8bd1496ee1bdb1252382664121c9a014a6db1978671757d4ece->leave($__internal_ad7290ed889ac8bd1496ee1bdb1252382664121c9a014a6db1978671757d4ece_prof);

        
        $__internal_b4b228c529f7a1251993a2c6c186a25fb522ac54bdee473bd5e1f0e37754e66b->leave($__internal_b4b228c529f7a1251993a2c6c186a25fb522ac54bdee473bd5e1f0e37754e66b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50356076e65e1381a96b86bc050a559ea82718eb6e7d751427b3c3c7708f32de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50356076e65e1381a96b86bc050a559ea82718eb6e7d751427b3c3c7708f32de->enter($__internal_50356076e65e1381a96b86bc050a559ea82718eb6e7d751427b3c3c7708f32de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b855b315a7da62f0c62441fd5092682c7e887385a1e1b827836d2f451a57ef4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b855b315a7da62f0c62441fd5092682c7e887385a1e1b827836d2f451a57ef4f->enter($__internal_b855b315a7da62f0c62441fd5092682c7e887385a1e1b827836d2f451a57ef4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b855b315a7da62f0c62441fd5092682c7e887385a1e1b827836d2f451a57ef4f->leave($__internal_b855b315a7da62f0c62441fd5092682c7e887385a1e1b827836d2f451a57ef4f_prof);

        
        $__internal_50356076e65e1381a96b86bc050a559ea82718eb6e7d751427b3c3c7708f32de->leave($__internal_50356076e65e1381a96b86bc050a559ea82718eb6e7d751427b3c3c7708f32de_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9136d674b4b03a5de824951d2ac9040cfcfd7de012aa29ba927f0e3d88263ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9136d674b4b03a5de824951d2ac9040cfcfd7de012aa29ba927f0e3d88263ead->enter($__internal_9136d674b4b03a5de824951d2ac9040cfcfd7de012aa29ba927f0e3d88263ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8751861dbb1877153262079f1ddc2d7784ab23d557ac55c9aefaeafbf6d753d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8751861dbb1877153262079f1ddc2d7784ab23d557ac55c9aefaeafbf6d753d5->enter($__internal_8751861dbb1877153262079f1ddc2d7784ab23d557ac55c9aefaeafbf6d753d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8751861dbb1877153262079f1ddc2d7784ab23d557ac55c9aefaeafbf6d753d5->leave($__internal_8751861dbb1877153262079f1ddc2d7784ab23d557ac55c9aefaeafbf6d753d5_prof);

        
        $__internal_9136d674b4b03a5de824951d2ac9040cfcfd7de012aa29ba927f0e3d88263ead->leave($__internal_9136d674b4b03a5de824951d2ac9040cfcfd7de012aa29ba927f0e3d88263ead_prof);

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
